<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Akun;

class PageController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function login(){
        return view('login');
    }

    public function auth(Request $req){
        $data = $req->input();
        $username = $data['email'];
        $password = $data['password'];
        $acc = ['email' => $username, 'password' => $password];
        $akun = Akun::where($acc)->get();
        $req->session()->put('username', $akun[0]['email']);
        return redirect('/');
    }

    public function registration(){
        return view('registration');
    }

    public function registration_process(Request $req){
        $data = $req->input();
        Akun::create([
            'email'=> $data['email'],
            'password' => $data['psw'],
            'role' => 0,]
        );
        return redirect('/');
    }

    public function logout(){
        if(session()->has('username')){
            session()->pull('username');
        }
        return redirect('/produk');
    }
}
