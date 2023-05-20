<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class aspirasiController extends Controller
{
    public function index()
    {
        $aspirasi = DB::table('pengajuan_aspirasi')->get();
        return view('aspirasi.index', compact('aspirasi'));
    }

    public function edit($id)
    {
        $aspirasi = DB::table('pengajuan_aspirasi')
                        ->where('id_pengajuan_aspirasi', $id)
                        ->first();
        
        return view('aspirasi.edit', compact('aspirasi'));
        // Logika untuk mengedit aspirasi dengan ID tertentu
    }    

    public function update(Request $request, $id)
    {
        $judulAspirasi = $request->input('judul_aspirasi');
        $isiAspirasi = $request->input('isi_aspirasi');
        $status = $request->input('status_aspirasi');

        $data = [
            'judul_aspirasi' => $judulAspirasi,
            'isi_aspirasi' => $isiAspirasi,
            'status' => $status,
        ];

        DB::table('pengajuan_aspirasi')->where('id_pengajuan_aspirasi', $id)->update($data);

        return redirect()->route('aspirasi.index')->with('success', 'Data aspirasi berhasil diperbarui.');
    }


    public function destroy($id)
    {
        $aspirasi = DB::table('pengajuan_aspirasi')->where('id_pengajuan_aspirasi', $id)->delete();
    
        return redirect()->route('aspirasi.index')->with('success', 'Aspirasi berhasil dihapus.');
        // Logika untuk menghapus aspirasi dengan ID tertentu
    }
}
