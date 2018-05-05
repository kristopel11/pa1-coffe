<?php

session_start();
include_once('function.php');

if($_POST['signup']){
	$nama = $_POST['nama'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$alamat = $_POST['alamat'];
	
	$username_ = $_POST['username_'];
	$password_ = $_POST['password_'];
	$email = $_POST['email'];
	$role = '1';
	
	$database = new mysqli('127.0.0.1', 'root','','sipc_');
	$query = 'INSERT INTO akun (username_,password_,role) VALUES (?,?,?)';
	$statement = $database->prepare($query);
	$statement->bind_param('ssi',$username_,$password_,$role);
	$statement->execute();
	$query1 = 'INSERT INTO customer (nama,tanggal_lahir ,alamat ,username_ ,email) VALUES (?,?,?,?,?)';
	$statement1 = $database->prepare($query1);
	$statement1->bind_param('sssss',$nama,$tanggal_lahir,$alamat,$username_,$email);
	$statement1->execute();
	redirect('login.php');	 
}