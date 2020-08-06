<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    protected $table = 'smumum';
    protected $fillable = ['tgl_terima','asal_surat','tgl_surat','kd_klasifikasi','no_surat','perihal','diteruskan','isi_disposisi','status_smumum','gambar'];

    // public function hasOneDisposisi(){
    // 	return $this->hasOne('App\Disposisi', 'smumum_id', 'id');
    // }

    public function hasManyDistribusi(){
    	return $this->hasMany('App\Distribusi', 'smumum_id', 'id');
    }
}
