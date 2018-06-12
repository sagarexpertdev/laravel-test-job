<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">


<!-- jQuery library -->
<style type="text/css">
    .wrapper{
        min-height: 20% !important;
    }
    #app-navbar-collapse{
        display: block;
    }
    .navbar-right{
        float: right;
    }
    .p-3{
        display: none;
    }
    .invoice.p-3{
        display: block;
    }
    .popup{
        left:-15px !important;
    }
</style>
</head>
<body>
    <div id="app" >
        <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu" style="float: right; display: block;">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu popup">
              <!-- User image -->
              <li class="user-header">
                <img src="theme/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                
              </li>
             
        @if (Auth::guest()) 
        <li class="user-footer">
                <div class="pull-left">
                  <a href="{{ route('login') }}" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{ route('register') }}" class="btn btn-default btn-flat logout">Sign out</a>

     
                </div>
              </li>
   @else
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{ route('logout') }}" class="btn btn-default btn-flat logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Sign out</a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                </div>
              </li>
              @endif
            </ul>
          </li>
        <div class="container">
          @include('inc.messages')
          @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    
</body>



<script src="{{ asset('js/app.js') }}"></script>
<script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</html>
