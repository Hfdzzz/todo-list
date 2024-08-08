<?php
session_start();
include 'todolist_db.php';
    
if ($_SERVER['REQUEST_METHOD'] == 'POST'){


    $id = $_POST['id'];

    if (!empty($id) && is_numeric($id)){
    $sql = "DELETE FROM `daftar_kegiatan` WHERE `daftar_kegiatan`.`id` = $id";

    if($conn->query($sql) === TRUE){
        header('Location: index.php');
        exit;
    } else {
        echo "Error : " . $conn->error;
    }
}else{
    echo "id tidak ada";
}

$conn->close();
}else{
    echo "tidak valid";
}



    ?>