@extends('layouts.app')

@section('content')
  @include('layout.header')
      @include('layout.sidebar2')
<!-- Content Wrapper. Contains page content -->
  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
    <!-- Main content -->
              <!-- /.card-header -->
              <!-- form start -->
             <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">General Elements</h3>
              </div>
          </div>
              <!-- /.card-header -->
              <div class="card-body">
                {!!Form::open(['action' => 'ListingsController@store','method' => 'POST','class' => 'form_send'])!!}
                  <!-- text input -->
                  <div class="form-group">
                   
                    {{Form::bsText('first_name','',['placeholder' => 'First Name','class' => 'form-control'])}}
                  </div>
                  <div class="form-group">
                    
                    {{Form::bsText('last_name','',['placeholder' => 'Last Name','class' => 'form-control'])}}
                  </div>

                  <!-- textarea -->
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                    </div>
                
                {!! Form::date('dob', date('D-m-y'), ['class' => 'form-control']) !!}<br/>
                  </div>
                  <div class="form-group"><br/>
                     {{Form::label('gender', 'Gender')}}<br/>
                {{ Form::label('gender', 'Male') }}
                {{Form::radio('gender', '1')}}
                {{ Form::label('gender', 'Female') }}
                {{Form::radio('gender', '0')}}<br/>
                  </div>

                  <!-- input states -->
                  <div class="form-group">
                  <label>Phone Number:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-phone"></i></span>
                    </div>
                    {{Form::number('phone_no','',['placeholder' => 'Phone Number','class' => 'form-control'])}}<br/>
                  </div>
                  <!-- /.input group -->
                </div>
                  <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                  </div>
                 {{Form::email('email','',['placeholder' => 'Email Address','class' => 'form-control'])}}<br/>
                </div>

                 {{Form::bsText('company_name','',['placeholder' => 'Company Name'])}}
                {{Form::bsSubmit('submit')}}
              {!! Form::close() !!}

             
              </div>
             </div>
              @include('layout.footer')
@endsection
 
