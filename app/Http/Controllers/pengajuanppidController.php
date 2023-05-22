<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Storage;

class pengajuanppidController extends Controller
{
    public function index()
    {
        $ppid = DB::table('pengajuan_ppids')
            ->join('akun', 'pengajuan_ppids.id_akun', '=', 'akun.id_akun')
            ->get();
        return view('ppid.index', compact('ppid'));
    }

    public function edit($id)
    {
        $ppid = DB::table('pengajuan_ppids')
                        ->join('akun', 'pengajuan_ppids.id_akun', '=', 'akun.id_akun')
                        ->where('id', $id)
                        ->first();
        
        return view('ppid.edit', compact('ppid'));
        // Logika untuk mengedit aspirasi dengan ID tertentu
    }    

    public function update(Request $request, $id)
    {
        $judulppid = $request->input('judul_laporan');
        $isippid = $request->input('isi_laporan');
        $statusppid = $request->input('status');
        $docppid = $request->file('doc_fileppid');
        $fileppid;

        if ($docppid) {
            $fileppid = $id . '_' . $docppid->getClientOriginalName();
            $path = $docppid->storeAs('ppid', $fileppid, 'public');

            $existingFilePath = 'storage/ppid/' . $fileppid;
            if (Storage::exists($existingFilePath)) {
                Storage::delete($existingFilePath);
                // File berhasil dihapus
            }

            // Path file yang diunggah (dalam folder public)
            $fileppid = 'storage/' . $path;
        }

        $data = [
            'judul_laporan' => $judulppid,
            'isi_laporan' => $isippid,
            'status' => $statusppid,
            'doc_hasil_ppid' => $fileppid
        ];

        DB::table('pengajuan_ppids')->where('id', $id)->update($data);

        return redirect()->route('ppid.index')->with('success', 'Data aspirasi berhasil diperbarui.');
    }


    public function destroy($id)
    {
        $ppid = DB::table('pengajuan_ppids')->where('id', $id)->delete();
    
        return redirect()->route('ppid.index')->with('success', 'Aspirasi berhasil dihapus.');
        // Logika untuk menghapus aspirasi dengan ID tertentu
    }

    public function keberatan($id)
    {
        $ppid = DB::table('keberatan_ppid')->where('id', $id);
    
        return redirect()->route('ppid.index')->with('success', 'Aspirasi berhasil dihapus.');
        // Logika untuk menghapus aspirasi dengan ID tertentu
    }
}
