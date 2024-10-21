<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
     @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">


       

        
        <div class="container" align="center"  >
        @if(session()->has('message'))
          <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert">
            
          </button>  
          {{session()->get('message')}}

        </div>
        @endif
        

     
        <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data" >
          @csrf

              
         <div >
            <table style="border-spacing: 20px;">
                <tr >
                    <th style="padding: 33px;">
                   
                    </th>
                </tr>
                <tr>
                    <td style="padding: 40px;" >
                        <div class="inputbox">
                            
                            <input required="required" type="text" name="firstname" id="firstname">
                            <span>Doctor FirtsName</span>
                            <i></i>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 40px;" >
                        <div class="inputbox">
                            
                            <input required="required" type="text" name="lastname" id="lastname">
                            <span>Doctor LastName</span>
                            <i></i>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 40px;">
                    <div class="inputbox">
                            
                            <input required="required" type="number" id="phone" name="phone">
                            <span>Phone</span>
                            <i></i>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 40px;" >
                    <p class="sp">Speciality</p>
                    <div class="container-sp">
                        <input type="radio" id="speciality" value="General Practitioner" name="speciality" >
                        <label class="tab" for="speciality">General Practitioner <span class="notification"></span></label>
                        <input type="radio" id="speciality" value="Cardiologist" name="speciality">
                        <label class="tab" for="speciality">Cardiologist</label>
                        <input type="radio" id="speciality" value="Dermatologist" name="speciality">
                        <label class="tab" for="speciality" >Dermatologist</label>
                        <span class="glider"></span>
                    </div>
                </div>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 40px;" >
                        <div class="inputbox">
                            
                            <input required="required" type="text" id="room" name="room">
                            <span>Room No</span>
                            <i></i>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 40px;" >
                    <p class="sp">Doctor Image</p>
                    <input type="file" id="image" name="image" required="required"/>
                    </td>
                </tr>
                <tr>
                  <td style="padding: 40px;">
                 
                  <button type="submit" class="c-button c-button--gooey"> ADD
                    <div class="c-button__blobs">
                    <div></div>
                    <div></div>
                    <div></div>
                    </div>
                  </button>
                  <svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="display: block; height: 0; width: 0;">
                    <defs>
                      <filter id="goo">
                        <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur"></feGaussianBlur>
                        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo"></feColorMatrix>
                        <feBlend in="SourceGraphic" in2="goo"></feBlend>
                      </filter>
                    </defs>
                  </svg>
                  </td>
                </tr>
            </table>
         
          
            
            




         </div>


        </form>

        </div>

       </div>
         
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>