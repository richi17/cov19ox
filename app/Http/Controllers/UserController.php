<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers(){
        if (session('user') == null){
            return view('auth');
        }
        if (!session('user')->is_admin){
            return redirect('/');
        }
        $allUsers = DB::table('users')->get();
        return view('users')->with('allUsers', $allUsers);
    }

    public function adminUpdateUserForm($id){
        if (session('user') == null){
            return view('auth');
        }
        if (!session('user')->is_admin){
            return redirect('/');
        }
        $user = DB::table('users')->where('id', $id)->first();
        return view('admin.adminUserForm')->with('user', $user);
    }

    public function adminUpdateUser(UpdateUserRequest $request, $id){
        if (session('user') == null){
                    return view('auth');
                }
                if (!session('user')->is_admin){
                    return redirect('/');
                }
        if($request->password == null){
            User::where('id', $id)->update([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
            ]);
        }
        else{
            User::where('id', $id)->update([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
        }
        return redirect('usersList');
    }

    public function adminDeleteUser($id){
        if (session('user') == null){
                    return view('auth');
                }
                if (!session('user')->is_admin){
                    return redirect('/');
                }
        DB::table('users')->where('id', $id)->delete();
        return redirect('usersList');
    }
}
