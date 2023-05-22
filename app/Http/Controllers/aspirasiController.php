<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Storage;

class aspirasiController extends Controller
{
    public function index()
    {
        $aspirasi = DB::table('pengajuan_aspirasi')
            ->join('akun', 'pengajuan_aspirasi.id_akun', '=', 'akun.id_akun')
            ->get();
        return view('aspirasi.index', compact('aspirasi'));
    }

    public function edit($id)
    {
        $aspirasi = DB::table('pengajuan_aspirasi')
                        ->join('akun', 'pengajuan_aspirasi.id_akun', '=', 'akun.id_akun')
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
        $docFile = $request->file('doc_file');
        $filePath;

        if ($docFile) {
            $fileName = $id . '_' . $docFile->getClientOriginalName();
            $path = $docFile->storeAs('aspirasi', $fileName, 'public');

            $existingFilePath = 'storage/aspirasi/' . $fileName;
            if (Storage::exists($existingFilePath)) {
                Storage::delete($existingFilePath);
                // File berhasil dihapus
            }

            // Path file yang diunggah (dalam folder public)
            $filePath = 'storage/' . $path;
        }

        $data = [
            'judul_aspirasi' => $judulAspirasi,
            'isi_aspirasi' => $isiAspirasi,
            'status' => $status,
            'doc_hasil_ppid' => $filePath
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

        public function keberatan($ida)
    {
        $aspirasi = DB::table('keberatan_aspirasi')
        ->join('akun', 'keberatan_aspirasi.id_akun', '=', 'akun.id_akun')
                        ->where('id_aspirasi', $ida)->first();

        return view('aspirasi.keberatan', compact('aspirasi'));
        // Logika untuk menampilkan keberatan dengan ID tertentu
    }

}
