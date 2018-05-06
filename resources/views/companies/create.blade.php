@extends('layouts.app')

@section('content')

      <!-- Example row of columns -->
      <div class="col-md-9 float-left">
      
        <div class="col-lg-12 col-md-12 col-sm-12" style="background-color: white; margin: 15px;">
        <h1 class="text-center">Create New Company</h1>

        <form action="{{ route('companies.store') }}" method="post">
            {{ csrf_field() }}


            <div class="form-group">
                <label for="comapny-name">Name: <span class="required">*</span> </label>
                <input placeholder = "Enter Name"
                       id="company-name"
                       required
                       name="name"
                       spellcheck="false"
                       class="form-control"    
                
                >            
            </div>

            <div class="form-group">
                <label for="company-content">Description:</label>
                <textarea 
                    placeholder = "Enter Description"
                       id="company-content"
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
<div class="col-sm-3 col-md-3 float-right">
          <!-- <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div> -->
          <div class="sidebar-module" style="padding: 15px;">
            <h4>Actions</h4>
            <ol class="list-unstyled">
              <li><a href="/companies"><i class="fas fa-arrow-left "></i> Back to Companies</a></li>
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
      