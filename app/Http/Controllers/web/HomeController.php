<?php

namespace App\Http\Controllers\web;

use App\Models\Cat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){



        return view('web.home.index');
    }
}
