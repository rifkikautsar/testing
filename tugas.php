<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />

    <!--Bootstrap Icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" />
    <!---My CSS--->
    <link rel="stylesheet" href="style.css" />
    <!---End My CSS-->
    <title>Muhamad Rifki Kautsar</title>
</head>

<body>
    <section id="tugas">
        <div class="container">
            <h1 class="display-4 p-2">Daftar Tugas</h1>
            <p class="lead p-3">Berikut ini list daftar tugas</p>
        </div>
        </div>
        <center>
            <table class="table-bordered" border="2">
                <thead>
                    <tr>
                        <td scope="col" width=50 class="fw-bold">No</td>
                        <td scope="col" width=150 class="fw-bold">Nama Tugas</td>
                        <td scope="col" width=150 class="fw-bold">Tugas</td>
                        <td scope="col" width=150 class="fw-bold" colspan="2">Action</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require ("koneksi.php");
                    $sql = "select * from tugas";
                    $hasil = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_row($hasil);
                    $n = 1;
                   
                    

                   if(!$row){
                       echo "Tidak ada data yang ditampilkan. Tambahkan Data terlebih dahulu";
                   
                    }else{
                        do {
                            list($id_tugas, $nama_tugas,$file) = $row;
                        ?>
                    <tr>
                        <td><?php echo $n?></td>
                        <td><?php echo $nama_tugas ?></td>
                        <td><?php echo $file?></td>
                        <!--<td><a href="hapus.php?id_tugas=<?php echo "$id_tugas" ?>"
                                onclick="return confirm('Yakin?')">Delete</a>
                        </td>-->
                        <td><a href="#">Download</a></td>
                        <!--<td><?php echo "<a href=editdata.php?id_tugas=$id_tugas>Edit</a>"?></td>
                    </tr>-->
                        <?php
                            $n++;
                        }while($row=mysqli_fetch_row($hasil));
                    }
                    ?>
                </tbody>
            </table>
        </center>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="padding-top: 2rem;">
            <path fill="#a9e2f8" fill-opacity="1"
                d="M0,32L288,192L576,96L864,224L1152,0L1440,128L1440,320L1152,320L864,320L576,320L288,320L0,320Z">
            </path>
        </svg>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>