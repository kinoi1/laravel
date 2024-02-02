
host = window.location.origin + '/';
url  = window.location.href;
url_list = host + 'user/list_data';
token = document.getElementById('crsf-token').dataset.token;


   
//   $(function () {
//     $("#example1").DataTable({
//       "responsive": true, "lengthChange": false, "autoWidth": false,
//       "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
//     }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
// });
// data_post = '';
$(function(){
    console.log(url_list);
    data_post = {
        StartDate : '2024-01-01',
        EndDate   : '2024-01-31'
    }
    table = $('#table').DataTable({
        "pageLength": 25,
        "destroy": true,
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "searching": true,
        "order": [], //Initial no order.
        ajax: {
            url: url_list,
            type: "POST",
            data: data_post,
            headers: {'X-CSRF-TOKEN':token },
            error: function (jqXHR, textStatus, errorThrown) {
                // Do something here
                console.log(jqXHR.responseText);
                console.log(errorThrown);
                console.log(textStatus);
            }
        },
        "columnDefs": [
            {
                "targets": [0], //last column
                "orderable": false, //set not orderable
            },
        ],
    });
});
