<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function auth(){
        if (!session('user') == null){
            return redirect('/menu');
        }
        return view('homepage');
    }

    public function showMenu(){
        auth();
        return view('menu');
    }

    public function showVaccination(){
        auth();
        return view('vaccination');
    }

    public function ShowHealthcode(){
        auth();
        return view('healthcode');
    }

    public function showEpidemic(){
        auth();
        return view('epidemic');
    }

    public function showEmergency(){
        auth();
        return view('emergency');
    }

    public function showHelp(){
        auth();
        return view('help');
    }

    public function showNotifications(){
        auth();
        return view('notifications');
    }
}
