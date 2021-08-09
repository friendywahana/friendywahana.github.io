<?php
include 'koneksi.php';
    //Data
    $User = $_GET['username'];
    $passwordd = $_GET['pass'];

    //Sintax
    $Sinx_Login="SELECT * from login where username='$User' and password='$passwordd'";
    
    //Sintax to database
    $query = mysqli_query($db, $Sinx_Login);
    
    // apakah query hapus berhasil?
    if( mysqli_num_rows($query) > 0 ){
        //Pndah halaman
        header('Location: ../../uts_web/coba2/');
    }
    else {
        echo '<script>alert("Gagal")</script>';
        header('Location: ../login.html');
    }
 
?>