@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
        <div class="panel-heading">Edit Listing <a href="/customer_management/public/dashboard" class="pull-right btn btn-default btn-xs">Go Back</a></div>

            <div class="panel-body">
              {!!Form::open(['action' => ['ListingsController@update',$listing->id],'method' => 'POST'])!!}
               
                {{Form::bsText('first_name',$listing->first_name,['placeholder' => 'First Name'])}}
                {{Form::bsText('last_name',$listing->last_name,['placeholder' => 'Last Name'])}}
                {!! Form::label('dob', 'Date of Birth') !!}
                {!! Form::date('dob',date($listing->dob), ['class' => 'form-control']) !!}<br/>
                {{Form::label('gender', 'Gender')}}<br/>
                @if ($listing->gender == '1')
                {{ Form::radio('gender', '1', true, ['checked' => 'checked']) }} male
                <br />
            @else
                {{ Form::radio('gender', '0', true, []) }} female
            @endif<br/><br/>
            {{ Form::label('name', 'Phone Number') }}
                {{Form::number('phone_no',$listing->phone_no,['placeholder' => 'Phone Number','class' => 'form-control'])}}</br>
                {{ Form::label('name', 'E-Mail') }}
                {{Form::email('email',$listing->email,['placeholder' => 'Email Address','class' => 'form-control'])}}<br/>
                {{Form::bsText('company_name',$listing->company_name,['placeholder' => 'Company Name'])}}
                {{Form::hidden('_method','PUT')}}
                {{Form::bsSubmit('submit')}}
              {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
