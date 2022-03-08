<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function contact(){
        return view("contact");
    }

    public function service(){
        return view("service");
    }

    public function index(){
        return view("index");
    }

    public function about(){
        return view("about");
    }

    public function podcast(){
        return view("podcast");
    }

    public function announcement(){
        return view("announcement");
    }
}
