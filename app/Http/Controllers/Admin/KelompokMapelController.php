<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt AS enkripsi; 

use App\Models\Master\KelompokMapel AS Model;


class KelompokMapelController extends Controller
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
        $this->defaultroute=route('kelompok_mapel.index');
        $this->view='admin.master.matapelajaran.kelompokmapel';
        $this->defaulturl='kelompok_mapel';
    }    
    private function setting($param=''){
        $url='kelompok_mapel';
        $headline='Kelompok Mata Pelajaran';
        if($param) {
            $url=$param['url'];
            if(isset($param['headline'])) $headline=$param['headline'];
        }    
        $setting=[
            'headline'=>$headline,
            'subheadline'=>'menampilkan data kelompok mata pelajaran',
            'breadcrumb'=>[['label'=>'Home','url'=>url('/'),'aktif'=>false],
                           ['label'=>'Data Mapel','url'=>url($this->defaulturl),'aktif'=>false],
                           ['label'=>'Kelompok Mapel','url'=>url($this->defaulturl),'aktif'=>false],
                           ['label'=>'Kelompok Mapel','url'=>url($this->defaulturl),'aktif'=>true], 
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
    public function index()
    {
        $param=[
            'url'=>'kelompok_mapel',
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
        ];        
        $data=[
            'setting'=>$this->setting($param),
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
            'kelompok'=>'required',
            'keterangan'=>'required',

        ]);
        if($validator->fails()){
            return redirect(route($this->defaulturl.'.create'))
            ->withErrors($validator)
            ->withInput();
        }else{
            $result=Model::create([
                'kelompok'=>ucfirst($request->input('kelompok')),
                'keterangan'=>ucfirst($request->input('keterangan')),               
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
            'kelompok'=>'required',
            'keterangan'=>'required',

        ]);
        if($validator->fails()){
            return redirect(route($this->defaulturl.'.edit',$id))
            ->withErrors($validator)
            ->withInput();
        }else{
            $result=Model::where('id',$id)->update([
                'kelompok'=>ucfirst($request->input('kelompok')),
                'keterangan'=>ucfirst($request->input('keterangan')),           
            ]);            
            return redirect($this->defaultroute)->with('success', 'Data Berhasil disimpan');  
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
