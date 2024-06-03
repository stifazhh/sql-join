<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INNER JOIN</title>
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Daftar Identitas Siswa Beserta Program dan Konsentrasi Keahliannya</h1>
        
        <table class="table table-bordered table-striped">
            <thead class="table-danger">
                <tr>
                    <th>NO</th>
                    <th>NIS</th>
                    <th>Nama Siswa</th>
                    <th>Konsentrasi Keahlian</th>
                    <th>Program Keahlian</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                while ($siswa = $listSiswa->fetch_array()) {
                ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $siswa['nis']?></td>
                    <td><?= $siswa['nama_siswa']?></td>
                    <td><?= $siswa['nama_konli']?></td>
                    <td><?= $siswa['nama_prolli']?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
