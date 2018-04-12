<?php

namespace App\Http\Controllers;
use App\dataJabatan;

use Illuminate\Http\Request;

class dataJabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = dataJabatan::all();
        return view('pages.jabatan.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.jabatan.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new dataJabatan();
       $data->nama_jabatan = $request->namaJabatan;
       $data->nominal = $request->nominal;
       $data->flag = $request->flag;
       $data->save();
       return redirect()->route('jabatan.index')->with('alert-success','Berhasil Menambahkan Data Jabatan!');
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
        $ids =$request->idjabatan;
        $datas = dataJabatan::where('id',$ids)->first();
        $datas->nama_jabatan = $request->namaJabatan;
        $datas->nominal = $request->nominal;
        $datas->flag = $request->flag;
        $datas->save();
        return redirect()->route('jabatan.index')->with('alert-success','Berhasil diUpdate Data Jabatan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = dataJabatan::where('id',$id)->first();
        $data->flag = 0;
        $data->save();
        return redirect()->route('jabatan.index')->with('alert-success','Berhasil Menghapus Data Jabatan!');
    }
}
