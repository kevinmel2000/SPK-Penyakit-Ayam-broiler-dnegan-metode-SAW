<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class X extends Model
{
    protected $table = 'x';
    protected $fillable = ['x0','x1','x2','x3','x4','x5','x6','x7','total'];
     public $timestamps = false;
}
