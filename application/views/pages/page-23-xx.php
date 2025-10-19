<!DOCTYPE html>
<html lang="ms">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Susun Ayat Tunggal</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #cce6ff;
      text-align: center;
      margin: 0;
      padding: 20px;
    }

    .instruction {
      font-weight: bold;
      font-size: 18px;
      background: white;
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
      width: 100px;
      height: 40px;
      background: #8fffb2;
      border: 3px solid #3b0b75;
      border-radius: 20px;
      text-align: center;
      line-height: 40px;
      font-weight: bold;
      font-size: 16px;
    }

    .drop-box.hover {
      background-color: #70e090;
    }
  </style>
</head>
<body>

  <div class="instruction">
    Berdasarkan gambar tersebut, susun perkataan di bawah pada petak berwarna hijau untuk membina ayat tunggal.
  </div>

  <div class="word-bank" id="wordBank">
    <div class="word" draggable="true">membaca</div>
    <div class="word" draggable="true">setiap hari</div>
    <div class="word" draggable="true">buku</div>
    <div class="word" draggable="true">Abang</div>
  </div>

  <div class="image-area">
    <img src="https://i.ibb.co/Zx2bsb3/boy-reading.png" alt="Abang membaca buku" width="250">
  </div>

  <div class="drop-area">
    <div class="drop-box" data-slot="1"></div>
    <div class="drop-box" data-slot="2"></div>
    <div class="drop-box" data-slot="3"></div>
    <div class="drop-box" data-slot="4"></div>
  </div>

  <script>
    const words = document.querySelectorAll(".word");
    const boxes = document.querySelectorAll(".drop-box");
    const wordBank = document.getElementById("wordBank");

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
  </script>
</body>
</html>
