<?php

require __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'http://127.0.0.1:8080',
    'timeout' => 5 //timeout 5 detik
]);

$response =  $client->request('GET', '/api/kuliner');
$body = $response->getBody();
$data_body = json_decode($body);

?>

<html>

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <!-- end datatable -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
            $('#tabel-undangan').DataTable();
        });
    </script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <div class="collapse navbar-collapse mx-2" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link" href="index.php">Wisata</a>
                    <a class="nav-link" href="kuliner.php">Kuliner</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-xl pt-5">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-5">
                            <h2>Daftar <b>Kuliner</b></h2>
                        </div>
                        <div class="col-sm-7">
                            <a href="add_kuliner.php" class="btn btn-secondary"><span class="material-icons-outlined">Tambah Data</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover" id="tabel-undangan" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kuliner</th>
                            <th>Lokasi</th>
                            <th>Harga</th>
                            <th>Fitur</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_body as $data) { ?>
                            <!-- looping dengan foreach -->
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data->nama; ?></td>
                                <td><?php echo $data->lokasi; ?></td>
                                <td><?php echo $data->harga; ?></td>
                                <td>
                                    <a href="delete_kuliner.php?id=<?php echo $data->id ?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                    <a href="edit_kuliner.php?id=<?php echo $data->id ?>"><button type="button" class="btn btn-warning">Edit</button></a>

                                </td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>