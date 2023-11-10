<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Profile</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/">
                Politeknik Negeri Bengkalis | DIV Rekayasa Perangkat Lunak </a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/biodata') }}">Biodata</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/berita') }}">Berita RPL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/profile') }}">Profil Lulusan RPL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/aktivitas') }}">Aktivitas Mahasiswa RPL</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-12">
                <h1 class="text-primary">Profil Lulusan RPL</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <img src="image/saya.jpeg" class="card-img-top" alt="Foto Lulusan 1">
                    <div class="card-body">
                        <h5 class="card-title">Muhammad irfansyah</h5>
                        <p class="card-text">saya lulusan dengan IPK 3.40</p>
                        <a href="#" class="btn btn-primary">Profil Lengkap</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="image/Uda.jpeg" class="card-img-top" alt="Foto Lulusan 2">
                    <div class="card-body">
                        <h5 class="card-title">Adriansyah</h5>
                        <p class="card-text">saya dengan lulusan IPK 3.50</p>
                        <a href="#" class="btn btn-primary">Profil Lengkap</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>