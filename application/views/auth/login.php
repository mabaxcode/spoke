<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
  <title>SPOKe</title>
  <!-- [Meta] -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Mantis is made using Bootstrap 5 design framework. Download the free admin template & use it for your project.">
  <meta name="keywords" content="Mantis, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template">
  <meta name="author" content="CodedThemes">

  <!-- [Favicon] icon -->
  <link rel="icon" href="<?php echo base_url(); ?>assets-internal/images/favicon.svg" type="image/x-icon"> 
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

<body>
  <!-- [ Pre-loader ] start -->
  <div class="loader-bg">
    <div class="loader-track">
      <div class="loader-fill"></div>
    </div>
  </div>
  <!-- [ Pre-loader ] End -->

  <div class="auth-main">
    <div class="auth-wrapper v3">
      <div class="auth-form">
        <div class="auth-header">
          <!-- <a href="#"><img src="<?php echo base_url(); ?>assets-internal/images/logo-dark.svg" alt="img"></a> -->
          <h3>SPOKe</h3>
        </div>
        <div class="card my-5">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-end mb-4">
              <h3 class="mb-0"><b>Administrator Login</b></h3>
            </div>
            <form method="post" action="<?php echo base_url('auth/login'); ?>">
                <div class="form-group mb-3">
                  <label class="form-label">Username</label>
                  <input type="text" class="form-control" placeholder="Username" name="username" required>
                </div>
                <div class="form-group mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control" placeholder="Password" name="password" required>
                </div>
                <div class="d-grid mt-4">
                  <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>


            <?php if ($this->session->flashdata('error')): ?>
              <div class="alert alert-danger mt-3">
                <?php echo $this->session->flashdata('error'); ?>
              </div>
            <?php endif; ?>


          </div>
        </div>
        <div class="auth-footer row">
          <!-- <div class=""> -->
            <div class="col my-1">
              <p class="m-0">Copyright © <a href="#">SPOKe</a></p>
            </div>
            <div class="col-auto my-1">
              <ul class="list-inline footer-link mb-0">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                <li class="list-inline-item"><a href="#">Contact us</a></li>
              </ul>
            </div>
          <!-- </div> -->
        </div>
      </div>
    </div>
  </div>
  <!-- [ Main Content ] end -->
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