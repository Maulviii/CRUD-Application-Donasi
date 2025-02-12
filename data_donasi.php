<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Donasi</title>
</head>
<body>
    <center><h1>Data Donasi</h1></center>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Donatur</th>
                <th>Nominal</th>
                <th>Tanggal Diterima</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $query = "SELECT * FROM donasi";
            $result = mysqli_query($conn, $query);

            $no = 0;
            while ($row = mysqli_fetch_array($result)) {
                $no++; ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $row['nama']?></td>
                <td>Rp. <?= $row['nominal']?></td>
                <td><?= $row['tgl_diterima']?></td>
                <td>
                    <a href="ubah_donasi.php?id=<?= $row['id']?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i>"></a>
                    <a href="hapus_donasi.php?id=<?= $row['id']?>" class="btn btn-danger" onclick="return confirm('Apakah kamu yakin?')"><i class="fa-solid fa-trash-can"></i></a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>