<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\AdminModel;
class AdminController extends Controller
{
    public function dashboard(){
        $aid = session("admin_id");
       
        $profile = AdminModel::where('admin_id','=',$aid)->first();
        // return $profile;
        return view('admin.starter',compact('profile'));
    }
}
