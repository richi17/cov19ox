<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class HealthController extends Controller
{
     public function showHealth(Request $request)
        {
        $ip = $request->ip();
        $data = Location::get($ip);

        return view ('healthcode',compact('data'));
        }
}
