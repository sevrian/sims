<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Master\Guru;
use App\Models\Master\Agama;

class MasterGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $query = Guru::all();
        if ($request->ajax()) {

            return datatables()->of($query)

                ->make(true);
        }
        return view('admin.master.guru.index');
        // return redirect()->route('guru.index', compact('data'));
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
       
        $request->validate([
            'nama_guru' => 'required',
            'nip' => 'required',
            'jenis_ptk' => 'required',
            'agama_id' => 'required',
            'nama_guru' => 'required',
            'nama_guru' => 'required',
            'nama_guru' => 'required',
            'nama_guru' => 'required',
            'nama_guru' => 'required',
            'nama_guru' => 'required',
            'nama_guru' => 'required',
            'nama_guru' => 'required',
            'nama_guru' => 'required',
            'nama_guru' => 'required',
            'nama_guru' => 'required',
            'nama_guru' => 'required',

        ]);

        Negara::create($request->all());

        return redirect()->route('negara.index')
            ->with('success', 'Data Berhasil disimpan');
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
