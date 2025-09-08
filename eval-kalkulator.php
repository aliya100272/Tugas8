<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Eval PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f1f1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: #222;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0,0,0,0.3);
            width: 300px;
        }
        h2 {
            text-align: center;
            color: #fff;
            margin-bottom: 20px;
        }
        input, select, button {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            font-size: 1.1em;
            border-radius: 8px;
            border: none;
        }
        input, select {
            background: #333;
            color: #fff;
        }
        button {
            background: #007aff;
            color: #fff;
            cursor: pointer;
            font-weight: bold;
        }
        button:hover {
            background: #3399ff;
        }
        .hasil {
            margin-top: 15px;
            padding: 10px;
            background: #000;
            color: #0f0;
            font-size: 1.2em;
            text-align: center;
            border-radius: 8px;
        }
        .error {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Kalkulator (Versi Eval)</h2>
        <form method="post" action="">
            <input type="number" name="angka1" placeholder="Masukkan angka pertama" required>
            <select name="operator">
                <option value="+">+</option>
                <option value="-">−</option>
                <option value="*">×</option>
                <option value="/">÷</option>
            </select>
            <input type="number" name="angka2" placeholder="Masukkan angka kedua" required>
            <button type="submit" name="hitung">Hitung</button>
        </form>

        <?php
        if (isset($_POST['hitung'])) {
            $angka1 = $_POST['angka1'];
            $angka2 = $_POST['angka2'];
            $operator = $_POST['operator'];

            // Buat ekspresi string (contoh: "5+3")
            $ekspresi = $angka1 . $operator . $angka2;

            try {
                // Evaluasi ekspresi dengan eval()
                eval("\$hasil = $ekspresi;");
                echo "<div class='hasil'>$ekspresi = $hasil</div>";
            } catch (Throwable $e) {
                echo "<div class='error'>Terjadi kesalahan perhitungan</div>";
            }
        }
        ?>
    </div>
</body>
</html>