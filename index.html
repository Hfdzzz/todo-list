<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Todo List</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Todo List</h1>

        <form action="kirimdata.php" method="POST" class="mb-4">
            <div class="input-group">
                <input type="text" class="form-control" name="kegiatan" placeholder="Apa Yang harus Dilakukan ?">
                <button class="btn btn-primary" type="submit">Tambah Kegiatan</button>
            </div>
        </form>

        <?php
        session_start();
        include "todolist_db.php";

        $sql = "SELECT id, kegiatan FROM daftar_kegiatan";
        $result = $conn->query($sql);

        if($result->num_rows > 0 ){
            echo '<ul class="list-group">';
            while($row = $result->fetch_assoc()){
                echo '<li class="list-group-item d-flex justify-content-between align-items-center">';
                echo htmlspecialchars($row["kegiatan"]);
                echo '<div class="d-flex">';
                echo '<form action="hapusdata.php" method="POST" class="d-inline-block mb-0 me-2">';
                echo '<input type="hidden" name="id" value="' . htmlspecialchars($row["id"]) . '">';
                echo '<button class="btn btn-danger btn-sm" type="submit">Hapus</button>';
                echo '</form>';
               
            }
            echo '</ul>';
        } else {
            echo '<p class="text-muted text-center">Tidak ada kegiatan yang terdaftar.</p>';
        }
        
        ?>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+Xkk+J6c7fJz4lrpuOw6RgM2z6Rj" crossorigin="anonymous"></script>

    <style>
        .btnHapus {
            
        }

    </style>
</body>
</html>
