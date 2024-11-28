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

        return redirect()->route('admin.list_kelas.index')->with('pesan', 'Data Berhasil Disimpan');
    }

   
    public function show(string $id)
    {
        $kelas = Kelas::with('siswa', 'wali')->findOrFail($id);
        return view('pages.admin.kdatakelas.detail', compact('kelas'));
    }

    
    public function edit($id)
    {
        $kelasEdit = Kelas::findOrFail($id); 
        $kelas = Kelas::latest()->get(); 
        return view('pages.admin.kdatakelas.list', compact('kelasEdit', 'kelas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kelas' => 'required'
        ]);

        $kelas = Kelas::findOrFail($id);
        $kelas->update($request->only('nama_kelas'));
        
        return redirect()->route('admin.list_kelas.index')->with('pesan', 'Data Berhasil Diupdate');
    }


    public function destroy(string $id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();
        return redirect()->route('admin.list_kelas.index')->with('pesan', 'Data Kelas berhasil dihapus');
    }
}
