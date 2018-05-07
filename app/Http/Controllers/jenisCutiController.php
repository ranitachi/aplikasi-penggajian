<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\jenisCuti;

class jenisCutiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = jenisCuti::all();
        return view('pages.jenisCuti.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.jenisCuti.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new jenisCuti();
       $data->jenis_cuti = $request->jenisCuti;
       $data->jumlah_hari = $request->jumlahHari;
       $data->desc = $request->desc;
       $data->flag = $request->flag;
       $data->save();
       return redirect()->route('jenis-cuti.index')->with('alert-success','Berhasil Menambahkan Jenis Cuti!');
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
        $ids = $request->idcuti;
        $datas = jenisCuti::where('id',$ids)->first();
        $datas->jenis_cuti = $request->jenisCuti;
        $datas->jumlah_hari = $request->jumlahHari;
        $datas->tanggal_mulai = $request->tanggalMulai;
        $datas->tanggal_akhir = $request->tanggalAkhir;
        $datas->desc = $request->desc;
        $datas->nip = $request->nip;
        $datas->flag = $request->flag;
        $datas->save();
        return redirect()->route('jenis-cuti.index')->with('alert-success','Berhasil diUpdate Jenis Cuti!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datas = jenisCuti::where('id', $id)->first();
        $datas->flag = 0;
        $datas->save();
        return redirect()->route('jenis-cuti.index')->with('alert-success','Berhasil Menghapus Jenis Cuti!');
    }
}
