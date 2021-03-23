<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>

<body>
    <table border="1">
        <?php
    require("koneksi.php");
    $nama_tugas = $_POST['nama_tugas'];
    $namaFile = $_FILES['file']['name'];
    $ukuranFile = $_FILES['file']['size'];
    $error = $_FILES['file']['error'];
    $tmpName = $_FILES['file']['tmp_name'];
    //cek apakah ada file upload

    if($error === 4){
        echo "<script>
        alert('Pilih File terlebih dahulu')</script>";
        ?> <script>
        window.location = history.go(-1)
        </script><?php
    }else {
    move_uploaded_file($tmpName, 'files/'.$namaFile);
    $file = $namaFile;
    $sql = "INSERT INTO tugas VALUES ('','$nama_tugas','$file')";
    $hasil = mysqli_query($conn, $sql);
    $row = mysqli_affected_rows($conn);
    if($row>0){
        echo "
        <script>
        alert('Data berhasil diupload');
        document.location.href = 'index.php';
        </script>
        ";
    }else {
        echo "
        <script>
        alert('Data gagal diupload');
        document.location.href = 'index.php';
        </script>
        ";
    }
    }
?>
    </table>
</body>

</html>