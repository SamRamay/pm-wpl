@extends('layouts.app')

@section('content')

<div class="col-md-9 col-sm-9 col-lg-9 float-left">
<div class="jumbotron">
        <h1>{{ $company->name }}</h1>
        <p class="lead">{{ $company->description }}</p>
      <a href="/projects/create/{{ $company->id }}" class="btn btn-outline-primary float-right"><i class="fas fa-plus "></i> Add Project</a>      
        
       <!-- <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p> -->
      </div>

      <!-- Example row of columns -->
      <div class="row col-md-12 col-sm-12 col-lg-12"  style="background-color: white; margin-top: 15px; margin-left: 2px;">
      @foreach($company->projects as $project)
        <div class="col-lg-4 col-md-4 col-md-4">
          <h2>{{ $project->name }}</h2>
          <p> {{ $project->description }} </p>
          <a class="btn btn-primary" href="/projects/{{ $project->id }}" role="button"><i class="fas fa-eye "></i> View Project </a></p>
        </div>
      @endforeach
      </div>
</div>
<div class="col-sm-3 col-md-3 float-right" >
          
          <div class="sidebar-module" style="padding: 10px;">
            <h4>Actions</h4>
            <ol class="list-unstyled">
              <li><a href="/companies/create"><i class="fas fa-plus-circle "></i> Add Company</a></li>
              <li><a href="/projects/create/{{ $company->id }}"><i class="fas fa-plus-circle "></i> Add Project</a></li>

            @if(Auth::user()->role_id == 1)
            <hr>
              <li><a href="/companies/{{ $company->id }}/edit" class="text-warning"><i class="fas fa-edit "></i> Edit</a></li>
              <li><a 
                  href="#"
                  class="text-danger"
                  onclick="
                  var result = confirm('Are you Sure you want to delete this project?');
                    if( result )
                    {
                      event.preventDefault();
                      document.getElementById('delete-form').submit();
                    }
                    "><i class="fas fa-trash"></i> Delete</a>
              
              <form action="{{ route('companies.destroy', [$company->id]) }}" method="post"
              id="delete-form" style="display: none;"
              >
                    <input type="hidden" name="_method" value="delete">
                      {{ csrf_field() }}              
              </form>
              </li>
            @endif
              <hr>
              <li><a href="/companies"><i class="fas fa-arrow-left "></i> Back to Companies</a></li>


              <!-- <li><a href="#">Add new member</a></li> -->
            </ol>
          </div>
          <!-- <div class="sidebar-module">
            <h4>Members</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2014</a></li>
            </ol>
          </div> -->
        </div>

@endsection
      