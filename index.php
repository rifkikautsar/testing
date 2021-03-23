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
    <title>Home - Rifki</title>
</head>

<body>
    <?php
    include "navbar.html";
    ?>
    <?php
    if(isset($_GET['page'])){
        $page = $_GET['page'];

        switch($page){
            case 'menu':
                include "menu.html";
                break;
            case 'tugas':
                include "tugas.php";
                break;
            case 'about':
                include "about.html";
                break;
            case 'contact':
                include "contact.php";
                break;        
        }
    }
    else{
            include "menu.html";
        }
    ?>
</body>

</html>