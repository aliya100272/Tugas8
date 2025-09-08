<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Dark Mode</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #121212;
            color: #fff;
        }
        .card {
            background: #1e1e1e;
            border-radius: 15px;
        }
        .btn-operator {
            width: 60px;
            margin: 5px;
            font-size: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-lg p-4">
                <h3 class="text-center mb-4">🧮 Kalkulator Dark Mode</h3>
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">Angka 1</label>
                        <input type="number" name="a" class="form-control text-center" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Angka 2</label>
                        <input type="number" name="b" class="form-control text-center" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="op" value="+" class="btn btn-success btn-operator">+</button>
                        <button type="submit" name="op" value="-" class="btn btn-danger btn-operator">-</button>
                        <button type="submit" name="op" value="*" class="btn btn-warning btn-operator">×</button>
                        <button type="submit" name="op" value="/" class="btn btn-info btn-operator">÷</button>
                    </div>
                </form>

                <?php
                if (isset($_POST['op'])) {
                    $a = $_POST['a'];
                    $b = $_POST['b'];
                    $op = $_POST['op'];

                    if ($op == "+") {
                        $hasil = $a + $b;
                    } elseif ($op == "-") {
                        $hasil = $a - $b;
                    } elseif ($op == "*") {
                        $hasil = $a * $b;
                    } elseif ($op == "/") {
                        $hasil = ($b != 0) ? $a / $b : "Error: Bagi nol!";
                    } else {
                        $hasil = "Operator tidak valid!";
                    }

                    echo "<div class='alert alert-primary mt-4 text-center rounded-3'>
                            <h4>Hasil: <strong>$hasil</strong></h4>
                          </div>";
                }
                ?>
            </div>
        </div>
    </div>
</div>

</body>
</html>
