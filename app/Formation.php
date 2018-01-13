<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Formation extends Model
{
    protected $table= "formations";

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    
}
