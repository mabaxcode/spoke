<!DOCTYPE html>
<html lang="en">
<head>
  <title>SPOKe</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="<?php echo base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <script src="<?php echo base_url()?>/assets/js/bootstrap.bundle.min.js"></script>
  <!-- <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

  <style>
    body, html {
      height: 100%;
      margin: 0;
/*      font-family: 'Press Start 2P', cursive;*/
      font-family: 'Anton', sans-serif;
/*font-weight: 700;*/
font-size: 20px;

    }

    .full-height {
      height: 100vh;
    }

    

    .card {
      border: none !important;
    }

    .custom-btn {
      background-color: red !important;
      color: yellow !important;
      border: 3px solid black !important;
      border-radius: 8px;
      font-weight: bold;
    }

    .custom-btn:hover {
      background-color: darkred !important;
      color: yellow !important;
    }

    /* ✅ Added: Buttons at top-right */
    .top-buttons {
      position: absolute;
      top: 20px;
      right: 20px;
      display: flex;
      gap: 10px;
    }

    .top-buttons .btn {
      background-color: black !important;
      color: yellow !important;
      border: 2px solid yellow !important;
      font-size: 16px;
      padding: 8px 12px;
    }

    .top-buttons .btn:hover {
      background-color: yellow !important;
      color: black !important;
    }
    
/* .welcome-text {
  position: relative;
  left: 50%;
  transform: translateX(-50%);
  color: #FFD700;
  font-size: 30px;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
  animation: moveToLeft 5s ease-in-out forwards;
} */







  </style>
</head>
<body>
  <div class="d-flex justify-content-center align-items-center full-height">
    <div class="card bg-dark text-white border-0" style="width: 1200px; height: 700px; border-radius: 20px; overflow: hidden; position: relative;">
      <img src="<?php echo base_url('img/page-1.png')?>" class="card-img" alt="Paris Background" style="height: 100%;">
      <div class="card-img-overlay d-flex flex-column justify-content-between text-center">

        <!-- ✅ Top Right Buttons -->
        <div class="top-buttons">
          <?php /*<a href="<?php echo base_url('home');?>" class="btn btn-sm">🏠 Home</a> */?>
          <a href="<?php echo base_url('userlogout');?>" class="btn btn-sm">🚪 Log Keluar</a>
        </div>

        <h2 class="welcome-text" style="color: #FFD700;font-size: 30px;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);">Selamat Datang, <?php echo $this->session->userdata('name'); ?> !</h2>

        <!-- Bottom content -->
        <div class="mt-auto mb-5">


          <!-- <div class="d-flex justify-content-center mb-3">
            <div style="width: 600px;">
              <input type="text" class="form-control custom-input" placeholder="Masukkan nama pengguna">
            </div>
          </div> -->

          

          <a href="<?php echo base_url('apps');?>" class="btn px-5 custom-btn">MULA</a>
        </div>

      </div>
    </div>
  </div>
</body>
</html>
