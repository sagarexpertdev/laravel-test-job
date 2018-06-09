@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Create Listing</div>

            <div class="panel-body">
              {!!Form::open(['action' => 'ListingsController@store','method' => 'POST'])!!}
               
                {{Form::bsText('first_name','',['placeholder' => 'First Name'])}}
                {{Form::bsText('last_name','',['placeholder' => 'Last Name'])}}
                {!! Form::label('dob', 'Date of Birth') !!}
                {!! Form::date('dob', date('D-m-y'), ['class' => 'form-control']) !!}<br/>
                {{Form::label('gender', 'Gender')}}<br/>
                {{ Form::label('gender', 'Male') }}
                {{Form::radio('gender', '1')}}
                {{ Form::label('gender', 'Female') }}
                {{Form::radio('gender', '0')}}<br/><br/>
                <!-- {{Form::bsText('gender','',['placeholder' => 'Gender'])}} -->
                {{ Form::label('name', 'Phone Number') }}
                {{Form::number('phone_no','',['placeholder' => 'Phone Number','class' => 'form-control'])}}<br/>
                {{ Form::label('name', 'E-Mail') }}
                {{Form::email('email','',['placeholder' => 'Email Address','class' => 'form-control'])}}<br/>
                {{Form::bsText('company_name','',['placeholder' => 'Company Name'])}}
                {{Form::bsSubmit('submit')}}
              {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
