<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    
    <title>Dashboard - Chameleon Admin - Modern Bootstrap 4 WebApp & Dashboard HTML Template + UI Kit</title>
	
    <link rel="apple-touch-icon" href="{{asset('admin/theme-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin/theme-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/theme-assets/css/vendors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/theme-assets/vendors/css/charts/chartist.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/theme-assets/css/app-lite.css')}}">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/theme-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/theme-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/theme-assets/css/pages/dashboard-ecommerce.css')}}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
  </head>
  <body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">

    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="collapse navbar-collapse show" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
              
                
            </ul>
            
            <ul class="nav navbar-nav float-right">
              
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">      {{Auth::guard('admin')->user()->name}}       <span class="avatar avatar-online"><img src="{{asset('admin/theme-assets/images/portrait/small/avatar-s-19.png')}}" ><i></i></span></a>
                <div class="dropdown-menu dropdown-menu-right">                  
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="{{route('adminlogout')}}"><i class="ft-power"></i> Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


	<!-- strat main body -->

	<div class="app-content content">
      <div class="content-wrapper">
        
        <div class="content-body">

		   @yield('content')
        
        </div>
      </div>
    </div>
<!-- End Main body -->
	

	


    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="theme-assets/images/backgrounds/02.jpg">
      <div class="navbar-header" style="margin-top:20px;">
        <ul class="nav navbar-nav flex-row">       
          <li class="nav-item mr-auto">
              <h3 class="brand-text">Welcome Admin</h3></li>
          <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
      </div>
      <input id="data" value="{{$page}}" style="display:none;">
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li id="dashboard" class=""><a href="{{route('admindashboard')}}"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
          </li>
          <li id="add_course" class=" nav-item"><a href="{{route('add_course_page')}}"><i class="ft-pie-chart"></i><span class="menu-title" data-i18n="">Add course</span></a>
          </li>
          <li id="user_data" class=" nav-item"><a href="{{route('user_data')}}"><i class="ft-droplet"></i><span class="menu-title" data-i18n="">Users Data</span></a>
          </li>
          <li id="add_instructor" class=" nav-item"><a href="{{route('add_instructor_page')}}"><i class="ft-layers"></i><span class="menu-title" data-i18n="">Add Instructor</span></a>
          </li>
          
          
          <li class=" nav-item"><a href=""><i class="fa-solid fa-right-from-bracket"></i>Sign Out</a>
          </li>
        </ul>
      </div><a class="btn btn-danger btn-block btn-glow btn-upgrade-pro mx-1" href="{{route('homepage')}}" >Go To Site</a>
      <div class="navigation-background"></div>
    </div>

    



        
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2022  &copy; Copyright Reserved</span>
        <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
          <li class="list-inline-item"><i class="fa-solid fa-book-open-reader"></i></li>
          <li class="list-inline-item"><i class="fa-solid fa-explosion"></i></li>
          <li class="list-inline-item"><i class="fa-solid fa-swatchbook"></i></li>
        </ul>
      </div>
    </footer>
	
    <!-- BEGIN VENDOR JS-->
    <script src="{{asset('admin/theme-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('admin/theme-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
    
    <script src="{{asset('admin/theme-assets/js/core/app-menu-lite.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/theme-assets/js/core/app-lite.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/theme-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script>
      
      switch(document.getElementById('data').value)
        {
            case'dashboard':
              document.getElementById('dashboard').classList.add('active');
              break;
            case'add_course':
                document.getElementById('add_course').classList.add('active');
                break;
            case'add_instructor':
                document.getElementById('add_instructor').classList.add('active');
                break;
            case'user_data':
                document.getElementById('user_data').classList.add('active');
                break;
            
            default:
               document.getElementById('home').classList.add('active');
        }
    </script>
    
   
  </body>
</html>