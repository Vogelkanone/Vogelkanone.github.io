<?php 
    include "koneksi.php";
    $cek_user=mysql_num_rows(mysql_query("SELECT * FROM tb_user WHERE userid='$_POST[userid]'"));
    if ($cek_user > 0) {
        echo '<script language="javascript">
              alert ("Username Sudah Ada Yang Menggunakan");
              window.location="Register.php";
              </script>';
              exit();
    }
    else {
        $password    =md5('$_POST[password]');
        mysql_query("INSERT INTO tb_user (userid, nama, alamat, email, hp, password)
        VALUES ('$_POST[userid]', '$_POST[nama]', '$_POST[alamat]', '$_POST[email]', '$_POST[hp]', '$password')");
        
        echo '<script language="javascript">
              alert ("Registrasi Berhasil Di Lakukan!");
              window.location="index.php";
              </script>';
              exit();
    }
?>