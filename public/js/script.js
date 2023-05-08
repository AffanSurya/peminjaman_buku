$(function () {
  // daftar anggota
  $('.tampilModalTambah').on('click', function () {
    $('#exampleModalLabelAnggota').html('Tambah Data Anggota');
    $('.buttonModalFooterAnggota').html('Tambah');
  });

  $('.tampilModalUbah').on('click', function () {
    $('#exampleModalLabelAnggota').html('Ubah Data Anggota');
    $('.buttonModalFooterAnggota').html('Ubah');
    $('.gantiActionAnggota').attr(
      'action',
      'http://localhost/peminjaman_buku/public/daftarAnggota/ubah'
    );

    const id = $(this).data('id');
    console.log(id);

    $.ajax({
      url: 'http://localhost/peminjaman_daftarAnggota/public/daftarAnggota/getUbah',
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

  // buku
  $('.tampilModalTambahBuku').on('click', function () {
    $('#exampleModalLabel').html('Tambah Data Buku');
    $('.buttonModalFooter').html('Tambah');
  });

  $('.tampilModalUbahBuku').on('click', function () {
    $('#exampleModalLabel').html('Ubah Data Buku');
    $('.buttonModalFooter').html('Ubah');
    $('.modal-body form').attr(
      'action',
      'http://localhost/peminjaman_buku/public/buku/ubah'
    );

    const id = $(this).data('id');

    $.ajax({
      url: 'http://localhost/peminjaman_buku/public/buku/getUbah',
      data: { id: id },
      method: 'post',
      dataType: 'json',
      success: function (data) {
        $('#kode_buku').val(data.kode_buku);
        $('#judul').val(data.judul);
        $('#pengarang').val(data.pengarang);
        $('#penerbit').val(data.penerbit);
      },
    });
  });
});
