<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
  <title>Home | Mantis Bootstrap 5 Admin Template</title>
  <!-- [Meta] -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
  <meta name="keywords" content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
  <meta name="author" content="CodedThemes">

  <!-- [Favicon] icon -->
  <link rel="icon" href="<?php echo base_url(); ?>assets-internal/images/favicon.svg" type="image/x-icon"> <!-- [Google Font] Family -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">
<!-- [Tabler Icons] https://tablericons.com -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets-internal/fonts/tabler-icons.min.css" >
<!-- [Feather Icons] https://feathericons.com -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets-internal/fonts/feather.css" >
<!-- [Font Awesome Icons] https://fontawesome.com/icons -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets-internal/fonts/fontawesome.css" >
<!-- [Material Icons] https://fonts.google.com/icons -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets-internal/fonts/material.css" >
<!-- [Template CSS Files] -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets-internal/css/style.css" id="main-style-link" >
<link rel="stylesheet" href="<?php echo base_url(); ?>assets-internal/css/style-preset.css" >

</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">
  <!-- [ Pre-loader ] start -->
<div class="loader-bg">
  <div class="loader-track">
    <div class="loader-fill"></div>
  </div>
</div>
<!-- [ Pre-loader ] End -->
 <!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header">
      <a href="#" class="b-brand text-primary">
        <!-- ========   Change your logo from here   ============ -->
        <?php /*<img src="<?php echo base_url(); ?>assets-internal/images/logo-dark.svg" class="img-fluid logo-lg" alt="logo"> */?>
        <h4>SPOKe</h4>
      </a>
    </div>
    <div class="navbar-content">
      <ul class="pc-navbar">
        <!-- <li class="pc-item">
          <a href="#" class="pc-link">
            <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
            <span class="pc-mtext">Dashboard</span>
          </a>
        </li> -->

        <li class="pc-item pc-caption">
          <label>Menu</label>
          <i class="ti ti-dashboard"></i>
        </li>
        <li class="pc-item">
          <a href="<?php echo base_url('admin/answers');?>" class="pc-link">
            <span class="pc-micon"><i class="ti ti-typography"></i></span>
            <span class="pc-mtext">Jawapan Murid</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="../elements/bc_color.html" class="pc-link">
            <span class="pc-micon"><i class="ti ti-color-swatch"></i></span>
            <span class="pc-mtext">Add Student</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="../elements/icon-tabler.html" class="pc-link">
            <span class="pc-micon"><i class="ti ti-plant-2"></i></span>
            <span class="pc-mtext">Student List</span>
          </a>
        </li>

     
       

      </ul>
   
    </div>
  </div>
</nav>
<!-- [ Sidebar Menu ] end --> <!-- [ Header Topbar ] start -->
<header class="pc-header">
  <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
<div class="me-auto pc-mob-drp">
  <ul class="list-unstyled">
    <!-- ======= Menu collapse Icon ===== -->
    <li class="pc-h-item pc-sidebar-collapse">
      <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
        <i class="ti ti-menu-2"></i>
      </a>
    </li>
    <li class="pc-h-item pc-sidebar-popup">
      <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
        <i class="ti ti-menu-2"></i>
      </a>
    </li>
    <li class="dropdown pc-h-item d-inline-flex d-md-none">
      <a
        class="pc-head-link dropdown-toggle arrow-none m-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false"
      >
        <i class="ti ti-search"></i>
      </a>
      <div class="dropdown-menu pc-h-dropdown drp-search">
        <form class="px-3">
          <div class="form-group mb-0 d-flex align-items-center">
            <i data-feather="search"></i>
            <input type="search" class="form-control border-0 shadow-none" placeholder="Search here. . .">
          </div>
        </form>
      </div>
    </li>
    <li class="pc-h-item d-none d-md-inline-flex">
      <form class="header-search">
        <i data-feather="search" class="icon-search"></i>
        <input type="search" class="form-control" placeholder="Search here. . .">
      </form>
    </li>
  </ul>
