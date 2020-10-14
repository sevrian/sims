<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KelompokMapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private function setting(){
        $setting=[
            'headline'=>'Kelompok Mata Pelajaran',
            'subheadline'=>'menampilkan data kelompok mata pelajaran',
            'breadcrumb'=>[['label'=>'Home','url'=>url('/'),'aktif'=>false],
                           ['label'=>'Data Mapel','url'=>url('kelompok_mapel'),'aktif'=>false],
                           ['label'=>'Kelompok Mapel','url'=>url('kelompok_mapel'),'aktif'=>true], 
            ],
            'tambah'=>['status'=>true,'url'=>route('kelompok_mapel.create')],
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
        return view('admin.matapelajaran.kelompokmapel.index',$data);
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
        return view('admin.matapelajaran.kelompokmapel._form',$data);
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
