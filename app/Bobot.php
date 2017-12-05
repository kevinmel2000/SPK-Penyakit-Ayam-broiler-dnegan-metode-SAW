<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bobot extends Model
{
    //
    protected $table = 'bobot';
    protected $fillable = ['id_user','B0','B1','B2','B3','B4','B5','B6','B7'];
}
