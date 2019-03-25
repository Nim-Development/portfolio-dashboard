<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{

    // Get
    public function list(){ return view('list')->with('projects', Project::all()); }
    public function single($id){ return view('edit')->with('project', Project::find($id)); }
    public function add(){ return view('add'); }
    // EndGet
    /*
    *
    *
    */
    // Post
    public function new(Request $request){
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'height' => 'required',
            'flex' => 'required',
        ]);
        $project = new Project();
            $project->title = $request->title;
            $project->desc = $request->desc;
            $project->height = $this->pxer($request->height);
            $project->flex = $request->flex;
            $project->live = $request->live ? $request->live : null;
            $project->github = $request->live ? $request->github : null;
        $project->save();
        return view('add')->with('suc', true);
    }
    // EndPost
    /*
    *
    *
    */
    // Put
    public function edit(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'height' => 'required',
            'flex' => 'required',
        ]);
        $project = Project::find($id);
            $project->title = $request->title;
            $project->desc = $request->desc;
            $project->height = $this->pxer($request->height);
            $project->flex = $request->flex;
            $project->live = $request->live ? $request->live : null;
            $project->github = $request->live ? $request->github : null;
        $project->save();
        return view('edit', compact('project'))->with('suc', true);
    }
    // EndPut
    /*
    *
    *
    */
    // Delete

    // EndDelete


    /* Helpers */
    private function pxer($str){
        if(substr($str, -2) != 'px'){
            return $str.'px';
        }
        return $str;
    }
    /***/
}