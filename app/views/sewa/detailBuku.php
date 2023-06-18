<div class="container mt-5">
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?= $data['buku']['judul'] ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= $data['buku']['isbn'] ?></h6>
                <p class="card-text">Pengarang: <?= $data['buku']['pengarang'] ?></p>
                <p class="card-text">Penerbit: <?= $data['buku']['penerbit'] ?></p>
                <a href="http://localhost/peminjaman_buku/public/sewa" class="badge text-bg-primary" style="text-decoration: none;">Kembali</a>
            </div>
        </div>
    </div>
</div>