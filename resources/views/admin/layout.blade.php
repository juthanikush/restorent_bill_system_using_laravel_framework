<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('page_title')</title>

    <link rel="stylesheet" href="{{asset('admin_asset/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin_asset/assets/vendors/iconfonts/ionicons/dist/css/ionicons.css')}}">
    <link rel="stylesheet" href="{{asset('admin_asset/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin_asset/assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('admin_asset/assets/vendors/css/vendor.bundle.addons.css')}}">
   
    <link rel="stylesheet" href="{{asset('admin_asset/assets/css/shared/style.css')}}">
    
    <link rel="stylesheet" href="{{asset('admin_asset/assets/css/demo_1/style.css')}}">
    
    <link rel="shortcut icon" href="{{asset('admin_asset/assets/images/favicon.ico')}}" />
  </head>
  <body>
 
    <div class="container-scroller">
     
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html">
            <img src="{{asset('admin_asset/assets/images/logo.svg')}}" alt="logo" /> </a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="{{asset('admin_asset/assets/images/logo-mini.svg')}}" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <ul class="navbar-nav">
            
          </ul>
          <form class="ml-auto search-form d-none d-md-block" action="#">
            <div class="form-group">
              
            </div>
          </form>
          <ul class="navbar-nav ml-auto">
         
           
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="{{asset('admin_asset/assets/images/faces/user.png')}}" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="{{asset('admin_asset/assets/images/faces/user.png')}}" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold"></p>
                  
                </div>
               
                <a class="dropdown-item" href="{{url('logout')}}">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('admin')}}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Category</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('menu')}}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Menu</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('bill_view')}}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Bill</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('info')}}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Info</span>
              </a>
            </li>
           
           
         
          </ul>
        </nav>
        <!-- partial -->
        @section('container')
        @show
     </div>
      
      <!-- page-body-wrapper ends -->
    </div>
   
    <script src="{{asset('admin_asset/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('admin_asset/assets/vendors/js/vendor.bundle.addons.js')}}"></script>
    <script src="{{asset('admin_asset/assets/js/shared/off-canvas.js')}}"></script>
    <script src="{{asset('admin_asset/assets/js/shared/misc.js')}}"></script>
    <script src="{{asset('admin_asset/assets/js/demo_1/dashboard.js')}}"></script>
    <script src="{{asset('admin_asset/assets/js/demo_1/custom.js')}}"></script>
   
  </body>
</html>