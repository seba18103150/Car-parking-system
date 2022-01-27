<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
      
        <link rel="stylesheet" href="public/css/style1.css">
        <link rel="stylesheet" href="public/css/styles.css">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">

                    @if(auth()->user()->role=='admin')

                    <!-- Admin view -->
                    
                        <div class="nav">
                            <!-- <div class="sb-sidenav-menu-heading">Core</div> -->
                            <!-- <a class="nav-link" href="{{url('/Admin')}}"> -->

                            <!-- <div class="sb-sidenav-menu-heading"></div> -->


                  

                            <a class="nav-link" href="{{route('vehical.dashboard')}}">

                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                        </div>
                         
                        
                        
                        <div class="nav">
                             <!-- <div class="sb-sidenav-menu-heading"></div> -->
                            <a class="nav-link" href="{{route('vehical.parkingslot')}}"> 
                                <div class="sb-nav-link-icon"><i class="fas fa-car"></i></div>
                               Parking Slot
                            </a>
                        </div>
                        <div class="nav">
                             <!-- <div class="sb-sidenav-menu-heading"></div> -->
                            <a class="nav-link" href="{{route('admin.vehical.type')}}"> 
                                <div class="sb-nav-link-icon"><i class="fas fa-car-side"></i></div>
                                Vehical Type
                            </a>
                        </div>

                        <div class="nav">
                             <!-- <div class="sb-sidenav-menu-heading"></div> -->
                            <a class="nav-link" href="{{route('admin.vehical')}}"> 
                                <div class="sb-nav-link-icon"><i class="fas fa-car-side"></i></div>
                               Parking 
                            </a>
                        </div>
                        <div class="nav">
                             <!-- <div class="sb-sidenav-menu-heading"></div> -->
                            <a class="nav-link" href="{{route('vehical.parking.new')}}"> 
                                <div class="sb-nav-link-icon"><i class="fas fa-car-side"></i></div>
                              Existing Parking
                            </a>
                        </div>

                        <div class="nav">
                             <!-- <div class="sb-sidenav-menu-heading"></div> -->
                            <a class="nav-link" href="{{route('vehical.parking.report')}}"> 
                                <div class="sb-nav-link-icon"><i class="fas fa-car-side"></i></div>
                              Report
                            </a>
                        </div>

                        <div class="nav">
                             <!-- <div class="sb-sidenav-menu-heading"></div> -->
                            <a class="nav-link" href="{{route('vehical.user')}}"> 
                                <div class="sb-nav-link-icon"><i class="fas fa-car-side"></i></div>
                              User
                            </a>
                        </div>


                      @else
                      
                      <!-- manager view  -->

                      <div class="nav">
                            <!-- <div class="sb-sidenav-menu-heading">Core</div> -->
                            <!-- <a class="nav-link" href="{{url('/Admin')}}"> -->

                            <!-- <div class="sb-sidenav-menu-heading"></div> -->


                  

                            <a class="nav-link" href="{{route('vehical.dashboard')}}">

                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                        </div>
                         
                        
                        
                        <div class="nav">
                             <!-- <div class="sb-sidenav-menu-heading"></div> -->
                            <a class="nav-link" href="{{route('vehical.parkingslot')}}"> 
                                <div class="sb-nav-link-icon"><i class="fas fa-car"></i></div>
                               Parking Slot
                            </a>
                        </div>
                        <div class="nav">
                             <!-- <div class="sb-sidenav-menu-heading"></div> -->
                            <a class="nav-link" href="{{route('admin.vehical.type')}}"> 
                                <div class="sb-nav-link-icon"><i class="fas fa-car-side"></i></div>
                                Vehical Type
                            </a>
                        </div>

                        <div class="nav">
                             <!-- <div class="sb-sidenav-menu-heading"></div> -->
                            <a class="nav-link" href="{{route('admin.vehical')}}"> 
                                <div class="sb-nav-link-icon"><i class="fas fa-car-side"></i></div>
                               Parking 
                            </a>
                        </div>
                        <div class="nav">
                             <!-- <div class="sb-sidenav-menu-heading"></div> -->
                            <a class="nav-link" href="{{route('vehical.parking.new')}}"> 
                                <div class="sb-nav-link-icon"><i class="fas fa-car-side"></i></div>
                              Existing Parking
                            </a>
                        </div>


                        @endif





                        

                    </div>
                    
                </nav>
            </div>
          
        </div>
      
        </body>
        </html>