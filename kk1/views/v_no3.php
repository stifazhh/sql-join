<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Konsumen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5 ">
        <div class="row">
        <center><h3>Daftar daftar sepeda motor dengan total biaya lebih dari 100000</h3></center>
            <table class="table table-striped table-bordered">
                <tr class="table-dark">
                    <th>No Polisi Motor</th> <th>No Invoice</th>
                 </tr>
                 
                 <tr>
                    <?php
                    $i = 1;
                    while ($konsumen = $listKonsumen->fetch_array()) {
                        ?>
                        <tr>
                            <td><?= $konsumen['no_polisi']?></td>
                            <td><?= $konsumen['no_invoice']?></td>
                            <?php } ?>
                    </tr>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>