<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    use HasFactory;
    protected $table = 'akun';
    protected $primaryKey = 'id_akun';
    protected $fillable = ['id_akun','email', 'password', 'role', 'nama', 'nomor_telepon'];


public static function search($query)
    {
        return self::where('email', 'like', '%'.$query.'%')
            ->orWhere('nama', 'like', '%'.$query.'%')
            ->get();
    }
}