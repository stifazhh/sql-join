<?php
include 'lib/lib.php';

$sql = "SELECT no_polisi, no_invoice FROM faktur WHERE no_invoice =ANY(SELECT no_invoice FROM det_faktur WHERE total >100000)";
$listKonsumen = $mysqli->query($sql);

include 'views/v_no3.php';
?>