<?php

namespace App\Http\Controllers;
use App\Models\Users;
use App\Models\Pasien;

use Illuminate\Http\Request;

class maincontroller extends Controller
{
    public function register() {

        return view('dashboard_registration');
    }

    public function igd() {

        return view('emergency');
    }

    public function rawin() {

        return view('inpatient');
    }

    public function ranap() {

        return view('outpatient');
    }
     
    public function login() {
        return view('login');
     }

    public function dashboard() {
      //  $total=Pasien::all()->count();
      //  return view('dashboard',compact('total'));
      return view('dashboard');  
    }
     
    public function user_new() {
        return view('user');
    }
    
    public function in_igd() {
        return view('input_emergency');
    }
}
