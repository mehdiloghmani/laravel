<?php


namespace App\Http\Controllers;
use App\Models\clip;
use Illuminate\Http\Request;
use App\Http\Requests\storecliprequest;
use App\Http\Requests\updatecliprequest;

class clipcontroller extends Controller
 {


   public function index()
   {
     $clips=clip::all();
  }
 

public function create()
{
 return view('clips.create');
}


public function store(storecliprequest $request)
{
clip::create($request->all());
return redirect()->route('index')->with('alert' ,__('messages.success'));
}

public function show(request $request, clip $clip)
{
return view('clips.show',compact('clip'));
}

public function edit(clip $clip)
{
  return view('clips.edit' , compact('clip'));
}


public function update(updatecliprequest $request, clip $clip)
{
$clip->update($request->all());
return redirect()->route('clips.show' , $clip->slug)->with('alert', __('messages.video_edited'));
}

}