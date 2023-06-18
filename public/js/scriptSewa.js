$(function () {
  // auto ubah warna dengan id status
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

  // popover
  $('a[data-bs-toggle="popover"]').popover({
    container: 'body',
    placement: 'right',
    trigger: 'click',
    content: function () {
      return $(this).data('bs-content');
    },
  });
});
