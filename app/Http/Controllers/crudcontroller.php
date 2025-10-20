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
        

        //echo $norm;
        $simpan= new Pasien();
        $simpan->norm = $norm;
        $simpan->nama = $request->nama; 
        $simpan->no_id = $request->ktp;
        $simpan->kd_id =1;
        $simpan->marga=$request->marga;
        $simpan->kd_sex=$request->kd_sex;
        $simpan->tempat_lahir=$request->tempat_lahir;
        $simpan->tgl_lahir=$request->ttl;
        $simpan->alamat_asal=$request->alamat;
        $simpan->alamat_domisili=$request->alamat;
        $simpan->kd_gol_darah=$request->gd;
        $simpan->alergi=$request->alergi;
        $simpan->kd_pekerjaan=$request->kd_pekerjaan;
        $simpan->kd_sts_kawin=$request->kd_jk;
        $simpan->kd_pendidikan=$request->kd_pendidikan;
        $simpan->kd_agama=$request->kd_agama;
        $simpan->kd_warga_negara=$request->kd_warga_negara;
        $simpan->no_passport=$request->no_passport;
        $simpan->email=$request->email;
        $simpan->aktif=1;
        $simpan->kd_blokir=0;
        $simpan->kd_keluarga=$request->kd_keluarga;
        $simpan->noka_BPJS=$request->noka;
        $simpan->noPolis_Asuransi=$request->no_polis;
        $simpan->no_induk_pegawai=$request->nip;
        $simpan->kd_instansi=$request->kd_instansi;
        $simpan->t_badan=$request->tbdn;
        $simpan->b_badan=$request->bbdn;
        $simpan->kd_diagnosa_awal=$request->kd_diagnosa;     
        $simpan->save();
        echo("tersimpan");
        //return json_encode($data);
        
    }
}
