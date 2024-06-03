<?php
include 'lib/lib.php';

$sql = "SELECT konsumen.nik, konsumen.nama FROM konsumen WHERE nik=ANY(SELECT nik FROM sepeda_motor WHERE tipe_motor='X-RIDE')";
$listKonsumen = $mysqli->query($sql);

include 'views/v_no2.php';
?>