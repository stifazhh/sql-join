<?php
include 'lib/library.php';

$sql = 'SELECT siswa.nis, siswa.nama_siswa, konli.nama_konli, konli.nama_prolli FROM siswa INNER JOIN konli ON siswa.kd_konli = konli.kd_konli';
$listSiswa = $mysqli->query($sql);

include 'views/v_index.php';