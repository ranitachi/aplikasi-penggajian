<?php

namespace App\Http\Controllers;

use App\Model\Karyawan;
use Illuminate\Http\Request;

class karyawanKontrakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Karyawan::all()->where('status_kerja',0);
        return view('pages.karyawanKontrak.index',compact('data'));
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
        $datas = new Karyawan();
        $datas->nip = $request->nip;
        $datas->nama  = $request->nama;
        $datas->tempat_lahir = $request->tempat;
        $datas->tgl_lahir = $request->tanggal;
        $datas->jenis_kelamin = $request->gender;
        $datas->agama = $request->agama;
        $datas->id_jabatan = $request->jabatan;
        $datas->alamat = $request->alamat;
        $datas->email= $request->email;
        $datas->telp= $request->telp;
        $datas->npwp = $request->npwp;
        $datas->no_ktp = $request->ktp;
        $datas->no_kk = $request->kk;
        $datas->id_bank = $request->bank;
        $datas->no_rekening = $request->rekening;
        $datas->tgl_masuk = $request->masuk;
        $datas->status_pernikahan = $request->pernikahan;
        $datas->status_kerja = 0;
        $datas->flag = $request->flag;
        $datas->save();
        return redirect()->route('karyawan-kontrak.index')->with('alert-success','Berhasil Menambahkan Data Pegawai!');
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
        $datas = Karyawan::where('id', $ids)->first();
        $datas->nip = $request->nip;
        $datas->nama  = $request->nama;
        $datas->tempat_lahir = $request->tempat;
        $datas->tgl_lahir = $request->tanggal;
        $datas->jenis_kelamin = $request->gender;
        $datas->agama = $request->agama;
        $datas->id_jabatan = $request->jabatan;
        $datas->alamat = $request->alamat;
        $datas->email= $request->email;
        $datas->telp= $request->telp;
        $datas->npwp = $request->npwp;
        $datas->no_ktp = $request->ktp;
        $datas->no_kk = $request->kk;
        $datas->id_bank = $request->bank;
        $datas->no_rekening = $request->rekening;
        $datas->tgl_masuk = $request->masuk;
        $datas->status_pernikahan = $request->pernikahan;
        $datas->flag = $request->flag;
        $datas->save();
        return redirect()->route('karyawan-kontrak.index')->with('alert-success','Berhasil Mengupdate Data Pegawai!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Karyawan::where('id', $id)->first();
        $data->flag = 0;
        $data->save();
        return redirect()->route('karyawan-kontrak.index')->with('alert-success','Berhasil Menghapus!');
    }
}
