<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // start kelola kelas

    // Dalam Controller Anda
    public function index()
        {
            $data['kelas'] = \App\Models\Kelas::latest()->get(); // Jangan lupa panggil `get()` untuk mendapatkan hasil
            return view('pages.kdatakelas.list', $data);
        }


    // end kelola kelas
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.kdatakelas.list');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $requestData = $request->validate(['nama_kelas' => 'required']);
    
    $kelas = new \App\Models\Kelas();
    $kelas->fill($requestData);
    $kelas->save();
    
    return redirect()->route('list_kelas.index')->with('pesan', 'Data Berhasil Disimpan');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
