/*DataTable Init*/

"use strict";

$(document).ready(function() {
    $('#datable_1').DataTable({
        responsive: true,
        autoWidth: false,
        language: {
            search: "",
            searchPlaceholder: "Search",
            sLengthMenu: "_MENU_items"

        }
    });
    $('#datable_2').DataTable({
        autoWidth: false,
        lengthChange: false,
        "bPaginate": false,
        language: { search: "", searchPlaceholder: "Search" }
    });

    // Inline editing in responsive cell
    $('#datable_3').on('click', 'tbody ul.dtr-details li', function(e) {
        // Ignore the Responsive control and checkbox columns
        if ($(this).hasClass('control') || $(this).hasClass('select-checkbox')) {
            return;
        }

        // Edit the value, but this method allows clicking on label as well
        editor.inline($('span.dtr-data', this));
    });

    /*Export DataTable*/
    $('#datable_3').DataTable({
        dom: 'Bfrtip',
        //responsive: true,
        responsive: {
            details: {
                type: 'column'
            }
        },
        columnDefs: [{
            className: 'control',
            orderable: false,
            targets: 0
        }, {
            "width": "8%",
            "targets": 0,
            "width": "8%",
            "targets": 2,
            "width": "48%",
            "targets": 4,
            "width": "8%",
            "targets": 7,
            "width": "8%",
            "targets": 8,
        }],
        language: {
            search: "",
            searchPlaceholder: "Search",
            sLengthMenu: "_MENU_items"
        },
        "pageLength": 50,
        // "bPaginate": false,
        // "info": false,
        // "bFilter": false,
        buttons: [
            // 'copy', 'csv', 'excel', 'pdf', 'print'
            'pageLength', 'excel', 'pdf', 'print'
        ],
        "drawCallback": function() {
            $('.dt-buttons > .btn').addClass('btn-outline-light btn-sm');
        }
    });

     $('#datable_menunggu').DataTable({
        dom: 'Bfrtip',
        //responsive: true,
        responsive: {
            details: {
                type: 'column'
            }
        },
        columnDefs: [{
            className: 'control',
            orderable: false,
            targets: 0
        }, {
            "width": "8%",
            "targets": 0,
            "width": "8%",
            "targets": 2,
            "width": "48%",
            "targets": 4,
            "width": "8%",
            "targets": 7,
            "width": "8%",
            "targets": 8,
        }],
        language: {
            search: "",
            searchPlaceholder: "Search",
            sLengthMenu: "_MENU_items",
            fnFilter : "menunggu"
        },
        "pageLength": 50,
        // "bPaginate": false,
        // "info": false,
        // "bFilter": false,
        buttons: [
            // 'copy', 'csv', 'excel', 'pdf', 'print'
            'pageLength', 'excel', 'pdf', 'print'
        ],
        "drawCallback": function() {
            $('.dt-buttons > .btn').addClass('btn-outline-light btn-sm');
        }
    });

    $('#dragId1').on('click', function () {
      datable_menunggu.search("Menunggu").draw();
      //$('#datable_menunggu').dataTable().fnFilter("Menunggu");
    });
     $('#dragId2').on('click', function () {
      datable_menunggu.search("Sah").draw();
    });
     $('#dragId3').on('click', function () {
      datable_menunggu.search("Tidak sah").draw();
    });
    $('#reset').on('click', function () {
      datable_menunggu.search("").draw();
    });

    var table = $('#datable_5').DataTable({
        responsive: true,
        language: {
            search: "",
            sLengthMenu: "_MENU_Items",
        },
        "bPaginate": false,
        "info": false,
        "bFilter": false,
    });
    $('#datable_5 tbody').on('click', 'tr', function() {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        } else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });

    $('#button').click(function() {
        table.row('.selected').remove().draw(false);
    });
});