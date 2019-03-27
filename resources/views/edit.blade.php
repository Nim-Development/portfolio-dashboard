@extends('layouts.admin')

@section('admin')

<!-- Handle POST ERROR -->


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-2 col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Edit Project</h4>
                        <p class="card-category">or package</p>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('edit.project', $project->id) }}" method="post">
                            {{ csrf_field() }}
                            <input value="PUT" type="hidden" name="_method">
                            <div class="row">
                            
                            <!-- title -->
                            <div class="col-md-5">
                                <div class="form-group">
                                <label class="bmd-label-floating">Title</label>
                                <input name="title" type="text" class="form-control" value="{{ $project->title }}">
                                </div>
                            </div>

                            <!-- desc -->
                            <div class="col-md-12">
                                <div class="form-group">
                                <label>Description</label>
                                <div class="form-group">
                                    <textarea class="form-control" rows="6" name="desc">{{ $project->desc }}</textarea>
                                </div>
                                </div>
                            </div>


                            <!-- style  -->
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="bmd-label-floating">Card height</label>
                                <input type="text" class="form-control" value="{{ $project->height }}" name="height">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="bmd-label-floating">Flex units</label>
                                <input type="text" class="form-control" value="{{ $project->flex }}" name="flex">
                                </div>
                            </div>

                            <!-- Links -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Links</label>
                                    <input type="text" class="form-control" placeholder="Live project" value="{{ $project->links[0]->link }}" name="live">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Github" value="{{ $project->links[1]->link }}" name="github">
                                </div>
                            </div>
                            
                            <br><br>  <br>
                            <button type="submit" class="btn btn-primary btn-block">Update Profile</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
