
$(document).ready(function () {
    let table = $('#datatable').DataTable({
            responsive: true,
            "order": [[ 7, "asc" ]]
        });
        table.columns.adjust();
        table.responsive.recalc();
});
