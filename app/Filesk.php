<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filesk extends Model
{
	protected $table = 'file_surat_keluar';
	protected $fillable = ['staff_bagian','perihal','file','status'];

	public function hasOneSkbws()
	{
		return $this->hasOne('App\Skbws', 'filesk_id', 'id');
	}

	public function hasOneSkppd()
	{
		return $this->hasOne('App\Sksppd', 'filesk_id', 'id');
	}

	public function hasOneSksppdttl()
	{
		return $this->hasOne('App\Sksppdttl', 'filesk_id', 'id');
	}

	public function hasOneSksatker()
	{
		return $this->hasOne('App\Sksatker', 'filesk_id', 'id');
	}

	public function hasOneSksppkttl()
	{
		return $this->hasOne('App\Sksppkttl', 'filesk_id', 'id');
	}
}
