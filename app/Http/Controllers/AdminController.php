<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminAuth(){
        if (session('user') == null){
            return view('auth');
        }
        if (!session('user')->is_admin){
            return redirect('/');
        }
    }

    public function usersList(){
        adminAuth();
        $allUsers = DB::table('users')->get();
        return view('admin.usersList')->with('allUsers', $allUsers);
    }

    public function adminUpdateUserForm($id){
        adminAuth();
        $user = DB::table('users')->where('id', $id)->first();
        return view('admin.adminUserForm')->with('user', $user);
    }

    public function adminUpdateUser(UpdateUserRequest $request, $id){
        adminAuth();
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
        adminAuth();
        DB::table('users')->where('id', $id)->delete();
        return redirect('usersList');
    }
}
