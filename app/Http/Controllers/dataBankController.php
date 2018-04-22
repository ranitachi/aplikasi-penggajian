<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\DataBank;

class dataBankController extends Controller
{
    public function index($id="")
    {
        $data = DataBank::all();
        if(!empty($id)){
            $dataUpdate = DataBank::where('id', $id)->first();
            return view('pages.bank.index',compact('data','dataUpdate'));
        }else{
            $dataUpdate = "";
            return view('pages.bank.index',compact('data','dataUpdate'));
        }

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
    { $this->validate($request, [
            'namaBank' => 'required|min:2',
            'cabang' => 'required|min:4',
            'flag' => 'required',
        ]);

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
    public function edit($id="")
    {
        $dataUpdate = DataBank::where('id', $id)->first();
        return view('pages.bank.index',compact('dataUpdate',""));
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
        $ids = $request->idbank;
        $datas = DataBank::where('id', $ids)->first();
        $datas->nama_bank = $request->namaBankupdate;
        $datas->cabang = $request->cabangupdate;
        $datas->flag = $request->flagupdate;
        $datas->save();
        return redirect()->route('data-bank.index')->with('alert-success','Berhasil Mengupdate Data Bank!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DataBank::where('id', $id)->first();
        $data->delete();
        return redirect()->route('data-bank.index')->with('alert-success','Berhasil Mengahpus!');
    }
}
