<?php 

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Kelas;
use App\Models\Wali;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $data['kelas'] = Kelas::with('wali', 'siswa')->latest()->get(); 
        return view('pages.admin.kdatakelas.list', $data);
    }

    public function create()
    {
        return view('pages.admin.kdatakelas.list'); 
    }

    public function store(Request $request)
    {
        $requestData = $request->validate(['nama_kelas' => 'required']);
        $kelas = new Kelas();
        $kelas->fill($requestData);
        $kelas->save();

        return redirect()->route('list_kelas.index')->with('pesan', 'Data Berhasil Disimpan');
    }

    // Show the details of the Kelas, including students and wali kelas
    public function show(string $id)
    {
        $kelas = Kelas::with('siswa', 'wali')->findOrFail($id);
        return view('pages.admin.kdatakelas.detail', compact('kelas'));
    }

    // Show the edit form for Kelas
    public function edit($id)
{
    $kelasEdit = Kelas::findOrFail($id); // Cari kelas yang akan diedit
    $kelas = Kelas::latest()->get(); // Semua data kelas untuk tabel
    return view('pages.admin.kdatakelas.list', compact('kelasEdit', 'kelas'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'nama_kelas' => 'required'
    ]);

    $kelas = Kelas::findOrFail($id);
    $kelas->update($request->only('nama_kelas'));
    
    return redirect()->route('list_kelas.index')->with('pesan', 'Data Berhasil Diupdate');
}


    public function destroy(string $id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();
        return redirect()->route('list_kelas.index')->with('pesan', 'Data Kelas berhasil dihapus');
    }
}
