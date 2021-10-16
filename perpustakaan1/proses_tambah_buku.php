<?php
if($_POST){
    $judul_buku=$_POST['judul_buku'];
    $penulis=$_POST['penulis'];
    $penerbit=$_POST['penerbit'];
    if(empty($judul_buku)){
        echo "<script>alert('Judul Buku tidak boleh kosong');location.href='tambah_buku.php';</script>";
    } elseif(empty($penulis)){
        echo "<script>alert('Penulis tidak boleh kosong');location.href='tambah_buku.php';</script>";
    } elseif(empty($penerbit)){
        echo "<script>alert('Penerbit tidak boleh kosong');location.href='tambah_buku.php';</script>";
    } else {        
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into buku (judul_buku,penulis,penerbit) value ('".$judul_buku."','".$penulis."','".$penerbit."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan Buku');location.href='tambah_buku.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan Buku :(');location.href='tambah_buku.php';</script>";
        }   
    }
}
?>