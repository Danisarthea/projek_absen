<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Kelas;
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
        $data['siswa'] = \App\Models\Siswa::with('kelas')->latest()->paginate(10);
        return view('pages.admin.kdatasiswa.list', $data);
    }
    

    /**
     * Show the form for creating a new resource.
     */
  
    public function create()
    {
        $kelas = \App\Models\Kelas::all();
        return view('pages.admin.kdatasiswa.tambah', compact('kelas'));
    }
    
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->validate([
            'nama' => 'required|min:3',
            'kelas' => 'required|exists:kelas,id',
            'nis' => 'required|min:6|max:6',
            'jenis_kelamin' => 'required',
            'alamat' => 'nullable',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:10000'
        ]);
    
        $siswa = new \App\Models\Siswa();
        $siswa->nama = $requestData['nama'];
        $siswa->kelas_id = $requestData['kelas'];
        $siswa->nis = $requestData['nis'];
        $siswa->jenis_kelamin = $requestData['jenis_kelamin'];
        $siswa->alamat = $requestData['alamat'];
        if ($request->hasFile('foto')) {
            $siswa->foto = $request->file('foto')->store('public');
        }
        $siswa->save();
    
        return redirect()->route('admin.list_siswa.index')->with('pesan', 'Data Berhasil Disimpan');
    }
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $siswa = Siswa::with('kelas')->findOrFail($id); 
        return view('pages.admin.kdatasiswa.detailsiswa', compact('siswa'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $siswa = Siswa::with('kelas')->findOrFail($id);
        $kelas = Kelas::all(); 
        return view('pages.admin.kdatasiswa.edit', compact('siswa', 'kelas'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $siswa = Siswa::findOrFail($id);
    
    $siswa->nama = $request->input('nama');
    $siswa->kelas_id = $request->input('kelas');
    $siswa->nis = $request->input('nis');
    $siswa->jenis_kelamin = $request->input('jenis_kelamin');
    $siswa->alamat = $request->input('alamat');
    $siswa->save();

    return redirect()->route('admin.list_siswa.index')->with('pesan', 'Data Siswa berhasil diperbarui.');
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


