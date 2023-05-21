<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\keberatan;
use App\Models\pengajuan_ppid;
use App\Models\pengajuan_keluhan;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class ppidController extends Controller
{
    public function index()
    {
        $ppid = pengajuan_ppid::all();
        return view('formpengajuan', compact(['ppid']));
    }
    public function store(Request $request)
    {
        pengajuan_ppid::create($request->except(['_token', 'submit']));
        return redirect('/ppid');
    }
    public function edit($id)
    {
        $ppid = pengajuan_ppid::find($id);
        return view('edit', compact(['ppid']));
    }
    public function revisi($id)
    {
        $ppid = keberatan::find($id);
        return view('revisi', compact(['ppid']));
    }


    public function update($id, Request $request)
    {
        $ppid = pengajuan_ppid::find($id);

        if ($ppid) {
            // Mengupdate seluruh kolom kecuali 'doc_hasil_ppid'
            $ppid->fill($request->except('doc_hasil_ppid'))->save();

            // Mengunggah dokumen baru
            if ($request->hasFile('doc_hasil_ppid')) {
                $file = $request->file('doc_hasil_ppid');
                $fileName = $file->getClientOriginalName();

                // Menyimpan dokumen ke dalam folder 'public/doc_hasil_ppid'
                $file->move(public_path('doc_hasil_ppid'), $fileName);

                // Mengupdate kolom 'doc_hasil_ppid' dengan nama file yang diunggah
                $ppid->doc_hasil_ppid = $fileName;
                $ppid->save();
            }

            return redirect('/formpengajuan')->with('success', 'Berita berhasil diperbarui.');
        }

        return redirect('/formpengajuan')->with('error', 'Berita tidak ditemukan.');
    }




    public function destroy($id)
    {
        try {
            $ppid = pengajuan_ppid::find($id);
            $ppid->delete();

            // Redirect pengguna ke tampilan sebelumnya dengan pesan sukses
            return redirect()->back()->with('success', 'Data berhasil dihapus.');
        } catch (QueryException $e) {
            if ($e->getCode() == 1451) {
                // Redirect pengguna ke tampilan sebelumnya dengan pesan error pada target ID
                return redirect()->back()->withErrors(['error' => 'Tidak dapat menghapus data karena adanya keterkaitan dengan data lain.'])->withInput(['target_id' => $id]);
            } else {
                // Redirect pengguna ke tampilan sebelumnya dengan pesan error umum
                return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan saat menghapus data.'])->withInput(['target_id' => $id]);
            }
        }
    }

    public function search(Request $request)
    {
        if ($request->has('search')) {
            $ppid = pengajuan_ppid::where('nama_pelapor', 'LIKE', '%' . $request->search . '%')->orwhere('judul_laporan', 'LIKE', '%' . $request->search . '%')
                ->get();

            if ($ppid->isEmpty()) {
                return redirect()->back()->with('error', 'Data yang dicari tidak ditemukan.');
            }
        } else {
            $ppid = pengajuan_ppid::all();
        }

        return view('formpengajuan', ['ppid' => $ppid]);
    }

    public function filter(Request $request)
    {
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $ppid = pengajuan_ppid::whereDate('created_at', '>=', $start_date)
            ->whereDate('created_at', '<=', $end_date)
            ->get();
        return view('formpengajuan', compact('ppid'));
    }
}
