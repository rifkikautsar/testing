<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        require ("koneksi.php");

        function query($query){
            global $conn;
            $hasil = mysqli_query($conn, $query);
            $rows = [];
            while ($rows = mysqli_fetch_assoc($hasil)){
                $rows[] = $rows;
            }
            return $rows;
        }
    ?>
</body>

</html>