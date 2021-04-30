<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Carbon;
use App\Models\ContactModel;
use App\Mail\MessageMail;
use Mail;

class ContactController extends Controller
{
    public function addContact(Request $req){
        $req->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'subject'=>'required',
            'message'=>'required',
        ]);
        $input = array(
            'contact_name'=>$req->name,
            'contact_email'=>$req->email,
            'contact_phone'=>$req->phone,
            'contact_subject'=>$req->subject,
            'contact_message'=>$req->message,
            'created_at'=>\Carbon\Carbon::now(),
            'updated_at'=>\Carbon\Carbon::now(),
        );
        $msg = [
            'title' => $req->subject,
            'body' => $req->message,
        ];
        if(ContactModel::insert($input)){
            Mail::to($req->email)->send(new MessageMail($msg));
            return redirect()->back()->with('success','Message sent successfully');
        }
        else{
            return redirect()->back()->with('fail','Message sending fail');
        }
    }
}
