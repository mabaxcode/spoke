<!DOCTYPE html>
<html lang="en">
<head>
  <title>SPOKe</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="<?php echo base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <script src="<?php echo base_url()?>/assets/js/bootstrap.bundle.min.js"></script>
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

.question-card {
    background-color: #a3d9ff;
    border: 5px solid #5cb5ff;
    border-radius: 20px;
    width: 800px;
    max-width: 90%;
    text-align: center;
    box-shadow: 0 8px 16px rgba(0,0,0,0.2);
  }

  .question-header {
    background-color: #ff6b6b;
    color: white;
    font-size: 1.5rem;
    font-weight: bold;
    padding: 10px;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
  }

  .options {
    padding: 10px;
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

  .options button {
    display: block;
    width: 100%;
    margin: 10px 0;
    background-color: #6ec1ff;
    border: none;
    border-radius: 10px;
    padding: 12px;
    cursor: pointer;
    font-size: 1rem;
    transition: background-color 0.3s, transform 0.2s;
  }

  .options button:hover {
    background-color: #4aa9ff;
    transform: scale(1.03);
  }

  .submit-btn {
    background-color: #ff6b6b;
    color: white;
    font-weight: bold;
    margin-top: 10px;
  }

  .center-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%; /* fill overlay area */
  position: relative;
  margin-top: 190px;
}

  /* Active state for option button */
  .options button.active {
    background-color: #ffb347 !important; /* Highlight color */
    color: #000 !important;               /* Optional text color change */
    font-weight: bold;
    transform: scale(1.05);
  }

  .options button:disabled {
    cursor: not-allowed;
    opacity: 0.7;
  }


  </style>
</head>
<body>
  <div class="d-flex justify-content-center align-items-center full-height">
    <div class="card bg-dark text-white border-0" style="width: 1200px; height: 700px; border-radius: 20px; overflow: hidden;">
      <img src="<?php echo base_url('img/12.png')?>" class="card-img" alt="Paris Background" style="height: 100%;">
      <div class="card-img-overlay d-flex flex-column justify-content-between text-center">


        <div class="center-container">
  <div class="question-card">
    <div class="question-header">Berdasarkan ayat di bawah, yang manakah ayat tunggal yang mempunyai unsur SPOKe</div>
    <div class="options">
      <button id="option1" data-value="A" style="text-align: left;">Aisyah dan Ali membaca.</button>
      <button id="option2" data-value="B" style="text-align: left;">Osman sedang mencuci kereta.</button>
      <button id="option3" data-value="C" style="text-align: left;">Kucing itu tidur.</button>
      <button id="option4" data-value="D" style="text-align: left;">Asyraf sedang menyapu sampah di halaman rumahnya.</button>
      <button id="submitBtn" class="submit-btn" style="background-color: #ff6b6b;">Hantar</button>
      <small style="font-size: 0.8rem; color: black; font-family: sans-serif;">Your name will be shared</small>
    </div>
  </div>
</div>



      <?php /*
        <div class="mt-auto mb-0" align="right">
          <a href="<?php echo base_url('apps/pagesTwelve');?>" class="btn px-5 custom-btn">SETERUSNYA</a>
        </div>
        */?>

<div class="top-buttons">
        <a href="<?php echo base_url();?>" class="btn btn-sm">🏠 Home</a>
          <a href="<?php echo base_url('userlogout');?>" class="btn btn-sm">🚪 Log Keluar</a>
        </div>


   

        <div class="d-flex justify-content-between mt-auto mb-0 px-4">
    <a href="<?php echo base_url('apps/pagesEighteen');?>" class="btn px-5 custom-btn">SEBELUMNYA</a>
  </div>



      </div>
    </div>
  </div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  // Select all option buttons except the submit button
  const optionButtons = document.querySelectorAll('.options button:not(.submit-btn)');
  const submitBtn = document.getElementById('submitBtn');
  let selectedButton = null;

  optionButtons.forEach(button => {
    button.addEventListener('click', () => {
      // Store clicked button as selected
      selectedButton = button;

      // Remove active class from other buttons
      optionButtons.forEach(btn => btn.classList.remove('active'));

      // Add active class to clicked button
      button.classList.add('active');

      // Optionally disable buttons immediately:
      // optionButtons.forEach(btn => btn.disabled = true);
    });
  });

  // Click "Hantar" to finalize selection
  submitBtn.addEventListener('click', () => {
    if (!selectedButton) {
      alert("Sila pilih jawapan terlebih dahulu!");
      return;
    }

    // Highlight the selected button (already active from click)
    optionButtons.forEach(btn => btn.classList.remove('temp-active'));
    selectedButton.classList.add('active');

    // Disable all option buttons to prevent further clicks (optional)
    // optionButtons.forEach(btn => btn.disabled = true);
    // submitBtn.disabled = true;

    // Capture answer
    const answerId = selectedButton.id;
    const answerValue = selectedButton.getAttribute('data-value');
    const answerText = selectedButton.innerText;

    // console.log("Selected Button ID:", answerId);
    console.log("Selected Button Value:", answerValue);
    // alert ("Selected Button Value (for testing only): "+ answerValue);

    const base_url = "<?php echo base_url(); ?>";

    // save answer
    $.ajax({
        url: base_url + "apps/save_answer",
        type: "POST",
        data: {answer_id:answerValue,answer_text:answerText,qtye:"spoke02"},
        dataType: "json",
        success: function (response) {
            if (response.success) {
                window.location.href = "<?php echo base_url('apps/pagesTwentyOne'); ?>";
                // swal("Berjaya!", response.message, "success").then(() => {
                //     window.location.href = base_url + 'app/permohonan';
                // });
            } else {
                alert (response.message);
                // swal("Error!", response.message, "error");
            }
        },
    });
    // console.log("Selected Answer Text:", answerText);
  });
</script>


<style>
  /* Active state for option button */
  .options button.active {
    background-color: #4aa9ff !important; /* Highlight color */
    color: #000 !important;               /* Optional text color change */
    font-weight: bold;
    transform: scale(1.05);
  }

  .options button:disabled {
    cursor: not-allowed;
    opacity: 0.7;
  }
</style>

