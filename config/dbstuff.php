<?php
    /**
     * @author: afes oktavianus
     * @abstract: file for connection application with db 
     * @version: 1.0
     * @copyright Copyright (c) 2015, Afes Oktavianus
     */
    define("DBHOST", "localhost");
    define("DBUSER", "root");
    define("DBPASS", "revisoft012686");
    define("DB", "sny_simpatda");
    
    $dbcon = mysql_connect(DBHOST,DBUSER,DBPASS);
    if ($dbcon){        
        if (!mysql_select_db(DB)) {
            die ('<p>Gagal Akses Basis Data Karena : '.mysql_error().'</p>');
        }
    } else {
        echo "Koneksi Database Gagal".mysql_error();
    }
        
?>