<div class="container m-5">

    <h1>Ini Daftar Anggota</h1>

    <?php foreach ($data['anggota'] as $anggota) : ?>
        <ul class="list-group">
            <li class="list-group-item"><?= $anggota['id_anggota']; ?></li>
            <li class="list-group-item"><?= $anggota['nama']; ?></li>
            <li class="list-group-item"><?= $anggota['jenis_kelamin']; ?></li>
            <li class="list-group-item"><?= $anggota['no_telepon']; ?></li>
            <li class="list-group-item"><?= $anggota['email']; ?></li>
            <li class="list-group-item"><?= $anggota['alamat']; ?></li>
        </ul>
    <?php endforeach; ?>
</div>