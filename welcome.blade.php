<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Project</title>

    <!-- Link to Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap.min.css') }}">

    <!-- Custom CSS -->
    <style>
        body {
            background-color: pink;
        }
        /* Mengatur gambar agar memenuhi setengah bagian kiri */
        .profile-img {
            width: 80%; /* Gambar memenuhi seluruh kolom */
            height: 100vh; /* Tinggi gambar sesuai dengan tinggi layar */
            object-fit: cover; /* Gambar akan dipotong sesuai proporsi */
        }

        h1 {
            margin: 0;
            padding: 0;
            font-family: "Fredoka", sans-serif;
            font-weight: bold; /* Mengubah ke bold */
        }

        p {
            margin: 0;
            padding: 0;
            font-family: "Playfair Display", serif;
            font-weight: normal; /* Atau bisa menggunakan 'bold' */
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Gambar memenuhi setengah bagian kiri -->
            <div class="col-md-6 p-0">
                <img src="{{ asset('assets/ameaw.jpg') }}" class="img-fluid profile-img" alt="Foto Amel">
            </div>
            
            <!-- Teks berada di setengah bagian kanan -->
            <div class="col-md-5 d-flex align-items-center justify-content-center intro-text flex-column text-center">
                <div>
                    <h1>HALO GUYSS!!</h1>
                    <p>Kenalin Aku Amalia Kartika Sari dengan NIM 2209116013, Mahasiswa Universitas Mulawarman</p>
                    <p>Aku memiliki minat di bidang Public Speaking dan IT.</p>
                    <p>Punya minat yang sama dan ingin ngobrol dengan aku?</p>
                </div>
                <!-- Memindahkan tombol di sini -->
                <div class="mt-4"> <!-- Menambahkan margin top untuk jarak -->
                    <a href="{{ route('kenalan') }}" class="btn btn-light">Mau Kenalan?</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Link to Bootstrap JS (if needed) -->
    <script src="{{ asset('assets/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
