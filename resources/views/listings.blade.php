@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Latest Customer Listings</div>
                <div class="panel-heading">Home Page<span class="pull-right"><a href="/customer_management/public/dashboard" class="btn btn-success btn-xs">Dashboard</a></span></div>
                <table id="example" class="display" style="width:100%">
                    @if(count($listings))
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Date Of Birth</th>
                            <th>Gender</th>
                            <th>Phone Number</th>
                            <th>Email</th>
                            <th>Company Name</th>
                        </tr>
                    </thead>
                    <tbody>
                          @foreach($listings as $listing)
                            
                 
                    <tr>
                        <td><a href="/customer_management/public/listings/{{$listing->id}}">{{$listing->first_name}}</a></td>
                        <td>{{$listing->last_name}}</td>
                        <td>{{$listing->dob}}</td>
                        <td>{{$listing->gender == 1 ? "male" : "female"}}</td>
                        <td>{{$listing->phone_no}}</td>
                        <td>{{$listing->email}}</td>
                        <td>{{$listing->company_name}}</td>
                    </tr>
                    @endforeach
                 </tbody>
                 
            </table>
                         
                        
                    @else
                      <p>No Listings Found</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
