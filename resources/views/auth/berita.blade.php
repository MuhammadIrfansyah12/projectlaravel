<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Berita Mahasiswa</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand mr-auto" href="/">Politeknik Negeri Bengkalis | DIV Rekayasa Perangkat Lunak</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="{{ route('berita') }}">Berita</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="{{ route('profile') }}">Profile</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="{{ route('aktivitas') }}">Aktivitas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-4">
        <h1 class="text-center">Berita Mahasiswa</h1>
        <hr>

        <!-- Daftar Berita -->
        <div class="row">
            <!-- Berita 1 -->
            <div class="col-md-12">
                <div class="card mb-4">
                <img src="{{ ('image/Direktur.jpeg') }}" class="card-img-top" alt="Gambar Berita 1">
                    <div class="card-body">
                        <h5 class="card-title">
                        Direktur Polbeng Terima Kunjungan 10 Kampus Perguruan Tinggi
                        Bertempat di Ruang Aula Jurusan Teknik Informatika (TI), Delapan Perguruan Tinggi Vokasi mulai menjalin kerjasama. Diawali dengan ramah tamah, kemudian dilanjutkan dengan penandatanganan MoU oleh Direktur masing-masing Politeknik. Sebagai bentuk Tri Dharma Perguruan tinggi dan sebagai
                         implementasi Program Konsorsium, kolaborasi ini diharapkankan dapat meningkatkan kualitas dari sisi Penelitian dan Pengabdian kepada Masyarakat. .</p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Berita 2 -->
            <div class="col-md-12">
                <div class="card mb-4">
                <img src="{{ ('image/kunjungan.jpeg') }}" class="card-img-top" alt="Gambar Berita 2">
                    <div class="card-body">
                        <h5 class="card-title">Judul Berita 2</h5>
                        <p class="card-text">Deskripsi singkat berita 2.</p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Tambahkan Berita Lainnya di sini -->

        </div>
    </div>

    <!-- Sertakan skrip JavaScript Bootstrap (JQuery dan Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>