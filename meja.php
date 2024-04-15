<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Update Meja</title>
</head>
<body>
    <div class="super-center">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            
                <label>Nama Pelanggan</label>
                <input name="nama_pelanggan">
            
            <!-- Sing nggenah gantien semantic -->
            
                <label>Jumlah Orang</label>
                <input name="jumlah_orang">
            
            <!--  -->
            <button type="submit" name="update">Update Meja</button>
        </form>
    </div>
</body>
</html>