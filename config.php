<?php 
    $host = "localhost"; 
    $user = "root"; 
    $pass = ""; 
    $db = "dianiputrik_311910803"; 

    $conn = mysqli_connect($host, $user, $pass, $db); 
    if ($conn == false) 
    {echo "Koneksi ke server gagal."; 
        die(); 
        } else 
?>