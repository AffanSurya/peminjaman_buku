<div class="container mt-3">

    <h2>Daftar Anggota</h2>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahAnggota">
        Tambah Anggota
    </button>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Id Anggota</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Nomor Telepon</th>
                    <th scope="col">Email</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['anggota'] as $anggota) : ?>
                    <tr>
                        <th scope="row"><?= $anggota['id_anggota'] ?></th>
                        <td><?= $anggota['nama'] ?></td>
                        <td><?= $anggota['jenis_kelamin'] ?></td>
                        <td><?= $anggota['no_telepon'] ?></td>
                        <td><?= $anggota['email'] ?></td>
                        <td><?= $anggota['alamat'] ?></td>
                        <td>
                            <a href="http://localhost/peminjaman_buku/public/daftarAnggota/ubah/<?= $anggota['id_anggota'] ?>" class="badge text-bg-dark" style="text-decoration: none;" data-bs-toggle="modal" data-bs-target="#tambahAnggota">Ubah</a>
                            <a href="http://localhost/peminjaman_buku/public/daftarAnggota/hapus/<?= $anggota['id_anggota'] ?>" class="badge text-bg-danger" style="text-decoration: none;" onclick="return confirm('Apakah anda yakin menghapus <?= $anggota['nama'] ?> dari Daftar anggota?');">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>




<!-- Modal tambah -->
<div class="modal fade" id="tambahAnggota" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Anggota</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="http://localhost/peminjaman_buku/public/daftarAnggota/tambah" method="post">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Affan">
                        <label for="nama">Nama</label>
                    </div>

                    <select class="form-select mb-3" aria-label="Default select example " id="jenis_kelamin" name="jenis_kelamin">
                        <option selected disabled>Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>

                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="no_telepon" name="no_telepon" placeholder="0812********" style=" appearance: textfield;">
                        <label for="no_telepon">Nomor Telepon</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                        <label for="email">Email</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="name@example.com">
                        <label for="alamat">Alamat</label>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>