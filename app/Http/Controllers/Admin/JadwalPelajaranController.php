<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JadwalPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private function setting(){
        $setting=[
            'headline'=>'Jadwal',
            'subheadline'=>'menampilkan jadwal pelajaran',
            'breadcrumb'=>[['label'=>'Home','url'=>url('/'),'aktif'=>false],
                           ['label'=>'Data Mapel','url'=>url('jadwal_pelajaran'),'aktif'=>false],
                           ['label'=>'Mata Pelajaran','url'=>url('jadwal_pelajaran'),'aktif'=>true], 
            ],
            'tambah'=>['status'=>true,'url'=>route('jadwal_pelajaran.create')],
            'edit'=>false,
            'delete'=>false,
        ];
        return (object)$setting;

    }       
    public function index()
    {
        $data=[
            'setting'=>$this->setting(),
        ]; 
        return view('admin.matapelajaran.jadwal.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=[
            'setting'=>$this->setting(),
        ];
        return view('admin.matapelajaran.jadwal._form',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
