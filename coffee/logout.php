<?php
    session_start();
    include_once('function.php');
    destroy_session('is_logged_in');
    redirect('indexx.php');
?>