<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kalkulator Array Neon</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #0f0f0f;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      color: #fff;
    }
    .calc-box {
      background: #1c1c1c;
      padding: 20px;
      border-radius: 20px;
      box-shadow: 0px 0px 25px rgba(0,255,200,0.6);
      width: 360px;
    }
    .display {
      background: #000;
      color: #39ff14;
      font-size: 28px;
      text-align: right;
      padding: 15px;
      border-radius: 10px;
      margin-bottom: 15px;
      font-family: monospace;
      height: 60px;
    }
    .btn-calc {
      width: 75px;
      height: 60px;
      margin: 5px;
      font-size: 20px;
      font-weight: bold;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0,255,200,0.5);
      transition: 0.2s;
    }
    .btn-calc:hover {
      transform: scale(1.1);
      box-shadow: 0px 0px 20px rgba(0,255,200,1);
    }
  </style>
</head>
<body>

<div class="calc-box">
  <h4 class="text-center mb-3">🧮 Kalkulator Array Neon</h4>
  <form method="post">
    <div class="row g-2 mb-3">
      <div class="col-6">
        <input type="number" name="a" class="form-control text-center" placeholder="Angka 1" required>
      </div>
      <div class="col-6">
        <input type="number" name="b" class="form-control text-center" placeholder="Angka 2" required>
      </div>
    </div>
    <div class="d-flex flex-wrap justify-content-center">
      <button type="submit" name="op" value="+" class="btn btn-success btn-calc">+</button>
      <button type="submit" name="op" value="-" class="btn btn-danger btn-calc">−</button>
      <button type="submit" name="op" value="*" class="btn btn-warning btn-calc">×</button>
      <button type="submit" name="op" value="/" class="btn btn-info btn-calc">÷</button>
    </div>
  </form>

  <?php
  if (isset($_POST['op'])) {
      $a = $_POST['a'];
      $b = $_POST['b'];
      $op = $_POST['op'];

      // Array mapping operator ke fungsi
      $ops = [
          "+" => fn($x,$y) => $x + $y,
          "-" => fn($x,$y) => $x - $y,
          "*" => fn($x,$y) => $x * $y,
          "/" => fn($x,$y) => $y != 0 ? $x / $y : "Error: Bagi nol!"
      ];

      $hasil = isset($ops[$op]) ? $ops[$op]($a,$b) : "Operator tidak valid!";

      echo "<div class='display mt-3'>$hasil</div>";
  } else {
      echo "<div class='display'>0</div>";
  }
  ?>
</div>

</body>
</html>
