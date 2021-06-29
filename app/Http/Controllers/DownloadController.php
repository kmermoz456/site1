<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function storage($action,Request $request)
    {
        $filename =null;
      

        if($action === 'slider')
        {
          $filename =  time().'.'.$request->slider->extension();
        $request->file('slider')->storeAs('sliders',$filename,'public');
        }elseif($action === 'image')
        {
           $filename = time().'.'.$request->image->extension();
            $request->file('image')->storeAs('images',$filename,'public');
       }




        return redirect(RouteServiceProvider::DOW,302);


    }
}
