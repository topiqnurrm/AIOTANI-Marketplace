<?php
    $value1 = 'ani';
    $value2 = 'Ani Roma';
    setcookie("username", $value1);
    setcookie("nama_lengkap", $value2, time()+3600); //loginnya expired 1 jam
    echo "<h2>Ini halaman untuk set cookie</h2>";
    echo "<h2>Klik <a href='cookies2.php'>disini </a> untuk mengecek cookies.";
?>