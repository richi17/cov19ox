<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function showMenu(){
        if (session('user') == null){
            return view('homepage');
        }
        return view('menu');
    }

    public function showVaccination(){
        if (session('user') == null){
            return view('homepage');
        }
        return view('vaccination');
    }

    public function ShowHealthcode(){
        if (session('user') == null){
            return view('homepage');
        }
        return view('healthcode');
    }

    public function showEpidemic(){
        if (session('user') == null){
            return view('homepage');
        }
        return view('epidemic');
    }

    public function showEmergency(){
        if (session('user') == null){
            return view('homepage');
        }
        return view('emergency');
    }

    public function showHelp(){
        if (session('user') == null){
            return view('homepage');
        }
        return view('help');
    }
}
