<?php

namespace App\Http\Controllers;

use App\Models\Answer;


use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sujet;
use DateTime;

class ViewController extends Controller
{
    public function home(Request $requet)
    {
   
    $sujets = Sujet::get()->take(3);
    return view("home",[
        "sujets" => $sujets,
        
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

}
