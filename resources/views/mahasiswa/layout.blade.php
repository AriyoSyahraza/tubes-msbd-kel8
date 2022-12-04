<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="{{ asset('main/assets/images/fevicon.png') }}" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('main/assets/css/bootstrap.min.css') }}" />
      <!-- site css -->
      <link rel="stylesheet" href="{{ asset('main/assets/style.css') }}" />
      <!-- responsive css -->
      <link rel="stylesheet" href="{{ asset('main/assets/css/responsive.css') }}" />
      <!-- color css -->
      <link rel="stylesheet" href="{{ asset('main/assets/css/colors.css') }}" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="{{ asset('main/assets/css/bootstrap-select.css') }}" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="{{ asset('main/assets/css/perfect-scrollbar.css') }}" />
      <!-- custom css -->
      <link rel="stylesheet" href="{{ asset('main/assets/css/custom.css') }}" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="/mahasiswa-dashboard"><img class="logo_icon img-responsive" src="{{ asset('main/assets/images/logo/logo_icon.png') }}" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="{{ asset('main/assets/images/layout_img/user_img.jpg') }}" alt="#" /></div>
                        <div class="user_info">
                           <h6>John David</h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>General</h4>
                  <ul class="list-unstyled components">
                     <li class="active">
                        <a href="/mahasiswa-dashboard" data-toggle="collapse" aria-expanded="false"><i class="fa fa-dashboard orange_color"></i> <span>Dashboard</span></a>
                     
                     </li>
                     <li><a href="tables.html"><i class="fa fa-book " style="color: whitesmoke"></i> <span>Pra Seminar Proposal</span></a></li>
                     <li>
                     <li><a href="tables.html"><i class="fa fa-book " style="color: rgb(136, 233, 91)"></i> <span>Pra Seminar Hasil</span></a></li>
                     <li>
                     <li><a href="tables.html"><i class="fa fa-book " style="color: rgb(80, 173, 36)"></i> <span>Pra Sidang Meja Hijau</span></a></li>
                     <li><a href="tables.html"><i class="fa fa-table " style="color: rgb(16, 133, 94)"></i> <span>Pasca Sidang Meja Hijau</span></a></li>
                     <li><a href="settings.html"><i class="fa fa-cog" style="color: rgb(136, 139, 138)"></i> <span>Settings</span></a></li>
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           <a href="index.html"><img class="img-responsive" src="{{ asset('main/assets/images/logo/logo.png') }}" alt="#" /></a>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                                 <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                 <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                 <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                              </ul>
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="{{ asset('main/assets/images/layout_img/user_img.jpg') }}" alt="#" /><span class="name_user">John David</span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="/mahasiswa-profile">My Profile</a>
                                       <a class="dropdown-item" href="settings.html">Settings</a>
                                       <a class="dropdown-item" href="help.html">Help</a>
                                       <a class="dropdown-item" href="#"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>@yield('page-tittle')</h2>
                           </div>
                        </div>
                     </div>
                     @yield('content')
                  </div>
                   <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                        <p>Copyright © 2022 Kelompok 8 MSBD<br><br>
                           Distributed By: <a href="#">Pluto</a>
                        </p>
                     </div>
                  </div> 
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="{{ asset('main/assets/js/jquery.min.js') }}"></script>
      <script src="{{ asset('main/assets/js/popper.min.js') }}"></script>
      <script src="{{ asset('main/assets/js/bootstrap.min.js') }}"></script>
      <!-- wow animation -->
      <script src="{{ asset('main/assets/js/animate.js') }}"></script>
      <!-- select country -->
      <script src="{{ asset('main/assets/js/bootstrap-select.js') }}"></script>
      <!-- owl carousel -->
      <script src="{{ asset('main/assets/js/owl.carousel.js') }}"></script> 
      <!-- chart js -->
      <script src="{{ asset('main/assets/js/Chart.min.js') }}"></script>
      <script src="{{ asset('main/assets/js/Chart.bundle.min.') }}js"></script>
      <script src="{{ asset('main/assets/js/utils.js') }}"></script>
      <script src="{{ asset('main/assets/js/analyser.js') }}"></script>
      <!-- nice scrollbar -->
      <script src="{{ asset('main/assets/js/perfect-scrollbar.min.js') }}"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="{{ asset('main/assets/js/custom.js') }}"></script>
      <script src="{{ asset('main/assets/js/chart_custom_style1.js') }}"></script>
   </body>
</html>