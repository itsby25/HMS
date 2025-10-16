<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class crudcontroller extends Controller
{
    public function user_add(Request $request) {

        $data=$request->all();

        return json_encode($data);
        //echo("tersimpan");
    }
}
