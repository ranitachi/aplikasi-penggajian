<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\komponenGaji;

class komponenGajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = komponenGaji::all();
        return view('pages.komponenGaji.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.komponenGaji.index');
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
            'idKomponen' => 'required|min:4',
            'idBatchGaji' => 'required|min:4',
            'nominal' => 'required|min:4',
            'flag' => 'required',
        ]);

        $data = new komponenGaji();
        // $data->id_komponen = $request->idKomponen;
        // $data->id_batch_gaji = $request->idBatchGaji;
        // $data->nominal = $request->nominal;
        // $data->flag = $request->flag;
        $data->komponen=$request->komponen;
        $data->tipe_komponen=$request->tipe_komponen;
        $data->flag=1;
        $data->created_at=date('Y-m-d H:i:s');
        $data->updated_at=date('Y-m-d H:i:s');
        $data->save();
       return redirect()->route('komponen-gaji.index')->with('alert-success','Berhasil Menambahkan Komponen Gaji!');
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
        $datas = komponenGaji::where('id',$ids)->first();
        // $datas->id_komponen = $request->idKomponen;
        // $datas->id_batch_gaji = $request->idBatchGaji;
        // $datas->nominal = $request->nominal;
        // $datas->flag = $request->flag;
        $datas->komponen=$request->komponen;
        $datas->tipe_komponen=$request->tipe_komponen;
        $datas->flag=1;
        $datas->updated_at=date('Y-m-d H:i:s');
        $datas->save();
        return redirect()->route('komponen-gaji.index')->with('alert-success','Berhasil diUpdate Komponen Gaji!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datas = komponenGaji::where('id',$id)->first();
        $datas->flag = 0;
        $datas->save();
        return redirect()->route('komponen-gaji.index')->with('alert-success','Berhasil diHapus Komponen Gaji!');
    }
}
