@extends('layouts.app')

@section('content')
  @include('layout.header1')
      @include('layout.sidebar4')

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
            <div class="panel-body">
              {!!Form::open(['action' => ['ListingsController@update',$listing->id],'method' => 'POST','class' => 'form_send'])!!}
               <div class="form-group">
                {{Form::bsText('first_name',$listing->first_name,['placeholder' => 'First Name'])}}
                </div>
                 <div class="form-group">
                {{Form::bsText('last_name',$listing->last_name,['placeholder' => 'Last Name'])}}
            </div>
                <div class="input-group">

                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                    </div>
                {!! Form::date('dob',date($listing->dob), ['class' => 'form-control']) !!}<br/>
            </div>
            <div class="form-group"><br/>
                {{Form::label('gender', 'Gender')}}<br/>
                @if ($listing->gender == '1')
                {{ Form::radio('gender', '1', true, ['checked' => 'checked']) }} male
                <br />
            @else
                {{ Form::radio('gender', '0', true, []) }} female
            @endif
        </div>
           <div class="form-group">
                  <label>Phone Number:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-phone"></i></span>
                    </div>
                {{Form::number('phone_no',$listing->phone_no,['placeholder' => 'Phone Number','class' => 'form-control'])}}
            </div></br>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                  </div>
                {{Form::email('email',$listing->email,['placeholder' => 'Email Address','class' => 'form-control'])}}</div>
                {{Form::bsText('company_name',$listing->company_name,['placeholder' => 'Company Name'])}}
                {{Form::hidden('_method','PUT')}}
                {{Form::bsSubmit('submit')}}
              {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
@include('layout.footer1')