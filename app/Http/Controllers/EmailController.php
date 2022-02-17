<?php

use Illuminate\Session\Middleware\StartSession;


namespace App\Http\Controllers;

use App\Mail\Email;
use Illuminate\Http\Request;
use App\Models\send;


use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function index()
    {
        return view('email.email');
    }
    public function send(Request $request)
    {
        // dd($request->input());
       // $messag = send::create($request->input());
       //
       //   $message = send::orderBy('id', 'DESC')->first('id')->get();
            $order = $request->input();
        
        
        Mail::to($request->input('email'))
        ->send(new Email($order)) ; 
        return redirect()->back();
       
    }
    public function message()
    {

      
       
    }
}
