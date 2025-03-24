<?php
$conn = new mysqli("localhost", "root", "", "db_kampus");


$sql = "SELECT * FROM mahasiswa";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <table border="1" cellpadding="10">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["NIM"]."</td><td>".$row["Nama"]."</td></tr>";
            }
        } else {
            echo "<tr><td colspan='2'>Tidak ada data</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
