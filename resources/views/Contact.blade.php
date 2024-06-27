<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

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
        <div class="container-fluid banner3">
            <div class="container">
                <div class="pb-4">
                    <h1 class="text-center">Hubungi Saya</h1>
                    <h3 class="text-center">Ada Saran Untuk Website Saya? Beri tahu itu</h3>
                </div>
                <div class="row pb-3">
                    <div class="col-md-6">
                        <input type="text" class="form-control form-control-lg mb-3 " placeholder="Nama">
                        <input type="email" class="form-control form-control-lg mb-3" placeholder="Email">
                        <input type="text" class="form-control form-control-lg" placeholder="No. Telp">
                    </div>
                    <div class="col-md-6">
                        <textarea class="form-control form-control-lg" rows="5"></textarea>
                    </div>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-secondary" type="button">kirim</button>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>