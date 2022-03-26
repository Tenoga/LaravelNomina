<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('components.head')
</head>

<body>
  @guest
  @if (Route::has('login'))
  
  @endif
  @else
  <div class="wrapper d-flex align-items-stretch">
    <div id="sidebar">
      <div class="img bg-wrap text-center py-4" style="background-image: url(img/bg_1.jpg);">
        <div class="user-logo">
          <img class="img" src="{{ asset('img/logo.jpg') }}"></img>
          <h3>Test Name</h3>
        </div>
      </div>
      <ul class="list-unstyled components mb-5">
        <li class="active">
          <a href="/home"><span class="fa fa-home mr-3"></span> Home</a>
        </li>
        <li>
          <a href="/users"><span class="fa fa-trophy mr-3"></span> Employee List</a>
        </li>
        <li>
          <a href="#"><span class="fa fa-download mr-3 notif"><small class="d-flex align-items-center justify-content-center">5</small></span> Download</a>
        </li>
        <li>
          <a href="#"><span class="fa fa-gift mr-3"></span> Gift Code</a>
        </li>
        <li>
          <a href="#"><span class="fa fa-cog mr-3"></span> Settings</a>
        </li>
        <li>
          <a href="#"><span class="fa fa-support mr-3"></span> Support</a>
        </li>
        <li>
          <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <span class="fa fa-sign-out mr-3"></span> {{ __('Logout') }}</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </li>
      </ul>

    </div>
    @endguest
    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5 pt-5">
      @yield('content')
    </div>
  </div>
 

  <script src="{{ asset ('js/jquery.js')}} "></script>
  <script src="{{ asset ('js/popper.js')}} "></script>
  <script src="{{ asset ('js/bootstrap.js')}}"></script>
  <script src="{{ asset ('js/main.js')}}"></script>


</body>

</html>