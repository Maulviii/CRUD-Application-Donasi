<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Donasi</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body class="d-flex-column vh-100">
    <nav class="navbar navbar-expand-lg bg-dark sticky-top">
        <div class= "container">
            <a href="index.php" class="navbar-brand text-white fw-bold">UMS Peduli</a>
            <a href="login.php" class="btn btn-primary">Login</a>
        </div>
    </nav>

    <div class="text-white text-center py-5" style="background: url('images/donate.jpg'); background-size:cover; background-position: center;">
        <div class="container">
            <h1 class="fw-bold">UMS Peduli</h1>
            <p class="py-2">Yuk, bantu saudara kita agar dapat mewujudkan mimpinya</p>

            <div class="row bg-dark border border-light">
                <div class="col-md-4">
                    <?php 
                    $query = "SELECT SUM(nominal) AS total_donasi FROM donasi";
                    $result = mysqli_query($conn, $query);
                    $total_donasi = mysqli_fetch_array($result);
                    ?>
                    <h3 class="fw-bold">Rp. <?= $total_donasi['total_donasi'] ?></h3>
                    <p class="text-uppercase">Dana Terkumpul</p>
                </div>  
                <div class="col-md-4">
                    <?php 
                    $query = "SELECT COUNT(*) AS total_donatur FROM donasi";
                    $result = mysqli_query($conn, $query);
                    $total_donatur = mysqli_fetch_array($result);
                    ?>
                    <h3 class="fw-bold"> <?= $total_donatur['total_donasi'] ?></h3>
                    <p class="text-uppercase">Donatur Tergabung</p>
                </div>  
                <div class="col-md-4">
                    <?php 
                    $query = "SELECT tgl_diterima FROM donasi ORDER BY tgl_diterima DESC LIMIT 1";
                    $result = mysqli_query($conn, $query);
                    $tgl_diterima = mysqli_fetch_array($result);
                    ?>
                    <h3 class="fw-bold">Rp. <?= $tgl_diterima ['total_donasi'] ?></h3>
                    <p class="text-uppercase">Tanggal Donasi Terakhir</p>
                </div>  
            </div>
        </div> 
    </div>
    
    <div>
        <div class="bg-dark text-white text-center py-5 mt-auto">
            <h3 class="fw-bold">Terima kasih sudah berdonasi!</h3>
        </div>
    </div>
    <script scr="js/bootstrap.min.js"></script>
</body>
</html>