<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Bobot;
use App\Ranking;
use App\X;
use App\Knowledge_Base;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class usercontroller extends Controller
{
    //


     public function postSignin(Request $request){

      $this->validate($request, [
            'email'     => 'email|required',
            'password'  => 'required|min:4'
         ]);

          if( (Auth::attempt(['email'=> $request->input('email'),'password'=>$request->input('password')])) && (Auth::user()->type=='user')   )
         {
             if (Session::has('oldUrl')){
                 $oldUrl = Session::get('oldUrl');
                 Session::forget('oldUrl');
                 return redirect()->to($oldUrl);
             }
         return redirect()->route('user.profile'); //bila login sukses ke halaman profile
         }

      else if((Auth::attempt(['email'=> $request->input('email'),'password'=>$request->input('password')])) && (Auth::user()->type=='admin') ){
             if (Session::has('oldUrl')){
                 $oldUrl = Session::get('oldUrl');
                 Session::forget('oldUrl');
                 return redirect()->to($oldUrl);
             }
         return redirect()->route('admin.profile');
      }

         else{
             return redirect()->back(); //kalo gagal refresh ulang 
         }
   }


   public function getHome(){  
     return view('welcome');
   }

   public function getUserProfile(){
    return view ('user.user_profile');
   }

   public function getLogout(){
        Auth::logout();
        return redirect()->route('home');
    }

    public function getTambah(){
      return view('user.tambah_diagnosa');
    }

    public function postTambah(Request $request){

        $B0 = $request->get('nafsu_makan');
        $B1 = $request->get('minum');
        $B2 = $request->get('nafas');
        $B3 = $request->get('diare');
        $B4 = $request->get('bengkak_mata');
        $B5 = $request->get('lendir');
        $B6 = $request->get('kejang');
        $B7 = $request->get('suhu_tubuh');

        //Metode SAW dimulai 
        $max = 5;

        $arr_bobot = array($B0,$B1,$B2,$B3,$B4,$B5,$B6,$B7);

        $jumlah= Knowledge_Base::count();
        $knowledge = Knowledge_Base::all();

        $increments=1;
        foreach ($knowledge as $k) {
          $k->dual_id=$increments;
          $k->save();
          $increments++;
        }

        $C = [[]];
        $total = [];
        $i=0;
        foreach ($knowledge as $k ) {
            $C[$i][0]= $k->C0/$max;
            $C[$i][1]= $k->C1/$max;
            $C[$i][2]= $k->C2/$max;
            $C[$i][3]= $k->C3/$max;
            $C[$i][4]= $k->C4/$max;
            $C[$i][5]= $k->C5/$max;
            $C[$i][6]= $k->C6/$max;
            $C[$i][7]= $k->C7/$max;
          $i++;
          }

        
        for($x=0 ; $x<$jumlah; $x++){
          $count=0;
            for ($y=0; $y < 8; $y++) { 
              $C[$x][$y]= ($C[$x][$y]*$arr_bobot[$y]);
              $count=($count+$C[$x][$y]);
            }
        $total[$x]=$count;
        }

        $id_penyakit=0;
        $best=0;
        $count_penyakit=0;
        for ($a=0; $a <$jumlah ; $a++) { 
          $possible_best = $total[$a];
          if ($possible_best > $best) {
             $best= $possible_best;
             $id_penyakit=  $count_penyakit+1;
          }
           $count_penyakit++;
        }

      

        $bobot = new Bobot;

        $bobot->B0 = $B0;
        $bobot->B1 = $B1;
        $bobot->B2 = $B2;
        $bobot->B3 = $B3;
        $bobot->B4 = $B4;
        $bobot->B5 = $B5;
        $bobot->B6 = $B6;
        $bobot->B7 = $B7;
        $bobot->id_user = Auth::user()->id;
        $bobot->Hasil= $id_penyakit;
        $bobot->save();

        for($r=0 ; $r<$jumlah; $r++){
          $ranking= new Ranking();
          $ranking->id_bobot = $bobot->id;
          $ranking->id_knowledge= $r+1;
          $ranking->hasil = $total[$r];
          $ranking->save();       
         }



//-----------------------------------------------------
         /*
         $sum_X= X::count();

        if ($sum_X != $jumlah) {

            $temp=$jumlah-$sum_X;
            for($i=1; $i<=$temp; $i++){
              $x =  new X();
              $x->save();
            }
        }
        
        $sumx=1;

        $Xbig= X::all();
        foreach ($Xbig as $xcount) {
            $xcount->dual_id = $sumx;
            $sumx++;
            $xcount->save();
        }
        
        
        $id=1;
        foreach ($knowledge as $k ) {
          $x = X::where('dual_id', $id)->first();
          $x->C0= $k->C0/$max;
          $x->C1= $k->C1/$max;
          $x->C2= $k->C2/$max;
          $x->C3= $k->C3/$max;
          $x->C4= $k->C4/$max;
          $x->C5= $k->C5/$max;
          $x->C6= $k->C6/$max;
          $x->C7= $k->C7/$max;
          $x->save();
          $id++;
        }

         for($i=1 ; $i<=$jumlah; $i++){
           $x = X::where('dual_id', $i)->first();
           $x->C0 = ($x->C0*$arr_bobot[0]);
           $x->C1 = ($x->C1*$arr_bobot[1]);
           $x->C2 = ($x->C2*$arr_bobot[2]);
           $x->C3 = ($x->C3*$arr_bobot[3]);
           $x->C4 = ($x->C4*$arr_bobot[4]);
           $x->C5 = ($x->C5*$arr_bobot[5]);
           $x->C6 = ($x->C6*$arr_bobot[6]);
           $x->C7 = ($x->C7*$arr_bobot[7]);
           $total = ($x->C0+$x->C1+$x->C2+$x->C3+$x->C4+$x->C5+$x->C6+$x->C7);
           $x->total= $total;
           $x->save();
        }


      

        $x_count = X::all();
         $best=0;
         $id_penyakit=0;
        foreach($x_count as $count){
          $possible_best= $count->total;
          if ($possible_best>$best) {
             $best= $possible_best;
             $id_penyakit= $count->dual_id;
          }
        }

        $bobot = new Bobot;

        $bobot->B0 = $B0;
        $bobot->B1 = $B1;
        $bobot->B2 = $B2;
        $bobot->B3 = $B3;
        $bobot->B4 = $B4;
        $bobot->B5 = $B5;
        $bobot->B6 = $B6;
        $bobot->B7 = $B7;
        $bobot->id_user = Auth::user()->id;
        $bobot->Hasil= $id_penyakit;
        $bobot->save();

       
        for($i=1 ; $i<=$jumlah; $i++){
          $x = X::where('dual_id', $i)->first();
          $ranking= new Ranking();
          $ranking->id_bobot = $bobot->id;
          $ranking->id_knowledge= $i;
          $ranking->hasil = $x->total;

          $ranking->save();       
         }
      */
       return redirect()->route('user.profile');
    }

    public function getHistori(){
      $user_id = Auth::user()->id;
      $bobot = DB::table('bobot')->where('id_user',$user_id)->get();
      return view('user.user_histori')->with(['bobot' => $bobot]);
    }
    
    public function getKnowledge(){
      $knowledge = Knowledge_Base::all();
      return view('user.user_knowledgebase')->with(['knowledge'=> $knowledge]);
    }

    public function getHasil($id_diagnosa){
      $bobot = Bobot::find($id_diagnosa);
      $id_penyakit = $bobot->Hasil;
      $alternatif = Knowledge_Base::all();
      //$penyakit = Knowledge_Base::find($id_penyakit);
      $penyakit = Knowledge_Base::where('dual_id',$id_penyakit);
      $nama_penyakit= $penyakit->name;
      $penanggulangan = $penyakit->Penanggulangan;
      $ranking = DB::table('ranking')->where('id_bobot',$id_diagnosa)->get();

      return view('user.hasil')->with(['hasil'=> $bobot, 'penyakit'=> $nama_penyakit , 'penanggulangan' => $penanggulangan, 'alternatif'=> $alternatif, 'ranking' => $ranking]);
    }
}
