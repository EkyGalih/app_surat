<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distribusi extends Model
{
    protected $table = 'distribusi';
    protected $fillable = ['tujuan','smund_id','smumum_id', 'status_baca'];

    public function belongsToUndangan(){
    	return $this->belongsTo('App\Undangan', 'smund_id', 'id');
    }

    public function belongsToUmum(){
    	return $this->belongsTo('App\SuratMasuk', 'smumum_id', 'id');
    }

    public function belongsToDivisi(){
    	return $this->belongsTo('App\Divisi', 'tujuan', 'id');
    }
}
