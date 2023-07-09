<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komik extends Model
{
    protected $table = "tb_komik";

    protected $primaryKey = 'id_komik';

    protected $fillable = ['no_user', 'nama_user', 'nama_komik', 'no_tlp', 'alamat'];
}
