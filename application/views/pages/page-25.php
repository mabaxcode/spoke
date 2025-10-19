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
    Berdasarkan gambar tersebut, susun perkataan di bawah pada petak berwarna hijau untuk membina ayat tunggal.
  </div>




         <div class="top-buttons">
        <a href="<?php echo base_url();?>" class="btn btn-sm">🏠 Home</a>
          <a href="<?php echo base_url('userlogout');?>" class="btn btn-sm">🚪 Log Keluar</a>
        </div>

         
  

        <div class="word-bank" id="wordBank">
    <div class="word" draggable="true">kereta</div>
    <div class="word" draggable="true">mencuci</div>
    <div class="word" draggable="true">Ayah</div>
    <div class="word" draggable="true">di halaman rumah</div>
  </div>

  <div class="image-area">
    <img src="<?php echo base_url('img/dd3.png')?>" alt="Abang membaca buku" width="400">
  </div>


 <?php 
        if( isset($done) && $done == '1' ){
            echo "<h3 style='color: black; font-weight: bold;'>Anda telah melengkapkan aktiviti ini.</h3>";
        } else {
    ?>
  <div class="drop-area">
    <div class="drop-box" data-slot="1"></div>
    <div class="drop-box" data-slot="2"></div>
    <div class="drop-box" data-slot="3"></div>
    <div class="drop-box" data-slot="4"></div>
  </div>
  <?php } ?>


   

        <div class="d-flex justify-content-between mt-auto mb-0 px-4">
    <a href="<?php echo base_url('apps/pagesTwentyFour');?>" class="btn px-5 custom-btn">SEBELUMNYA</a>
     <?php if( isset($done) && $done == '1' ){ ?>
    <a href="<?php echo base_url('apps/pagesTwentySix');?>" class="btn px-5 custom-btn">SETERUSNYA</a>
    <?php } ?>
  </div>


      </div>
    </div>
  </div>
</body>
</html>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    const words = document.querySelectorAll(".word");
    const boxes = document.querySelectorAll(".drop-box");
    const wordBank = document.getElementById("wordBank");

    const correctAnswer = ["Ayah", "mencuci", "kereta", "di halaman rumah"];

    words.forEach(word => {
      word.addEventListener("dragstart", e => {
        e.dataTransfer.setData("text", e.target.textContent);
        e.target.classList.add("dragging");
      });

      word.addEventListener("dragend", e => {
        e.target.classList.remove("dragging");
      });
    });

    boxes.forEach(box => {
      box.addEventListener("dragover", e => {
        e.preventDefault();
        box.classList.add("hover");
      });

      box.addEventListener("dragleave", () => {
        box.classList.remove("hover");
      });

      box.addEventListener("drop", e => {
        e.preventDefault();
        box.classList.remove("hover");

        const text = e.dataTransfer.getData("text");

        // Remove the word from any other box
        boxes.forEach(b => {
          if (b.textContent === text) {
            b.textContent = "";
          }
        });

        // Place new word (override if needed)
        box.textContent = text;
         checkAnswer();
      });
    });

    // Allow dragging words back to the word bank
    wordBank.addEventListener("dragover", e => e.preventDefault());
    wordBank.addEventListener("drop", e => {
      e.preventDefault();
      const text = e.dataTransfer.getData("text");
      boxes.forEach(b => {
        if (b.textContent === text) b.textContent = "";
      });
    });

    function checkAnswer() {
        const userAnswer = Array.from(boxes).map(b => b.textContent.trim());
        // Only check when all boxes are filled
        if (userAnswer.every(word => word !== "")) {
            // alert (userAnswer);
            if (JSON.stringify(userAnswer) === JSON.stringify(correctAnswer)) {
            // alert("✅ Betul! Ayat lengkap: Ayah mencuci kereta di halaman rumah.");
            alert("✅ Jawapan Disimpan!");
            insert_log(userAnswer);
            window.location.href = "<?php echo base_url('apps/pagesTwentySix');?>";
            } else {
            // alert("❌ Cuba lagi! Jawapan Salah.");
            alert("✅ Jawapan Disimpan!");
            insert_log_wrong(userAnswer);
            // location.reload();
            window.location.href = "<?php echo base_url('apps/pagesTwentySix');?>";
            }
        }
    }

    function insert_log(userAnswer) {

        $.ajax({
            url: "<?php echo base_url('apps/insertLogActivityTrue');?>",
            type: "POST",
            data: {userAnswer:userAnswer,type:'3'},
            dataType: "json",
            success: function (response) {
            },
        });
    }

    function insert_log_wrong(userAnswer) {
        $.ajax({
            url: "<?php echo base_url('apps/insertLogActivityWrong');?>",
            type: "POST",
            data: {userAnswer:userAnswer,type:'3'},
            dataType: "json",
            success: function (response) {
            },
        });
    }


  </script>