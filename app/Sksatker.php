<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sksatker extends Model
{
    protected $table = 'sksatker';
    protected $fillable = ['staff_bagian','tgl_surat','kd_klasifikasi','no_surat','perihal','filesk_id'];

     public function belongsToFilesk(){
    	return $this->belongsTo('App\Filesk', 'filesk_id', 'id');
    }
}
