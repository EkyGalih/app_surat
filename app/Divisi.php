<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    protected $table = 'divisi';
    protected $fillable = ['nama_departemen'];

    public function hasManyUser(){
        return $this->hasMany('App\User', 'divisi_id', 'id');
    }

    public function hasManyDistribusi(){
    	return $this->hasMany('App\Distribusi', 'tujuan', 'id');
    }
}
