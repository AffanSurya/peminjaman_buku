<div class="container mt-3">

    <h2>Daftar Buku</h2>
    <!-- Button trigger modal -->
    <div class="row">


        <div class="col-md-11">
            <button type="button" class="btn btn-dark tampilModalTambahBuku float-end" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Buku
            </button>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"></h3>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Kode Buku</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Pengarang</th>
                            <th scope="col">Penerbit</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['buku'] as $buku) : ?>
                            <tr>
                                <th scope="row" class="text-center"><?= $buku['kode_buku'] ?></th>
                                <td><?= $buku['judul'] ?></td>
                                <td class="text-center"><?= $buku['pengarang'] ?></td>
                                <td class="text-center"><?= $buku['penerbit'] ?></td>
                                <td class="text-center">
                                    <a href="http://localhost/peminjaman_buku/public/buku/ubah/<?= $buku['kode_buku'] ?>" class="badge text-bg-dark tampilModalUbahBuku" style="text-decoration: none;" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $buku['kode_buku'] ?>">Ubah</a>
                                    <a href="http://localhost/peminjaman_buku/public/buku/hapus/<?= $buku['kode_buku'] ?>" class="badge text-bg-danger" style="text-decoration: none;" onclick="return confirm(' Apakah anda yakin menghapus <?= $buku['judul'] ?> dari Daftar Buku?');">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="panel-footer"></div>
    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Buku</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="http://localhost/peminjaman_buku/public/buku/tambah" method="post">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="kode_buku" name="kode_buku" placeholder="111-111">
                        <label for="kode_buku">Kode Buku</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Kancil">
                        <label for="judul">Judul</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="Kancil">
                        <label for="pengarang">Pengarang</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Kancil">
                        <label for="penerbit">Penerbit</label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                        <button type="submit" class="btn btn-primary buttonModalFooter">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>