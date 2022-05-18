<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bank extends Model
{
    use HasFactory;
    protected $table = "bankrelasi" ;
    protected $primaryKey = "id" ;
    protected $fillable = [
        "id", "banksip"
    ];

    public function pegawai()
    {
        return $this->hasMany(pegawai::class, 'id', 'banksip');
    }
}
