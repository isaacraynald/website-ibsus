<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelayan extends Model
{
    protected $table = 'pelayan';
    protected $primarykey ='id';
    protected $fillable = ['nama', 'marga', 'jenis_kelamin',  'alamat', 'wijk', 'hp', 'status'];
}
