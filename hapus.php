<?php
require ("koneksi.php");
$id_tugas = $_GET['id_tugas'];

$sql = "SELECT * FROM tugas WHERE id_tugas = '$id_tugas'";
$hasil = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($hasil);
$file = $data['file'];

if(file_exists("files/$file")){
    unlink("files/$file");
    $sql = "DELETE FROM tugas WHERE id_tugas = '$id_tugas'";
    $hasil = mysqli_query($conn, $sql);
    $row = mysqli_affected_rows($conn);
    if($row>0){
        echo "
        <script>
        alert('Data berhasil dihapus');
        document.location.href = 'index.php?page=tugas';
        </script>
        ";
    }else {
        echo "
        <script>
        alert('Data gagal dihapus');
        
        </script>
        ";
    }
    
}


?>