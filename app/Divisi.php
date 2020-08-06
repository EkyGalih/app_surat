<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    protected $table = 'tbl_divisi';
    protected $fillable = ['id','nama_departemen'];

    public function hasManyUser(){
        return $this->hasMany('App\User', 'divisi_id', 'id');
    }

    public function hasManyDistribusi(){
    	return $this->hasMany('App\Distribusi', 'tujuan', 'id');
    }
}
