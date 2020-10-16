<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private function setting(){
        $setting=[
            'headline'=>'Mata Pelajaran',
            'subheadline'=>'menampilkan mata pelajaran',
            'breadcrumb'=>[['label'=>'Home','url'=>url('/'),'aktif'=>false],
                           ['label'=>'Data Mapel','url'=>url('mapel'),'aktif'=>false],
                           ['label'=>'Mata Pelajaran','url'=>url('mapel'),'aktif'=>true], 
            ],
            'tambah'=>['status'=>true,'url'=>route('mapel.create')],
            'edit'=>false,
            'delete'=>false,
            'simpan'=>route('mapel.store'),
        ];
        return (object)$setting;

    }    
    public function index()
    {
        $data=[
            'setting'=>$this->setting(),
        ];        
        return view('admin.master.matapelajaran.mapel.index',$data);
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
        return view('admin.master.matapelajaran.mapel._form',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'nama'=>'required',
            'alamat'=>'required',
            'no_hp'=>'required',
            'departemen_id'=>'required',

        ]);
        // if($validator->fails()){
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
