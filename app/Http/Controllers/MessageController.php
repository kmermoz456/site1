<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function help($idd,$ide,$direction, Request $request)
    {
        if($direction==="help")
        {
        $show = false;
       
        $request->validate([
            'message' => "required",
        ]);

        Message::create([
            "message" => $request->message,
            "user_id" => $ide,
            "destinateur" => $idd
        ]);
           $show = true;
        return view('non-abonner',[
            "show" => $show,
        ]);
    }else{

       
        $show = false;
       
        $request->validate([
            'message' => "required",
        ]);

        Message::create([
            "message" => $request->message,
            "user_id" => $ide,
            "destinateur" => $idd
        ]);
        return redirect(RouteServiceProvider::HELP,302);
        
           
    }
}
}