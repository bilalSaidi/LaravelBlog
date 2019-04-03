<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/summernote.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Mystyle.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                      {{$blogName->BlogName}}
                    </a>


                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    @guest
                        &nbsp;
                    @else
                    <!-- option Post -->
                    <ul class="nav navbar-nav">
                        <li> <a href="{{route('home')}}"> Home  </a> </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Posts <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li> <a href="{{route('Posts')}}"> Show  </a> </li>
                            <li> <a href="{{route('post.create')}}"> Create  </a> </li>
                            @if(Auth::user()->admin == 1 )
                            <div class="divider"></div>
                            <li> <a href="{{route('post.trashed')}}"> Trashed Posts  </a> </li>
                            @endif

                          </ul>
                        </li>



                    </ul>

                    @if(Auth::user()->admin == 1 )

                        <!-- Option Users -->
                        <ul class="nav navbar-nav">
                            <li><a href="{{ route('Users') }}"> Users</a></li>
                        </ul>

                        <!-- Option Setting -->
                        <ul class="nav navbar-nav">
                            <li><a href="{{ route('Settings') }}"> Setting</a></li>
                        </ul>
                        <!-- option categories -->
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li> <a href="{{route('categories')}}">Show   </a> </li>
                                <li> <a href="{{route('category.create')}}"> Create  </a> </li>
                              </ul>
                            </li>
                        </ul>
                        <!-- option Tags -->
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tags <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li> <a href="{{route('tags')}}">Show   </a> </li>
                                <li> <a href="{{route('tags.create')}}"> Create  </a> </li>
                              </ul>
                            </li>
                        </ul>

                    @endif


                    @endguest


                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                      <a href="{{ route('Users.edit',['id'=>Auth::user()->id]) }}">
                                          Profile
                                      </a>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('js/plugin.js')}}"></script>
    <script src="{{asset('js/summernote.min.js')}}"></script>
    <script>
         $('#summernote').summernote();
    </script>


</body>
</html>
