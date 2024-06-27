<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<style>
    .PP {
        width: 400px;
        height: 400px;
        border-radius: 10px;
    }

    .about-pp {
        border: solid rgba(255, 255, 255, 0.326) 5px;
        border-radius: 10px;
    }

    .sosmed{
        display: flex;
    }

    .ig{
        width: 150px;
    }

    .x{
        width: 90px;
        padding-top: 50px;
    }

    .wa{
        width: 150px;
    }

    .textx{
        padding-top: 10px;
    }

    a{
        color: white;
        text-decoration: none;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded-4">
        <div class="container-fluid">
            <a class="navbar-brand fs-3" href="#">HaidarPorto</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <button class="btn btn-dark dropdown-toggle fs-5" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Menu
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="/">Home</a></li>
                            <li><a class="dropdown-item" href="/About">About</a></li>
                            <li><a class="dropdown-item" href="/Contact">Contact</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="container-fluid top banner2">
            <div class="container pb-3">
                <h1 class="text-center">Tentang Saya</h1>
                <h2 class="text-center">Ini Adalah Biodata Saya</h2>
            </div>
            <div class="clearfix pt-3  about-pp">
                <div class="clearfix pt-3 d-flex justify-content-center">
                    <img src="/asset/image/PP.jpeg" alt="" class="col-md-6 mb-3 crop-img mx-4 PP">
                    <div class="teks">
                        <h3>Nama : Muhammad Haidar</h3>
                        <h3>Sekolah : SMK Wikrama Bogor</h3>
                        <h3>TTL : Bogor, 11 Maret 2008</h3>
                        <h3>Hobi : Mendengarkan Musik, Bermain Game</h3>
                        <h3>Motto : "Apapun Masalahnya Pasti Ada Jalan Keluar, Tidak Boleh Menyerah, Kamu Lebih Kuat Dari
                            Masalahmu, Percayalah"</h3>
                    </div>
                </div>
                <div class="row pt-4 gx-4 g-4 sosmed">
                    <div class="col-md-4 text-center">
                        <img src="/asset/image/iglog.jpeg" class="ig">
                        <h4><a href="https://www.instagram.com/Kaonapio/">My Instagram</a></h4>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="/asset/image/xlog.jpeg" class="x">
                        <h4 class="textx"><a href="https://x.com/chdradln/">My Twitter/X</a></h4>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="/asset/image/walog.jpeg" class="wa">
                        <h4><a href="https://wa.me/6283804229452">My Whatsapp</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>