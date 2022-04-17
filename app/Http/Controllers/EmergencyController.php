<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmergenciesRequest;
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

    public function addEmergency(EmergenciesRequest $request){
        if (session('user') == null){
            return view('auth');
        }
        if (!session('user')->is_admin){
            return redirect('/');
        }
        Emergency::insert([
            'province' => $request->province,
            'city' => $request->city,
            'number' => $request->number,
        ]);
        return redirect('emergency');
    }
}
