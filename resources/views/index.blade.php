
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!-- <title>Dashboard </title> -->
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{asset('backend/css/styles.css')}}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    
       
    
    </head>
<body>
    <!-- <body class="sb-nav-fixed">   -->
    
    
    @include('admin.partials.header')



    <div id="layoutSidenav_content">
                <main style="margin-top: 25px;">
                    <div class="container-fluid px-4">

    <div class="container-fluid">
    <div class="row">

</div>
</div>
</div>
</div>
      @include('admin.partials.sidebar')
      

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        
            </div>
            
   
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <!-- <h1>Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol> -->

                        </div>         
                        @yield('content')
                </main>
               
                </div>
            
        </div>
        </div>
        </div>
        
        <!-- </table> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{url('assets/demo/chart-area-demo.js')}}"></script>
    <script src="{{url('assets/demo/chart-bar-demo.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest"></script>


</body>
</html>