<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class maincontroller extends Controller
{
    public function register() {

        return view('registration');
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
        return view('dashboard');
    } 

    public function user_new() {
        return view('user');
    } 
}
