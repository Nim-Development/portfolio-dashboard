@extends('layouts.admin')

@section('admin')

<!-- Handle POST ERROR -->


<div class="content">
    <h1>Under Construction!</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-2 col-md-8">
                <div class="card">
                    <form action="{{ route('upload.image') }}" method="post" enctype="multipart/form-data" >
                        {{ csrf_field() }}
                        <!-- title -->
                        
                        <input type="file" name="file[]" multiple>
                            
                        <select name="pid" id="">
                            @foreach($projects as $project)
                                <option value="{{ $project->id }}">{{ $project->title }}</option>
                            @endforeach
                        </select>

                        <input type="submit" class="btn btn-info">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
