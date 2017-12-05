<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Knowledge_Base extends Model
{
    //
    protected $table = 'knowledge_base';
    protected $fillable = ['name','C0','C1','C2','C3','C4','C5','C6','C7'];
}
