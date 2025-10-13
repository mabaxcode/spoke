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
      font-family: 'Anton', sans-serif;
	  /* font-family: 'Press Start 2P', cursive; */
    }
    .full-height {
      height: 100vh; /* Full screen height */
    }
    .custom-input {
/*      border-radius: 20px;        /* make rounded corners */*/
/*      border: 2px dotted #ffffff; /* dotted border with white color */*/
      color: #fff;                /* white text */
/*      background: transparent;    /* transparent background */*/
    }

    .custom-input::placeholder {
/*      color: #ddd;                /* lighter placeholder */*/
    }

    /* Remove card border */
    .card {
      border: none !important;
    }
    .custom-btn {
  background-color: red !important;   /* red background */
  color: yellow !important;           /* yellow text */
  border: 3px solid black !important; /* bold black border */
  border-radius: 8px;                 /* optional rounded corners */
  font-weight: bold;                  /* bold text */
}
.custom-btn:hover {
  background-color: darkred !important; /* darker red on hover */
  color: yellow !important;
}

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



  </style>
</head>
<body>
  <div class="d-flex justify-content-center align-items-center full-height">
    <div class="card bg-dark text-white border-0" style="width: 1200px; height: 700px; border-radius: 20px; overflow: hidden;">
      <img src="<?php echo base_url('img/page-4-new.png')?>" class="card-img" alt="Paris Background" style="height: 100%;">
      <div class="card-img-overlay d-flex flex-column justify-content-between text-center">
        
        <!-- Bottom content -->
             <?php /*
       <div class="mt-auto mb-5">
        <p style="color: black;">Klik butang untuk ke halaman seterusnya <a href="<?php echo base_url('apps/pagesThree');?>"> 
                <img src="<?php echo base_url('img/next.png')?>" 
                    alt="Next Button" 
                    style="height: 50px; cursor: pointer; transition: transform 0.2s;"
                    onmouseover="this.style.transform='scale(1.1)'"
                    onmouseout="this.style.transform='scale(1)'">

            </a></p>
            
            
            </div>

          */?>

          <div class="top-buttons">
        <a href="<?php echo base_url();?>" class="btn btn-sm">🏠 Home</a>
          <a href="<?php echo base_url('userlogout');?>" class="btn btn-sm">🚪 Log Keluar</a>
        </div>



        <div class="d-flex justify-content-between mt-auto mb-0 px-4">
    <a href="<?php echo base_url('apps/pagesThree');?>" class="btn px-5 custom-btn">SEBELUMNYA</a>
    <a href="<?php echo base_url('apps/pagesFive');?>" class="btn px-5 custom-btn">SETERUSNYA</a>
  </div>


      </div>
    </div>
  </div>
</body>
</html>
