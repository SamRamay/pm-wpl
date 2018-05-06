
@extends('layouts.app')

@section('content')

    <div class="col-md-8 offset-md-2">
        <div class="card bg-light">
            <div class="card-header bg-primary">
               <b style="font-size: 20px;" ><i class="fas fa-th-list "></i> Companies </b>
              <a class="float-right btn btn-primary" href="/companies/create"> <i class="fas fa-plus "></i> Add Company</a>              
            </div>
            <div class="card-body">
                <ul class="list-group">

                @foreach($companies as $company)
                    <li class="list-group-item"> <a href="/companies/{{$company->id}}" ><i class="fas fa-chevron-right  "></i> {{ $company->name }}</a></li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
    
@endsection