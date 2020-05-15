<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    protected $table = array('name_organisasi','nama_gedung','nama_ruang','npm','name','foto_ktm','surat','tanggal_pinjam','tanggal_booking','cp_user');
}
