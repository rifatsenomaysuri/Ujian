<?php
include 'config.php';

$id = $_GET['id'];

$sql = "SELECT * FROM mahasiswa WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $NIM = $_POST['NIM'];
    $Nama = $_POST['Nama'];
    $No_HP = $_POST['No_HP'];
    $Alamat = $_POST['Alamat'];

    $sql = "UPDATE mahasiswa SET NIM='$NIM', Nama='$Nama', No_HP='$No_HP', Alamat='$Alamat' WHERE id=$id";

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
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Edit Mahasiswa</h1>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="create.php">Tambah Mahasiswa</a></li>
            </ul>
        </div>
    </header>
    <div class="container">
        <form method="post">
            <label>NIM:</label>
            <input type="text" name="NIM" value="<?php echo $row['NIM']; ?>" required>
            <label>Nama:</label>
            <input type="text" name="Nama" value="<?php echo $row['Nama']; ?>" required>
            <label>No HP:</label>
            <input type="text" name="No_HP" value="<?php echo $row['No_HP']; ?>" required>
            <label>Alamat:</label>
            <textarea name="Alamat" required><?php echo $row['Alamat']; ?></textarea>
            <input type="submit" value="Update Mahasiswa">
        </form>
    </div>
</body>
</html>
