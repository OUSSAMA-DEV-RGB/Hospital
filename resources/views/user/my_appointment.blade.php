<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
  <link rel="stylesheet" href="../assets/css/css.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

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


        <div  id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link"  href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="doctors.html">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="blog.html">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="contact.html">Contact</a>
            </li>
                

           
            @if(Route::has('login'))
            @auth
            <li class="nav-item">
              <a class="nav-link"  href="{{url('myappointment')}}">Appointment </a>
            </li>
            
            <li class="nav-item" >
              <x-app-layout  ></x-app-layout>
            </li>
            



            @else
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login </a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">register </a>
            </li>
            @endauth
            @endif
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav> 
  </header>
 
  <body>
  @if(session()->has('message'))
          <div class="alert alert-success" style="text-align: center;">
          <button type="button" class="close" data-dismiss="alert">
            
          </button>  
          {{session()->get('message')}}

        </div>
    @endif


<section><div class="back" >
  <!--for demo wrap-->
  <h1 style="font-size: xx-large;">your appointment</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Doctor Name</th>
          <th>Date</th>
          <th>Message</th>
          <th>Status</th>
          <th>cancel appointment</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        @foreach($appointment as $apoint)
        <tr>
          <td>{{$apoint->doctor}}</td>
          <td>{{$apoint->date}} </td>
          <td>{{$apoint->message}}</td>
          <td>{{$apoint->status}}</td>
          <td>
            <a class="btn btn-danger" onclick="return confirm('are sure to delete this appointment ')" href="{{url('cancel_appoint' , $apoint->id)}}">
            cancel
          </a>
        </td>
         
        </tr>
       @endforeach
      </tbody>
    </table>
  </div>
</section>


</div>
</body>
<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>


  
</body>
</html>