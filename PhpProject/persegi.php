<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Luas Persegi Panjang</title>
</head>
<body>
    <h2>Hitung Luas Persegi Panjang</h2>

    <form method="post">
        <label for="panjang">Panjang:</label>
        <input type="number" name="panjang" id="panjang" required>

        <label for="lebar">Lebar:</label>
        <input type="number" name="lebar" id="lebar" required>

        <button type="submit">Hitung</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];

        $luas = $panjang * $lebar;

        echo "<p>Luas persegi panjang adalah: " . $luas . "</p>";
    }
    ?>
</body>
</html>