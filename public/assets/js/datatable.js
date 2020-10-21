$(function () {

    var table = $('.yajra-datatable').DataTable({
    processing: true,
    serverSide: true,
    ajax: "{{ route('student-list') }}",
    columns: [
{data: 'DT_RowIndex', name: 'DT_RowIndex'},

{data: 'id_ville', name: 'name'},
{data: 'id_syndic', name: 'email'},
{data: 'nom_residence', name: 'username'},
{data: 'adresse', name: 'phone'},

{
    data: 'action',
    name: 'action',
    orderable: true,
    searchable: true
},
    ]
});

});

