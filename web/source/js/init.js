$(document).ready(function () {
  $('.smart-table').DataTable({
    autoFill: true,
    buttons: [
      'copy', 'excel', 'pdf'
    ]
  });
});
