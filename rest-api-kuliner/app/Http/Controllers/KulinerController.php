<?php

namespace App\Http\Controllers;

use App\Models\kuliner;
use Illuminate\Http\Request;

class KulinerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Kuliner::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $kuliner = new Kuliner(); //membuat objek Kuliner
        $kuliner->nama =$request->nama;
        $kuliner->lokasi =$request->lokasi;
        $kuliner->harga =$request->harga;
        $kuliner->save();
        
        return "Data Kuliner Berhasil Ditambahkan";
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
     * @param  \App\Models\kuliner  $kuliner
     * @return \Illuminate\Http\Response
     */
    public function show(kuliner $kuliner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kuliner  $kuliner
     * @return \Illuminate\Http\Response
     */
    public function edit(kuliner $kuliner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kuliner  $kuliner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id= $request->id;
        $nama = $request->nama; //variabel nama yang menerima input nama dari client
        $lokasi = $request->lokasi;
        $harga = $request->harga;

        $kuliner = Kuliner::find($id); //memanggil model kuliner dengan id salah satu wisata
        $kuliner->nama = $nama; //kolom nama yang ada di tabel kuliner diubah datanya
        $kuliner->lokasi = $lokasi;
        $kuliner->harga = $harga;
        $kuliner->save();

        return "Data Kuliner Berhasil Diubah";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kuliner  $kuliner
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id= $request->id;
        $kuliner = Kuliner::find($id);
        $kuliner->delete();

        return "Data Kuliner Berhasil Dihapus";
    }
}
