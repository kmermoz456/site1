<?php

namespace App\Http\Controllers;

use App\Models\Proposition;
use App\Models\Question;
use App\Models\Sujet;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Colors\RandomColor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        session()->flash('message','Sujet créer avec succès');
        return redirect(RouteServiceProvider::AD_PAGE,302);

    }

    public function add_quest(Request $request)
    {
       
        $requestimg = $request;
        $request = $request->all();
        if($requestimg->file('file'))
        {
           $filpath =  $requestimg->file->storeAs('images',time().'.'.$requestimg->file('file')->extension(),'public');
        
            Question::create(
                [
                    "img_path"=>$filpath,
                    "point"=>$requestimg->point,
                    "good_answers" =>$requestimg->good_answers,
                    "type" => $requestimg->type,
                    "sujet_id" => $requestimg->sujet_id
    
                 
                ]
            );
        }else{
        
            $requestimg->validate([
                'title' => 'required|string|max:255',
            
                
            ]);
        Question::create(
            [
                "tilte"=>$request['title'],
                "point"=>$request['point'],
                "good_answers" =>$request['good_answers'],
                "type" => $request['type'],
                "sujet_id" => $request['sujet_id']

             
            ]
        );
    }
        return redirect(RouteServiceProvider::AD_PAGE,302);
            
    }

    public function add_prop(Request $request)
   
    {

        $request->validate([
            'propos' => 'required|string|',
            
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
            if($request->file)
            {
           $filpath =  $request->file->storeAs('images',time().'.'.$request->file('file')->extension(),'public');
             
                
        $request->validate([
            'id' => 'required|string|max:255',
            
        ]);
          
           Question::find($request->id)->update([
                   
                    "img_path" => $filpath,
        
                ]);
            }else{
              
        $request->validate([
            'title' => 'required|string|max:255',
            
        ]);
        
 
         Question::find($request->id)->update([

            "tilte" => $request->title,
            "point" => $request->point,
            "good_answers" => $request->good_answers,
            "type"=> $request->type

        ]);

    }
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
               

                Sujet::find($id)->delete();
                return redirect(RouteServiceProvider::UDP_S,302);

            }

            if($action === "propo")
            {
              

                Sujet::find($id)->delete();
              return redirect(RouteServiceProvider::UDP_S,302);

            }

        }


}
