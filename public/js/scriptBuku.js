$(function () {
  // buku
  $('.tampilModalTambah').on('click', function () {
    $('#exampleModalLabel').html('Tambah Data Buku');
    $('.buttonModalFooter').html('Tambah');
    // $('.sembunyikan').attr('type', 'text');
    $('.modal-body form').attr(
      'action',
      'http://localhost/peminjaman_buku/public/buku/tambah'
    );
  });

  $('.tampilModalUbah').on('click', function () {
    $('#exampleModalLabel').html('Ubah Data Buku');
    $('.buttonModalFooter').html('Ubah');
    // $('.modal-body ').attr('type', 'hidden');
    $('input#isbn').hide();
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
        $('#judul').val(data.judul);
        $('#pengarang').val(data.pengarang);
        $('#penerbit').val(data.penerbit);
        $('#isbn').val(data.isbn);
      },
    });
  });
});
