<?php
include 'lib/lib.php';

$sql = "SELECT konsumen.nik, konsumen.nama, sepeda_motor.no_polisi, sepeda_motor.tipe_motor FROM konsumen JOIN ( SELECT nik, no_polisi, tipe_motor FROM sepeda_motor ) sepeda_motor ON konsumen.nik = sepeda_motor.nik";
$listKonsumen = $mysqli->query($sql);

include 'views/v_no1.php';
?>