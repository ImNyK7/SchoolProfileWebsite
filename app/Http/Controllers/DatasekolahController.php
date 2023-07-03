<?php

namespace App\Http\Controllers;

use App\Models\Datasekolah;
use Illuminate\Http\Request;

class DatasekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('datasekolah.datasiswa.index', [
            'datasiswas' => Datasekolah::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datasekolah.datasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'NomorInduk' => 'required',
            'NamaSiswa' => 'required',
            'TingkatSiswa' => 'required',
            'JurusanSiswa' => 'required',
            'NoTlp' => 'required'
        ]);

        
        Datasekolah::create($validatedData);
        return redirect('/datasekolah/datasiswa')->with('success', 'Data berhasil masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Datasekolah  $datasekolah
     * @return \Illuminate\Http\Response
     */
    public function show(Datasekolah $datasekolah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Datasekolah  $datasekolah
     * @return \Illuminate\Http\Response
     */
    public function edit(Datasekolah $datasekolah)
    {
        return view('datasekolah.datasiswa.edit',[
            'datasekolah' => $datasekolah
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Datasekolah  $datasekolah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Datasekolah $datasekolah)
    {
        $rules = [
            'NomorInduk' => 'required',
            'NamaSiswa' => 'required',
            'TingkatSiswa' => 'required',
            'JurusanSiswa' => 'required',
            'NoTlp' => 'required'
        ];

        $validatedData = $request->validate($rules);

        Datasekolah::where('id', $datasekolah->id)
        ->update($validatedData);
        return redirect('/datasekolah/datasiswa')->with('success', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Datasekolah  $datasekolah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datasekolah $datasekolah, Request $request)
    {
        $id['id'] = $request->validate([
            'id' => 'required'
        ]);
        Datasekolah::destroy(Datasekolah::find($id));
        return redirect('/datasekolah/datasiswa')->with('success', 'Data berhasil dihapus!');
        
    }
}
