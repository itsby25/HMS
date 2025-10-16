<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class crudcontroller extends Controller
{
    public function user_add() {

        $request->post('title');
        $request->post('nama');
        $request->post('unit');
        $request->post('jabatan');
        $request->post('level');
        $request->post('paswd');
        $request->post('repasswd');

        echo("tersimpan");
    }
}
