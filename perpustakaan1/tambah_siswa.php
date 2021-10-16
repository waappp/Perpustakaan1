<html>
<head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title></title>
</head>
<body>
    <h3>Tambah Siswa</h3>
    <form action="proses_tambah_siswa.php" method="post">
    
    <br>

    Nama Siswa :
    <input type="text" name="nama_siswa" value="" class="form-control">

    <br>

    Tanggal Lahir :
    <input type="date" name="tanggal_lahir" value="" class="form-control">

    <br>

    Jenis Kelamin :
    <select name="gender" class="form-control">
        <option></option>
        <option value="L">Laki-Laki</option>
        <option value="P">Perempuan</option>
    </select>

    <br>

    Alamat :
    <textarea name="alamat" class="form-control" rows="4"></textarea>

    <br>

    Kelas :
    <select name="id_kelas" class="form-control">
        <option></option>
        
        <?php
        include "koneksi.php";
        $qry_kelas=mysqli_query($conn,"select * from kelas");
            while($data_kelas=mysqli_fetch_array($qry_kelas)){
                echo '<option value="'.$data_kelas['id_kelas'].'">'.$data_kelas['nama_kelas'].'</option>';    
        }
        ?>
    </select>

    <br>

    Jurusan :
    <select name="id_jurusan" class="form-control">
        <option></option>
        
        <?php
        include "koneksi.php";
        $qry_jurusan=mysqli_query($conn,"select * from jurusan");
            while($data_jurusan=mysqli_fetch_array($qry_jurusan)){
                echo '<option value="'.$data_jurusan['id_jurusan'].'">'.$data_jurusan['nama_jurusan'].'</option>';    
        }
        ?>
    </select>

    <br>

    Username :
    <input type="text" name="username" value="" class="form-control">

    <br>

    Password :
    <input type="password" name="password" value="" class="form-control">

    <br>

    <input type="submit" name="simpan" value="Tambah Siswa" class="btn btn-primary">
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>