<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kalkulator Mobile Style</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #4a00e0, #8e2de2);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .calc-box {
      background: #fff;
      padding: 20px;
      border-radius: 20px;
      box-shadow: 0px 10px 20px rgba(0,0,0,0.3);
      width: 320px;
    }
    .btn-calc {
      width: 70px;
      height: 70px;
      margin: 5px;
      font-size: 22px;
      font-weight: bold;
      border-radius: 15px;
    }
    .result-box {
      background: #f8f9fa;
      border-radius: 10px;
      padding: 10px;
      text-align: right;
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 15px;
    }
  </style>
</head>
<body>

<div class="calc-box">
  <h4 class="text-center mb-3">🧮 Kalkulator</h4>
  <form method="post">
      <div class="row g-2">
          <div class="col-6">
              <input type="number" name="a" class="form-control" placeholder="Angka 1" required>
          </div>
          <div class="col-6">
              <input type="number" name="b" class="form-control" placeholder="Angka 2" required>
          </div>
      </div>
      <div class="d-flex flex-wrap justify-content-center mt-3">
          <button type="submit" name="op" value="+" class="btn btn-success btn-calc">+</button>
          <button type="submit" name="op" value="-" class="btn btn-danger btn-calc">-</button>
          <button type="submit" name="op" value="*" class="btn btn-warning btn-calc">×</button>
          <button type="submit" name="op" value="/" class="btn btn-info btn-calc">÷</button>
      </div>
  </form>

  <?php
  if (isset($_POST['op'])) {
      $a = $_POST['a'];
      $b = $_POST['b'];
      $op = $_POST['op'];

      switch ($op) {
          case "+": $hasil = $a + $b; break;
          case "-": $hasil = $a - $b; break;
          case "*": $hasil = $a * $b; break;
          case "/": $hasil = ($b != 0) ? $a / $b : "Error: Bagi nol!"; break;
          default:  $hasil = "Operator tidak valid!";
      }

      echo "<div class='result-box mt-3'>Hasil: $hasil</div>";
  }
  ?>
</div>

</body>
</html>
