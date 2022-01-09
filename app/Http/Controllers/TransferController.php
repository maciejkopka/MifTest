<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use \App\Http\Controllers\Controller;

class TransferController extends Controller
{
    public function transfer()
    {
        return view('transfer');
    }
       
    public function insert(Request $request)
        {
            $ImieNazwisko = $request->input('ImieNazwisko');
            $Email = $request->input('email');
            $Username = $request->input('username');
            $kwota = $request->input('kwota');
            $data=array('ImieNazwisko'=>$ImieNazwisko,"email"=>$Email,"username"=>$Username,"kwota"=>$kwota);
            DB::table('Transfer')->insert($data);
            echo "Przelew wysłany pomyślnie.<br/>";
            echo '<a href = "/insert">Naciśnij tutaj</a> aby wrócic.';
        }
}
    


