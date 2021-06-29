<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
     public function user($action)
     {
          $message = Message::where('destinateur',Auth::user()->id)->paginate(10);
          return view('dashbord',[
               "action" => $action,
               "messages" => $message
          ]);
         
     }
     
}
