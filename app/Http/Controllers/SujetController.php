<?php

namespace App\Http\Controllers;

use App\Models\Proposition;
use App\Models\Question;
use App\Models\Sujet;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class SujetController extends Controller
{
    public function add_sujet(Request $request)
    {
        
        $request->validate([
            'title' => 'required|string|max:255',
            
        ]);
        $request = $request->all();
        
       
        Sujet::create(
            [
                "title"=>$request['title'],
                "ue"=>$request['ue'],
                "nivau" =>$request['nivau'],
                "type" =>$request['type']
            ]
        );
        $status = "Crée avec succès";
        return redirect(RouteServiceProvider::AD_PAGE,302);

    }

    public function add_quest(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            
        ]);
        $request = $request->all();
        
 
        $questions = Question::create(
            [
                "tilte"=>$request['title'],
                "point"=>$request['point'],
                "good_answers" =>$request['good_answers'],
                "type" => $request['type'],
                "sujet_id" => $request['sujet_id']

             
            ]
        );
        
        return redirect(RouteServiceProvider::AD_PAGE,302);
            
    }

    public function add_prop(Request $request)
   
    {

        $request->validate([
            'propos' => 'required|string|max:255',
            
        ]);
        $request = $request->except('_token');
        
   
        $questions = Proposition::create(
            [
                "propos"=>$request['propos'],
                "point"=>$request['point'],
                "question_id" => $request['question_id']

             
            ]
        );
                           
        return redirect(RouteServiceProvider::AD_PAGE,302);

    }
}
