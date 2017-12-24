<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Api;
use Illuminate\Support\Facades\DB;

class GuestController extends Controller
{
    //
    public function nyobaan()
    {
        $data['result'] = \App\Api::all();
        return view('nyobaan')->with($data);
    }
    public function awal()
    {
        return view('awal');
    }
    public function detil($id)
    {
        $resultset = \App\Api::where('id', $id)->first();
        $data['result'] = $resultset;
        $data['id'] = $id;

        //string slasher start
        $stringnya = str_split($resultset->sql_stat);
        $jadi[count($stringnya)] = "";
        $j = 0;
        $patokan = 7;
        for($i = 0; $i<count($stringnya) ;$i++){
            
            if($i == $patokan){
                if($stringnya[$i] == "F"){
                    break;
                }
                else{
                    $jadi[$j] = $stringnya[$i];
                    $j++;
                    $patokan++;
                }
            
            }
        }
        $patokan2 = "";
        for ($i = 0; $i<count($jadi)-1;$i++){
            if($jadi[$i]=="S"){
                for($j = $i;$j<count($jadi);$j++){
                    if($jadi[$j]=="S" && $j != $i){
                        $jadi[$j] = "";
                        break;
                    }
                    else{
                        $jadi[$j] = "";
                    }
                    
                }
            }
        }
        $kedua = implode('',$jadi);
        $kedua = str_replace(' ', '', $kedua);
        $keduaarr = explode(',',$kedua);
        
        $sqlstatement = "SELECT * FROM tbl_description WHERE ";
        //query builder
        for ($i = 0; $i<count($keduaarr);$i++){
            if($i == 0){
                $sqlstatement = $sqlstatement . "keyss = " . "'". $keduaarr[$i]."'";
            }
            else{
                $sqlstatement = $sqlstatement . " OR keyss = "."'" .$keduaarr[$i] . "'";
            }
        }
        $sqlstatement = $sqlstatement . ";";
        $desc = DB::select($sqlstatement);
        $data['sql'] = $desc;
    
        return view('detil')->with($data);
    }

}
