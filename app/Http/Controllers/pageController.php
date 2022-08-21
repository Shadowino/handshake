<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function main(){
      return "main page";
    }

    public function profile(){
      return "profile page";
    }

    public function login(){
      return "login page";
    }

}
