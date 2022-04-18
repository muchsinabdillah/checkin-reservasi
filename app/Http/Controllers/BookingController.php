<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Mike42\Escpos\Printer;
use Illuminate\Http\Request;
use SebastianBergmann\GlobalState\Exception; 
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;
use Storage;
use Aws\S3\S3Client;
use Aws\Common\Credentials\Credentials;

class BookingController extends Controller
{
    //
    public function index()
    {
        //
         
    }

    public function getdataBooking(Request $request){

        // return $request;
        $client = new Client();

        $url =  env('URL_API_RS_YARSI') . "bpjs/ViewBookingbyId";
        $token = $this->getToken();
        $headers = [
            'Username' => 'xBPjsKes',
            'Password' => 'xBPjs#123$',
            'x-token' => $token,
        ];
        $params = [
            'kodebooking' => $request->display,
        ];
        $response = $client->request('POST', $url, [
            'verify'  => false,
            'headers' => $headers,
            'json' => $params,
        ]);

        $responseBody = json_decode($response->getBody());
        if($responseBody->metadata->code === 200){
            return view('verify', [
                'responseBody' => $responseBody
            ]);
        } else if ($responseBody->metadata->code === 401) {
            return redirect('/')->with('failed', 'Unauthorized !');
        } else if ($responseBody->metadata->code === 201) {
            return redirect('/')->with('failed', 'Data tidak ditemukans !');
        }

    }
    public function getToken(){
        $client = new Client();
        $url =  env('URL_API_RS_YARSI') . "token";
        $USER_API_RS_YARSI =  env('USER_API_RS_YARSI');
        $PASS_API_RS_YARSI =  env('PASS_API_RS_YARSI');
        $headers = [
            'x-username' => 'xBPjsKes',
            'x-password' => 'xBPjs#123$',
        ]; 
        $response = $client->request('GET', $url, [
            'verify'  => false,
            'headers' => $headers, 
        ]);
        $responseBody = json_decode($response->getBody());
        return $responseBody->response->token;
    }
    public function print()
    {
        try {
            $ip = '172.16.40.3'; // IP Komputer kita atau printer lain yang masih satu jaringan
            $printer = 'POS80'; // Nama Printer yang di sharing
            $connector = new WindowsPrintConnector("smb://" . $ip . "/" . $printer);
            // $connector = new FilePrintConnector("php://stdout");
            $printer = new Printer($connector); 
            $printer->setJustification(Printer::JUSTIFY_CENTER);

            $printer->setEmphasis(true);
             $url = "img/about.png";

            // $logso = EscposImage::load($url, false);
            // $printer->graphics($logso, Printer::IMG_DOUBLE_WIDTH);
            // $printer->bitImage($logso);
            $printer->text("BUKTI REGISTRASI\n");
            $printer->setEmphasis(false);
            $printer->text("Tanggal : 22-01-1991\n");
            $printer->text("Jam : 00:00\n");
            $printer->text("Poli Anak\n");
            $printer->feed();
            $printer->qrCode("BORJ", Printer::QR_MODEL_1,10, Printer::QR_MODEL_1);
            $printer->feed();
            $printer->text("M MUCHSIN ABDILLAH\n");
            $printer->text("dr. Muhammadi\n"); 
            $printer->text("Praktek Pagi\n"); 
            $printer->text("07:00-23:59\n"); 
            $printer->text("MM-1\n");
            $printer->setLineSpacing(90);
            $printer->text("Simpan tiket ini, tiket ini digunakan untuk
                            .transaksi di semua Layanan RS YARSI
                            Please keep this ticket for all transaction in
                            .YARSI Hospital\n"); 
            $printer->feed(); 
            $printer->cut();
            $printer->close(); 
        } catch (Exception $e) {
            echo "Couldn't print to this printer: " . $e->getMessage() . "\n";
        }
    }
    private function title(Printer $printer, $str)
    {
        $printer->selectPrintMode(Printer::MODE_DOUBLE_HEIGHT | Printer::MODE_DOUBLE_WIDTH);
        $printer->text($str);
        $printer->selectPrintMode();
    }
    public function newPatientForm($id){

        return view('register.newpatientform', [
            'idBooking' => base64_decode($id)
        ]);

    }

    public function createNewPatient(Request $request){
        // return $request;
        $validatedData = $request->validate([
            'noidentitas' => 'required',
            'namalengkap' => 'required',
            'jeniskelamin' => 'required',
            'tgllahir' => 'required',
            'alamat'=> 'required',
            'jenisidentitas' => 'required',
            'nobooking' => 'required',
            'file' => 'image|file', 
        ]);
        $client = new Client();

        $url =  env('URL_API_RS_YARSI') . "api/PasienBaru";
        $token = $this->getToken();
        $headers = [
            'x-username' => 'xBPjsKes',
            'x-password' => 'xBPjs#123$',
            'x-token' => $token,
        ];
        $params = [
            'nik' => $request->noidentitas,
            'nama' => $request->namalengkap,
            'jeniskelamin' => $request->jeniskelamin,
            'tanggallahir' => $request->tgllahir,
            'nohp' => $request->nohandphone,
            'alamat' => $request->alamat,
            'jenisidentitas' => $request->jenisidentitas,
            'nobooking' => $request->nobooking,
        ];
        
        $response = $client->request('POST', $url, [
            'verify'  => false,
            'headers' => $headers,
            'json' => $params,
        ]);
        
        $responseBody = json_decode($response->getBody());
        // return dd($responseBody);
        if ($responseBody->metadata->code === 200) {

            $file = $request->file('file'); 
            // $filePath = 'identitas/' . $name;
 
            $s3Client = new S3Client([
                'version' => 'latest',
                'region'  => 'ap-southeast-1',
                'http'    => ['verify' => false],
                'credentials' => [
                    'key'    => env('AWS_ACCESS_KEY_ID'),
                    'secret' => env('AWS_SECRET_ACCESS_KEY')
                ]
            ]);
            $nama_file_baru = time() . $file->getClientOriginalName();
            $tujuan_upload = 'img/aws/';
            $file->move($tujuan_upload, $nama_file_baru);

            $file_name = 'img/aws/' . $nama_file_baru;
            $source =   $file_name;
            $awsImages = '';
          
                $bucket = env('AWS_BUCKET');
                $key = basename($file_name);
                $result = $s3Client->putObject([
                    'Bucket' => $bucket,
                    'Key'    => 'identitas/' . $key,
                    'Body'   => fopen($source, 'r'),
                    'ACL'    => 'public-read', // make file 'public', 
                ]);
                $awsImages = $result->get('ObjectURL');
                unlink($file_name);
            $this->UploadImages($responseBody->response->norm,$awsImages, $request->nobooking);
            return view('register.finish', [
                'responseBody' => $responseBody
            ]);
        } else if ($responseBody->metadata->code === 401) {
            return redirect('/newPatientForm/'. base64_encode($request->nobooking))->with('failed', 'Unauthorized !');
        } else if ($responseBody->metadata->code === 201) {
            return redirect('/newPatientForm/'. base64_encode($request->nobooking))->with('failed', $responseBody->metadata->message);
        }
    }
    public function UploadImages($nomr, $urlaws,$nobooking){
        $client = new Client();

        $url =  env('URL_API_RS_YARSI') . "api/UploadImages";
        $token = $this->getToken();
        $headers = [
            'x-username' => 'xBPjsKes',
            'x-password' => 'xBPjs#123$',
            'x-token' => $token,
        ];
        $params = [
            'nomr' => $nomr,
            'url' => $urlaws, 
        ];

        $response = $client->request('POST', $url, [
            'verify'  => false,
            'headers' => $headers,
            'json' => $params,
        ]);

        $responseBody = json_decode($response->getBody());
        return  $responseBody->metadata->code;

    }
}
