<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Flight extends Model
{
    //use SoftDeletes;
    //protected $dates = ['deleted_at'];
    
    public $table = "flight";
    public $timestamps = false;
    
    //public $fillable = ['name','posttime','ip'];
    //public $guarded  = ['name'];
    //function
}
