<?php

namespace App\Http\Controllers;
use App\Models\Users;
use App\Models\Pasien;
use Illuminate\Http\Request;

class crudcontroller extends Controller
{
    public function user_add(Request $request) {

        //$data=$request->all();

        $simpan= new Users();
        $simpan->username = $request->nama;
        $simpan->realname = $request->nama." ".$request->title;
        $simpan->email = $request->email;
        $simpan->kd_unit = $request->unit;
        $simpan->level = $request->level;
        $simpan->kd_fungsi = $request->fungsi;
        $simpan->kd_jabatan = $request->jabatan;
        $simpan->aktif = 1;
        $simpan->password = md5($request->paswd);
        $simpan->save();
        echo("tersimpan");
        //return json_encode($data);
        
    }

    public function patient_add(Request $request) {

        //$data=$request->all();
        $urut= Pasien::all()->count();
        if ($urut < 9)
        {
            $norm="00-00-00-0".$urut+1;

        }
        else
        {
            $norm="00-00-00-".$urut+1;
        }
        

        echo $norm;
        $simpan= new Pasien();
        $simpan->norm = $norm;     
        $simpan->save();
        echo("tersimpan");
        //return json_encode($data);
        
    }
}
