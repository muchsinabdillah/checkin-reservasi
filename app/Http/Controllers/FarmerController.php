<?php

namespace App\Http\Controllers;

use App\Models\Farmer;
use Illuminate\Http\Request;

class FarmerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.petani.index', [
            'posts' => Farmer::latest()->paginate(10)->withQueryString()
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
        //
        $validatedData = $request->validate([
            'date' => 'required',
            'fullname' => 'required',
            'phonenumber' => 'required|unique:farmers',


            'email' => 'required|unique:farmers',
            'idtype' => 'required',
            'idnumber' => 'required|unique:farmers',
            'npwp' => 'required',
            'npwpnumber' => 'required|unique:farmers',

            'province' => 'required',
            'farmeraddress' => 'required',
            'coordinatpoint' => 'required',

            'gardenarea' => 'required',
            'namegardenarea' => 'required',
            'harversttime' => 'required',
            'ownershipgarden' => 'required',
            'nameownershipgarden' => 'required',

            'phoneownershipgarden' => 'required',
            'otherpaltform' => 'required',
            'readyjoin' => 'required',
            'continuePhone' => 'required',

            'tanioketimname' => 'required'
        ]);
        Farmer::create($validatedData);
        return redirect('/formtani')->with('success', 'Data Petani Baru ' . $request['firstname'] . ' berhasil di tambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Farmer $farmer)
    {
        //
        return view('dashboard.petani.show', [
            'farmer' => $farmer
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
