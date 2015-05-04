<?php 
    /**
     * @author: afes oktavianus
     * @abstract: file for generic function and other includes session_start()
     * @version: 1.0
     * @copyright Copyright (c) 2015, Afes Oktavianus
     */

    session_start();
    if(isset($_SESSION['username']))
    {
            session_destroy();
            header('Location:index.php?status=Anda sudah Keluar');
    }else{
            session_destroy();
            header('Location:index.php?status=Silahkan Login!');
    }
?>