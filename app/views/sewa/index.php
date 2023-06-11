<div class="container mt-5">

    <div class="panel panel-default ">
        <div class="panel-heading" style="margin-top: 70px;">
            <h3 class="panel-title">Daftar Penyewa</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-11">
                    <button type="button" class="btn btn-dark tampilModalTambah float-end" data-bs-toggle="modal" data-bs-target="#formModal">
                        Tambah Penyewa
                    </button>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Kode Sewa</th>
                            <th scope="col">Nama Anggota</th>
                            <th scope="col">Judul Buku</th>
                            <th scope="col">Tanggal Sewa</th>
                            <th scope="col">Tanggal Kembali</th>
                            <th scope="col">Status</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['sewa'] as $sewa) : ?>
                            <tr>
                                <th scope="row" class="text-center"><?= $sewa['kode_sewa'] ?></th>
                                <td><?= $sewa['nama'] ?></td>
                                <td><?= $sewa['judul'] ?></td>
                                <td class="text-center"><?= $sewa['tgl_sewa'] ?></td>
                                <td class="text-center"><?= $sewa['tgl_kembali'] ?></td>
                                <td class="text-center"><?= $sewa['status'] ?></td>
                                <td class="text-center"><?= $sewa['harga'] ?></td>
                                <td class="text-center">
                                    <a href="http://localhost/peminjaman_buku/public/sewa/ubah/<?= $sewa['kode_sewa'] ?>" class="badge text-bg-dark tampilModalUbah" style="text-decoration: none;" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $sewa['kode_sewa']; ?>">Ubah</a>
                                    <a href="http://localhost/peminjaman_buku/public/sewa/hapus/<?= $sewa['kode_sewa'] ?>" class="badge text-bg-danger" style="text-decoration: none;" onclick="return confirm('Apakah anda yakin menghapus sewa Buku <?= $sewa['judul'] ?> atas nama <?= $sewa['nama'] ?> dari Daftar sewa?');">Hapus</a>
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
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah sewa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="http://localhost/peminjaman_buku/public/peminjaman/tambah" method="post">
                    <input type="hidden" name="id_anggota" id="id_anggota">
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
                <button type="submit" class="btn btn-primary buttonModalFooter">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="http://localhost/peminjaman_buku/public/js/scriptAnggota.js"></script>