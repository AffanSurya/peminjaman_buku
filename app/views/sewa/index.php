<div class="container mt-5">

    <div class="panel panel-default ">
        <div class="panel-heading" style="margin-top: 70px;">
            <h3 class="panel-title"><?= $data['panel'] ?></h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-11">
                    <button type="button" class="btn btn-dark tampilModalTambah float-end" data-bs-toggle="modal" data-bs-target="#formModal">
                        Tambah Penyewa
                    </button>
                </div>
            </div>

            <div class="table-responsive mt-4">
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
                            <th scope="col" style="width: 100px;">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['sewa'] as $sewa) : ?>
                            <tr>
                                <th scope="row" class="text-center"><?= $sewa['kode_sewa'] ?></th>
                                <td>
                                    <?php foreach ($data['daftarAnggota'] as $anggota) {
                                        if ($anggota['id_anggota'] === $sewa['id_anggota']) {
                                            echo $anggota['nama'];
                                            break;
                                        }
                                    } ?>
                                    <a href=" http://localhost/peminjaman_buku/public/sewa/detailAnggota/<?= $sewa['id_anggota'] ?>" class="link-primary " style="font-size: small;">Detail</a>
                                </td>
                                <td>
                                    <?php foreach ($data['buku'] as $buku) {
                                        if ($buku['isbn'] === $sewa['isbn']) {
                                            echo $buku['judul'];
                                            break;
                                        }
                                    } ?>
                                    <a href=" http://localhost/peminjaman_buku/public/sewa/detailBuku/<?= $sewa['isbn'] ?>" class="link-primary " style="font-size: small;">Detail</a>
                                </td>
                                <td class="text-center"><?= $sewa['tgl_sewa'] ?></td>
                                <td class="text-center"><?= $sewa['tgl_kembali'] ?></td>
                                <td class="text-center status"><?= $sewa['status'] ?></td>
                                <td class="text-center"><?= $sewa['harga'] ?></td>
                                <td class="text-center">
                                    <a href="http://localhost/peminjaman_buku/public/sewa/kembalikan/<?= $sewa['kode_sewa'] ?>" class="badge text-bg-success" style="text-decoration: none;" onclick="return confirm('Apakah anda yakin penyewa sudah mengembalikan buku dengan isbn: <?= $sewa['isbn'] ?> ?');">Pengembalian</a>
                                    <a href="http://localhost/peminjaman_buku/public/sewa/hapus/<?= $sewa['kode_sewa'] ?>" class="badge text-bg-danger" style="text-decoration: none;" onclick="return confirm('Apakah anda yakin menghapus penyewa dengan Kode Sewa: <?= $sewa['kode_sewa'] ?> dari Daftar Penyewa?');">Hapus</a>
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
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Sewa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="tombolSilang"></button>
            </div>
            <div class="modal-body">
                <form action="http://localhost/peminjaman_buku/public/sewa/tambah" method="post">
                    <!-- <input type="hidden" name="kode_sewa" id="kode_sewa"> -->

                    <select class="form-select mb-3" aria-label="Default select example" id="id_anggota" name="id_anggota">
                        <option selected disabled>Pilih Anggota</option>
                        <?php foreach ($data['daftarAnggota'] as $anggota) : ?>
                            <option value="<?= $anggota['id_anggota'] ?>"><?= $anggota['nama'] ?> / <?= $anggota['id_anggota'] ?></option>
                        <?php endforeach; ?>
                    </select>

                    <select class="form-select mb-3" aria-label="Default select example" id="isbn" name="isbn">
                        <option selected disabled>Pilih Buku</option>
                        <?php foreach ($data['buku'] as $buku) : ?>
                            <option value="<?= $buku['isbn'] ?>"><?= $buku['judul'] ?> / <?= $buku['isbn'] ?></option>
                        <?php endforeach; ?>
                    </select>

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
<script src="http://localhost/peminjaman_buku/public/js/scriptSewa.js"></script>