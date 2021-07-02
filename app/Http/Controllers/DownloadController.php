<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function storage($action,Request $request)
    {
        $filename =null;
      

        if($request->type === 'slider')
        {
          $filename =  time().'.'.$request->slider->extension();
        $name = $request->file('slider')->storeAs('sliders',$filename,'public');

        Image::create([
          "path" => $name,
          "text" => $request->text,
          "title" => $request->title,
          "type" => $request->type
        ]);

        }elseif($$request->type === 'image')
        {
           $filename = time().'.'.$request->image->extension();
            $request->file('image')->storeAs('images',$filename,'public');
       }




        return redirect(RouteServiceProvider::DOW,302);


    }
}
