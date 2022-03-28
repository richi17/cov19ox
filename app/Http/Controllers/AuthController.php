<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function auth(){
        if (!session('user') == null){
            return redirect('/menu');
        }
        return view('homepage');
    }

    public function login(){
        $result = DB::selectOne('select * from users where phone_number = :phone_number', ['phone_number' => $_POST['phone_number']]);
        if ($result == null){
            return redirect('/login')->with('error', "You're account doesn't exist")->withInput();
        }
        if (!Hash::check($_POST['password'], $result->password)){
            $result = false;
        }
        if ($result){
            session(['user' => $result]);
            return redirect('/menu');
        }
        else{
            return redirect('/login')->with('error', "The password is not correct")->withInput();
        }
    }

    public function register(){
        $_POST['password'] = Hash::make($_POST['password']);
        $result = DB::insert('insert into users (first_name, last_name, id_number, phone_number, password) values (?, ?, ?, ?, ?)', [$_POST['first_name'], $_POST['last_name'], $_POST['id_number'], $_POST['phone_number'], $_POST['password']]);
        if ($result){
            $connect = DB::selectOne('select * from users where phone_number = :phone_number', ['phone_number' => $_POST['phone_number']]);
            session(['user' => $connect]);
            return redirect('/menu');
        }
        else{
            return redirect('/register')->with('error', "Something is not working !")->withInput();
        }
        return redirect('/menu')->with('success', "You are registered !");
    }

    public function logout(){
        if (!session('user') == null){
            session(['user' => null]);
            return redirect('/homepage');
        }
        else{
            return redirect('/menu');
        }
    }
}
