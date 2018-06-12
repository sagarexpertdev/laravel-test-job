@extends('layouts.app')

@section('content')
@include('layout.header')
      @include('layout.sidebar3')
      
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          


            <!-- Main content -->
            <div class="invoice p-3 mb-3">
            
              <!-- info row -->
         

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Date Of Birth</th>
                      <th>Gender</th>
                      <th>Phone Number</th>
                      <th>E-Mail</th>
                      <th>Company</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>{{$listing->first_name}}</td>
                      <td>{{$listing->last_name}}</td>
                      <td>{{$listing->dob}}</td>
                      <td>{{$listing->gender == 1 ? "male" : "female"}}</td>
                      <td>{{$listing->phone_no}}</td>
                      <td>{{$listing->email}}</td>
                      <td>{{$listing->company_name}}</td>
                    </tr>
                    
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
@include('layout.footer')