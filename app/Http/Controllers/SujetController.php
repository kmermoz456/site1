<?php

namespace App\Http\Controllers;

use App\Models\Proposition;
use App\Models\Question;
use App\Models\Sujet;
use App\Models\User;
use Illuminate\Http\Request;

class SujetController extends Controller
{
    public function add_sujet(Request $request)
    {
        $request = $request->all();
        

        $sujets = Sujet::create(
            [
                "title"=>$request['title'],
                "ue"=>$request['ue'],
                "nivau" =>$request['nivau'],
                "type" =>$request['type']
            ]
        );
        $status = true;
        return view('admin.dashboard',[
            "status" => $status
        ]);        

    }

    public function add_quest(Request $request)
    {
        $request = $request->all();
        
 
        $questions = Question::create(
            [
                "title"=>$request['title'],
                "point"=>$request['point'],
                "good_answers" =>$request['good_answers'],
                "type" => $request['type'],
                "sujet_id" => $request['sujet_id']

             
            ]
        );
        
       return view("admin.dashbord",["succes"=>"Question créer avec succcès"]);              
    }

    public function add_prop(Request $request)
   
    {/*
        $request = $request->except('_token');
        
   
        $questions = Proposition::create(
            [
                "propos"=>$request['propos'],
                "point"=>$request['point'],
                "question_id" => $request['question_id']

             
            ]
        );*/
        $message = "Operation réussite !";
       return view('admin.dashbord',[
           "message" => $message,
       ]);                    

    }
}
