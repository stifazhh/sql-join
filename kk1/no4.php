<?php
include 'lib/lib.php';

$sql = "SELECT nomor_item, jenis_package FROM ( SELECT package.nomor_item, package.jenis_package, SUM(det_faktur.qty) AS total_qty FROM det_faktur JOIN package ON det_faktur.nomor_item = package.nomor_item WHERE package.jenis_package = 'sparepart' GROUP BY package.nomor_item, package.jenis_package ) AS subquery ORDER BY total_qty";
$listKonsumen = $mysqli->query($sql);

include 'views/v_no4.php';
?>