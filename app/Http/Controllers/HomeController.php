<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class HomeController extends Controller
{

    public function index()
    {
        return view('home.index');
    }
 
    public function admin()
   {
       return view('admin.dashboard');
   }

   
   public function redirect()
   {
    $usertype=Auth::user()->usertype;
    if($usertype=='1')
    {
        return view('admin.dashboard');
    }
    else
    {
        return view('dashboard');
    }
   }
  
}

