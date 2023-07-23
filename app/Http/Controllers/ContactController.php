<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use TheSeer\Tokenizer\Exception;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function contact(){
        return view('contact_us');
    }

    public function contactSubmit(Request $request){
        $name = $request->name;
        $email = $request->email;
        $user_message = $request->user_message;

        // Mail::to($email)->send(new ContactMail($name,$email,$user_message));
        // return redirect(route('home'));

        try{
            Mail::to($email)->send(new ContactMail($name, $email, $user_message));
        } catch(Exception $error){
            return redirect()->back()->with('emailError', 'Request failed.');
        }
        return redirect(route('home'))->with('emailSent', "We'll contact you soon!");






    }


}
