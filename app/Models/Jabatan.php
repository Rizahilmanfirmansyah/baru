<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;
    protected $table = "jabatantabel";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'jabatansip'
    ];

    public function pegawai()
    {
        return $this->hasMany(pegawai::class, 'id', 'jabatansip');
    }

}
