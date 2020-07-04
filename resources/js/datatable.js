$(document).ready(function () {
    let way = '';
    $('#way').val() ? (way = $('#way').val()) : (way = 'desc');
    let table = $('#datatable').DataTable({
        columnDefs: [{
            targets: 'no-sort',
            orderable: false
        }],
        responsive: true,
        "order": [
            [$('#order').val(), way]
        ]
    });
    table.columns.adjust();
    table.responsive.recalc();
});