</div>
<!-- [Mobile Media Block end] -->
<div class="ms-auto">
  <ul class="list-unstyled">
    <li class="dropdown pc-h-item">
      
      <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
        <div class="dropdown-header d-flex align-items-center justify-content-between">
          <h5 class="m-0">Message</h5>
          <a href="#!" class="pc-head-link bg-transparent"><i class="ti ti-x text-danger"></i></a>
        </div>
        <div class="dropdown-divider"></div>
        <div class="dropdown-header px-0 text-wrap header-notification-scroll position-relative" style="max-height: calc(100vh - 215px)">
          <div class="list-group list-group-flush w-100">
            <a class="list-group-item list-group-item-action">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img src="<?php echo base_url(); ?>assets-internal/images/user/avatar-2.jpg" alt="user-image" class="user-avtar">
                </div>
                <div class="flex-grow-1 ms-1">
                  <span class="float-end text-muted">3:00 AM</span>
                  <p class="text-body mb-1">It's <b>Cristina danny's</b> birthday today.</p>
                  <span class="text-muted">2 min ago</span>
                </div>
              </div>
            </a>
            <a class="list-group-item list-group-item-action">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img src="<?php echo base_url(); ?>assets-internal/images/user/avatar-1.jpg" alt="user-image" class="user-avtar">
                </div>
                <div class="flex-grow-1 ms-1">
                  <span class="float-end text-muted">6:00 PM</span>
                  <p class="text-body mb-1"><b>Aida Burg</b> commented your post.</p>
                  <span class="text-muted">5 August</span>
                </div>
              </div>
            </a>
            <a class="list-group-item list-group-item-action">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img src="<?php echo base_url(); ?>assets-internal/images/user/avatar-3.jpg" alt="user-image" class="user-avtar">
                </div>
                <div class="flex-grow-1 ms-1">
                  <span class="float-end text-muted">2:45 PM</span>
                  <p class="text-body mb-1"><b>There was a failure to your setup.</b></p>
                  <span class="text-muted">7 hours ago</span>
                </div>
              </div>
            </a>
            <a class="list-group-item list-group-item-action">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img src="<?php echo base_url(); ?>assets-internal/images/user/avatar-4.jpg" alt="user-image" class="user-avtar">
                </div>
                <div class="flex-grow-1 ms-1">
                  <span class="float-end text-muted">9:10 PM</span>
                  <p class="text-body mb-1"><b>Cristina Danny </b> invited to join <b> Meeting.</b></p>
                  <span class="text-muted">Daily scrum meeting time</span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="dropdown-divider"></div>
        <div class="text-center py-2">
          <a href="#!" class="link-primary">View all</a>
        </div>
      </div>
    </li>
    <li class="dropdown pc-h-item header-user-profile">
      <a
        class="pc-head-link dropdown-toggle arrow-none me-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        data-bs-auto-close="outside"
        aria-expanded="false"
      >
        <img src="<?php echo base_url(); ?>assets-internal/images/user/avatar-2.jpg" alt="user-image" class="user-avtar">
        <span>Stebin Ben</span>
      </a>
      <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
        <div class="dropdown-header">
          <div class="d-flex mb-1">
            <div class="flex-shrink-0">
              <img src="<?php echo base_url(); ?>assets-internal/images/user/avatar-2.jpg" alt="user-image" class="user-avtar wid-35">
            </div>
            <div class="flex-grow-1 ms-3">
              <h6 class="mb-1">Stebin Ben</h6>
              <span>UI/UX Designer</span>
            </div>
            <a href="<?php echo base_url('logout'); ?>" class="pc-head-link bg-transparent"><i class="ti ti-power text-danger"></i></a>
          </div>
        </div>
 
        
      </div>
    </li>
  </ul>
</div>
 </div>
