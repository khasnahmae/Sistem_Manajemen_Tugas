<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;
    protected $table = 'tugass';
    protected $primaryKey ="id";
    protected $guarded = [''];

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'id_dosens');
    }
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'pengumpulans', 'id_tugass', 'id_mahasiswas');
    }
    public function pengumpulan()
    {
        return $this->hasMany(Pengumpulan::class, 'tugas_id');
    }
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }
    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'id_mapel');
    }
    public function pengumpulans()
    {
        return $this->hasMany(Pengumpulan::class, 'id_tugass');
    }
}
