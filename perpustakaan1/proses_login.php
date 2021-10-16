<?php 
    if($_POST){
        $username=$_POST['username'];
        $password=$_POST['password'];
        if(empty($username)){
            echo "<script>allert('username tidak boleh kosong'):location.href='login.php':</script>";
        }elseif(empty($password)){
            echo "<script>allert('password tidak boleh kosong'):location.href='login.php':</script>"; 
        }else{
          include "koneksi.php";
          $sqry_login=mysqli_query($conn, "select *from siswa where username = '".$username."' and  password = '".md5($password)."'");
        if(mysqli_num_rows($sqry_login)>0){
            $dt_login=mysqli_fetch_array($sqry_login);
            session_start();
            $_SESSION['id_siswa']=$dt_login['id_siswa'];
            $_SESSION['nama_siswa']=$dt_login['nama_siswa'];
            $_SESSION['status_login']=true;
            header ("location: home.php");
        }else{
            echo "<script>alert('Username dan Password tidak benar');location.href='login.php';</script>";
        }
        }
    }
?>
