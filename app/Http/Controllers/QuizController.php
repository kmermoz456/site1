<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Proposition;
use App\Models\Sujet;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Gate;

class QuizController extends Controller
{
    
    public function sujet($nivau)

    {
        
                
        
        $sujets = Sujet::where('nivau',$nivau)->Paginate(3);
    return view("sujets",[
            "sujets" => $sujets,
            
        ]);
    }

    public function compo($title,$ue,$id,Request $request){
           
        
        if(Gate::denies('non-abonner'))
        {
            return redirect(RouteServiceProvider::ABON,302);

        }

        define("TYPE", "QCD");

    $questions = Question::where('sujet_id',$id)->get();
    
  
    $grilles = $request->except('_token');

   
   
    $total = 0;
    $show = false;

    if($grilles)
    {
       foreach($grilles as $nq => $grille)
       {
        
        $bareme = Question::find($nq);
       
        if($bareme->type == TYPE)
        {
            if($bareme->point == $grille)
            {
                $total += 1;
                 $show = 1;

                }else{
                $total -= 1;
                $show = 1;
                
            }

           
        }else{
         $agregat = [];
        foreach($grille as $pid )
        {
           $agregat[] = Proposition::find($pid)->point;
           
        }

         if(count($agregat) == $bareme->good_answers && !in_array(0,$agregat))
         {
            $total += $bareme->point;
            $show = true;

         }
         else{
            $total -= $bareme->point;
             $show = true;

         }

        }
       }
    }

    return view('compo',[
        'questions'=>$questions,
        'title' => $title,
        'ue' => $ue,
        'id' => $id,
        'total' => $total,
        'show' => $show
    ]);

    }
   
   /* public function check(Request $request)
    {
      $grilles = $request->except('_token');
      $total = 0;
      $show = false;

      if($grilles)
      {
         foreach($grilles as $nq => $grille)
         {
             $bareme = Question::find($nq);
             $sujet = Sujet::find($bareme->sujet_id);
             

            
              if(count($grille) == $bareme->good_answers && !in_array(0,$grille) )
              {
                $total += $bareme->point;
                $show = true;

              }
              else{
                  $total -= $bareme->point;
                 $show = true;

              }
         }
      }

     return view('compo',[
         'resultat'=>$total,
         'show'=> $show,
         'questions' => $bareme,
         'ue' => $sujet->ue,
         'title' => $sujet->title
     ]);
      
    } 
    */


    public function demo($title,$ue,$id,Request $request){
           
        
              

    $questions = Question::where('sujet_id',$id)->get();
    
  
    $grilles = $request->except('_token');

   
   
    $total = 0;
    $show = false;

    if($grilles)
    {
       foreach($grilles as $nq => $grille)
       {
        
        $bareme = Question::find($nq);
       
        if($bareme->type == 'QCD')
        {
            if($bareme->point == $grille)
            {
                $total += 1;
                 $show = 1;

                }else{
                $total -= 1;
                $show = 1;
                
            }

           
        }else{
         $agregat = [];
        foreach($grille as $pid )
        {
           $agregat[] = Proposition::find($pid)->point;
           
        }

         if(count($agregat) == $bareme->good_answers && !in_array(0,$agregat))
         {
            $total += $bareme->point;
            $show = true;

         }
         else{
            $total -= $bareme->point;
             $show = true;

         }

        }
       }
    }

    return view('demo',[
        'questions'=>$questions,
        'title' => $title,
        'ue' => $ue,
        'id' => $id,
        'total' => $total,
        'show' => $show
    ]);

    }
   
}
