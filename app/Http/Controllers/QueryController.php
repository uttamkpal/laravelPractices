<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
    protected $post = [];
    public function index(){
        $query = DB::table('posts')->select('title');
        $this->post = $query->addSelect('body')->get();
        // dd($query);
        echo "<pre>";
            
        print_r($this->post);
        // print_r($query);
        echo "</pre>";
        // DB::table('posts')->orderBy('id')->lazy()->each(function($p){
            // lazyById , lazyByIdDesc
            // foreach($p as $po => $v){
            //     dd($v);
            // }
        //     $this->post = $p;
        //     echo "<pre>";
            
        //     print_r($this->post);
        //     echo "</pre>";
        // });
        // dd($this->post);
    }
//     protected $post = [];
//    public function index(){
     
//     // $post = DB::table('posts')->pluck('title', 'created_at');
//     DB::table('posts')->orderBy('id')->chunk(2, function($p){
//         $this->post = $p;
//     });
//     // foreach ($post as $c => $t) {
//     //     echo $c;
//     // }
//     dd($this->post);


//    }
}
