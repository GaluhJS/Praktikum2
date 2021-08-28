<h1>Input Mahasiswa</h2>
<?php
        include 'koneksi.php';
        $db = new Database();
        $con=$db->Connect();

        if(isset($_POST['proses']))
        {
            $query=mysqli_query($con, "INSERT into mahasiswa values(
            '".$_POST['npm']."',
            '".$_POST['nama']."'
        )");
        header('location:latihan1.php');
        
        }
?>

<form action="" method="POST">
    <input type="text" name="npm" placeholder="Masukkan NPM"><br>
    <input type="text" name="nama" placeholder="Masukkan Nama"><br>
    <input type="submit" name="proses" value="Simpan">
    <input type='button' onclick=location.href='latihan1.php' value='Batal' />
</form



