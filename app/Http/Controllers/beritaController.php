<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\Paginator;

class BeritaController extends Controller
{
    public function index(Request $request)

    {
        $query = $request->input('query');
        $beritas = Berita::search($query);
    
        // Mengatur jumlah item yang ditampilkan per halaman
        $perPage = 1000;
    
        // Mendapatkan nomor halaman dari query string jika ada, atau default ke 1
        $currentPage = Paginator::resolveCurrentPage('page');
    
        // Membuat instance Paginator untuk koleksi berita
        $pagination = new Paginator($beritas->slice(($currentPage - 1) * $perPage, $perPage), $beritas->count());
        $pagination->withPath(route('berita.index'));
    
        return view('berita.index', [
            'beritas' => $pagination,
            'query' => $query,
        ]);
    
    }

    public function create()
    {
        return view('berita.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul_berita' => 'required',
            'tanggal_publikasi' => 'nullable',
            'id_kategori' => 'required',
            'isi_berita' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10048',
            'unggah_file_lain' => 'nullable',
        ]);
    
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('public/berita');
            $validatedData['foto'] = basename($path);
        }
    
        $berita = Berita::create($validatedData);
        return redirect()->route('berita.index');
        
    }
    
    
    public function edit($id)
{
    $berita = Berita::findOrFail($id);
    return view('berita.edit', compact('berita'));
}



public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'judul_berita' => 'required',
        'tanggal_publikasi' => 'nullable',
        'id_kategori' => 'required',
        'isi_berita' => 'required',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10048',
        'unggah_file_lain' => 'nullable',
    ]);

    $berita = Berita::findOrFail($id);

    // Menghapus foto lama jika ada perubahan foto
    if ($request->hasFile('foto') && $berita->foto) {
        Storage::delete('public/berita/' . $berita->foto);
    }

    // Mengupdate data berita
    $berita->update($validatedData);

    // Mengupload foto baru jika ada perubahan foto
    if ($request->hasFile('foto')) {
        $file = $request->file('foto');
        $fileName = $file->getClientOriginalName();
        $path = $file->storeAs('public/berita', $fileName);
        $berita->foto = $fileName;
        $berita->save();
    }

    // ... lanjutkan dengan kode lainnya

    return redirect()->route('berita.index');
}


    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();
    
        return redirect()->route('berita.index');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $beritas = Berita::search($query);

        // Lakukan apa pun yang diperlukan dengan data beritas yang ditemukan
        // Misalnya, lempar data ke view untuk ditampilkan

        return view('berita.search', compact('beritas', 'query'));
    }
}