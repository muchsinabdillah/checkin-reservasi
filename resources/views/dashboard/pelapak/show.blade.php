@extends('dashboard.layouts.main')
@section('container')
   <div class="container">
    <div class="row my-3">
        <div class="col-lg-8 ">
               <h2 class="mb-3">{{ $pelapak->name }}</h2>  

                <a href="/dashboard/walkers" class="btn btn-success mb-4"><span data-feather="arrow-left"></span>Kembali ke Data Pelapak</a> 

               <form method="POST" action="/pelapak">
            @csrf  
                    <div class="mb-3"> 
                         <label for="date"  class="form-label">Tanggal</label>
                         <input type="date" required class="form-control @error('date') is-invalid @enderror" id="date" name="date" readonly value="{{ $pelapak->date }}" >
                         @error('date')<div class="invalid-feedback"> {{ $message }} </div>@enderror
                              
                    </div>  
                    <div class="mb-3"> 
                              <label for="fullname" class="form-label">Nama Lengkap Lapak</label>
                              <input type="text" required   class="form-control @error('fullname') is-invalid @enderror" id="fullname" name="fullname" placeholder="Masukan Nama Lengkap" autocomplete="off" value="{{ $pelapak->fullname }}"  required readonly >
                              @error('fullname')<div class="invalid-feedback"> {{ $message }} </div>@enderror 
                    </div>
                    <div class="mb-3"> 
                         <div class="col-md"> 
                              <label for="phonenumber" class="form-label">No. Telp/HP</label>
                              <input type="text" value="{{ $pelapak->phonenumber }}"  readonly required   class="form-control @error('phonenumber') is-invalid @enderror" id="phonenumber" name="phonenumber" placeholder="Masukan No.Whatsapp/Mobile" autocomplete="off">
                              @error('phonenumber')<div class="invalid-feedback"> {{ $message }} </div>@enderror
                         
                         </div>
                          
                    </div>
                    <div class="mb-3">  
                         <div class="col-md"> 
                              <label for="idtype" class="form-label">Email</label>
                              <input type="email" value="{{ $pelapak->email }}"  readonly  class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukan E-Mail" autocomplete="off">
                              @error('email')<div class="invalid-feedback"> {{ $message }} </div>@enderror
                         
                         </div>
                    </div>
                    
                   <div class="mb-3">  
                         <div class="col-md">
                              <label for="idtype" class="form-label">Jenis Identitas</label>
                               <label for="idtype" class="form-label">idtype</label>
                              <input type="idtype" value="{{ $pelapak->idtype }}"  readonly  class="form-control @error('idtype') is-invalid @enderror" id="idtype" name="idtype" placeholder="Masukan E-Mail" autocomplete="off">
                              @error('idtype')<div class="invalid-feedback"> {{ $message }} </div>@enderror
                         </div>
                    </div>
                    <div class="mb-3">  
                         <div class="col-md">
                              
                          <label for="npwp" class="form-label">No. Identitas</label>
                              <input type="text" value="{{ $pelapak->idnumber }}"  readonly    required  class="form-control @error('idnumber') is-invalid @enderror" id="idnumber" name="idnumber" placeholder="Masukan No. Identitas" autocomplete="off">
                              @error('idnumber')<div class="invalid-feedback"> {{ $message }} </div>@enderror
                         </div>
                    </div>
                    <div class="mb-3">  
                         <label for="npwp" class="form-label">Apakah Punya NPWP</label>
                              <input type="text" value="{{ $pelapak->npwp }}"  readonly    required  class="form-control @error('npwp') is-invalid @enderror" id="npwp" name="npwp" placeholder="Masukan No. Identitas" autocomplete="off">
                              @error('npwp')<div class="invalid-feedback"> {{ $message }} </div>@enderror
                               
                    </div>
                     <div class="mb-3">   
                              <label for="npwpnumber" class="form-label">No. NPWP</label>
                              <input type="text" value="{{ $pelapak->npwpnumber }}"  readonly   required  class="form-control @error('npwpnumber') is-invalid @enderror" id="npwpnumber" name="npwpnumber" placeholder="Masukan No. NPWP" autocomplete="off">
                              @error('npwpnumber')<div class="invalid-feedback"> {{ $message }} </div>@enderror 
                    </div>
                    <div class="mb-3">  
                         <label for="walkername" class="form-label">Nama Lapak Usaha</label>
                         <input type="text" value="{{ $pelapak->walkername }}"  readonly  required  class="form-control @error('walkername') is-invalid @enderror" id="walkername" name="walkername" placeholder="Masukan Nama Lapak Usaha" autocomplete="off">
                         @error('walkername')<div class="invalid-feedback"> {{ $message }} </div>@enderror   
                    </div>
                    <div class="mb-3">  
                         <label for="walkeraddress" class="form-label">Alamat Lengkap Lapak Usaha</label>
                         <textarea style="height: 100px" readonly  required  class="form-control @error('walkeraddress') is-invalid @enderror" id="walkeraddress" name="walkeraddress" autocomplete="off">{{ $pelapak->walkeraddress }}</textarea>
                         @error('walkeraddress')<div class="invalid-feedback"> {{ $message }} </div>@enderror
                    </div> 
                    
                    <div class="mb-3">  
                         <label for="coordinatpoint" class="form-label">Titik Koordinat Pelapak</label>
                         <input type="text" value="{{ $pelapak->coordinatpoint }}"  readonly  required  class="mb-3 form-control @error('coordinatpoint') is-invalid @enderror" id="coordinatpoint" name="coordinatpoint" autocomplete="off">
                         @error('coordinatpoint')<div class="invalid-feedback"> {{ $message }} </div>@enderror 
                         <p><a style="color: #ffffff; background-color: #008748; font-size: 12px; border-radius: 4px; text-decoration: none; font-weight: normal; font-style: normal; padding: 0.6rem 1rem; border-color: #0072ff;" href="https://goo.gl/maps/rX1a127ukMDAaJWA6">Cari Di Google Maps</a></p>
                    </div> 
                    <br><hr><br>
                    <div class="mb-3">  
                         <label for="itemsell" class="form-label">Sebutkan Apa yang Lapak Jual</label>
                         <textarea style="height: 100px" readonly  required  class="form-control @error('itemsell') is-invalid @enderror" id="itemsell" name="itemsell" autocomplete="off">{{ $pelapak->itemsell }}</textarea>
                         @error('itemsell')<div class="invalid-feedback"> {{ $message }} </div>@enderror 
                    </div> 
                     <div class="mb-3">  
                          <label for="ownership" class="form-label">Jam Berapa Buka dan Tutup Lapak Usaha ?</label>
                         <input type="text" value="{{ $pelapak->timeopenclose }}"  readonly   required  class="form-control @error('timeopenclose') is-invalid @enderror" id="timeopenclose" name="timeopenclose" placeholder="Contoh : Pagi Jam 5:00 Sampai 10:30 Siang" autocomplete="off">
                          @error('timeopenclose')<div class="invalid-feedback"> {{ $message }} </div>@enderror 
                    </div> 
                    <div class="mb-3">  
                         <label for="ownership" class="form-label">Apakah Lapak Usaha ini Milik Sendiri</label>
                         <input type="text" value="{{ $pelapak->ownership }}"  readonly   required  class="form-control @error('ownership') is-invalid @enderror" id="ownership" name="ownership" placeholder="Contoh : Pagi Jam 5:00 Sampai 10:30 Siang" autocomplete="off">
                          @error('ownership')<div class="invalid-feedback"> {{ $message }} </div>@enderror 

                         
                    </div>
                    <div class="mb-3">   
                              <label for="nameownership" class="form-label">Sebutkan Nama Pemilik Lapak Usaha</label>
                              <input type="text" value="{{ $pelapak->nameownership }}"  readonly   required  class="form-control @error('nameownership') is-invalid @enderror" id="nameownership" name="nameownership" placeholder="*Jika milik sendiri lewatkan kolom ini" autocomplete="off">
                              @error('nameownership')<div class="invalid-feedback"> {{ $message }} </div>@enderror 
                    </div>
                     <div class="mb-3">   
                              <label for="otherpaltform" class="form-label">No. Telp Pemilik Lapak</label>
                              <input type="text" value="{{ $pelapak->phoneownership }}"  readonly  required  class="form-control @error('phoneownership') is-invalid @enderror" id="phoneownership" name="phoneownership" placeholder="*Jika milik sendiri lewatkan kolom ini" autocomplete="off">
                              @error('phoneownership')<div class="invalid-feedback"> {{ $message }} </div>@enderror 
                    </div>
                    <div class="mb-3">  
                         <label for="otherpaltform" class="form-label">Apakah Pernah Daftar Aplikasi Serupa</label> 
                              <input type="text" value="{{ $pelapak->otherpaltform }}"  readonly  required  class="form-control @error('otherpaltform') is-invalid @enderror" id="otherpaltform" name="otherpaltform" placeholder="*Jika milik sendiri lewatkan kolom ini" autocomplete="off">
                              @error('otherpaltform')<div class="invalid-feedback"> {{ $message }} </div>@enderror  
                    </div>
                     <div class="mb-3">   
                              <label for="readyjoin" class="form-label">Apakah Pelapak Siap Jadi Mitra Kami</label>
                              <input type="text" value="{{ $pelapak->readyjoin }}"  readonly  required  class="form-control @error('readyjoin') is-invalid @enderror" id="readyjoin" name="readyjoin" placeholder="*Jika milik sendiri lewatkan kolom ini" autocomplete="off">
                              @error('readyjoin')<div class="invalid-feedback"> {{ $message }} </div>@enderror 
                    </div>
                     <div class="mb-3">   
                              <label for="continuePhone" class="form-label">Apakah bisa Kami Hubungi Kembali Untuk Pendaftaran</label>
                              <input type="text" value="{{ $pelapak->continuePhone }}"  readonly  required  class="form-control @error('continuePhone') is-invalid @enderror" id="continuePhone" name="continuePhone" placeholder="*Jika milik sendiri lewatkan kolom ini" autocomplete="off">
                              @error('continuePhone')<div class="invalid-feedback"> {{ $message }} </div>@enderror 
                    </div>
                    <div class="row g-2 mb-3">
                         <div class="col-md">
                             <div class="form-floating">
                                   <input type="text"   readonly  value="{{ $pelapak->tanioketimname }}" class="form-control @error('tanioketimname') is-invalid @enderror" id="tanioketimname" name="tanioketimname" placeholder="Masukan Nama " autocomplete="off">
                                   <label for="tanioketimname">Nama TIM</label>
                                   @error('tanioketimname')<div class="invalid-feedback"> {{ $message }} </div>@enderror
                              </div>
                         </div> 
                    </div>
                {{-- <button type="submit" class="btn btn-primary mb-5">KIRIM DATA</button> --}}
            </form>
        </div>
    </div>
</div>
@endsection