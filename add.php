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
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header">
                        <i class="bi bi-plus-circle"></i> Add Data
                    </div>
                    <div class="card-body">
                        <form action="store.php" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="name">Nama:</label>
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="nama"
                                        require>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                                    <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin"
                                        placeholder="jenis_kelamin" require>
                                </div>
                                <!-- <div class="col-md-12 mt-2">
                                    <label for="message">Message:</label>
                                    <input type="text" class="form-control" name="message" id="message"
                                        placeholder="message">
                                </div> -->
                                <div class="col-md-12 mt-4">
                                    <a class="btn btn-secondary btn-sm" href="index.php">Back to home</a>
                                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>