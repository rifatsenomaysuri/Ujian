<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $NIM = $_POST['NIM'];
    $Nama = $_POST['Nama'];
    $No_HP = $_POST['No_HP'];
    $Alamat = $_POST['Alamat'];

    $sql = "INSERT INTO mahasiswa (NIM, Nama, No_HP, Alamat) VALUES ('$NIM', '$Nama', '$No_HP', '$Alamat')";

    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Tambah Mahasiswa</h1>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="create.php" class="current">Tambah Mahasiswa</a></li>
            </ul>
        </div>
    </header>
    <div class="container">
        <form method="post">
            <label>NIM:</label>
            <input type="text" name="NIM" required>
            <label>Nama:</label>
            <input type="text" name="Nama" required>
            <label>No HP:</label>
            <input type="text" name="No_HP" required>
            <label>Alamat:</label>
            <textarea name="Alamat" required></textarea>
            <input type="submit" value="Tambah Mahasiswa">
        </form>
    </div>
</body>
</html>
