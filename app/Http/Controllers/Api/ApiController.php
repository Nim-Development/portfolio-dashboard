<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Resources\ProjectResource;
use App\Project;

class ApiController extends Controller
{
    
    // All projects
    public function projects(){
        $projects = Project::paginate(15);
        return ProjectResource::collection($projects);
    }

    // Single project
    public function project($id){
        $project = Project::find($id);
        return new ProjectResource($project);
    }

    // About info
    public function about(){
        
    }

}
