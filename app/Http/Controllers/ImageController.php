<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Project;

class ImageController extends Controller
{
    public function view(){
        $projects = Project::all();
        return view('image', compact('projects'));
    }

    public function upload(Request $request)
    {
        $this->validate($request, [
            'pid' => 'required'
        ]);

        // upload image
        if($request->hasFile('file')){

            foreach($request->file as $key => $file){
                $filename = $file->getClientOriginalName();
                $filesize = $file->getClientSize();
                $filepath = 'public/upload'.$filename;
            
                //store the file
                $file->storeAs('public/upload',$filename);
    
                    //save file to db
                    $image = new Image();
                    $image->name =  $filename;
                    $image->size = $filesize;
                    $image->path = $filepath;
                    $image->project_id = $request->pid;
    
                $image->save();
            }
        }

        return redirect(route('image.view'));
    }
}
