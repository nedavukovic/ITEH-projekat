<?php
if (isset($_GET['sifra'])) {
    

    $sifra = $_GET["sifra"];
//   PROVERA SIFRE 
    if (preg_match('/\\d/', $sifra) == 0) {
        echo "0";
    } else {
        echo "1";
    }
}