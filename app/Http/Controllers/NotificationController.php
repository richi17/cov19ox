<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotificationController extends Controller
{
     public function auth(){
        if (!session('user') == null){
            return redirect('/menu');
        }
        return view('homepage');
     }

     public function showNotifications(){
        auth();
        $notifications = DB::table('notifications')->get();
        return view('notifications')->with('notifications', $notifications);
     }
}
