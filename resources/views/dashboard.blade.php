@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

            <div class="panel-heading">Home Page<span class="pull-right"><a href="/customer_management/public" class="btn btn-success btn-xs">Home</a></span></div>
                <div class="panel-heading">Dashboard <span class="pull-right"><a href="/customer_management/public/listings/create" class="btn btn-success btn-xs">Add Listing</a></span></div>

                <div class="panel-body">
                    <h3 class="text-center">Customer Managment Listings</h3>
                    @if(count($listings))
                      <table class="table table-striped">
                        
                        @foreach($listings as $listing)
                          <tr>
                            <td>{{$listing->first_name}}</td>
                            <td><a class="pull-right btn btn-default" href="/customer_management/public/listings/{{$listing->id}}/edit">Edit</a></td>
                            <td>
                            {!!Form::open(['action' => ['ListingsController@destroy', $listing->id],'method' => 'POST', 'class' => 'pull-left', 'onsubmit' => 'return confirm("Are you sure?")'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::bsSubmit('Delete', ['class' => 'btn btn-danger'])}}
                              {!! Form::close() !!}
                            </td>
                          </tr>
                        @endforeach
                      </table>
                    @endif
                </div>

                
            </div>
        </div>
    </div>
@endsection
