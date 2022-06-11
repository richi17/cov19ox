<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

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

         //$riskArea = [DB::table('high_risk_area')->get('city')];

         $riskArea = [
             "Shanghai",
             "Beijing",
         ];

         if (in_array(session('user')->city, $riskArea)){
             $area = 'Danger';
         }
         else {
             $area = 'Safe';
         }

        return view ('healthcode')->with('area', $area);
     }
}
