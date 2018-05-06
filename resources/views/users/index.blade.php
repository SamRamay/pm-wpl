@extends('layouts.app')

@section('content')



<div class="col-md-8 offset-md-2 col-sm-3 ">
        <div class="card bg-light">
            <div class="card-header bg-primary">
               <b style="font-size: 20px;" ><i class="fas fa-th-list "></i> Users </b>
            </div>
            <div class="card-body">
            <div class="table-responsive">
            <table class="table table-hover ">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>                    
                    <th>Role_id</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role_id}}</td>
                    <td> <a href="/users/{{$user->id}}/edit" class="btn btn-outline-warning"><i class="fas fa-edit "></i> Edit</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
</div>
            </div>
        </div>
    </div>




@endsection