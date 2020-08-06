<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sms extends Model
{
	protected $table = 'tbl_sms';
	protected $fillable = ['no_pengirim','no_tujuan','isi_pesan'];
}
