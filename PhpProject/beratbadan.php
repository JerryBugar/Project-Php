<!DOCTYPE html>
<html>
<head>
    <title>Berat Badan Ideal</title>
    <style>
        body {
        font-family: Arial, sans-serif;
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-image: url('https://png.pngtree.com/thumb_back/fh260/background/20230415/pngtree-website-technology-line-dark-background-image_2344719.jpg'); 
        background-size: cover; 
        background-position: center; 
        }
        h2 {
            color: white;
            text-align: center;
        }
        form {
        background-color: #ffffff2d;
        backdrop-filter: blur(5px);
        padding: 20px;
        border: 5px solid rgba(104, 33, 235, 0.5);
        border-radius: 8%;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        color: white;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: white;
        }
        input[type="number"], select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            color: black;
        }
        button {
            background-color: #593bb4;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            color: #000000;
        }
        p {
            text-align: center;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h2>Cek berat badan ideal</h2>

    <form method="post">
        <label for="berat">Berat badan:</label>
        <br>
        <input type="number" name="berat" id="berat" required>
        <br>
        <br>
        <label for="lebar">Tinggi badan:</label>
        <br>
        <input type="number" name="tinggi" id="tinggi" required>
        <br>
        <br>
        <label for="gender">Jenis Kelamin:</label>
        <br>
        <select name="gender" id="gender" required>
            <option value="laki-laki">Laki-laki</option>
            <option value="perempuan">Perempuan</option>
        </select>
        <br>
        <br>
        <button type="submit">Cek Uhuy</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $berat = $_POST['berat'];
        $tinggi = $_POST['tinggi'];
        $gender = $_POST['gender'];

        if ($gender == "laki-laki") {
            $ideal = ($tinggi - 100) - (($tinggi - 100) * 0.1);
        } else {
            $ideal = ($tinggi - 100) + (($tinggi - 100) * 0.15);
        }

        if ($berat < $ideal) {
            echo "<p>BB tidak ideal</p>";
        } elseif ($berat >= $ideal && $berat <= ($ideal + 5)) { 
            echo "<p>BB ideal</p>"; 
        } else {
            echo "<p>BB  lebih dari ideal rek</p>"; 
        }
    }
    ?>
</body>
</html>