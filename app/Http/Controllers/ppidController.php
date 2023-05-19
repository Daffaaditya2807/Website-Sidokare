<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\keberatan;
use App\Models\pengajuan_ppid;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;

class ppidController extends Controller
{
    public function index(){
        $ppid = pengajuan_ppid::all();
        return view('formpengajuan', compact(['ppid']));
        // $count = pengajuan_ppid::join('keberatan_ppid', 'pengajuan_ppids.id', '=', 'keberatan_ppid.id_ppid')
        //                       ->count();

        // return response()->json(['count' => $count]);
    }
    public function create()
    {
        return view('formpengajuan.create');
    }
    
    public function store(Request $request){
        pengajuan_ppid::create($request->except(['_token','submit']));
        return redirect('/ppid');
    }
    public function edit($id){
        $ppid = pengajuan_ppid::find($id);
        return view('edit', compact(['ppid']));
    }
    public function revisi($id){
        $ppid = keberatan::find($id);
        return view('revisi', compact(['ppid']));
    }
    public function export($id){
        $ppid = pengajuan_ppid::find($id);
        return view('export-pdf', compact(['ppid']));
    }
    public function update($id, Request $request)
    {
        // $this->validate($request,[
        //     'dokumen'=>'mimes:doc,docx,pdf,xls,xlsx,pdf,ppt,pptx'
        // ])
        // $dokumen = $request->file('dokumen');
        // $nama_dokumen='FT'.date('ymdhis').'.'.$request->file('dokumen')->
        // getClientOriginalExtension();
        // $dokumen->move('dokumen/',$nama_dokumen);

        $ppid = pengajuan_ppid::find($id);
    $ppid->title = $request->input('doc_hasil_ppid');
    $ppid->content = $request->input('content');
    $ppid->save();
        $ppid->update($request->except(['_token','submit']));
        return redirect('/formpengajuan')->with('success', 'Berita updated successfully.');
    }
    public function destroy($id)
    {
        try {
            $ppid = pengajuan_ppid::find($id);
            $ppid->delete();
    
            // Redirect pengguna ke tampilan sebelumnya dengan pesan sukses
            return Redirect::back()->with('success', 'Data berhasil dihapus.');
        } catch (QueryException $e) {
            if ($e->getCode() == 1451) {
                // Redirect pengguna ke tampilan sebelumnya dengan pesan error pada target ID
                return Redirect::back()->withErrors(['error' => 'Tidak dapat menghapus data karena adanya keterkaitan dengan data lain.'])->withInput(['target_id' => $id]);
            } else {
                // Redirect pengguna ke tampilan sebelumnya dengan pesan error umum
                return Redirect::back()->withErrors(['error' => 'Terjadi kesalahan saat menghapus data.'])->withInput(['target_id' => $id]);
            }
        }
}
    public function search(Request $request){
        if($request->has('search')){
            $ppid = pengajuan_ppid::where('nama_pelapor', 'LIKE', '%'.$request->search.'%')->get();
        }else{
            $ppid = pengajuan_ppid::all();
        }
        return view('formpengajuan',['ppid'=>$ppid]);
    }
    public function filter(Request $request){
        $start_date= $request -> start_date;
        $end_date = $request -> end_date;
        $ppid = pengajuan_ppid::whereDate('created_at', '>=', $start_date)
        ->whereDate('created_at','<=',$end_date)
        ->get();
        return view('formpengajuan', compact('ppid'));
    }
    public function downloadpdf(){
        $ppid = pengajuan_ppid::all();
        $pdf = PDF::loadView('formpengajuan',['ppid'=>$ppid]);
        return $pdf->download('laporan_ppid.pdf');
    }
}

