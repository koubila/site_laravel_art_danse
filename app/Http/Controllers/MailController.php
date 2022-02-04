<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MyMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
 public function mail(Request $request)
 {
     Mail::to('test@gmail.com')->send(new MyMail($request));

    return view('emails.sendmail');
 }
}
