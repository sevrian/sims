<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Master\MataPelajaran AS model;
use App\Models\Master\KelompokMapel AS kelompokmapel;

class MapelController extends Controller
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
        $this->defaultroute=route('mapel.index');
        $this->view='admin.master.matapelajaran.mapel';
        $this->defaulturl='mapel';
    }    
    private function setting($param=''){
        $url='mapel';
        $headline='Mata Pelajaran';
        if($param) {
            $url=$url;
            if(isset($param['headline'])) $headline=$param['headline'];
        }    
        $setting=[
            'headline'=>$headline,
            'subheadline'=>'menampilkan data  mata pelajaran',
            'breadcrumb'=>[['label'=>'Home','url'=>url('/'),'aktif'=>false],
                           ['label'=>'Data Mapel','url'=>url($this->defaulturl),'aktif'=>false],
                           ['label'=>'Mapel','url'=>url($this->defaulturl),'aktif'=>false],
                           ['label'=>'Mapel','url'=>url($this->defaulturl),'aktif'=>true], 
            ],
            'tambah'=>['status'=>true,'url'=>route($this->defaulturl.'.create')],
            'edit'=>['status'=>true,'url'=>$this->defaulturl.'.edit'],
            'update'=>['status'=>true,'url'=>$this->defaulturl.'.update'],
            'delete'=>['status'=>true,'url'=>$this->defaulturl.'.destroy'],
            'simpan'=>route($this->defaulturl.'.store'),
            'view'=>$this->view,
            'url'=>$url,
            'extend'=>'@csrf @method("DELETE")',
        ];
        return (object)$setting;
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
            'kelompokmapel'=>kelompokmapel::all(),
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
        $validator=Validator::make($request->all(),[
            'nama'=>'required',
            'kelompokmapel_id'=>'required',
            'nama_mapel'=>'required',
            'kkm'=>'required',
            'aktif'=>'required',
            'tingkat'=>'required',
            'user_id'=>'required',

        ]);
        if($validator->fails()){
            return redirect(route($this->defaulturl.'.create'))
            ->withErrors($validator)
            ->withInput();
        }else{
            $result=Model::create([
                'nama'=>ucfirst($request->input('nama')),
                'kelompokmapel_id'=>$request->input('kelompokmapel_id'),
                'nama_mapel'=>ucfirst($request->input('nama_mapel')),
                'kkm'=>$request->input('kkm'),
                'aktif'=>$request->input('aktif'),
                'tingkat'=>$request->input('tingkat'),
                'user_id'=>$request->input('user_id'),              
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
            'kelompokmapel'=>kelompokmapel::all(),
        
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
        $validator=Validator::make($request->all(),[
            'nama'=>'required',
            'kelompokmapel_id'=>'required',
            'nama_mapel'=>'required',
            'kkm'=>'required',
            'aktif'=>'required',
            'tingkat'=>'required',
            'user_id'=>'required',

        ]);
        if($validator->fails()){
            return redirect(route($this->defaulturl.'.edit',$id))
            ->withErrors($validator)
            ->withInput();
        }else{
            $result=Model::where('id',$id)->update([
                'nama'=>ucfirst($request->input('nama')),
                'kelompokmapel_id'=>$request->input('kelompokmapel_id'),
                'nama_mapel'=>ucfirst($request->input('nama_mapel')),
                'kkm'=>$request->input('kkm'),
                'aktif'=>$request->input('aktif'),
                'tingkat'=>$request->input('tingkat'),
                'user_id'=>$request->input('user_id'),         
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