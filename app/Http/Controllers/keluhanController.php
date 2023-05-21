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
}
