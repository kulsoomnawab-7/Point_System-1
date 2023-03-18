
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student Dashbaord</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- base:css -->
    <link rel="stylesheet" href="dashboard/dashboard/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="dashboard/dashboard/vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="dashboard/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="dashboard/dashboard/images/favicon.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>  
  </head>
  <body>
    <br>
    <div class="horizontal-menu">
      <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container-fluid p-0">
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between p-0">
            <ul class="navbar-nav navbar-nav-left">
              <li class="nav-item ms-0 me-5 d-lg-flex d-none">
                <a href="#" class="nav-link horizontal-nav-left-menu"><i class="mdi mdi-format-list-bulleted"></i></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                  <i class="mdi mdi-bell mx-0"></i>
                  <!-- <span class="count bg-success">2</span> -->
                </a>
                <a class="navbar-brand brand-logo" href="/student_dashboard"><img src="dashboard/images/LOGO 2.png"style="width:400px; height:150px;" alt="logo"/></a>
            
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-bs-toggle="dropdown">
                  <i class="mdi mdi-email mx-0"></i>
                  <!-- <span class="count bg-primary">4</span> -->
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
             
               
                </div>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link count-indicator "><i class="mdi mdi-message-reply-text"></i></a>
              </li>
			  <li class="nav-item nav-search d-none d-lg-block ms-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="search">
                        <i class="mdi mdi-magnify"></i>
                      </span>
                    </div>
                    <!-- <input type="text" class="form-control" placeholder="search" aria-label="search" aria-describedby="search"> -->
                </div>
              </li>	
            </ul>
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="dashboard/images/LOGO 2.png" alt="logo"/></a>
            </div>

            <ul class="navbar-nav navbar-nav-right">
          

                <li class="nav-item nav-profile dropdown">
                    <span class="nav-profile-name">
          <form method="POST" action="{{URL :: to('logout')}}" class="">
					@csrf
				  <span class="online-status"></span>
          <a style="color:black;" class="nav-link dropdown-toggle" href="/student_login" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{session('sessionusername')}}</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                  <button type="SUBMIT" class="">
                  {{ __('Log Out') }}
                     </button>

                    </div>				  
   

					
</form></span>
             
            </ul>

              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </div>
      </nav>
      <nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation">
              <li class="nav-item">
                <a class="nav-link" href="/student_dashboard">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                  <a href="/register_complains" class="nav-link">
                    <i class="mdi mdi-cube-outline menu-icon"></i>
                    <span class="menu-title">Register Complains</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <!-- <li class="nav-item">
                  <a href="/lab_systems" class="nav-link">
                    <i class="mdi mdi-chart-areaspline menu-icon"></i>
                    <span class="menu-title">lab_systems</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li> -->
              <li class="nav-item">
                  <a href="/examfetch" class="nav-link">
                    <i class="mdi mdi-finance menu-icon"></i>
                    <span class="menu-title">Exam</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="/attendances" class="nav-link">
                    <i class="mdi mdi-grid menu-icon"></i>
                    <span class="menu-title">Attendance</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="/announcement" class="nav-link">
                    <i class="mdi mdi-emoticon menu-icon"></i>
                    <span class="menu-title">Announcement</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
			
              <!-- <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="mdi mdi-codepen menu-icon"></i>
                    <span class="menu-title">Sample Pages</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="submenu">
                      <ul class="submenu-item">
                          <li class="nav-item"><a class="nav-link" href="pages/samples/login.html">Login</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/login-2.html">Login 2</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/register.html">Register</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/register-2.html">Register 2</a></li>
                          <li class="nav-item"><a class="nav-link" href="pages/samples/lock-screen.html">Lockscreen</a></li>
                      </ul>
                  </div>
              </li> -->
              <li class="nav-item">
                  <a href="/feedback_form" class="nav-link">
                    <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                    <span class="menu-title">Feedback</span></a>
              </li>

			  <!-- <li class="nav-item">
                  <a href="/feedback_form" class="nav-link">
				 
										<button type="button" class="btn btn-outline-inverse-info btn-icon-text">
											Feedback
											<i class="mdi mdi-message-outline btn-icon-append"></i>                          
										</button>
								
                  </a>
              </li> -->
            </ul>
        </div>
      </nav>
    </div>
    <!-- partial -->


    @yield('content')



    <footer class="footer">
          <div class="footer-wrap">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com </a>2021</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a href="https://www.bootstrapdash.com/" target="_blank"> Bootstrap dashboard </a> templates</span>
            </div>
          </div>
        </footer>
				<!-- partial -->
			</div>
			<!-- main-panel ends -->
		</div>
		<!-- page-body-wrapper ends -->	
    </div>
		<!-- container-scroller -->
    <!-- base:dashboard/js -->
    <script src="dashboard/vendors/base/vendor.bundle.base.dashboard/js"></script>
    <!-- endinject -->
    <!-- Plugin dashboard/js for this page-->
    <!-- End plugin dashboard/js for this page-->
    <!-- inject:dashboard/js -->
    <script src="dashboard/js/template.dashboard/js"></script>
    <!-- endinject -->
    <!-- plugin dashboard/js for this page -->
    <!-- End plugin dashboard/js for this page -->
    <script src="dashboard/vendors/chart.dashboard/js/Chart.min.dashboard/js"></script>
    <script src="dashboard/vendors/progressbar.dashboard/js/progressbar.min.dashboard/js"></script>
	<script src="dashboard/vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.dashboard/js"></script>
	<script src="dashboard/vendors/justgage/raphael-2.1.4.min.dashboard/js"></script>
	<script src="dashboard/vendors/justgage/justgage.dashboard/js"></script>
    <script src="dashboard/js/jquery.cookie.dashboard/js" type="text/javascript"></script>
    <!-- Custom dashboard/js for this page-->
    <script src="dashboard/js/dashboard.dashboard/js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/simple-ajax-uploader/2.6.7/SimpleAjaxUploader.min.js" integrity="sha512-sF1OQUX4620btxfaKLxsFeu/euV3FcPyH+uST3mdEjc8vW8R4z1xNiZhcG7wcZQbFkgFhiiBoAyYNMCL3jufPA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- End custom dashboard/js for this page-->
  </body>
</html>