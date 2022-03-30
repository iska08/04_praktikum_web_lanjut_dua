<?php

namespace App\Http\Controllers;

use DB;
use App\Employee;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(){
        $post = DB::table('posts')->get();
        return view('post', compact('post'));
    }
}
