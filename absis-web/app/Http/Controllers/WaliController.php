<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wali;


class WaliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     // start kelola wali

     public function index()
     {
        $data['wali'] = \App\Models\Wali::latest()->paginate(10);
        return view('pages.kdatawali.list', $data);
     }
 
     // end kelola wali

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.kdatawali.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request->all());
        
        
        $validatedData = $request->validate([ 
            'nama' => 'required|min:3',
            'kontak' => 'required|min:11|max:12',
            'jenis_kelamin' => 'required',
            'alamat' => 'nullable',
         ]);

         $kelas = request('wali_kelas');

         $wali = new Wali;
         $wali->nama = $validatedData['nama'];
         $wali->wali_kelas = $kelas;
         $wali->kontak = $validatedData['kontak'];
         $wali->jenis_kelamin = $validatedData['jenis_kelamin'];
         $wali->alamat = $validatedData['alamat'];
        $wali->save();
        return redirect()->route('list_wali.index')->with('success', 'Data wali berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $wali = Wali::find($id);
        $data['wali'] = \App\Models\Wali::findOrFail($id);
        return view('pages.kdatawali.edit', compact('wali'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([ 
            'nama' => 'required|min:3',
            'kontak' => 'required|min:11|max:12',
            'jenis_kelamin' => 'required',
            'alamat' => 'nullable',
         ]);
         
        $kelas = request('wali_kelas');
        $wali = \App\Models\Wali::findOrFail($id);
        $wali->fill($validatedData);
        $wali->wali_kelas = $kelas;
        $wali->save();
        return redirect('/list_wali');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $wali = \App\Models\Wali::findOrFail($id);
        $wali->delete();
        return back();
    }
}
