<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // kelola data siswa

    public function index()
    {
        
        $data['siswa'] = \App\Models\Siswa::latest()->paginate(10);
        return view('pages.kdatasiswa.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pages.kdatasiswa.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->validate([ 
            'nama' => 'required|min:3',
            'kelas' => 'required|max:7',
            'nis' => 'required|min:6|max:6',
            'jenis_kelamin' => 'required',
            'alamat' => 'nullable',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:10000'
         ]);

        $siswa = new \App\Models\Siswa();
        $siswa->fill($requestData);
        $siswa->foto = $request->file('foto')->store('public');
        $siswa->save();
        return view('pages.kdatasiswa.tambah')->with('pesan', 'Data Berhasil Disimpan');
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
        $siswa = Siswa::find($id);
        $data['siswa'] = \App\Models\Siswa::findOrFail($id);
        return view('pages.kdatasiswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $requestData = $request->validate([ 
            'nama' => 'required|min:3',
            'kelas' => 'required|max:7',
            'nis' => 'required|min:6|max:6|unique:siswas,nis,' .$id,
            'jenis_kelamin' => 'required',
            'alamat' => 'nullable',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:10000'
         ]);

        $siswa = \App\Models\Siswa::findOrFail($id);
        $siswa->fill($requestData);
        if ($request->hasFile('foto')) {
            Storage::delete($siswa->foto);
            $siswa->foto = $request->file('foto')->store('public');
        }
        $siswa->save();
        return redirect('/list_siswa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $siswa = \App\Models\Siswa::findOrFail($id);
        if ($siswa->foto != null && Storage::exists($siswa->foto)) {
            Storage::delete($siswa->foto);
        }
        $siswa->delete();
        return back();
    }
}
