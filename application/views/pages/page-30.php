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

    .instruction {
      font-weight: bold;
      font-size: 18px;
      background: white;
      color: black;
      display: inline-block;
      padding: 10px 15px;
      border-radius: 8px;
      border: 2px solid #0080ff;
    }

    .word-bank {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin-top: 20px;
      flex-wrap: wrap;
    }

    .word {
      background: #ffdf80;
      border: 3px solid #3b0b75;
      border-radius: 15px;
      color: black;
      padding: 10px 25px;
      cursor: grab;
      font-weight: bold;
      transition: transform 0.2s;
    }

    .word.dragging {
      opacity: 0.6;
    }

    .image-area {
      margin: 25px auto;
    }

    .drop-area {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin-top: 15px;
    }

    .drop-box {
      width: 130px;
      height: 50px;
      background: #8fffb2;
      border: 3px solid #3b0b75;
      border-radius: 20px;
      text-align: center;
      color:black;
      line-height: 40px;
      font-weight: bold;
      font-size: 16px;
    }

    .drop-box.hover {
      background-color: #70e090;
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
    }

  </style>
</head>
<body>
  <div class="d-flex justify-content-center align-items-center full-height">
    <div class="card bg-dark text-white border-0" style="width: 1200px; height: 700px; border-radius: 20px; overflow: hidden;">
      <img src="<?php echo base_url('img/23.png')?>" class="card-img" alt="Paris Background" style="height: 100%;">
      <div class="card-img-overlay d-flex flex-column justify-content-between text-center">
        <br><br><br>
       <div class="instruction">
    <font color="red">Arahan: </font>Bina ayat tunggal berdasarkan gambar yang disediakan menggunakan teknik SPOKe.   
  </div>




         <div class="top-buttons">
        <a href="<?php echo base_url();?>" class="btn btn-sm">🏠 Home</a>
          <a href="<?php echo base_url('userlogout');?>" class="btn btn-sm">🚪 Log Keluar</a>
        </div>

         
  

   

  <div class="image-area">
    <img src="<?php echo base_url('img/w3.png')?>" alt="Abang membaca buku" width="400">
  </div>

    <textarea class="custom-input" rows="3" cols="80" placeholder="Tulis jawapan anda di sini..."><?php echo isset($val) ? $val->answer : ''; ?></textarea>



        <div class="d-flex justify-content-between mt-auto mb-0 px-4">
    <a href="<?php echo base_url('apps/pagesTwentyNine');?>" class="btn px-5 custom-btn">SEBELUMNYA</a>

        <a href="<?php echo base_url('apps/pagesThirtyOne');?>" class="btn px-5 custom-btn">SETERUSNYA</a>

  </div>


      </div>
    </div>
  </div>
</body>
</html>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    
    // const textarea = document.querySelector('.custom-input');
    //     textarea.addEventListener('keypress', function (e) {
    //         if (e.key === 'Enter') {
    //             e.preventDefault();
    //             const answer = textarea.value.trim();
    //             console.log("Answer:", answer);
    //             if (answer) {
    //                 // Save the answer using AJAX
    //                 $.ajax({
    //                   url: "<?php echo base_url('apps/save_writing_answer');?>",
    //                   type: "POST",
    //                   data: {answer:answer, type: '1'},
    //                   dataType: "json",
    //                   success: function (response) {
    //                   },
    //               });
    //             }
    //         }
    //     });


    const textarea = document.querySelector('.custom-input');
  let typingTimer; // Timer identifier
  const doneTypingInterval = 1500; // Time in ms (1.5 seconds after user stops typing)

  textarea.addEventListener('input', function () {
    clearTimeout(typingTimer); // reset timer on every keypress
    typingTimer = setTimeout(saveAnswer, doneTypingInterval);
  });

  function saveAnswer() {
    const answer = textarea.value.trim();
    console.log("User stopped typing. Answer:", answer);
    // if (answer) {
      console.log("Saving Answer:", answer);
      $.ajax({
        url: "<?php echo base_url('apps/save_writing_answer');?>",
        type: "POST",
        data: { answer: answer, type: '3' },
        dataType: "json",
        success: function (response) {
          console.log("Answer saved:", response);
        },
        error: function () {
          console.error("Failed to save answer");
        }
      });
    // }
  }


  </script>