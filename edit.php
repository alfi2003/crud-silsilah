<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>

    <!-- Bootstrap ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">

        <?php 
        include "koneksi.php";
        $id = $_GET['id'];
        $query_mysql = $db->query("SELECT * FROM kel_budi WHERE id='$id'")or die(mysqli_error());
        while($data = mysqli_fetch_array($query_mysql)){
        ?>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header">
                        <i class="bi bi-pencil-square"></i> Edit Data
                    </div>
                    <div class="card-body">
                        <form action="update.php" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="nama">Nama:</label>
                                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                                    <input type="text" class="form-control" name="nama"
                                        value="<?php echo $data['nama'] ?>">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                                    <input type="text" class="form-control" name="jenis_kelamin"
                                        value="<?php echo $data['jenis_kelamin'] ?>">
                                </div>
                                <div class="col-md-12 mt-4">
                                    <a href="index.php" class="btn btn-secondary btn-sm">Back to home</a>
                                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- <?php } ?> -->
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>