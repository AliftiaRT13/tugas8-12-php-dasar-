<?php

    $mysqli = new mysqli('localhost', 'root', '', 'tedc');

    $study_programs = $mysqli->query("Select * from study_programs");
    if (isset($_POST['nim']) && isset($_POST['nama'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];

        $insert = $mysqli->query("INSERT INTO students(nim, nama, id) VALUES ('$nim','$nama','$prodi')");
        if ($insert) {
            header("Location: mahasiswatedc.php");
            exit();
        }
    }
    
?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <div class ="container">
    <h1 class="text-center">From Tambah Mahasiswa</h1>

    <form method ="POST">
        <div class= "mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim">
        </div>
        <div class ="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class ="mb-3">
            <label for="prodi" class="form-label">Prodi</label>
            <select class="form-select" id="prodi" name="prodi" required>
            <option value="">Pilih Program Studi</option>
                <?php while ($row = $study_programs->fetch_assoc()) { ?>
                    <option value="<?= $row['nomor']; ?>">
                     <?= $row['prodi']; ?>
                     </option>
                 <?php } ?>
                </select>
        </div>
        <div class="mt-3">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="mahasiswatedc.php" class="btn btn-warning">Cancel</a>
         </div>
    </form>
    
</body>
</html>