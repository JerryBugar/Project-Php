<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Input Data Mahasiswa</h2>
        
        <!-- Form Input Data -->
        <form method="POST" action="">
            <div class="form-group">
                <label>Nama Mahasiswa:</label>
                <input type="text" name="nama" required>
            </div>
            <div class="form-group">
                <label>Nilai:</label>
                <input type="number" name="nilai" min="0" max="100" required>
            </div>
            <input type="submit" name="submit" value="Tambah Data">
        </form>

        <?php
        // biar gk ngebug tinggal close chrome trs buka lagi
        if (isset($_GET['clear'])) {
        session_destroy();
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
        }
        
        // Inisialisasi session untuk menyimpan data
        session_start();
        
        // Proses reset data jika tombol reset ditekan
        if (isset($_POST['reset'])) {
            $_SESSION['mahasiswa'] = array(
                array("nama" => "Jepri Uhuy", "nilai" => 85),
                array("nama" => "Ronaldo", "nilai" => 92)
            );
            // Redirect ke halaman yang sama tanpa POST data
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        }

        // Inisialisasi array mahasiswa jika belum ada
        if (!isset($_SESSION['mahasiswa'])) {
            $_SESSION['mahasiswa'] = array(
                array("nama" => "Jepri Uhuy", "nilai" => 85),
                array("nama" => "Ronaldo", "nilai" => 92)
            );
        }

        // Proses form jika ada submit
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $nilai = $_POST['nilai'];
            
            // Tambah data baru ke array
            $_SESSION['mahasiswa'][] = array(
                "nama" => $nama,
                "nilai" => $nilai
            );
            
            // biar gk reload
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        }

        // Tampilkan data dalam tabel
        if (!empty($_SESSION['mahasiswa'])) {
            echo "<h3>Daftar Nilai Mahasiswa</h3>";
            echo "<table>";
            echo "<tr><th>No</th><th>Nama</th><th>Nilai</th><th>Status</th></tr>";
            
            $no = 1;
            $totalNilai = 0;
            
            foreach ($_SESSION['mahasiswa'] as $data) {
                echo "<tr>";
                echo "<td>" . $no++ . "</td>";
                echo "<td>" . $data['nama'] . "</td>";
                echo "<td>" . $data['nilai'] . "</td>";
                echo "<td>" . ($data['nilai'] >= 80 ? "Lulus" : "Tidak Lulus") . "</td>";
                echo "</tr>";
                
                $totalNilai += $data['nilai'];
            }
            
            $rataRata = $totalNilai / count($_SESSION['mahasiswa']);
            
            echo "</table>";
            
            echo "<h3>Statistik</h3>";
            echo "<p>Total Nilai: " . $totalNilai . "</p>";
            echo "<p>Rata-rata Nilai: " . number_format($rataRata, 2) . "</p>";
            
            // Tampilkan mahasiswa yang lulus
            echo "<h3>Mahasiswa yang Lulus (Nilai >= 80)</h3>";
            echo "<ul>";
            foreach ($_SESSION['mahasiswa'] as $data) {
                if ($data['nilai'] >= 80) {
                    echo "<li>" . $data['nama'] . " (Nilai: " . $data['nilai'] . ")</li>";
                }
            }
            echo "</ul>";
        }
        ?>
        
        <!-- Tombol Reset Data -->
        <form method="POST" action="">
            <input type="submit" name="reset" value="Reset Data" style="background-color: #f44336;">
        </form>
    </div>
</body>
</html>