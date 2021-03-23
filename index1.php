<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

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

<body id="home">
    <!---Navbar--->
    <nav class="navbar navbar-expand-lg navbar-light shadow fixed-top" style="background-color: #6fd8f8">
        <div class="container">
            <a class="navbar-brand" href="#">
                <script type="text/javascript">
                //<![CDATA[
                var h = new Date().getHours();
                var m = new Date().getMinutes();
                var s = new Date().getSeconds();
                if (h >= 4 && h < 11) document.writeln("Halo, Selamat pagi");
                if (h >= 11 && h < 15) document.writeln("Halo, Selamat siang");
                if (h >= 15 && h < 18) document.writeln("Halo, Selamat sore");
                if (h >= 18 || h < 4) document.writeln("Halo, Selamat malam");
                //]]>
                </script>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home"> <i class="bi bi-house"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tugas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!---Akhir Navbar--->

    <!---Jumbotron--->
    <section class="jumbotron text-center">
        <h1 class="display-4">Selamat Datang!</h1>
        <p class="lead">Website ini digunakan untuk mengumpulkan tugas mata kuliah Aplikasi Teknologi Online</p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#f3f4f5" fill-opacity="1"
                d="M0,288L288,192L576,256L864,192L1152,160L1440,256L1440,320L1152,320L864,320L576,320L288,320L0,320Z">
            </path>
        </svg>
    </section>
    <!---Akhir Jumbotron--->

    <!---Tugas--->

    <!---Akhir Tugas--->

    <!---About--->
    <section id="about" style="background-color: #f3f4f5">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2>About Me</h2>
                    <img src="img/profile.jpg" alt="Muhamad Rifki Kautsar" width="200" />
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis quas praesentium quod,
                        possimus suscipit numquam iusto aspernatur officiis beatae. Reprehenderit, aperiam? Minus quam
                        reprehenderit voluptatum alias libero
                        incidunt temporibus maxime.
                    </p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#a9e2f8" fill-opacity="1"
                d="M0,64L240,256L480,96L720,160L960,96L1200,224L1440,320L1440,320L1200,320L960,320L720,320L480,320L240,320L0,320Z">
            </path>
        </svg>
    </section>
    <!---Akhir About-->

    <!---Contact--->
    <section id="contact">
        <div class="container">
            <div class="row text-center">
                <div class="col mb-3">
                    <h2>Contact Me</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="name" class="form-control" id="name" aria-describedby="name" />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="email" />
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan Anda</label>
                            <textarea class="form-control" id="pesan" rows="4"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!---Akhir Contact-->

    <!---Footer--->
    <footer style="background-color: #6fd8f8" class="p-2 text-white text-center">
        <p>Created by <a href="https://www.instagram.com/mayb009/" class="text-white"
                style="text-decoration: none">Muhamad Rifki</a></p>
    </footer>
    <!---Akhir Footer-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>