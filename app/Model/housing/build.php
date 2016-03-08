<?php

namespace App\Model\housing;

use Illuminate\Database\Eloquent\Model;

class build extends Model{
    
    protected  $table = "build";
    
    public $timestamps = false;
    
    //優惠
    function favorableHousing(){
        DB::table("build_text")->where("benefit","!=","");
    }
}
