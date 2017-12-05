<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
    protected $table = 'ranking';
    protected $fillable = ['id_bobot','hasil','id_knowledge'];
     public $timestamps = false;
}
