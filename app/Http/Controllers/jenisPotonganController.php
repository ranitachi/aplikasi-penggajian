<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\jenisPotongan;

class jenisPotonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = jenisPotongan::all();
        return view('pages.jenisPotongan.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.jenisPotongan.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nip' => 'required|min:4',
            'desc' => 'required|min:20',
            'nominal' => 'required|min:4',
            'flag' => 'required',
        ]);

         $data = new jenisPotongan();
       $data->nip = $request->nip;
       $data->desc = $request->desc;
       $data->nominal = $request->nominal;
       $data->tgl_ambil = $request->tglAmbil;
       $data->flag = $request->flag;
       $data->save();
       return redirect()->route('jenis-potongan.index')->with('alert-success','Berhasil Menambahkan Jenis Potongan!');
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
        $datas = jenisPotongan::where('id',$ids)->first();
        $datas->nip = $request->nip;
        $datas->desc = $request->desc;
        $datas->nominal = $request->nominal;
        $datas->tgl_ambil = $request->tglAmbil;
        $datas->flag = $request->flag;
        $datas->save();
        return redirect()->route('jenis-potongan.index')->with('alert-success','Berhasil diUpdate Jenis Potongan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datas = jenisPotongan::where('id',$id)->first();
        $datas->flag = 0;
        $datas->save();
        return redirect()->route('jenis-potongan.index')->with('alert-success','Berhasil diHapus Jenis Potongan!');
    }
}
