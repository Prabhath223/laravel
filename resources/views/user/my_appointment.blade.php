<!DOCTYPE html>
<html lang="en">
<head>
@include('user.css')
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>




    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctors.html">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>

            @if (Route::has('login'))
            @auth
            <li class="nav-item">
              <a class="nav-link" style="background-color:black; color:lightgrey" href="{{url('myappointment')}}">My Appointments</a>
            </li>
     <x-app-layout>
     </x-app-layout>



            @else

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
            </li>
            @endauth
            @endif
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>
  <div align="center" style="padding:60px;">
    <table>
        <tr style="background-color:black; color:lightgrey">
            <th style="padding:30px; color:white;">Doctor Name</th>
            <th style="padding:30px; color:white;">Date</th>
            <th style="padding:30px; color:white;">Message</th>
            <th style="padding:30px; color:white;">Status</th>
            <th style="padding:30px; color:white;">Cancel Appointment</th>
        </tr>
        @foreach($appoint as $appoin)
        <tr align="center">
        <td style="padding:15px;">{{$appoin->name}}</td>
        <td style="padding:15px;" >{{$appoin->date}}</td>
        <td style="padding:15px;">{{$appoin->message}}</td>
        <td style="padding:15px;">{{$appoin->status}}</td>
</tr>
@endforeach
    </table>
  </div>
@include('user.script')
</body>
</html>
