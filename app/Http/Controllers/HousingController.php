<?php

namespace App\Http\Controllers;
use DB;
use App;
use Route;
use App\Model\build;
use Illuminate\Routing\Controller as BaseController;

class HousingController extends BaseController{
    
    function __construct() {
        
    }
    function index(){
//        $data = ["name"=>"zhangqiang"];
//        return view("housing.master",$data);
        //$url = action('UserController@index');echo $url;
        //echo  Route::currentRouteAction();
        //echo action('HousingController@index');
        //$record = DB::select("SELECT * FROM t591_data.`activity_vip` WHERE user_id='11850'");//print_r($record);
//        $record = DB::table("t591_data.activity_vip")->select("id")->where(["user_id"=>11850])->paginate(5);
//        foreach($record as $row){
//            echo $row->id."<br />";
//        }
//        //$environment = App::environment();echo $environment;
//        $this->example_data = array();
        return view("housing.master");
    }
    
    public function output($projects)
    {
        $string = "<ul>";
        foreach ($projects as $i => $project) {
            $string .= "<li>";
            $string .= $project['name'];
            if (count($project['children'])) {
                $string .= $this->output($project['children']);
            }
            $string .= "</li>";
        }
        $string .= "</ul>";
        return $string;
    }
    //新房屋首頁
    function home(){
        $obj_build = Build::whereIn("id",[100101,100102])->get();
//        foreach($obj_build as $val){
//            echo $val->user_id."*";
//        }
        //DB::table("test.test")->where("id","2")->decrement("id2",2);
        return view("housing.home");
    }
    
    function layout(){
        return view("housing.users");
    }
    
}
