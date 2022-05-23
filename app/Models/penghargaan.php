<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penghargaan extends Model
{
    use HasFactory;
    protected $table = "penghargaan";
    protected $primaryKey = "id";
    protected $fillable = [
        "id", "penghargaansip"
    ];

    public function pegawai()
    {
        return $this->belongsToMany(pegawai::class);
    }
}
