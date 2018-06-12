@extends('layouts.app')

@section('content')
@include('layout.header2')
      @include('layout.sidebar')
<div class="container">


      <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Hover Data Table</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                @if(count($listings))
              <table id="example2" class="table table-bordered table-hover">

                
                <tbody>
                     @foreach($listings as $listing)
                <tr>
                  <td>{{$listing->first_name}}</td>
                  <td><a class="pull-right btn btn-default" href="/public/listings/{{$listing->id}}/edit">Edit</a></td>
                  <td> {!!Form::open(['action' => ['ListingsController@destroy', $listing->id],'method' => 'POST', 'class' => 'pull-left', 'onsubmit' => 'return confirm("Are you sure?")'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::bsSubmit('Delete', ['class' => 'btn btn-danger'])}}
                              {!! Form::close() !!}</td>
               
                </tr>
                 @endforeach
               
              </table>
               @endif
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

    
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

    
</div>
@endsection
@include('layout.footer2')