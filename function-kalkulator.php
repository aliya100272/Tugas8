<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kalkulator Retro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #000;
      color: #00ff00;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      font-family: "Courier New", monospace;
    }
    .calc-box {
      background: #111;
      border: 2px solid #00ff00;
      padding: 25px;
      border-radius: 10px;
      width: 380px;
      box-shadow: 0 0 20px #00ff00;
    }
    .result-box {
      background: #000;
      color: #00ff00;
      font-size: 26px;
      text-align: right;
      padding: 12px;
      border-radius: 5px;
      border: 1px solid #00ff00;
      margin-bottom: 20px;
      height: 60px;
    }
    .form-control, .form-select {
      background: #000;
      color: #00ff00;
      border: 1px solid #00ff00;
    }
    .form-control::placeholder {
      color: #00ff00;
    }
    .btn-calc {
      background: #000;
      color: #00ff00;
      border: 1px solid #00ff00;
      font-weight: bold;
      width: 100%;
      padding: 10px;
      transition: 0.2s;
    }
    .btn-calc:hover {
      background: #00ff00;
      color: #000;
      box-shadow: 0 0 10px #00ff00;
    }
  </style>
</head>
<body>

<div class="calc-box">
  <h4 class="text-center mb-4">🖥️ Kalkulator Retro</h4>
  <form method="post">
      <div class="row g-2 mb-3">
          <div class="col-6">
              <input type="number" name="a" class="form-control text-center" placeholder="Angka 1" required>
          </div>
          <div class="col-6">
              <input type="number" name="b" class="form-control text-center" placeholder="Angka 2" required>
          </div>
      </div>
      <div class="mb-3">
          <select name="op" class="form-select text-center" required>
              <option value="+">Tambah (+)</option>
              <option value="-">Kurang (−)</option>
              <option value="*">Kali (×)</option>
              <option value="/">Bagi (÷)</option>
          </select>
      </div>
      <button type="submit" class="btn-calc">[ HITUNG ]</button>
  </form>

  <?php
  // Function kalkulator
  function kalkulator($a, $b, $op) {
      switch ($op) {
          case "+": return $a + $b;
          case "-": return $a - $b;
          case "*": return $a * $b;
          case "/": return ($b != 0) ? $a / $b : "Error: Bagi nol!";
          default:  return "Operator tidak valid!";
      }
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $a = $_POST['a'];
      $b = $_POST['b'];
      $op = $_POST['op'];

      $hasil = kalkulator($a, $b, $op);

      echo "<div class='result-box'>$hasil</div>";
  } else {
      echo "<div class='result-box'>0</div>";
  }
  ?>
</div>

</body>
</html>