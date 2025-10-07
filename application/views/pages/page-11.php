<!DOCTYPE html>
<html lang="en">
<head>
  <title>Centered Card with Background</title>
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
    font-size: 1rem;
    font-weight: bold;
    padding: 15px;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
  }

  .options {
    padding: 20px;
  }

  .options button {
    display: block;
    width: 100%;
    margin: 10px 0;
    background-color: #6ec1ff;
    border: none;
    border-radius: 10px;
    padding: 10px;
    cursor: pointer;
    font-size: 0.7rem;
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
  margin-top: 200px;
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
    <div class="card bg-dark text-white border-0" style="width: 900px; height: 700px; border-radius: 20px; overflow: hidden;">
      <img src="<?php echo base_url('img/page-11.png')?>" class="card-img" alt="Paris Background" style="height: 100%;">
      <div class="card-img-overlay d-flex flex-column justify-content-between text-center">


        <div class="center-container">
  <div class="question-card">
    <div class="question-header">Apakah maksud ayat tunggal?</div>
    <div class="options">
      <button id="option1" data-value="A" style="text-align: left;">A. Ayat tunggal ialah ayat yang mengandungi dua subjek dan dua predikat.</button>
      <button id="option2" data-value="B" style="text-align: left;">B. Ayat tunggal ialah ayat yang mengandungi satu subjek dan dua predikat.</button>
      <button id="option3" data-value="C" style="text-align: left;">C. Ayat tunggal ialah ayat.</button>
      <button id="option4" data-value="D" style="text-align: left;">D. Ayat tunggal ialah ayat yang mengandungi satu subjek dan satu predikat.</button>
      <button id="submitBtn" class="submit-btn" style="background-color: #ff6b6b;">Hantar</button>
      <small style="font-size: 0.8rem; color: black; font-family: sans-serif;">Your name will be shared</small>
    </div>
  </div>
</div>


        
        <!-- Bottom content -->
       <div class="mt-auto mb-1">
            <p style="color: black;">Klik butang untuk ke halaman seterusnya <a href="<?php echo base_url('apps/pagesTwelve');?>">
                <img src="<?php echo base_url('img/next.png')?>" 
                    alt="Next Button" 
                    style="height: 50px; cursor: pointer; transition: transform 0.2s;"
                    onmouseover="this.style.transform='scale(1.1)'"
                    onmouseout="this.style.transform='scale(1)'">
            </a></p>
            
            </div>


      </div>
    </div>
  </div>
</body>
</html>

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
    alert ("Selected Button Value (for testing only): "+ answerValue);
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

