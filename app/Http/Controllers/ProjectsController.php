<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Link;

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
            $project->show = false;
            $project->height = $this->pxer($request->height);
            $project->flex = $request->flex;

        $project->save();

        //Store links
        $this->store_links($project->id ,$request->live, $request->github);

        return view('add')->with('suc', true);
    }

    private function store_links($pid ,$live, $github){
        /*::nk Make all values dynamic later */
        
        //Live
        if($live){
            $link = new Link();
                $link->project_id = $pid;
                $link->link = $live;
                $link->tooltip = "View live project";
                $link->color = "red mb-1";
                $link->icon = "web";
            $link->save();
        }

        //Github
        if($github){
            $link = new Link();
                $link->project_id = $pid;
                $link->link = $github;
                $link->tooltip = "View code";
                $link->color = "indigo mb-1";
                $link->icon = "code";
            $link->save();
        }
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
            $project->show = false;
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