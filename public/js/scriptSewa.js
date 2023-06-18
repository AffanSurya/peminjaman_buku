// auto ubah warna dengan id status
$(function () {
  $('.status').each(function () {
    var status = $(this).text();

    if (status === 'Dikembalikan') {
      $(this).addClass('text-success');
    } else if (status === 'Disewa') {
      $(this).addClass('text-danger');
    }
  });

  //   reload tombol keluar
  $('#tombolSilang').on('click', function () {
    location.reload();
  });

  $('#tombolKeluar').on('click', function () {
    location.reload();
  });
});
