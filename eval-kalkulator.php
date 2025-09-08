<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kalkulator Flat Minimalis</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f0f2f5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .calc-box {
      background: #fff;
      padding: 20px;
      border-radius: 15px;
      box-shadow: 0px 5px 15px rgba(0,0,0,0.2);
      width: 340px;
    }
    .display {
      background: #222;
      color: #0f0;
      font-size: 28px;
      text-align: right;
      padding: 15px;
      border-radius: 10px;
      margin-bottom: 15px;
      font-family: monospace;
      height: 60px;
    }
    .btn-calc {
      width: 70px;
      height: 60px;
      font-size: 20px;
      margin: 5px;
      border-radius: 10px;
    }
  </style>
</head>
<body>

<div class="calc-box">
  <h5 class="text-center mb-3">🧮 Kalkulator Eval</h5>
  <form method="post">
    <input type="text" name="expr" class="form-control mb-3 text-end" placeholder="Contoh: 12+7*3" required>
    <div class="d-flex flex-wrap justify-content-center">
      <button type="submit" class="btn btn-primary w-100 mb-2">Hitung</button>
    </div>
  </form>

  <?php
  if (isset($_POST['expr'])) {
      $expr = $_POST['expr'];

      // Validasi hanya angka dan operator dasar
      if (preg_match('/^[0-9+\-*/(). ]+$/', $expr)) {
          try {
              eval("\$hasil = $expr;");
              echo "<div class='display'>$hasil</div>";
          } catch (Throwable $e) {
              echo "<div class='display text-danger'>Error</div>";
          }
      } else {
          echo "<div class='display text-danger'>Input tidak valid!</div>";
      }
  } else {
      echo "<div class='display'>0</div>";
  }
  ?>
</div>

</body>
</html>
