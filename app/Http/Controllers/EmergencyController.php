<?php

namespace App\Http\Controllers;

use App\Models\Emergency;
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

    public function searchEmergencyContact(){
        $result = input('searchBar');
        $contacts = Emergency::where('province', 'LIKE', "%{$result}%")->orWhere('city', 'LIKE', "%{$result}%")->get();
        return view('emergency')->with('contacts', $contacts);
    }
}
