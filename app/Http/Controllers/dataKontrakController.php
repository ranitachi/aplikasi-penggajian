<?php

namespace App\Http\Controllers;

use App\Model\dataKontrak;
use Illuminate\Http\Request;

class dataKontrakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =  dataKontrak::all();
        return view('pages.dataKontrak.index',compact('data'));
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
        $datas = new dataKontrak();
        $datas->karyawan_id  = $request->karyawan;
        $datas->tgl_awal_kontrak = $request->awal;
        $datas->tgl_akhir_kontrak = $request->akhir;
        $datas->status_kontrak = $request->status;
        $datas->save();
        return redirect()->route('kontrak-karyawan.index')->with('alert-success','Berhasil Menambahkan Data Pegawai!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $ids = $request->idd;
        $datas = dataKontrak::where('id', $ids)->first();
        $datas->karyawan_id  = $request->karyawan;
        $datas->tgl_awal_kontrak = $request->awal;
        $datas->tgl_akhir_kontrak = $request->akhir;
        $datas->status_kontrak = $request->status;
        $datas->save();
        return redirect()->route('kontrak-karyawan.index')->with('alert-success','Berhasil Mengupdate Data Pegawai!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = dataKontrak::where('id', $id)->first();
        $data->status_kontrak = 0;
        $data->save();
        return redirect()->route('kontrak-karyawan.index')->with('alert-success','Berhasil Menghapus Data Pegawai!');
    }
}
