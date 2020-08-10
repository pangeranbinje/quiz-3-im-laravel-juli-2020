<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebProyek extends Controller
{
    public function home(){
        return view('welcome');
    }
}
