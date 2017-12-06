<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Bobot;
use App\Ranking;
use App\X;
use App\User;
use App\Knowledge_Base;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function getProfile(){
    	return view('admin.admin_profile');
    }

    public function getTambah(){
      return view('admin.admin_tambah_diagnosa');
    }

    public function getHistori(){
      $bobot= Bobot::all();
      $user= User::all();
      return view('admin.admin_histori')->with(['bobot' => $bobot, 'user' => $user]);
    }

    public function getHasil($id_diagnosa){
      $bobot = Bobot::find($id_diagnosa);
      $id_penyakit = $bobot->Hasil;
      $alternatif = Knowledge_Base::all();
      $penyakit = Knowledge_Base::find($id_penyakit);
      $nama_penyakit= $penyakit->name;
      $penanggulangan = $penyakit->Penanggulangan;
      $ranking = DB::table('ranking')->where('id_bobot',$id_diagnosa)->get();

      return view('admin.admin_hasil')->with(['hasil'=> $bobot, 'penyakit'=> $nama_penyakit , 'penanggulangan' => $penanggulangan, 'alternatif'=> $alternatif, 'ranking' => $ranking]);
    }

    public function getKnowledge(){
    	$knowledge= Knowledge_Base::all();
    	return view ('admin.admin_knowledgebase')->with(['knowledge' => $knowledge]);
    }

    public function getTambahKnowledge(){
    
        return view('admin.admin_tambah_knowledge');
    }

    public function postTambahKnowledge(Request $request){
    	$knowledge = new Knowledge_Base();
    	 $this->validate($request, [
            'nama'     => 'required',
            'penanggulangan' => 'min:10|required'
         ]);
        $B0 = $request->get('nafsu_makan');
        $B1 = $request->get('minum');
        $B2 = $request->get('nafas');
        $B3 = $request->get('diare');
        $B4 = $request->get('bengkak_mata');
        $B5 = $request->get('lendir');
        $B6 = $request->get('kejang');
        $B7 = $request->get('suhu_tubuh');

        $knowledge->name= $request->input('nama');
        $knowledge->Penanggulangan = $request->input('penanggulangan');
        $knowledge->C0 = $B0;
        $knowledge->C1 = $B1;
        $knowledge->C2 = $B2;
        $knowledge->C3 = $B3;
        $knowledge->C4 = $B4;
        $knowledge->C5 = $B5;
        $knowledge->C6 = $B6;
        $knowledge->C7 = $B7;

        $knowledge->save();
        return redirect()->route('admin.tambah_knowledge');
    }
}
