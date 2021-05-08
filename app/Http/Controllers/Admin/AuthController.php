<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\AuthModel;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('admin.Auth.login');
    }
    public function checkLogin(Request $req){
        $req->validate(
            [
                'email'=>'required',
                'password'=>'required',
            ]
        );
        $user = AuthModel::where('admin_email',"=",$req->email)->first();
        if($user){
            if(Hash::check($req->password, $user->admin_password)){
                session(["admin_id"=>$user->admin_id]);
                return redirect("/admin/dashboard");
            }
        }
        return redirect()->back()->with('error','Invalid credentials');
    }
}
