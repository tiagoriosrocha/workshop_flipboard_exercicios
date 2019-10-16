<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Flipboard</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Workshop:Flipboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Principal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/journals">Journals <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/posts">Posts</a>
      </li>
      @auth
      <li class="nav-item">
        <a class="nav-link" href="/user/{{Auth::user()->id}}">Profile</a>
      </li>
      @endauth
      <li class="nav-item">
        <a class="nav-link" href="/home">Timeline</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/toDo">To-do</a>
      </li>
    </ul>
    @auth
    	<ul class="nav nav-pills pull-right">
             <li class="nav-item dropdown">
                        <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
            </li>
        </ul>
    @endauth

    @guest
    	<ul class="nav nav-pills pull-right">
             <li class="nav-item dropdown">
                        <a href="{{ route('login') }}">
                            Login
                        </a>
            </li>
        </ul>
    @endguest
    
  </div>
</nav>
<br>


  <div class="container">
    @yield('content')
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>