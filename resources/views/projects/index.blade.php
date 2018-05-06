
@extends('layouts.app')

@section('content')

    <div class="col-md-8 offset-md-2">
        <div class="card bg-light">
            <div class="card-header bg-primary">
            <b style="font-size: 20px;" ><i class="fas fa-th-list "></i> Projects</b>
              <a class="float-right btn btn-primary" href="/projects/create"><i class="fas fa-plus "></i> Add Project</a>              
            </div>
            <div class="card-body">
                <ul class="list-group">
                @foreach($projects as $project)
                 <li class="list-group-item"> <a href="/projects/{{$project->id}}" ><i class="fas fa-chevron-right  "></i> {{ $project->name }}</a></li>
                
                @endforeach
                </ul>
            </div>
        </div>
    </div>
    
@endsection