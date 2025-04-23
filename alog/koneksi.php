<?php
    
    $data = mysqli_connect("localhost","root","","desaciomas");

    if (!$data){
        echo'gagal';
    }else{
        echo'berhasil';
    }
?>