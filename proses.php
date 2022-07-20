<?php
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $notelp = $_POST['notelp'];

    $fp = fopen("peminat.txt","a+");
    fputs($fp,"$nama|$umur|$notelp\n");
    fclose($fp);

    header('location: index.php', true, 301);
    exit();
?>