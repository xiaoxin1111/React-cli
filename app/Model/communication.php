<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
class communication extends Model
{
    public function test(){
        $this->Access();
        return array("msg"=>"我是一个models");
    }
    function Access(){  //跨域
        header("Access-Control-Allow-Origin: *");
        header('Access-Control-Allow-Headers:Authorization, Content-Type, If-Match, If-Modified-Since, If-None-Match, If-Unmodified-Since, X-Requested-With');
        header("Content-type: text/json; charset=utf-8");
    }
}
