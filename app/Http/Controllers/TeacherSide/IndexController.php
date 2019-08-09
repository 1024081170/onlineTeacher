<?php

namespace App\Http\Controllers\TeacherSide;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
        return view('index.index');
    }
}
