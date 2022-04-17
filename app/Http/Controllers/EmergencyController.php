<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmergencyController extends Controller
{
    public function auth(){
        if (!session('user') == null){
            return redirect('/menu');
        }
        return view('homepage');
    }

    public function showEmergency(){
        auth();
        $contacts = DB::table('emergencies')->get();
        return view('emergency')->with('contacts', $contacts);
    }
}
