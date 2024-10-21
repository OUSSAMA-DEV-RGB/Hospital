<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
   <style>
    @charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#A7A1AE;
  background-color:#1F2739;
}

h1 {
  font-size:3em; 
  font-weight: 300;
  line-height:2em;
  text-align: center;
  color: #4DC3FA;
}





.blue { color: #0090e7; }
.blue { color: #0090e7; }

.container th  {
    font-weight: bold;
    font-size: 2em;
  text-align: left;
  color: #185875;
}

.container td {
    font-weight: normal;
    font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
     -moz-box-shadow: 0 2px 2px -2px #0E1119;
          box-shadow: 0 2px 2px -2px #0E1119;
}

.container {
    text-align: center;
    overflow: hidden;
    width: 80%;
    margin: 0 auto;
  display: table;
  padding: 0 0 8em 0;
}

.container td, .container th {
    padding-bottom: 1%;
    width: 11%;
    padding-top: 2%;
  padding-left:0%;  
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
    background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
    background-color: #2C3446;
}

.container th {
    background-color: #1F2739;
}

.container td:first-child { color:#0090e7; }

.container tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
     -moz-box-shadow: 0 6px 6px -6px #0E1119;
          box-shadow: 0 6px 6px -6px #0E1119;
}

.container td:hover {
  background-color: #0090e7;
  color: #403E10;
  font-weight: bold;
  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);
  
  transition-delay: 0s;
    transition-duration: 0.4s;
    transition-property: all;
  transition-timing-function: line;
}

@media (max-width: 800px) {
.container td:nth-child(4),
.container th:nth-child(4) { display: none; }
}
   </style>
  </head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
     @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">


     

<table class="container">
  
  <thead>
   
    <tr> 
      <th><h1>name</h1></th>
      <th><h1>email</h1></th>
      <th><h1>phone</h1></th>
      <th><h1>doctor</h1></th>
      <th><h1>date</h1></th>
      <th><h1>message</h1></th>
      <th><h1>status</h1></th>
      <th><h1>approved</h1></th>
      <th><h1>cancel</h1></th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $dat)  
    <tr>
      <td>{{$dat->name}}</td>
      <td>{{$dat->email}}</td>
      <td>{{$dat->phone}}</td>
      <td>{{$dat->doctor}}</td>
      <td>{{$dat->date}}</td>
      <td>{{$dat->message}}</td>
      <td>{{$dat->status}}</td>
      <td> <a class="btn btn-success" href="{{url('approved' , $dat->id)}}" >approved</a> </td>
      <td><a class="btn btn-danger" href="{{url('canceled' , $dat->id)}}">cancel</a></td>
    </tr>  <!-- $dat->id get data the specific id in order to use him in approved or cancel or somting else  -->
  @endforeach
    
       </div>
         
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>