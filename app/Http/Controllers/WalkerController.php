<?php

namespace App\Http\Controllers;
 
use App\Models\Walker;
use Illuminate\Http\Request;

class WalkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.pelapak.index', [
            'posts' => Walker::latest()->paginate(10)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'date' => 'required',
            'fullname' => 'required', 
            'phonenumber' => 'required|unique:walkers',


            'email' => 'required|unique:walkers',
            'idtype' => 'required', 
            'idnumber' => 'required|unique:walkers',
            'npwp' => 'required',
            'npwpnumber' => 'required|unique:walkers',

            'walkername' => 'required', 
            'walkeraddress' => 'required', 
            'coordinatpoint' => 'required',

            'itemsell' => 'required',
            'timeopenclose' => 'required',
            'ownership' => 'required',
            'nameownership' => 'required',

            'phoneownership' => 'required',
            'otherpaltform' => 'required',
            'readyjoin' => 'required',
            'continuePhone' => 'required', 

            'tanioketimname' => 'required' 
        ]);
        
         Walker::create($validatedData);
         return redirect('/formpelapak')->with('success', 'Data Pelapak Baru ' . $request['firstname'] . ' berhasil di tambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Walker $walker)
    {
        //
        return view('dashboard.pelapak.show', [
            'pelapak' => $walker
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
