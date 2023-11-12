<?php
    session_start();

    $_SESSION['id_user']='';
    $_SESSION['nama']='';
    $_SESSION['email']='';
    $_SESSION['ttl']='';
    $_SESSION['alamat']='';
    $_SESSION['no_tlp']='';
    $_SESSION['picture']='';
    $_SESSION['jenis_kelamin']='';
    
    unset($_SESSION['id_user']);
    unset($_SESSION['nama']);
    unset($_SESSION['email']);
    unset($_SESSION['ttl']);
    unset($_SESSION['alamat']);
    unset($_SESSION['no_tlp']);
    unset($_SESSION['jenis_kelamin']);
    unset($_SESSION['picture']);
    
    session_unset();
    session_destroy();
    header('Location:../view/login.php');
?>