<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Institute;

class Institutes extends Controller
{
    //
    public function create(){
        $item = new Institute;
        $item -> name = "dwayn";
        $item -> location = "Planet APES";
        $item -> save();
        if($item -> save()){
            return ['success'=>$item];
        }
        else{
            return ['success'=>'operation failed'];
        }
    }
}
