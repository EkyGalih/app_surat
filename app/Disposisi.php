<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disposisi extends Model
{
    protected $table = 'tbl_disposisi';
    protected $fillable = ['surat_dari','tgl_surat','no_surat','perihal','tgl_terima','diteruskan','tgl_disposisi','isi_disposisi','file','smumum_id','smund_id'];

    public function belongsToSurat(){
    	return $this->belongsTo('App\SuratMasuk', 'smumum_id', 'id');
    }
}
