<?php
    if($_POST){
        $Nama=$_POST['Nama'];
        $Class=$_POST['Class'];
        $Email=$_POST['Email'];
        $Phone=$_POST['Phone'];
        $Date=$_POST['Date'];
        $Send=$_POST['Send'];
        if(empty($Nama)){
            echo "<script>alert('Nama kategori tidak boleh kosong');location.href='process.php'</script>";
        }
        else {
            include "koneksi.php";
            $insert=mysqli_query($koneksi,"insert into person (Name, Class, Email, Phone, Date, Send)
            value ('".$Nama."','".$Class."','".$Email."','".$Phone."','".$Date."','".$Send."')") or 
            die(mysqli_error($koneksi));
            if($insert){
                echo "<script>alert('Sukses menambahkan data');location.href='index.php';</script>";
            }
            else {
                echo "<script>alert('Gagal menambahkan data');location.href='index.php';</script>";
            }
        }
    }
?>