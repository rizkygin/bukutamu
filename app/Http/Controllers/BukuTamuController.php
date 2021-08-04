<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;

class BukuTamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $instansis = \App\Models\instansi::all();
        return view ('form_tamu',compact('instansis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        // dd($user);
        // $message = [
        //     'required' => 'Dibutuhkan.',
        // ];
        // $request->validate([
        //     'nama' => 'required',
        // ],$message);
        \App\Models\tamu::create([
            'nama' => $request->nama,
            'instansi_id' => $request->instansi
        ]);

        return redirect()->route('welcome')
        ->with('status',$request->nama.' Presensi Masuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tamu = \App\models\tamu::find($id);
        // dd($tamu);
        $instansis = \App\Models\instansi::all();
        return view ('form_tamu',compact('instansis','tamu'));
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
       $tamu = \App\Models\tamu::find($id);
       $tamu->nama = $request->nama;
       $tamu->instansi_id = $request->instansi;
       $tamu->save();

       return redirect()->route('welcome')
       ->with('status','Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tamu = \App\Models\tamu::find($id);
        $tamu->delete();
        return redirect()->route('welcome')
        ->with('danger',
        $tamu->nama.' berhasil di hapus!');
    }
}
