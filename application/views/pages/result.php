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
<nav class="pc-sidebar pc-sidebar-hide">
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
            <span class="pc-mtext">Keputusan</span>
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
          <a href="<?php echo base_url('admin/tambah_pelajar');?>" class="pc-link">
            <span class="pc-micon"><i class="ti ti-color-swatch"></i></span>
            <span class="pc-mtext">Tambah Pelajar</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="<?php echo base_url('admin/senarai_pelajar');?>" class="pc-link">
            <span class="pc-micon"><i class="ti ti-plant-2"></i></span>
            <span class="pc-mtext">Senarai Pelajar</span>
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
      
       
      </a>
      <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
        <div class="dropdown-header">
          <div class="d-flex mb-1">
            <div class="flex-shrink-0">
              <img src="<?php echo base_url(); ?>assets-internal/images/user/avatar-2.jpg" alt="user-image" class="user-avtar wid-35">
            </div>
            <div class="flex-grow-1 ms-3">
              <h6 class="mb-1">Admin</h6>
              <span>admin@spoke.top</span>
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
                <h5 class="m-b-10">Maklumat Keputusan</h5>
              </div>
             
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->
      <!-- [ Main Content ] start -->
      <div class="row">
        <!-- [ sample-page ] start -->
  
        
        

       
       

        <div class="col-md-12 col-xl-12">
          <?php
            // print_r($student);
          ?>
          <h5 class="mb-3">Nama Pelajar : <?php echo $name; ?></h5>
          <div class="card tbl-card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                        <th width="30%">Soalan</th>
                        <th width="50%">Jawapan Yang Dihantar</th>
                        <!-- <th>Jawapan Betul</th> -->
                        <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Soalan 1 <br><small class="text-muted">Apakah maksud ayat tunggal?</small></td>
                            <td>
                                <?php echo q1($student_id, 'answer_text'); ?>
                            </td>
                            <!-- <td>Jawapan Betul 1</td> -->
                            <td><?php echo status_span_class($student_id); ?></td>
                        </tr>
                        <tr>
                            <td>Soalan 2 <br><small class="text-muted">Apakah maksud subjek?</small></td>
                            <td>
                                <?php echo q2($student_id, 'answer_text'); ?>
                            </td>
                            <!-- <td>Jawapan Betul 1</td> -->
                            <td><?php echo status_span_class_two($student_id); ?></td> 
                        </tr>
                        <tr>
                            <td>Soalan 3 <br><small class="text-muted">Apakah maksud Predikat?</small></td>
                            <td>
                                <?php echo q3($student_id, 'answer_text'); ?>
                            </td>
                            <!-- <td>Jawapan Betul 1</td> -->
                            <td><?php echo status_span_class_thre($student_id); ?></td> 
                        </tr>
                        <tr>
                            <td>Soalan 4 <br><small class="text-muted">Apakah maksud S, P, O dan Ke dalam teknik SPOKe?</small></td>
                            <td>
                                <?php echo q4($student_id, 'answer_text'); ?>
                            </td>
                            <!-- <td>Jawapan Betul 1</td> -->
                            <td><?php echo status_span_class_val($student_id, '4'); ?></td> 
                        </tr>
                        <tr>
                            <td>Soalan 5 <br><small class="text-muted">Berdasarkan ayat di bawah, yang manakah ayat tunggal yang mempunyai unsur SPOKe?</small></td>
                            <td>
                                <?php echo q5($student_id, 'answer_text'); ?>
                            </td>
                            <!-- <td>Jawapan Betul 1</td> -->
                            <td><?php echo status_span_class_val($student_id, '5'); ?></td> 
                        </tr>
                        <tr>
                            <th colspan='3' style="background-color: #1990ff; color: white">Susun perkataan untuk membina ayat tunggal</th>
                        </tr>
                        <tr>
                            <td>Soalan 1 <br><small class="text-muted">membaca, setiap hari, buku, Abang</small></td>
                            <td>
                                <?php echo susun_kata($student_id, 'answer_log', '1'); ?>
                            </td>
                            <td><?php echo susun_kata_rs($student_id, 'status', '1'); ?></td> 
                        </tr>
                        <tr>
                            <td>Soalan 2 <br><small class="text-muted">Ibu, ayam goreng, memasak, di dapur</small></td>
                            <td>
                                <?php echo susun_kata($student_id, 'answer_log', '2'); ?>
                            </td>
                            <td><?php echo susun_kata_rs($student_id, 'status', '2'); ?></td> 
                        </tr>
                        <tr>
                            <td>Soalan 3 <br><small class="text-muted">kereta, mencuci, Ayah, di halaman rumah</small></td>
                            <td>
                                <?php echo susun_kata($student_id, 'answer_log', '3'); ?>
                            </td>
                            <td><?php echo susun_kata_rs($student_id, 'status', '3'); ?></td> 
                        </tr>
                        <tr>
                            <td>Soalan 4 <br><small class="text-muted">sampah, Kakak, menyapu, di halaman rumah</small></td>
                            <td>
                                <?php echo susun_kata($student_id, 'answer_log', '4'); ?>
                            </td>
                            <td><?php echo susun_kata_rs($student_id, 'status', '4'); ?></td> 
                        </tr>
                         <tr>
                            <th colspan='3' style="background-color: #1990ff; color: white">Bina ayat tunggal berdasarkan gambar yang disediakan menggunakan teknik SPOKe.</th>
                        </tr>
                        <tr>
                            <td>
                              <img src="<?php echo base_url('img/w1.png')?>" alt="Gambar Soalan 1" style="max-width: 200px;">
                              
                            </td>
                            <td>
                                <b>Jawapan Yang Dihantar : </b>
                                <div class="p-3 color-block bg-teal-100" data-clipboard-text="bg-teal-100"><?php echo writing_answer($student_id, '1'); ?></div>
                                <b>Ulasan Guru: <br>
                                <textarea name="comment" id="comment-1" cols="30" rows="3" class="form-control" disabled><?php echo $writing1['comment']; ?></textarea>
                                </b>
                            </td>
                            <td style="vertical-align: bottom;">
                              Keputusan:
                              <select name="score" id="score" class="form-control" disabled onchange="updateScore(this.value, '<?php echo $student_id; ?>', '1')">
                                <option value="">Pilih Keputusan</option>
                                <option value="Betul" <?php echo ($writing1['score'] == 'Betul') ? 'selected' : ''; ?>>Betul</option>
                                <option value="Salah" <?php echo ($writing1['score'] == 'Salah') ? 'selected' : ''; ?>>Salah</option>
                              </select>
                            </td>
                        </tr>

                        <tr>
                            <td>
                              <img src="<?php echo base_url('img/w2.png')?>" alt="Gambar Soalan 1" style="max-width: 200px;">
                              
                            </td>
                            <td>
                                <b>Jawapan Yang Dihantar :</b>
                                <div class="p-3 color-block bg-teal-100" data-clipboard-text="bg-teal-100"><?php echo writing_answer($student_id, '2'); ?></div>
                                <b>Ulasan Guru: <br>
                                <textarea name="comment" id="comment-2" cols="30" rows="3" class="form-control" disabled><?php echo $writing2['comment']; ?></textarea>
                                </b>
                            </td>
                            <td style="vertical-align: bottom;">
                              Keputusan:
                              <select name="score" id="score" class="form-control" disabled onchange="updateScore(this.value, '<?php echo $student_id; ?>', '2')">
                                <option value="">Pilih Keputusan</option>
                                <option value="Betul" <?php echo ($writing2['score'] == 'Betul') ? 'selected' : ''; ?>>Betul</option>
                                <option value="Salah" <?php echo ($writing2['score'] == 'Salah') ? 'selected' : ''; ?>>Salah</option>
                              </select>
                            </td>
                        </tr>

                        <tr>
                            <td>
                              <img src="<?php echo base_url('img/w3.png')?>" alt="Gambar Soalan 1" style="max-width: 200px;">
                              
                            </td>
                            <td>
                                <b>Jawapan Yang Dihantar :</b>
                                <div class="p-3 color-block bg-teal-100" data-clipboard-text="bg-teal-100"><?php echo writing_answer($student_id, '3'); ?></div>
                                <b>Ulasan Guru: <br>
                                <textarea name="comment" id="comment-3" cols="30" rows="3" class="form-control" disabled><?php echo $writing3['comment']; ?></textarea>
                                </b>
                            </td>
                            <td style="vertical-align: bottom;">
                              Keputusan:
                              <select name="score" id="score" class="form-control" disabled onchange="updateScore(this.value, '<?php echo $student_id; ?>', '3')">
                                <option value="">Pilih Keputusan</option>
                                <option value="Betul" <?php echo ($writing3['score'] == 'Betul') ? 'selected' : ''; ?>>Betul</option>
                                <option value="Salah" <?php echo ($writing3['score'] == 'Salah') ? 'selected' : ''; ?>>Salah</option>
                              </select>
                            </td>
                        </tr>

                        <tr>
                            <td>
                              <img src="<?php echo base_url('img/w4.png')?>" alt="Gambar Soalan 1" style="max-width: 200px;">
                              
                            </td>
                            <td>
                                
                                <b>Jawapan Yang Dihantar :</b>
                                <div class="p-3 color-block bg-teal-100" data-clipboard-text="bg-teal-100"><?php echo writing_answer($student_id, '4'); ?></div>
                                <b>Ulasan Guru: <br>
                                <textarea name="comment" id="comment-4" cols="30" rows="3" class="form-control" disabled><?php echo $writing4['comment']; ?></textarea>
                                </b>
                            </td>
                            <td style="vertical-align: bottom;">
                              Keputusan:
                              <select name="score" id="score" class="form-control" disabled onchange="updateScore(this.value, '<?php echo $student_id; ?>', '4')">
                                <option value="">Pilih Keputusan</option>
                                <option value="Betul" <?php echo ($writing4['score'] == 'Betul') ? 'selected' : ''; ?>>Betul</option>
                                <option value="Salah" <?php echo ($writing4['score'] == 'Salah') ? 'selected' : ''; ?>>Salah</option>
                              </select>
                            </td>
                        </tr>

                    </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-end">
                    <a class="btn btn-primary mt-3" href="<?php echo base_url(''); ?>" style="color:white;">Kembali</a>
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
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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

  <script>
    function updateScore(value, student_id, question_no) {
      console.log("Updating score:", value, student_id, question_no);  
        // Send an AJAX request to update the score in the database
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "<?php echo base_url('admin/update_score'); ?>", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                alert("Keputusan telah dikemaskini.");
            }
        };
        xhr.send("student_id=" + student_id + "&type=" + question_no + "&score=" + value);
    }


    $(document).ready(function() {
      $(".save-comment").on("click", function() {



          var student_id = $(this).data("init");
          var type = $(this).data("type");
          var comment = $("#comment-" + type).val();

          console.log("Saving comment:", comment, student_id, type);

          $.ajax({
              url: "<?php echo base_url('admin/save_comment'); ?>",
              type: "POST",
              data: {
                  student_id: student_id,
                  type: type,
                  comment: comment
              },
              success: function(response) {
                  alert("Ulasan telah disimpan.");
              },
              error: function() {
                  alert("Ralat semasa menyimpan ulasan.");
              }
          });
      });
    });

    $(".selesai-semak").on("click", function() {
        var student_id = $(this).data("init");
        // alert (student_id);
        // update status to 'completed' via AJAX
        $.ajax({
            url: "<?php echo base_url('admin/mark_review_completed'); ?>",
            type: "POST",
            data: {
                student_id: student_id
            },
            success: function(response) {
                alert("Semakan telah diselesaikan.");
                // Optionally, redirect to another page
                window.location.href = "<?php echo base_url('admin/answers'); ?>";
            },
            error: function() {
                alert("Ralat semasa menyelesaikan semakan.");
            }
        });
    });

  </script>
  <!-- Custom JS -->
  
    

</body>
<!-- [Body] end -->

</html>