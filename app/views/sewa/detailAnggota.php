<div class="container mt-5">
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?= $data['anggota']['nama'] ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= $data['anggota']['id_anggota'] ?></h6>
                <p class="card-text">Jenis kelamin: <?= $data['anggota']['jenis_kelamin'] ?></p>
                <p class="card-text">No Telepon: <?= $data['anggota']['no_telepon'] ?></p>
                <p class="card-text">Email: <?= $data['anggota']['email'] ?></p>
                <p class="card-text">Alamat: <?= $data['anggota']['alamat'] ?></p>
                <a href="http://localhost/peminjaman_buku/public/sewa" class="badge text-bg-primary" style="text-decoration: none;">Kembali</a>
            </div>
        </div>

    </div>