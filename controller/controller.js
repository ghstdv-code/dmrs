$.fn.setupDataTable = function() {
    var table = this.DataTable({
        responsive: true,
        autoWidth: false,
        lengthChange: false,
        pageLength: 10,
        dom: 'Bfrtip',
        buttons: ['pdf', 'print']
    });

    table.buttons().container().appendTo($('.col-sm-6:eq(0)', table.table().container()));

    return table;
};