<?php
  
    $mysqli = new mysqli('localhost', 'root', '', 'tedc');
    $result = $mysqli->query("SELECT students.nim, students.nama, study_programs.prodi
    FROM students INNER JOIN study_programs ON students.id = study_programs.nomor");

   $students = [];

    while ($row = $result->fetch_assoc()) {
        array_push($students, $row);
    }
    
    $no = 1
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>students</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head> 
<body>
    <div class="container"> 
    <h1 class="text-center"> Data Mahasiswa KA 2021 </h1>   
    
    <a href="tambah_mahasiswa.php" class="btn btn-primary">Add</a>

    <table class="table table-bordered table-hover">
        <tr>
            <th> No </th>
            <th> NIM </th>
            <th> Nama </th>
            <th> Program Studi </th>
        </tr>
        <?php foreach ($students as $row ) { ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['nim']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['prodi']; ?></td>
                <td>
                    <a href="hapus_mahasiswa.php?nim=<?=$row['nim']?>" class="btn btn-danger" onclick="return confirm('Apakah yakin data ini akan dihapus?')">Delete</a>
                    <a href="edit_mahasiswa.php?nim=<?=$row['nim']?>" class="btn btn-success">Edit</a>
             </tr>
        <?php } ?> 
    </table>  
    </div> 
    
</body>
</html>