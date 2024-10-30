<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

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
         $data['wali'] = \App\Models\Wali::with('kelas')->latest()->paginate(10);
         return view('pages.admin.kdatawali.list', $data);
     }
     
 
     // end kelola wali

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    $kelas = \App\Models\Kelas::all(); // Mengambil semua data kelas
    return view('pages.admin.kdatawali.tambah', compact('kelas'));
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        'nama' => 'required|min:3',
        'kontak' => 'required|min:11|max:12',
        'jenis_kelamin' => 'required',
        'alamat' => 'nullable',
        'wali_kelas' => 'required|exists:kelas,id', // pastikan wali_kelas mengacu ke ID kelas
    ]);

    Wali::create($validatedData);

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
        $wali = Wali::findOrFail($id);
        $kelas = \App\Models\Kelas::all(); // Get all classes
        return view('pages.admin.kdatawali.edit', compact('wali', 'kelas')); // Pass both wali and kelas
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
        'wali_kelas' => 'required|exists:kelas,id', // Validate the wali_kelas
    ]);

    $wali = Wali::findOrFail($id);
    $wali->fill($validatedData);
    $wali->save();

    return redirect()->route('list_wali.index')->with('success', 'Data wali berhasil diperbarui');
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