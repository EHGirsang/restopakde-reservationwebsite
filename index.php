<?php
    require_once("services/db.php");
    session_start();
    define("APP_NAME", "Resto Pakde - Website reservasi meja makan");
    // 
    $select_meja_query = "SELECT * FROM meja";
    $select_meja = $db->query($select_meja_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title> <?= APP_NAME ?> </title>
</head>
<body>
    <h1 align="center">Daftar Meja</h1>
    <!--  -->
    <div class="container">
        <?php
            foreach ($select_meja as $meja) {
        ?>
        <!--  -->
        <div class="card" onclick="goToMeja(`<?= $meja['no_meja'] ?>`,`<?= $meja['nama_pelanggan'] ?>`)">
            <b><?= $meja['tipe_meja'] . " " . $meja['no_meja'] ?></b>
            <!--  -->
            <p>
                <?php echo $meja['nama_pelanggan'] == null && $meja['jumlah_orang'] == null ?
                "meja kosong" : $meja['nama_pelanggan'] . " " . $meja['jumlah_orang'] . " Orang"
                ?>
            </p> 
        </div>
        <!--  -->
        <?php } ?>
    </div>
    <!-- gap -->
    <script>
        function goToMeja(no_meja, nama_pelanggan) {
            const url = "meja.php";
            const params = `?no_meja=${no_meja}&nama_pelanggan=${nama_pelanggan}`
            // fucking gap
            window.location.replace(url, params);
        }
    </script>
</body>
</html>