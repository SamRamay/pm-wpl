@extends('layouts.app')

@section('content')

<div class="col-md-9 float-left">
      
      <div class="col-lg-12 col-md-12 col-sm-12" style="background-color: white; margin: 15px;">
      <h1 class="text-center">Update User Role</h1>
      

      <form action="{{ route('users.update',[$user->id]) }}" method="post">
          {{ csrf_field() }}

          <input type="hidden" name="_method" value="put">

          <div class="form-group">
              <label for="user-role">Role of User: <span class="required">*</span> </label>
              <input placeholder = "Enter Role id"
                     id="user-role"
                     required
                     name="role_id"
                     spellcheck="false"
                     class="form-control"
                     value="{{ $user->role_id }}"     
              
              >            
          </div>

          <div class="form-group">
                <input type="submit" class="btn btn-warning" value="Submit">
            </div>        
        
        </form>


        </div>

      </div>





@endsection