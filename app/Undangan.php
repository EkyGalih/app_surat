<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Undangan extends Model
{
    protected $table = 'smund';
    protected $fillable = ['tgl_terima','asal_surat','tgl_surat','kd_klasifikasi','no_surat','perihal','diteruskan','isi_disposisi','status_smund','gambar'];

    public function hasManyDistribusi(){
    	return $this->hasMany('App\Distribusi', 'smund_id', 'id');
    }
}