</header>
<!-- [ Header ] end -->



  <!-- [ Main Content ] start -->
  <div class="pc-container">
    <div class="pc-content">
      <!-- [ breadcrumb ] start -->
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <div class="page-header-title">
                <h5 class="m-b-10">Home</h5>
              </div>
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
                <li class="breadcrumb-item" aria-current="page">Home</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->
      <!-- [ Main Content ] start -->
      <div class="row">
        <!-- [ sample-page ] start -->
  
        
        

       
       

        <div class="col-md-12 col-xl-12">
          <h5 class="mb-3">Jawapan Murid</h5>
          <div class="card tbl-card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-hover table-borderless mb-0">
                  <thead>
                    <tr>
                      <th>STUDENT ID.</th>
                      <th>NAME</th>
                      <!-- <th>SYSTEM SCORE</th> -->
                      <th>STATUS</th>
                      <th class="text-end">ACTION</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($students as $student): ?>
                    <tr>
                      <td><a href="#" class="text-muted"><?php echo $student->id; ?></a></td>
                      <td><?php echo $student->name; ?></td>
                      <!-- <td> -->
                        <?php
                        // echo "Soalan 1 : " .  q1($student->id);echo "<br>";
                        // echo "Soalan 2 : ". q2($student->id);echo "<br>";
                        // echo "Soalan 3 : ". q3($student->id);echo "<br>";
                        // echo "Soalan 4 : ". q4($student->id);echo "<br>";
                        // echo "Soalan 5 : ". q5($student->id);echo "<br>";
                        // echo "Soalan 6 : ". q6($student->id);echo "<br>";
                        // echo "Soalan 7 : ". q7($student->id);echo "<br>";
                        // echo "Soalan 8 : ". q8($student->id);echo "<br>";
                        // echo "Soalan 9 : ". q9($student->id);
                        ?>
                      <!-- </td> -->
                      <td><span class="d-flex align-items-center gap-2"><i
                            class="fas fa-circle text-success f-10 m-r-5"></i>Submitted</span>
                      </td>
                      <td class="text-end"><a class="btn btn-primary btn-sm" style="cursor: pointer; color: white;" href="<?php echo base_url('admin/answers_details/' . $student->id); ?>">View Details</a></td>
                    </tr>
                    <?php endforeach; ?>
                    <!-- <tr>
                      <td><a href="#" class="text-muted">84564564</a></td>
                      <td>Laptop</td>
                      <td>300</td>
                      <td><span class="d-flex align-items-center gap-2"><i
                            class="fas fa-circle text-warning f-10 m-r-5"></i>Pending</span>
                      </td>
                      <td class="text-end"><button class="btn btn-primary btn-sm">Process</button></td>
                    </tr>
                    <tr>
                      <td><a href="#" class="text-muted">84564564</a></td>
                      <td>Mobile</td>
                      <td>355</td>
                      <td><span class="d-flex align-items-center gap-2"><i
                            class="fas fa-circle text-success f-10 m-r-5"></i>Approved</span></td>
                      <td class="text-end"><button class="btn btn-primary btn-sm">Process</button></td>
                    </tr> -->
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        

    
      </div>
    </div>
  </div>
  <!-- [ Main Content ] end -->
  <footer class="pc-footer">
    <div class="footer-wrapper container-fluid">
      <div class="row">
        <div class="col-sm my-1">
          <p class="m-0"
            >SPOKe &copy; 2025</p
          >
        </div>
        
      </div>
    </div>
  </footer>

  <!-- [Page Specific JS] start -->
  <script src="<?php echo base_url(); ?>assets-internal/js/plugins/apexcharts.min.js"></script>
  <script src="<?php echo base_url(); ?>assets-internal/js/pages/dashboard-default.js"></script>
  <!-- [Page Specific JS] end -->
  <!-- Required Js -->
  <script src="<?php echo base_url(); ?>assets-internal/js/plugins/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>assets-internal/js/plugins/simplebar.min.js"></script>
  <script src="<?php echo base_url(); ?>assets-internal/js/plugins/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets-internal/js/fonts/custom-font.js"></script>
  <script src="<?php echo base_url(); ?>assets-internal/js/pcoded.js"></script>
  <script src="<?php echo base_url(); ?>assets-internal/js/plugins/feather.min.js"></script>

  
  
  
  
  <script>layout_change('light');</script>
  
  
  
  
  <script>change_box_container('false');</script>
  
  
  
  <script>layout_rtl_change('false');</script>
  
  
  <script>preset_change("preset-1");</script>
  
  
  <script>font_change("Public-Sans");</script>
  
    

</body>
<!-- [Body] end -->

</html>