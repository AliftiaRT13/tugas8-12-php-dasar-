<?php
    
    session_start();
    
    $mysqli = new mysqli('localhost', 'root', '', 'tedc');

    $nim = $_GET['nim'];
    $students = $mysqli->query("SELECT * FROM students WHERE nim='$nim'");
    $data = $students->fetch_assoc();

    $study_programs = $mysqli->query("SELECT * FROM study_programs");

    if (isset($_POST['nama'])) {
        $nama = $_POST['nama'];
        $study_programs = $_POST['prodi'];

        $update = $mysqli->query("UPDATE students SET nama='$nama', id=$study_programs WHERE nim='$nim'");

        if($update) {
            $_SESSION['success'] = true;
            $_SESSION['message'] = 'Data Telah Diubah';
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
    <title>Edit Mahasiswa</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <div class ="container">
    <h1 text-align="center" >From Edit Mahasiswa</h1>
    <form method ="POST">
        <div class ="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" value="<?= $data['nim']?>" disabled>
        </div> 
        <div class ="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama']?>">
        </div>
        <div class ="mb-3">
            <label for="prodi" class="form-label">Prodi</label>
            <select class="form-select" id="prodi" name="prodi">
            <?php while ($row = $study_programs->fetch_assoc()) { ?>
                <option value="<?= $row['nomor'] ?>" <?= $row['nomor'] == $data['id'] ? 'selected' : '' ?>><?= $row['prodi']?></option>
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