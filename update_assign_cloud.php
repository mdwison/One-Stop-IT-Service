<?php
    require_once 'koneksi.php';
    
    if(ISSET($_POST['update'])){
        $no_form = mysqli_real_escape_string($con, $_POST['no_form']);
        $assign_to = mysqli_real_escape_string($con, $_POST['assign_to']);
    
        // mysqli_query($con, "UPDATE email SET status_transaksi = '$status_transaksi' WHERE 'no_form' = '$no_form'") or die(mysqli_error());
        mysqli_query($con, "UPDATE `cloud` SET `assign_to` = '$assign_to' WHERE `no_form` = '$no_form'") or die(mysqli_error());
        echo "<script>
         alert('Data berhasil di simpan');
         window.location.href='http://localhost/prakomxiv/dashboard';
         </script>";
    }
?>