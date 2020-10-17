<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Master\Jadwal AS model;
use App\Models\Master\MataPelajaran AS mapel;

class JadwalPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $defaultroute;
    protected $defaulturl;
    protected $view;
    public function __construct()
    {
        $this->defaultroute=route('jadwal_pelajaran.index');
        $this->view='admin.master.matapelajaran.jadwal';
        $this->defaulturl='jadwal_pelajaran';
    }    
    private function setting($param=''){
        $url='jadwal';
        $headline='Mata Pelajaran';
        if($param) {
            $url=$url;
            if(isset($param['headline'])) $headline=$param['headline'];
        }    
        $setting=[
            'headline'=>$headline,
            'subheadline'=>'menampilkan jadwal pelajaran',
            'breadcrumb'=>[['label'=>'Home','url'=>url('/'),'aktif'=>false],
                           ['label'=>'Data Mapel','url'=>url($this->defaulturl),'aktif'=>false],
                           ['label'=>'Jadwal','url'=>url($this->defaulturl),'aktif'=>false],
                           ['label'=>'Jadwal','url'=>url($this->defaulturl),'aktif'=>true], 
            ],
            'tambah'=>['status'=>true,'url'=>route($this->defaulturl.'.create')],
            'edit'=>['status'=>true,'url'=>$this->defaulturl.'.edit'],
            'update'=>['status'=>true,'url'=>$this->defaulturl.'.update'],
            'delete'=>['status'=>true,'url'=>$this->defaulturl.'.destroy'],
            'simpan'=>route($this->defaulturl.'.store'),
            'view'=>$this->view,
            'url'=>$url,
        ];
        return (object)$setting;
    }
    private function validasi($request){
        $validator=Validator::make($request->all(),[
            'jam'=>'required',
            'hari'=>'required',
            'status'=>'required',

        ]);       
        return $validator; 
    }
    public function index()
    {
        $param=[
            'url'=>'mapel',
        ];
        $data=[
            'setting'=>$this->setting($param),
            'data'=>Model::all(),
            
        ];
        return view($this->view.'.tabel',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $param=[
            'url'=>$this->defaulturl.'/create',
            'headline'=>'Tambah Data',
        ];        
        $data=[
            'setting'=>$this->setting($param),
            'mapel'=>Mapel::all(),
        ];
        return view($this->view.'.add',$data);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi=$this->validasi($request);
        if($validasi->fails()){
            return redirect(route($this->defaulturl.'.create'))
            ->withErrors($validasi)
            ->withInput();
        }else{
            $result=Model::create([
                'mapel_id'=>$request->input('mapel_id'),
                'jam'=>$request->input('jam'),
                'hari'=>ucfirst($request->input('hari')),
                'status'=>$request->input('status'),             
            ]);
            return redirect($this->defaultroute)->with('success', 'Data Berhasil disimpan');  
        }      
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
        $param=[
            'url'=>$this->defaulturl.'/'.$id.'/edit',
            'headline'=>'Edit Data',
        ];        
        $result=Model::find($id);
        $data=[
            'setting'=>$this->setting($param),
            'data'=>$result,
            'mapel'=>Mapel::all(),
        
        ];
        return view($this->view.'.edit',$data);       
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
        $validasi=$this->validasi($request);
        if($validasi->fails()){
            return redirect(route($this->defaulturl.'.edit',$id))
            ->withErrors($validasi)
            ->withInput();
        }else{
            $result=Model::where('id',$id)->update([
                'mapel_id'=>$request->input('mapel_id'),
                'jam'=>$request->input('jam'),
                'hari'=>ucfirst($request->input('hari')),
                'status'=>$request->input('status'),         
            ]);            
            return redirect($this->defaultroute)->with('success', 'Data Berhasil Di Update');  
        }  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=Model::whereId($id)->first();
        $delete->delete();
        return redirect($this->defaultroute)->with('success', 'Data Berhasil hapus');   
    }
}