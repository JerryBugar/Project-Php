<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Luas Segitiga Sama Kaki</title>
</head>
<body>
    <h2>Hitung Luas Segitiga Sama Kaki</h2>

    <form method="post">
        <label for="alas">Alas:</label>
        <input type="number" name="alas" id="alas" required>

        <label for="lebar">Tinggi:</label>
        <input type="number" name="tinggi" id="tinggi" required>

        <button type="submit">Hitung</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];

        $luas = 0.5 * $alas * $tinggi;

        echo "<p>Luas segitiga sama kaki adalah: " . $luas . "</p>";
    }
    ?>
</body>
</html>