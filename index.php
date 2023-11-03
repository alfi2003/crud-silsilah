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
    <div class="container">

        <?php 
            if(isset($_GET['pesan'])){
                $pesan = $_GET['pesan'];
                if($pesan == "add"){
                    // echo "Data added successfully.";
                    echo '<script>alert("Data added successfully.")</script>';                    
                }else if($pesan == "update"){
                    // echo "Data successfully updated.";
                    echo '<script>alert("Data successfully updated.")</script>';
                }else if($pesan == "delete"){
                    // echo "Data successfully deleted";
                    echo '<script>alert("Data successfully deleted.")</script>';
                }
            }
	    ?>
        <br>

        <div class="card shadow mt-2">
            <div class="card-header">Data Silsila</div>
            <div class="card-body">
                <a class="btn btn-success btn-sm" href="add.php"><i class="bi bi-plus-circle"></i> Add data</a>
                <div class="table-responsive mt-2">
                    <table class="table table-bordered" style="witdh:100%">
                        <tr>
                            <th class="bg-dark text-white text-center">No</th>
                            <th class="bg-dark text-white">Name</th>
                            <th class="bg-dark text-white">Jensi Kelamin</th>
                            <!-- <th class="bg-dark text-white">Message</th> -->
                            <th class="bg-dark text-white text-center">Action</th>
                        </tr>
                        <?php 
                            include "koneksi.php";
                            $query_mysql = $db->query("SELECT * FROM kel_budi")or die(mysqli_error());
                            $nomor = 1;
                            while($data = mysqli_fetch_array($query_mysql)){
                        ?>
                        <tr>
                            <td class="text-center"><?php echo $nomor++; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['jenis_kelamin']; ?></td>
                            <td class="text-center">
                                <a class="btn btn-warning btn-sm" href="edit.php?id=<?php echo $data['id']; ?>"><i
                                        class="bi bi-pencil-square"></i></a>
                                <a class="btn btn-danger btn-sm" href="destroy.php?id=<?php echo $data['id']; ?>"><i
                                        class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>