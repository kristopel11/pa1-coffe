<?php

session_start();
include_once('function.php');

if($_POST['daftar']){
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$alamat = $_POST['alamat'];
	$pekerjaan = $_POST['pekerjaan'];
	$no_telepon= $_POST['no_telepon'];

	$database = new mysqli('127.0.0.1', 'root','','sipc_');
	$query1 = 'INSERT INTO registrasi_course (nama,email,tanggal_lahir,alamat ,pekerjaan,no_telepon) VALUES (?,?,?,?,?,?)';
	$statement1 = $database->prepare($query1);
	$statement1->bind_param('sssssi',$nama,$email,$tanggal_lahir,$alamat,$pekerjaan,$no_telepon);
	$statement1->execute();
	redirect('signup.php');	 
}
?>
