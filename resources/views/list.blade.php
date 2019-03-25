@extends('layouts.admin')

@section('admin')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card card-plain">
                <div class="card-header card-header-primary">
                    <h4 class="card-title mt-0"> Portfolio projects</h4>
                    <p class="card-category"> & packages</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="">
                        <th>
                            ID
                        </th>
                        <th>
                            Title
                        </th>
                        <th>
                            Desc
                        </th>
                        </thead>
                        <tbody>
                        @foreach($projects as $project)
                        <tr>
                            <td>
                            <a href="{{ route('single.project', $project->id) }}">{{ $project->id }}</a>
                            </td>
                            <td>
                            <a href="{{ route('single.project', $project->id) }}">{{ $project->title }}</a>
                            </td>
                            <td>
                            {{ $project->desc }}
                            </td>
                        </tr>
                        @endforeach
                        
                        <tr>
                            <td>
                            <a href="google.com">6</a>
                            </td>
                            <td>
                            <a href="google.com">Mason Porter</a>
                            </td>
                            <td>
                            Chile
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
