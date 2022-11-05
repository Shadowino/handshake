<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Models\user;

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

  public function showUser($userName){
    if (user::where('name',$userName)->exists()){
      $name = user::where('name',$userName)->value("name");
      return view("profile", ["user" => $name]);
    } else {
      return view("errorpage");
    }
  }

  public function showpageview($vv){
    if (View::exists("$vv")){
      return view("$vv");
    }else {
      return view("errorpage");
    }
  }
}
