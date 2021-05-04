<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
    <!-- plugins:css -->
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
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auto-form-wrapper">
                  <center><h1>Login</h1></center>
                <form action="{{url('login_detalis')}}" method="post">
                   @csrf 
                  <div class="form-group">
                    <label class="label">Username</label>
                    <div class="input-group">
                      <input type="text" class="form-control" name="username" placeholder="Username">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="label">Password</label>
                    <div class="input-group">
                      <input type="password" name="password" class="form-control" placeholder="*********">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary submit-btn btn-block">Login</button>
                  </div>
                @if(session()->has('error'))
                    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                    {{session('error')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    </div>
                @endif
                </form>
              </div>
              
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('admin_asset/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('admin_asset/assets/vendors/js/vendor.bundle.addons.js')}}"></script>
    <script src="{{asset('admin_asset/assets/js/shared/off-canvas.js')}}"></script>
    <script src="{{asset('admin_asset/assets/js/shared/misc.js')}}"></script>
    <script src="{{asset('admin_asset/assets/js/demo_1/dashboard.js')}}"></script>
    <script src="{{asset('admin_asset/assets/js/demo_1/custom.js')}}"></script>
  </body>
</html>