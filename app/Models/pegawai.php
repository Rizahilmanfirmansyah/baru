<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
     
    use HasFactory;
    protected $table = "datapegawai";
    protected $primaryKey = "id";
    protected $fillable = [
        'foto', 'nama','jabatan' ,'jk','noktp','npwp','nobpjs','nokk','tempatlahir','ttl','alamatktp','domisili','gaji','tanggalgaji','norek','bank','email','nohp','status','tanggungan','awalmasuk','tanggalmasuk','berakhir'
    ];

    //public function jabatanfungsi()
   // {
      //  return $this->belongsTo(Jabatan::class, 'jabatan_id');
        
    //}
}
