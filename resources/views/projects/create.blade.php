@extends('layouts.app')

@section('content')

      <!-- Example row of columns -->
      <div class="col-md-9 float-left">
      
        <div class="col-lg-12 col-md-12 col-sm-12" style="background-color: white; margin: 15px;">
        <h1 class="text-center">Create New Project</h1>
        

        <form action="{{ route('projects.store') }}" method="post">
            {{ csrf_field() }}


            <div class="form-group">
                <label for="project-name">Name: <span class="required">*</span> </label>
                <input placeholder = "Enter Name"
                       id="project-name"
                       required
                       name="name"
                       spellcheck="false"
                       class="form-control"    
                
                >  
                @if($companies == null )
              <input class="form-control" name="company_id" type="hidden" value="{{$company_id}}" >         
            </div>
            @endif

            @if($companies != null )
            <div class="form-group">
              <label for="project-content">Select Company:</label>
              <select name="company_id" class="form-control">
              @foreach($companies as $company)
                <option value="{{$company->id}}"> {{$company->name}} </option>
              @endforeach
              </select>
                
            </div>
            @endif
            <div class="form-group">
                <label for="project-content">Description:</label>
                <textarea 
                    placeholder = "Enter Description"
                       id="project-content"
                       style="resize: vertical"
                       name="description"
                       spellcheck="false"
                       rows="5"
                       class="form-control autosize-target text-left">
                </textarea>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-outline-primary" style="margin-bottom: 10px;" value="Submit">
            </div>        
        
        </form>


        </div>
        </div>
</div>

<div class="col-sm-3 col-md-3 float-right">
          <!-- <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div> -->
          <div class="sidebar-module" style="padding: 15px;">
            <h4>Actions</h4>
            <ol class="list-unstyled">
              <li><a href="/projects"><i class="fas fa-briefcase "></i> List of all projects</a></li>
              <hr>
              <li><a href="/companies/{{$company_id}}"><i class="fas fa-arrow-left "></i> Back to Company</a></li>
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
      