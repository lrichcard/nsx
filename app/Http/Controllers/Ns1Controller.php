<?php

namespace App\Http\Controllers;

use App\Models\Ns1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class Ns1Controller extends Controller
{
    public function index()
    {
        $videos = Ns1::all();

    return view('ns1.index', compact('videos'));
    }

    public function create()
    {
        return view('ns1.create');
    }


       
    public function store(Request $request)
    {
       $ns1Video = new Ns1;
       $ns1Video->titre = $request->input('titre');
 
       $ns1Video->objectif = $request->input('objectif');
       $ns1Video->commentaire = $request->input('commentaire');

       if($request->hasfile('video_name'))
       {
           $file = $request->file('video_name');;
           $extension = $file->getClientOriginalExtension();
           $filename = time().'.'.$extension;
           $file->move('uploads/ns1/', $filename);
           $ns1Video->video = $filename;
          
       }
       $ns1Video->save();
       return redirect()->back()->with('status','La video a ete ajouté avec success');
   
    
}

public function edit($id){
    $video = Ns1::find($id);
    return view('ns1.edit', compact('video'));
}

public function update(Request $request, $id)
{
    $ns1Video = Ns1::find($id);
  
    $ns1Video->titre = $request->input('titre');

    $ns1Video->objectif = $request->input('objectif');
    $ns1Video->commentaire = $request->input('commentaire');

    if($request->hasfile('video_name'))
    {   
        $destination = 'uploads/ns1/'.$ns1Video->video;

        if(File::exists($destination))
      
        {
            File::delete($destination);

        }

        $file = $request->file('video_name');;
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move('uploads/ns1/', $filename);
        $ns1Video->video = $filename;
       
    }
    $ns1Video->update();
    return redirect()->back()->with('status','La video a ete modifié avec success');

}

public function destroy($id)
{
$video = Ns1::find($id);
$destination = 'uploads/ns1/'.$video->video;
if(File::exists($destination))
{
    File::delete($destination);

}


$video->delete();
return redirect()->back()->with('status','La video a ete supprim
é avec success');

}

}