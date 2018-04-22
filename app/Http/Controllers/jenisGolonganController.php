<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jenisGolongan;

class jenisGolonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = jenisGolongan::all();
        return view('pages.jenisGolongan.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.jenisGolongan.index');
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
            'namaGolongan' => 'required|min:4',
            'nominal' => 'required|min:4',
            'flag' => 'required',
        ]);

        $data = new jenisGolongan();
       $data->nama_golongan = $request->namaGolongan;
       $data->nominal = $request->nominal;
       $data->flag = $request->flag;
       $data->save();
       return redirect()->route('jenis-golongan.index')->with('alert-success','Berhasil Menambahkan Jenis Golongan!');
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
        $ids = $request->idgolongan;
        $datas = jenisGolongan::where('id',$ids)->first();
        $datas->nama_golongan = $request->namaGolongan;
        $datas->nominal = $request->nominal;
        $datas->flag = $request->flag;
        $datas->save();
        return redirect()->route('jenis-golongan.index')->with('alert-success','Berhasil diUpdate Jenis Golongan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datas = jenisGolongan::where('id',$id)->first();
        $datas->flag = 0;
        $datas->save();
        return redirect()->route('jenis-golongan.index')->with('alert-success','Berhasil diHapus Jenis Golongan!');
    }
}
