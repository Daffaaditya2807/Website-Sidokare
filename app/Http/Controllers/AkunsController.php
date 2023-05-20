<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akun;

class AkunsController extends Controller
{
  
    public function index()
    {
        $akun = Akun::all();
        return view('akun.index', compact('akun'));
    }
    
    public function create()
    {
        return view('akun.create');
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required',
            'nama' => 'required',
            'nik'=>'required',
            'nomor_telepon' => 'required'
        ]);
    
        $akun = new Akun();
        $akun->email = $request->email;
        $akun->password = $request->password;
        $akun->role = $request->role;
        $akun->nama = $request->nama;
        $akun->nik = $request->nik;
        $akun->nomor_telepon = $request->nomor_telepon;
        $akun->status_verif = 1; // Set status_verif to 1
        $akun->otp = rand(10000, 99999);

        $akun->save();
    
        return redirect()->route('akun.index')->with('success', 'Akun berhasil ditambahkan.');
    }
    
    public function edit(string $id_akun)
    {
        $akun = Akun::findOrFail($id_akun);
        return view('akun.edit', compact('akun'));
    }
    
    public function update(Request $request, $id_akun)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required',
            'nama' => 'required',
            'nomor_telepon' => 'required'
        ]);
        $akun = Akun::findOrFail($id_akun);
    
        // Update status_verif to 1
        $request->merge(['status_verif' => 1]);
        $akun->update($request->all());
    
        return redirect()->route('akun.index')->with('success', 'Akun berhasil diperbarui.');
    }
    
    public function destroy(string $id_akun)
    {
        $akun = Akun::findOrFail($id_akun);
        $akun->delete();
    
        return redirect()->route('akun.index')->with('success', 'Akun berhasil dihapus.');
    }
    
    
}
