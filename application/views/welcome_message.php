<!DOCTYPE html>
<html lang="en">
<head>
  <title>SPOKe</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="<?php echo base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <script src="<?php echo base_url()?>/assets/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
  <style>
    body, html {
      height: 100%;
      margin: 0;
	  /* font-family: 'Comic Sans MS', cursive, sans-serif; */
	  font-family: 'Press Start 2P', cursive;
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

  </style>
</head>
<body>
  <div class="d-flex justify-content-center align-items-center full-height">
    <div class="card bg-dark text-white border-0" style="width: 900px; height: 700px; border-radius: 20px; overflow: hidden;">
      <img src="<?php echo base_url('img/SPOKe.png')?>" class="card-img" alt="Paris Background" style="height: 100%;">
      <div class="card-img-overlay d-flex flex-column justify-content-between text-center">
        
        <!-- Bottom content -->
        <div class="mt-auto mb-5">
          <div class="d-flex justify-content-center mb-3">
            <div style="width: 600px;">
              <input type="text" class="form-control custom-input" placeholder="Masukkan nama pengguna">
            </div>
          </div>
          <a href="<?php echo base_url('apps');?>" class="btn px-5 custom-btn">SETERUSNYA</a>
        </div>

      </div>
    </div>
  </div>
</body>
</html>
