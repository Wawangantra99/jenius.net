<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>RudBoox_V1.1 Admin Dashboard</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <div class="form-inline me-auto">
          <ul class="navbar-nav me-3">
            <li><a href="#" data-bs-toggle="sidebar" class="nav-link nav-link-lg collapse-btn"><i
                  class="fas fa-bars"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i class="fas fa-expand"></i>
              </a>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-bs-toggle="dropdown"
              class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Messages
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <a href="#" class="dropdown-item">
                  <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-1.png" class="rounded-circle">
                  </span>
                  <span class="dropdown-item-desc">
                    <span class="message-user">John Deo</span>
                    <span class="time messege-text">Please check your mail !!</span>
                    <span class="time">2 Min Ago</span>
                  </span>
                </a>
                <a href="#" class="dropdown-item">
                  <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle">
                  </span>
                  <span class="dropdown-item-desc">
                    <span class="message-user">Sarah Smith</span>
                    <span class="time messege-text">Request for leave application</span>
                    <span class="time">5 Min Ago</span>
                  </span>
                </a>
                <a href="#" class="dropdown-item">
                  <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-5.png" class="rounded-circle">
                  </span>
                  <span class="dropdown-item-desc">
                    <span class="message-user">Jacob Ryan</span>
                    <span class="time messege-text">Your payment invoice is generated.</span>
                    <span class="time">12 Min Ago</span>
                  </span>
                </a>
                <a href="#" class="dropdown-item">
                  <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-4.png" class="rounded-circle">
                  </span>
                  <span class="dropdown-item-desc">
                    <span class="message-user">Lina Smith</span>
                    <span class="time messege-text">hii John, I have upload doc related to task.</span>
                    <span class="time">30 Min Ago</span>
                  </span>
                </a>
                <a href="#" class="dropdown-item">
                  <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-3.png" class="rounded-circle">
                  </span>
                  <span class="dropdown-item-desc">
                    <span class="message-user">Jalpa Joshi</span>
                    <span class="time messege-text">Please do as specify. Let me know if you have any query.</span>
                    <span class="time">1 Days Ago</span>
                  </span>
                </a>
                <a href="#" class="dropdown-item">
                  <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle">
                  </span>
                  <span class="dropdown-item-desc">
                    <span class="message-user">Sarah Smith</span>
                    <span class="time messege-text">Client Requirements</span>
                    <span class="time">2 Days Ago</span>
                  </span>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown dropdown-list-toggle"><a href="#" data-bs-toggle="dropdown"
              class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <span class="dropdown-item-icon bg-primary text-white">
                    <i class="fas fa-code"></i>
                  </span>
                  <span class="dropdown-item-desc">
                    Template update is available now!
                    <span class="time">2 Min Ago</span>
                  </span>
                </a>
                <a href="#" class="dropdown-item">
                  <span class="dropdown-item-icon bg-info text-white">
                    <i class="far fa-user"></i>
                  </span>
                  <span class="dropdown-item-desc">
                    <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                    <span class="time">10 Hours Ago</span>
                  </span>
                </a>
                <a href="#" class="dropdown-item">
                  <span class="dropdown-item-icon bg-success text-white">
                    <i class="fas fa-check"></i>
                  </span>
                  <span class="dropdown-item-desc">
                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                    <span class="time">12 Hours Ago</span>
                  </span>
                </a>
                <a href="#" class="dropdown-item">
                  <span class="dropdown-item-icon bg-danger text-white">
                    <i class="fas fa-exclamation-triangle"></i>
                  </span>
                  <span class="dropdown-item-desc">
                    Low disk space. Let's clean it!
                    <span class="time">17 Hours Ago</span>
                  </span>
                </a>
                <a href="#" class="dropdown-item">
                  <span class="dropdown-item-icon bg-info text-white">
                    <i class="fas fa-bell"></i>
                  </span>
                  <span class="dropdown-item-desc">
                    Welcome to RudBoox template!
                    <span class="time">Yesterday</span>
                  </span>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-bs-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <img alt="image" src="assets/img/user.png" class="user-img-radious-style">
              <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Hello Sarah Smith</div>
              <a href="profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="timeline.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="auth-login.html" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">
              <img alt="image" src="assets/img/logo.png" class="header-logo" />
              <span class="logo-name">RudBoox</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-home"></i><span>Dashboard</span></a>
              <ul class="dropdown-menu">
                <li><a href="index.htmll">LOG MONITORING</a></li>
                <li><a href="monitoring.html">CLIENT MONITORING</a></li>
                <li><a href="advance-table.html">PENDAFTARAN</a></li>
                <li><a href="form-Olt.html">OLT</a></li>
                <li><a href="form-Mikrotik.html">MIKROTIK</a></li>
                <li><a href="index.html">PPPOE</a></li>
                <li><a href="index.html">HOTSPOT</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-clone"></i><span>Pengeturan</span></a>
              <ul class="dropdown-menu">
                <li><a href="">User Profile</a></li>
                <li><a href="auth-forgot-password.html">Forgot Password</a></li>
                <li><a href="auth-login.html">Login</a></li>
                <li><a href="auth-register.html">Register</a></li>
                <li><a href="auth-reset-password.html">Reset Password</a></li>
                <li><a href="subscribe.html">Subscribe</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-signs"></i><span>Billing</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="create-post.html">Create Post</a></li>
                <li><a class="nav-link" href="posts.html">Posts</a></li>
                <li><a class="nav-link" href="profile.html">Profile</a></li>
                <li><a class="nav-link" href="contact.html">Contact</a></li>
                <li><a class="nav-link" href="invoice.html">Invoice</a></li>
              </ul>
            </li>

                  <ul class="dropdown-menu">
                    <li><a href="#">Child Menu 1</a></li>
                    <li class="dropdown">
                      <a href="#" class="has-dropdown">Child Menu 2</a>

                    <li><a href="#"> Child Menu 3</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </aside>
      </div>
      <!-- Main Content -->
      <div class="main-content">
        @yield('content')
        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-bs-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-bs-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label>
                    <span class="control-label p-r-20">Mini Sidebar</span>
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <div class="disk-server-setting m-b-20">
                    <p>Disk Space</p>
                    <div class="sidebar-progress">
                      <div class="progress" data-height="5">
                        <div class="progress-bar l-bg-green" role="progressbar" data-width="80%" aria-valuenow="80"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <span class="progress-description">
                        <small>26% remaining</small>
                      </span>
                    </div>
                  </div>
                  <div class="disk-server-setting">
                    <p>Server Load</p>
                    <div class="sidebar-progress">
                      <div class="progress" data-height="5">
                        <div class="progress-bar l-bg-orange" role="progressbar" data-width="58%" aria-valuenow="25"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <span class="progress-description">
                        <small>Highly Loaded</small>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2019 <div class="bullet"></div> Design By <a href="#">Redstar</a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/chartjs/chart.min.js"></script>
  <script src="assets/bundles/apexcharts/apexcharts.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/index.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>

</html>