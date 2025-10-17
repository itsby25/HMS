<?php

namespace App\Http\Controllers;
use model;
use Illuminate\Http\Request;

class crudcontroller extends Controller
{
    public function user_add(Request $request) {

        $data=$request->all();
        echo("tersimpan");
        return json_encode($data);
        
    }
}
