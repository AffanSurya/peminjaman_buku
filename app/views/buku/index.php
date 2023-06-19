<div class="container mt-5">

    <div class="panel panel-default ">
        <div class="panel-heading" style="margin-top: 70px;">
            <h3 class="panel-title">Daftar Buku</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-11">
                    <button type="button" class="btn btn-dark tampilModalTambah float-end" data-bs-toggle="modal" data-bs-target="#formModal">
                        Tambah Buku
                    </button>
                </div>
            </div>

            <div class="table-responsive mt-4">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr class="text-center">
                            <th style="width: 100px;" scope="col">ISBN</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Pengarang</th>
                            <th scope="col">Penerbit</th>
                            <th scope="col" style="width: 120px;">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['buku'] as $buku) : ?>
                            <tr>
                                <th scope="row" class="text-center"><?= $buku['isbn'] ?></th>
                                <td style="width: 400px;"><?= $buku['judul'] ?></td>
                                <td><?= $buku['pengarang'] ?></td>
                                <td><?= $buku['penerbit'] ?></td>
                                <td class="text-center">
                                    <a href="http://localhost/peminjaman_buku/public/buku/ubah/<?= $buku['isbn'] ?>" class="badge text-bg-dark tampilModalUbah" style="text-decoration: none;" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $buku['isbn']; ?>">Ubah</a>
                                    <a href="http://localhost/peminjaman_buku/public/buku/hapus/<?= $buku['isbn'] ?>" class="badge text-bg-danger" style="text-decoration: none;" onclick="return confirm('Apakah anda yakin menghapus <?= $buku['judul'] ?> dari Daftar buku?');">Hapus</a>
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
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="tombolSilang"></button>
            </div>
            <div class="modal-body">
                <form action="http://localhost/peminjaman_buku/public/buku/tambah" method="post">
                    <div class="form-floating mb-3" id="hidden">
                        <input type="text" class="form-control" id="isbn" name="isbn" placeholder="123-345">
                        <label for="isbn">ISBN</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Bumi Manusia">
                        <label for="judul">Judul</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="Supar">
                        <label for="pengarang">Pengarang</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Supar">
                        <label for="penerbit">Penerbit</label>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="tombolKeluar">Keluar</button>
                <button type="submit" class="btn btn-primary buttonModalFooter">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="http://localhost/peminjaman_buku/public/js/scriptBuku.js"></script>