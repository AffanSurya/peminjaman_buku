<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'] ?></title>
    <link href="http://localhost/peminjaman_buku/public/css/bootstrap.css" rel="stylesheet">
    <link href="http://localhost/peminjaman_buku/public/css/style1.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="z-index: 100;">
        <div class="container-fluid container">
            <a class="navbar-brand" href="http://localhost/peminjaman_buku/public/home">PinBuk</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active text-warning" aria-current="page" href="http://localhost/peminjaman_buku/public/home">Home</a>
                    <a class="nav-link" href="http://localhost/peminjaman_buku/public/sewa">Daftar Penyewa</a>
                    <a class="nav-link" href="http://localhost/peminjaman_buku/public/daftarAnggota">Daftar Anggota</a>
                    <a class="nav-link" href="http://localhost/peminjaman_buku/public/buku"> Daftar Buku</a>
                </div>
            </div>
        </div>
    </nav>