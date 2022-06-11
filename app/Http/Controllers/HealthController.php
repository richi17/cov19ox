<?php

namespace App\Http\Controllers;

use App\Models\Sub;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class HealthController extends Controller
{
    public function auth(){
        if (!session('user') == null){
            return redirect('/menu');
        }
        return view('homepage');
    }

     public function showHealth()
     {
         auth();

         $riskyArea = [
             "Shanghai",
             "Beijing",
         ];

         $highRiskyArea = [
             "Shenzen",
             "Xihu",
         ];

         if (in_array(session('user')->city, $riskyArea)){
             $area = 2;
         }
         elseif (in_array(session('user')->city, $highRiskyArea)){
             $area = 3;
         }
         else {
             $area = 1;
         }

        return view ('healthcode')->with('area', $area);
     }
}
