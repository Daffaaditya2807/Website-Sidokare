<?php

namespace App\Http\Controllers;

use App\Models\pengajuan_keluhan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class keluhanController extends Controller
{
    //
    public function keluhan()
    {
        $ppid = pengajuan_keluhan::all();
        return view('keluhan', compact(['ppid']));
    }
    public function edit($id)
    {
        $ppid = pengajuan_keluhan::find($id);
        return view('editkeluhan', compact(['ppid']));
    }
    public function update($id, Request $request)
    {
        $ppid = pengajuan_keluhan::find($id);

        if ($ppid) {
            // Mengupdate seluruh kolom kecuali 'doc_hasil_ppid'
            $ppid->fill($request->except('doc_hasil_keluhan'))->save();

            // Mengunggah dokumen baru
            if ($request->hasFile('doc_hasil_keluhan')) {
                $file = $request->file('doc_hasil_keluhan');
                $fileName = $file->getClientOriginalName();

                // Menyimpan dokumen ke dalam folder 'public/doc_hasil_ppid'
                $file->move(public_path('doc_hasil_keluhan'), $fileName);

                // Mengupdate kolom 'doc_hasil_ppid' dengan nama file yang diunggah
                $ppid->doc_hasil_keluhan = $fileName;
                $ppid->save();
            }

            return redirect('/keluhan')->with('success', 'Berita berhasil diperbarui.');
        }

        return redirect('/keluhan')->with('error', 'Berita tidak ditemukan.');
    }
}
