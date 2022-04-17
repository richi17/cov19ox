<?php

namespace App\Http\Controllers;

use App\Http\Requests\NotificationsRequest;
use App\Models\Notification;
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

     public function addNotification(NotificationsRequest $request){
         if (session('user') == null){
             return view('auth');
         }
         if (!session('user')->is_admin){
             return redirect('/');
         }
         Notification::insert([
             'title' => $request->title,
             'message' => $request->message,
         ]);
         return redirect('notifications');
     }
}
