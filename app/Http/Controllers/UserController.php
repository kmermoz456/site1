<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
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

     public function updateuser(Request $request)
     {


          $request->validate([
               "name" => "required",
               "email" => "required",
               "numero" => "required",
               "city" => "required",


          ]);

          User::find(Auth::user()->id)->update([
               "name" => $request->name,
               "email" => $request->email,
               "numero" => $request->numero,
               "city" => $request->city
          ]);

         return redirect()->route('admin');
     }

     public function abonnement()
     {
          return view('abonnement');

     }
     
}
