<?php

    session_start();
    include_once('function.php');
    if(isset($_SESSION['is_logged_in'])){
        redirect('indexx.php');

    }
    if($_POST['login'])
    {
        $username_ = $_POST['username_'];
        $password_ = $_POST['password_'];
        $database = new mysqli('127.0.0.1', 'root','admin','spic_');
        // $database = new mysqli('127.0.0.1', 'root','admin','sipc_');
        $query = 'SELECT * FROM akun WHERE username_=? AND password=?';
        $statement = $database->prepare($query);        
        $statement->bind_param('ss',$username_,$password_); 
        $statement->execute();
        $result_set = $statement->get_result();
        if($result_set->num_rows){
        $hasil = $result_set->fetch_assoc();
        $sttm = $database->prepare('SELECT * FROM customer WHERE username_=?');        
        $sttm->bind_param('s', $username_);
        $sttm->execute();
        $topel = $sttm->get_result();
        $namaa = $topel->fetch_assoc();
        $nama = $namaa['nama'];

            if($hasil['role']==1){
                $_SESSION['is_logged_in'] = TRUE;
                redirect('indexx.php?name=' . $nama);
            }
            else if($hasil['role']==2){
                $_SESSION['is_logged_in'] = TRUE;
                redirect('admin.php?');    
            }
            else if($hasil['role']==3){
                redirect('owner.php');
            }
        }
        else{
            redirect('login.php');
        }
    }
    ?>