<?php
session_start();

$host = 'localhost';
$user = 'root';
$pass = '';
$db ='ijazah';

$mysqli = mysqli_connect($host, $user, $pass, $db)
or die('Tidak dapat koneksi ke Database');