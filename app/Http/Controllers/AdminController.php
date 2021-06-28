<?php

namespace App\Http\Controllers;

use App\Models\Proposition;
use App\Models\Question;
use App\Models\Sujet;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    public function admin()
    {
        if(Gate::allows('admin'))
        {
            return view('admin.dashbord',[]);
        }
        else{
            return view('dashbord',[]);

        }
     
    }

    public function action($action)
    {
        $users = User::all();
        $sujets = Sujet::all();
        $questions = Question::where('type','QCM')->get();
        return view('admin.dashbord',[
            'action' => $action,
            'users' => $users,
            "sujets" => $sujets,
            "questions" => $questions,
            "propos" => Proposition::all()
            
        ]);

    }
            public function client($action,$id)
            {
                if($action === "activer")
                {
                        User::find($id)->update([
                        "status" => 1
                    ]);
                 return redirect(RouteServiceProvider::CLI,302);
                    
                }else
                {
                    
                    User::find($id)->update([
                        "status" => 0
                    ]);
                 return redirect(RouteServiceProvider::CLI,302);

                }
            }


}
