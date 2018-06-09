@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
        
            <div class="panel-heading">{{$listing->first_name}} <a href="/customer_management/public/listings" class="pull-right btn btn-default btn-xs">Go Back</a></div>

            <div class="panel-body">
              <ul class="list-group">
                <li class="list-group-item">First Name: {{$listing->first_name}}</li>
                <li class="list-group-item">Last Name: {{$listing->last_name}}</a></li>
                <li class="list-group-item">Date Of Birth: {{$listing->dob}}</li>
                <li class="list-group-item">Gender: {{$listing->gender == 1 ? "male" : "female"}}</li>
                <li class="list-group-item">Phone No: {{$listing->phone_no}}</li>
                <li class="list-group-item">Email: {{$listing->email}}</li>
                <li class="list-group-item">Company Name: {{$listing->company_name}}</li>
              </ul>
              <hr>
              <div class="well">
                {{$listing->bio}}
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
