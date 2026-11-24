<?php
// Mengatur zona waktu ke Waktu Indonesia Barat (WIB)
date_default_timezone_set("Asia/Jakarta");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tanggal Hari Ini</title>
</head>
<body>

    <h1>Selamat Datang</h1>
    <p>Hari Ini Tanggal : <?php echo date("d M y H:i a"); ?></p>

</body>
</html>