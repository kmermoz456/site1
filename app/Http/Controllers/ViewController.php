<?php

namespace App\Http\Controllers;

use App\Models\Answer;


use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sujet;
use App\Models\User;
use DateTime;

class ViewController extends Controller
{
    public function home(Request $requet)
    {
       
        $demo = Sujet::find(1);
        $sujets = Sujet::get()->take(3);
    return view("home",[
        "sujets" => $sujets,
        "demo" => $demo,
        
    ]);
    }
    public function snun()
    {
        require view("contact");
    }

    public function sndeux()
    {
        return view("snlicence2");
    }
    public function contact()
    {
        return view('contact');
    }

    public function non_abonner()
    {
        return view('non-abonner',
    [
        "title" => "Non-abonner",
    ]
    );
    }


}
