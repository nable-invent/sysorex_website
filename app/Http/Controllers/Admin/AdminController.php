<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Admin\AdminModel;
class AdminController extends Controller
{
    public function profile(){
        $aid = session("admin_id");
        $profile = AdminModel::where('admin_id','=',$aid)->first();
        $data['type'] = 'profile';
        $data['subtype'] = 'myprofile';
        return view('admin.starter',compact('profile','data'));
    }
    public function editProfile(Request $req){
        
        $req->validate([
            'name'=>'required',
            'email'=>'required',
        ]);
        $aid = session("admin_id");
        if($req->hasFile('profile')){
            $path = 'assets/images/profile/';
            unlink($path.$req->oldimg);
            $Image = $req->file('profile');
            $pImage = date("Y_m_d_H_i_s");
            $ext = strtolower($Image->getClientOriginalExtension());
            $imageName = $pImage.".".$ext;
            $Image->move($path,$imageName);
            $input['admin_profile'] = $imageName;
        }
        $input['admin_name'] = $req->name;
        $input['admin_email'] = $req->email;
        if(AdminModel::where('admin_id','=',$aid)->update($input)){
            return redirect()->back()->with('success','profile updated');
        }else{
            return redirect()->back()->with('error','profile updation fail');
        }
    }
    public function changePassword(Request $req){
        $aid = session("admin_id");
        $req->validate([
            'password'=>'required|min:6',
        ]);
        $input['admin_password'] = Hash::make($req->password);
        if(AdminModel::where('admin_id','=',$aid)->update($input)){
            return redirect()->back()->with('success','profile updated');
        }else{
            return redirect()->back()->with('error','profile updation fail');
        }
    }
    public function viewUser(){
        $aid = session("admin_id");
        $profile = AdminModel::where('admin_id','=',$aid)->first();
        $data['type'] = 'profile';
        $data['subtype'] = 'user';
        $user = AdminModel::where('admin_id','!=',$aid)->get();
        return view('admin.User.user',compact('profile','data','user'));
    }
    public function addUser(){
        $aid = session("admin_id");
        $profile = AdminModel::where('admin_id','=',$aid)->first();
        $data['type'] = 'profile';
        $data['subtype'] = 'user';
        return view('admin.User.userAdd',compact('profile','data'));
    }
    public function adduserData(Request $req){
        $req->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'profile'=>'required',

        ]);
        $aid = session("admin_id");
        $path = 'assets/images/profile/';
        // unlink($path.$req->oldimg);
        $Image = $req->file('profile');
        $pImage = date("Y_m_d_H_i_s");
        $ext = strtolower($Image->getClientOriginalExtension());
        $imageName = $pImage.".".$ext;
        $Image->move($path,$imageName);
        $input['admin_profile'] = $imageName;
        $input['admin_name'] = $req->name;
        $input['admin_email'] = $req->email;
        $input['admin_password'] = Hash::make($req->password);
        if(AdminModel::insert($input)){
            return redirect()->back()->with('success','profile created');
        }else{
            return redirect()->back()->with('error','profile creation fail');
        }
    }
}
