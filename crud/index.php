<?php
include 'config.php';

$sql = "SELECT * FROM mahasiswa";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1><center>Daftar Mahasiswa</h1>
            <ul>
                <li><a href="index.php" class="current">Home</a></li>
                <li><a href="create.php">Tambah Mahasiswa</a></li>
            </ul>
        </div>
    </header>
    <div class="container">
        <table>
            <tr>
                <th>ID</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>No HP</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['NIM']; ?></td>
                <td><?php echo $row['Nama']; ?></td>
                <td><?php echo $row['No_HP']; ?></td>
                <td><?php echo $row['Alamat']; ?></td>
                <td>
                    <a href="update.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>
