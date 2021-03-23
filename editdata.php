<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />

    <!--Bootstrap Icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" />
    <!---My CSS--->
    <link rel="stylesheet" href="style.css" />
    <!---End My CSS-->
    <title>Document</title>
</head>

<body class="input">
    <section>
        <form action="" method="POST">
            <div class="container">
                <?php
            require ("koneksi.php");
            $id_tugas = $_GET['id_tugas'];
            $sql = "SELECT * FROM tugas WHERE id_tugas='$id_tugas'";
            $hasil = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($hasil);
            ?>
                <div class="row">
                    <div class="col">
                        <h2>Form Edit File Tugas</h2>
                    </div>
                    <div class="row justify-content-center p-3">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="nama_tugas" class="form-label">Nama Tugas</label>
                                <input type="text" class="form-control" name="nama_tugas" id="nama_tugas" required
                                    value="<?php echo "$row[nama_tugas]" ?>" />
                            </div>
                            <div class="mb-3">
                                <input type="hidden" class="form-control" name="id_tugas" id="id_tugas" required
                                    value="<?php echo "$row[id_tugas]" ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="file" class="form-label">File</label>
                                <input type="text" class="form-control" name="file" id="file" required
                                    value="<?php echo"$row[file]"?>" readonly />
                            </div>
                            <input type="submit" name="submit" id="submit" />
                            <input type="reset" name="reset" id="reset" />
                        </div>
                    </div>
                </div>
                <?php
                if (isset($_POST['submit'])){
                    $nama_tugas = $_POST['nama_tugas'];
                    $sql = "UPDATE tugas SET nama_tugas = '$nama_tugas'
                            WHERE id_tugas = '$id_tugas'";
                    $hasil = mysqli_query($conn, $sql);
                    ?> <script>
                alert("Data berhasil diubah");
                window.location.href = "index.php?page=tugas";
                </script>
                <?php
                } 
                
                ?>
            </div>
        </form>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>