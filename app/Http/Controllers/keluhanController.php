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
    public function export($id){
        $ppid = pengajuan_keluhan::find($id);
        return view('exportkeluhan-pdf', compact(['ppid']));
    }
    public function search(Request $request)
    {
        if ($request->has('search')) {
            $ppid = pengajuan_keluhan::where('judul_laporan', 'LIKE', '%' . $request->search . '%')->orwhere('kategori_laporan', 'LIKE', '%' . $request->search . '%')
                ->get();

            if ($ppid->isEmpty()) {
                return redirect()->back()->with('error', 'Data yang dicari tidak ditemukan.');
            }
        } else {
            $ppid = pengajuan_keluhan::all();
        }

        return view('keluhan', ['ppid' => $ppid]);
    }
    public function filter(Request $request)
    {
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $ppid = pengajuan_keluhan::whereDate('tanggal_kejadian', '>=', $start_date)
            ->whereDate('tanggal_kejadian', '<=', $end_date)
            ->get();
        return view('keluhan', compact('ppid'));
    }
}
