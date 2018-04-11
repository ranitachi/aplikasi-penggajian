<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dataBank;

class dataBankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = dataBank::all();
        return view('pages.bank.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.bank.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new dataBank();
       $data->nama_bank = $request->namaBank;
       $data->cabang = $request->cabang;
       $data->flag = $request->flag;
       $data->save();
       return redirect()->route('data-bank.index')->with('alert-success','Berhasil Menambahkan Data Bank!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('pages.bank.index');
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
        $data = dataBank::where('id',$id)->get();
       $data->nama_bank = $request->namaBank;
       $data->cabang = $request->cabang;
       $data->flag = $request->kategori;
       $data->save();
       return redirect()->route('data-bank.index')->with('alert-success','Berhasil Menambahkan Kritik & Saran Anda!');
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
