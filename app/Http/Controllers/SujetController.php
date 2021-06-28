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


    public function update($action,Request $request)
    {


        
        if($action === 'update_sujet')
        {
            dd("jE SUIS LA SUJET");
            $request->validate([
                'title' => 'required|string|max:255',
                
            ]);
                      
     
             Sujet::find($request->id)->update([

                "title" => $request->title,
                "ue" => $request->ue,
                "nivau" => $request->nivau,
                "type"=> $request->type

            ]);
            
            return redirect(RouteServiceProvider::UDP_S,302);

        }elseif( $action === 'update_question')
             
        {
           
              
        $request->validate([
            'title' => 'required|string|max:255',
            
        ]);
        
 
         Question::find($request->id)->update([

            "tilte" => $request->title,
            "point" => $request->point,
            "good_answers" => $request->good_answers,
            "type"=> $request->type

        ]);

        dd("Question modifier");
        
        return redirect(RouteServiceProvider::UDP_S,302);

    }elseif( $action === 'update_propos')
             
    {
       
          
    $request->validate([
        'propos' => 'required|string|max:255',
        
    ]);
    

     Proposition::find($request->id)->update([

        "propos" => $request->propos,
        "point" => $request->point,
        

    ]);

   
    
    return redirect(RouteServiceProvider::UDP_S,302);

}

    
}
        public function delete($action,$id,Request $request)
        {
        
            if($action === "sujet")
            {
               
                Sujet::find($id)->delete();
                 return redirect(RouteServiceProvider::UDP_S,302);

            }

            if($action === "question")
            {
                dd("question");

                Sujet::find($id)->delete();
                return redirect(RouteServiceProvider::UDP_S,302);

            }

            if($action === "propo")
            {
                dd("propo");

                Sujet::find($id)->delete();
              return redirect(RouteServiceProvider::UDP_S,302);

            }

        }


}
