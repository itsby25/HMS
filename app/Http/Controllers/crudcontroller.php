<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;

class crudcontroller extends Controller
{
    public function user_add(Request $request) {

        //$data=$request->all();

        $simpan= new Users();
        $simpan->username = $request->nama;
        $simpan->realname = $request->nama." ".$request->title;
        $simpan->email = $request->email;
        $simpan->password = md5($request->paswd);
        $simpan->save();
        echo("tersimpan");
        //return json_encode($data);
        
    }
}
