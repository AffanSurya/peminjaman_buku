$(function () {
  // daftar anggota
  $('.tampilModalTambah').on('click', function () {
    $('#exampleModalLabel').html('Tambah Data Anggota');
    $('.buttonModalFooter').html('Tambah');
    $('.modal-body form').attr(
      'action',
      'http://localhost/peminjaman_buku/public/daftarAnggota/tambah'
    );
  });

  $('.tampilModalUbah').on('click', function () {
    $('#exampleModalLabel').html('Ubah Data Anggota');
    $('.buttonModalFooter').html('Ubah');
    $('.modal-body form').attr(
      'action',
      'http://localhost/peminjaman_buku/public/daftarAnggota/ubah'
    );

    const id = $(this).data('id');

    $.ajax({
      url: 'http://localhost/peminjaman_buku/public/daftarAnggota/getUbah',
      data: { id: id },
      method: 'post',
      dataType: 'json',
      success: function (data) {
        $('#nama').val(data.nama);
        $('#jenis_kelamin').val(data.jenis_kelamin);
        $('#no_telepon').val(data.no_telepon);
        $('#email').val(data.email);
        $('#alamat').val(data.alamat);
        $('#id_anggota').val(data.id_anggota);
      },
    });
  });

  //   reload tombol keluar
  $('#tombolSilang').on('click', function () {
    location.reload();
  });

  $('#tombolKeluar').on('click', function () {
    location.reload();
  });
});
