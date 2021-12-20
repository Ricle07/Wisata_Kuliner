<?php

namespace App\Http\Controllers;

use App\Models\wisata;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Wisata::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $wisata = new Wisata(); //membuat objek Wisata
        $wisata->nama =$request->nama;
        $wisata->lokasi =$request->lokasi;
        $wisata->harga =$request->harga;
        $wisata->save();
        
        return "Data Wisata Berhasil Ditambahkan";
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function show(wisata $wisata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function edit(wisata $wisata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id= $request->id;
        $nama = $request->nama; //variabel nama yang menerima input nama dari client
        $lokasi = $request->lokasi;
        $harga = $request->harga;

        $wisata = Wisata::find($id); //memanggil model wisata dengan id salah satu wisata
        $wisata->nama = $nama; //kolom nama yang ada di tabel wisata diubah datanya
        $wisata->lokasi = $lokasi;
        $wisata->harga = $harga;
        $wisata->save();

        return "Data Wisata Berhasil Diubah";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id= $request->id;
        $wisata = Wisata::find($id);
        $wisata->delete();

        return "Data Wisata Berhasil Dihapus";
    }
}
