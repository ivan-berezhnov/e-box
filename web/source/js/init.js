$(document).ready(function () {
  $('.smart-table').DataTable({
    autoFill: true,
    buttons: [
      'copy', 'excel', 'pdf'
    ]
  });

  $('.js-datepicker').datepicker({
    uiLibrary: 'bootstrap4',
    format: 'yyyy-mm-dd'
  });

  $('.js-datepicker2').datepicker({
    uiLibrary: 'bootstrap4',
    format: 'yyyy-mm-dd'
  });
});
