<?php
session_start();

    include 'todolist_db.php';
    $kegiatan = $_POST['kegiatan'];
    
    if ($kegiatan != null){
    $sql = "INSERT INTO daftar_kegiatan (kegiatan) VALUES ('$kegiatan')";
    if ($conn->query($sql) === TRUE){
        echo "Data berhasil diperbarui";
        header('Location: index.php?success=berhasil');
    }else {
        echo "Error" . $sql . "<br>" . $conn->error;
    }
}else{
    echo "Data tidak boleh kosong";
}
    header('Location: index.php');
    exit;
    ?>


