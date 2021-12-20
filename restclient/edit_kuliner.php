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
    <?php

    require __DIR__ . '/vendor/autoload.php';

    use GuzzleHttp\Client;

    $id = $_GET['id'];
    $client = new Client([
        'base_uri' => 'http://127.0.0.1:8080',
        'timeout' => 5
    ]);

    $response =  $client->request('GET', '/api/idkuliner', [ //post
        'json' => [
            'id' => $id,

        ]
    ]);
    $body = $response->getBody();
    $data_body = json_decode($body);
    ?>
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-5">
                            <h2>Tambah <b>Kuliner</b></h2>
                        </div>
                        <div class="col-sm-7">
                            <a href="kuliner.php" class="btn btn-secondary"><span class="material-icons-outlined">Kembali</span></a>
                        </div>
                    </div>
                </div>
                <form action="edit_data_kuliner.php?id=<?php echo $id?>" method="POST">
                    <div class="mb-3">
                        <label for="name_field" class="form-label">Nama Kuliner</label>
                        <input type="text" class="form-control" id="name_field" name="nama" value="<?php echo $data_body->nama ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="lokasi" class="form-label">Lokasi</label>
                        <input name="lokasi" id="lokasi" class="form-control" value="<?php echo $data_body->lokasi ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $data_body->harga ?>" required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>