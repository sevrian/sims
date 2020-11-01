<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Master\Guru;


class MasterGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = Guru::latest()->paginate(5);
        return view('admin.master.guru.index', ['guru' => $kelas]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.master.guru.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        $id = $request->id;
        $listguru = Guru::updateOrCreate(['id' => $id], [
            'nama_guru' => $request->nama_guru,
            'nip' => $request->nip,
            'jenisptk_id' => $request->jenisptk_id,
            'negara_id' => $request->negara_id,
            'agama_id' => $request->agama_id,
            'password' => $request->password,
            'tanggal_lahir' => $request->tanggal_lahir,
            'temapat_lahir' => $request->temapat_lahir,
            'jenis_kelamin' => $request->jenis_kelamain,
            'nik' => $request->nik,
            'telepon' => $request->telepon,
            'nuptk' => $request->nuptk,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'status_aktif' => $request->status_aktif,
            'foto' => $request->foto
        ]);
        return response()->json($listguru);
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
    public function edit($id)
    {
        $item = Item::find($id);
        return response()->json($item);
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
        Item::find($id)->delete();

        return response()->json(['success' => 'Item deleted successfully.']);
    }
}
