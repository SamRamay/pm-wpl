@extends('layouts.app')

@section('content')

<div class="col-md-9 col-sm-9 col-lg-9 float-left">

	<div class="card">
	  <div class="card-body">
	        <h1 class="card-title">{{ $project->name }}</h1>
	        <p class="lead">{{ $project->description }}</p>
	  </div>
	</div>
      

      <!-- Example row of columns -->
    <div class="row col-md-12 col-sm-12 col-lg-12"  style="background-color: white; margin-top: 15px; margin-left: 2px;">
<br>

	<div class="col-md-12" style="padding: 10px;">
	@include('partials.comments')

      <form action="{{ route('comments.store') }}" method="post">
        {{ csrf_field() }}

        <input name="commentable_type" type="hidden"  value="App\Project" >                       
        <input name="commentable_id" type="hidden" value="{{ $project->id }}" >                       

        <div class="form-group">
            <label for="comment-content">Comment:</label>
            <textarea 
                placeholder = "Enter comment"
                   id="comment-content"
                   style="resize: vertical"
                   name="body"
                   spellcheck="false"
                   rows="3"
                   class="form-control autosize-target text-left">


            </textarea>
        </div>

        <div class="form-group">
            <label for="comment-name">Proof of work done (url/photos)</label>
            <textarea 
                placeholder = "Enter url or screenshot"
                   id="comment-content"
                   style="resize: vertical"
                   name="url"
                   spellcheck="false"
                   rows="2"
                   class="form-control autosize-target text-left">


            </textarea>

        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Submit">
        </div>        
        
      </form>
      
	</div>




      </div>
</div>

<div class="col-sm-3 col-md-3 float-right" >
          <!-- <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div> -->
	  <div class="sidebar-module" style="padding: 10px;">
	    <h4>Actions</h4>
	    <ol class="list-unstyled">
	      <li><a href="/projects/create"> <i class="fas fa-plus-circle "></i> Add Project</a></li>
	      <li><a href="/projects"> <i class="fas fa-briefcase "></i> All Projects</a></li>
<hr>
        <li><a href="/projects/{{ $project->id }}/edit" class="text-warning" > <i class="fas fa-edit "></i> Edit</a></li>

	      
        @if(Auth::user()->role_id == 1 )
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
	            "> <i class="fas fa-trash "></i> Delete</a>
	      @endif
	      <form action="{{ route('projects.destroy', [$project->id]) }}" method="post"
	      id="delete-form" style="display: none;">
	            <input type="hidden" name="_method" value="delete">
	              {{ csrf_field() }}              
	      </form>
	      </li>

	    
	      <hr/>
	      <li><a href="/projects"> <i class="fas fa-arrow-left "></i> Back to Projects</a></li>


	      <!-- <li><a href="#">Add new member</a></li> -->
	    </ol>
	    <hr/>
	        <h4>Add members</h4>      
	        <form class="form-inline" id="add-user" action="{{ route('projects.adduser') }}"
	        method="POST">
	        {{ csrf_field() }}

	          <div class="form-group mx-sm-1 mb-2">
	            <input type="text" class="form-control" name="email" placeholder="Email">
	            <input type="hidden" class="form-control" name="project_id" value="{{$project->id}}">
	            
	          </div>
	          <button type="submit" id="addmember" class="btn btn-primary mb-2">Add!</button>
	          
	        </form>
<hr>
	         <h4>Team Members</h4>
	    <ol class="list-unstyled" id="member-list">
	    @foreach($project->users as $user)
	      <li><a href="#"> {{ $user->email }}</a></li>
	    @endforeach
	    </ol>  
	</div>        
</div>
        

@endsection

@section('jqueryScript')
                      <script type="text/javascript">
                      
                            $('#addMember').on('click',function(e){
                              e.preventDefault(); //prevent the form from auto submit

                            //   $.ajaxSetup({
                            //     headers: {
                            //         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                            //     }
                            // });


                            var formData = {
                              'project_id' : $('#project_id').val(),
                              'email' : $('#email').val(),
                              '_token': $('input[name=_token]').val(),
                            }

                            var url = 'projects/adduser';

                            $.ajax({
                              type: 'post',
                              url: "{{ URL::route('projects.adduser') }}",
                              data : formData,
                              dataType : 'json',
                              success : function(data){

                                    var emailField = $('#email').val();
                                  
                                  $('#member-list').prepend('<li><a href="#">'+ emailField +'</a> </li>');
                                  $('#email').val('');
                              },
                              error: function(data){
                                //do something with data
                                console.log("error sending ajax request" + data);
                              }
                            });

                             
                            });

                      </script>


@endsection  