<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Sujet;
use App\Models\User;
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
            "questions" => $questions
            
        ]);

    }
}
