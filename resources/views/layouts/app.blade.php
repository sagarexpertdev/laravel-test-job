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
</style>
</head>
<body>
    <div id="app">
        <nav class="navbar-right">
            
               

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                  

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li class="login"><a href="{{ route('login') }}">Login</a></li>
                            <li class="regist"><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Sign Out
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
          
        </nav>
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
