<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class TestController extends Controller
{
    public function test(Request $request){
      echo($request->input('addr'));
      dd($request->all());
      return ' 这是admin下的TestController的test';
    }
    public function select(){
        // $data=DB::table('admin')->first();
        // $data=DB::table('admin')->get();
        $data=DB::table('admin')->where('id','>',6)->Orwhere('status',0)->select('nickname','username')->get();
        foreach($data as $key=>$value){
            echo $value->nickname.'<br/>';
        }
        dump($data);
    }
    public function add(){
        $data=['username'=>'hh','password'=>'123','email'=>'fdsafds@fda.com','nickname'=>'小花'];
       return  DB::table('admin')->insert($data);
    }
    
}
