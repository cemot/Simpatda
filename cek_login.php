<?php

    /**
    * @author: Afes Oktavianus
    * @version: 1.0
    * @abstract: Digunakan untuk melakukan pengecekan user login
    */
    
   error_reporting(0);
   include '../config/functions.inc';
   
   function anti_inject($data)
   {
       $filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data, ENT_QUOTES))));
       return $filter;
   }
   
   $user = anti_inject($_POST['username']);
   $pass = anti_inject(md5($_Post['passlogin']));
   
   if (!ctype_alnum($user) OR !ctype_alnum($pass)) 
   {
       echo "<div id='gagal' class='alert alert-danger'>Login gagal...</div>";
   }
   
   // pastikan username & password berupa huruf atau angka
   $login = sprintf("Select * from sny_m_user where username ='$user' and password ='$pass' and kd_approve='1' ",mysql_real_escape_string($user), mysql_real_escape_string($pass));
   $cek_lagi = mysql_query($login);
   $ketemu = mysql_num_rows($cek_lagi);
   $r = mysql_fetch_array($cek_lagi);
   
   // apabila username & password ditemukan
   if ($ketemu > 0)
   {
       session_start();
       $_SESSION['kode']     = $r['id_user'];
       $_SESSION['nip']     = $r['nip'];
       $_SESSION['namauser']     = $r['username'];
       $_SESSION['passuser']     = $r['pass'];
       $_SESSION['leveluser']    = $r['level_user'];
       $_SESSION['photo']    = $r['photo'];
       $_SESSION['status']    = $r['status'];
       $_SESSION['w_login']    = $r['w_login'];
       $id_user=$_SESSION['kode'];
       
       if($_SESSION['leveluser']==1){
            echo "<div id='sukses' class='alert alert-info'><strong>BERHASIL...</strong><button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button></div><script>window.location ='dashboard.php?id=home'</script>";
            mysql_query("update tbl_user set status=1,w_login=NOW() where id_user='$id_user'");
       } else if($_SESSION['leveluser']==2){
            echo "<div id='sukses' class='alert alert-info'><strong>BERHASIL...</strong><button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button></div><script>window.location ='pegawai.php'</script>";
            mysql_query("update tbl_user set status=1,w_login=NOW() where id_user='$id_user'");
       } if($_SESSION['leveluser']==3){
            echo "<div id='sukses' class='alert alert-info'><strong>BERHASIL...</strong><button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button></div><script>window.location ='absen.php?id=home'</script>";
            mysql_query("update tbl_user set status=1,w_login=NOW() where id_user='$id_user'");
       } if($_SESSION['leveluser']==4){
            echo "<div id='sukses' class='alert alert-info'><strong>BERHASIL...</strong><button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button></div><script>window.location ='payroll.php?id=home'</script>";
            mysql_query("update tbl_user set status=1,w_login=NOW() where id_user='$id_user'");
       } if($_SESSION['leveluser']==5){
            echo "<div id='sukses' class='alert alert-info'><strong>BERHASIL...</strong><button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button></div><script>window.location ='user.php?id=home'</script>";
            mysql_query("update tbl_user set status=1,w_login=NOW() where id_user='$id_user'");
       }
   } else{

       echo "<div id='gagal' class='alert alert-danger'>Mohon maaf username & password anda salah<button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button></div>";
   }
?>
