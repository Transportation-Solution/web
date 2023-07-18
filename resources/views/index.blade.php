
<!DOCTYPE html>
<html lang="es" data-layout-mode="detached" data-topbar-color="dark" data-menu-color="light" data-sidenav-user="true">

    <head>
        <meta charset="utf-8" />
        <title>Transportation solution system</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />


        <!-- Theme Config Js -->
        <script src="{{ url('js/hyper-config.js')}}"></script>

        <!-- App css -->
        <link href="{{ url('css/app-modern.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons css -->
        <link href="{{ url('css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <!-- Begin page -->
        <div class="wrapper">

            
            <!-- ========== Topbar Start ========== -->
           @include('layouts.componets.navbar')
            <!-- ========== Topbar End ========== -->

            <!-- ========== Left Sidebar Start ========== -->
            @include('layouts.componets.sidebar')
            <!-- ========== Left Sidebar End ========== -->
            

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title migas de pan-->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    
                                    <h4 class="page-title">Buttons</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title end migas de pan -->                          
                  
                    <!-- end content-->                     
                        
                                    
                         

                        


                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
               @include('layouts.componets.footer')
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        
        <!-- END wrapper -->

        <!-- Theme Settings -->
        @include('layouts.componets.settings')

        <!-- Vendor js -->
        <script src="{{url('js/vendor.min.js')}}"></script>

        <!-- Code Highlight js -->
        <script src="{{('js/highlight.pack.min.js')}}"></script>
        <script src="{{url('js/clipboard.min.js')}}"></script>
        <script src="{{url('js/hyper-syntax.js')}}"></script>
        
        <!-- App js -->
        <script src="{{url('js/app.min.js')}}"></script>

    </body>
</html>
