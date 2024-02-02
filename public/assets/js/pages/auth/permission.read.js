/**
 * App user list (jquery)
 */

'use strict';

$(function () {
    var dataTablePermissions = $('.datatables-permissions'),
        dt_permission,
        userList = '/auth/users';

    // Users List datatable
    if (dataTablePermissions.length) {
        dt_permission = dataTablePermissions.DataTable({
            ajax: '/auth/permissions', // JSON file to add data
            columns: [
                // columns according to JSON
                { data: '' },
                { data: 'id' },
                { data: 'name' },
                { data: 'assigned_to' }
            ],
            columnDefs: [
                {
                    // For Responsive
                    className: 'control',
                    orderable: false,
                    searchable: false,
                    responsivePriority: 2,
                    targets: 0,
                    render: function (data, type, full, meta) {
                        return '';
                    }
                },
                {
                    targets: 1,
                    searchable: false,
                    visible: false
                },
                {
                    // Name
                    targets: 2,
                    render: function (data, type, full, meta) {
                        var $name = full['name'];
                        return '<span class="text-nowrap">' + $name + '</span>';
                    }
                },
                {
                    // User Role
                    targets: 3,
                    orderable: false,
                    render: function (data, type, full, meta) {
                        var $assignedTo = full['assigned_to'],
                            $output = '';
                        
                        var roleBadgeObj = {
                            Admin: '<a href="' + userList + '?role=admin"><span class="badge bg-label-primary m-1">Administrator</span></a>',
                            Anggota: '<a href="' + userList + '?role=anggota"><span class="badge bg-label-success m-1">Anggota</span></a>',
                        };
                        
                        for (var i = 0; i < $assignedTo.length; i++) {
                            var val = $assignedTo[i];
                            $output += roleBadgeObj[val];
                        }

                        return '<span class="text-nowrap">' + $output + '</span>';
                    }
                }
            ],
            order: [[1, 'asc']],
            dom:
                '<"row mx-1"' +
                '<"col-sm-12 col-md-3" l>' +
                '<"col-sm-12 col-md-9"<"dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-md-end justify-content-center flex-wrap me-1"<f>>>' +
                '>t' +
                '<"row mx-2"' +
                '<"col-sm-12 col-md-6"i>' +
                '<"col-sm-12 col-md-6"p>' +
                '>',
            language: {
                sLengthMenu: 'Tampil _MENU_',
                search: 'Cari',
                info: 'Menampilkan _START_ sampai _END_ dari _TOTAL_ data',
                searchPlaceholder: 'Pencarian...',
                paginate: {
                    // remove previous & next text from pagination
                    previous: 'Sebelumnya',
                    next: 'Berikutnya'
                }
            },
        
            // For responsive popup
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal({
                        header: function (row) {
                            var data = row.data();
                            return 'Details of ' + data['name'];
                        }
                    }),
                    type: 'column',
                    renderer: function (api, rowIdx, columns) {
                        var data = $.map(columns, function (col, i) {
                            return col.title !== '' // ? Do not show row in modal popup if title is blank (for check box)
                                ? '<tr data-dt-row="' + col.rowIndex + '" data-dt-column="' + col.columnIndex + '">' +
                                    '<td>' + col.title + ':' + '</td> ' +
                                    '<td>' + col.data + '</td>' +
                                '</tr>'
                                : '';
                        }).join('');
                        return data ? $('<table class="table"/><tbody />').append(data) : false;
                    }
                }
            },
            initComplete: function () {
                // Adding role filter once table initialized
                this.api()
                .columns(3)
                .every(function () {
                    var column = this;
                    var select = $('<select id="UserRole" class="form-select text-capitalize"><option value=""> Select Role </option></select>')
                        .appendTo('.user_role')
                        .on('change', function () {
                            var val = $.fn.dataTable.util.escapeRegex($(this).val());
                            column.search(val ? '^' + val + '$' : '', true, false).draw();
                        });

                    column.data()
                        .unique()
                        .sort()
                        .each(function (d, j) {
                            select.append('<option value="' + d + '" class="text-capitalize">' + d + '</option>');
                        });
                });
            }
        });
    }

    // Filter form control to default size
    // ? setTimeout used for multilingual table initialization
    setTimeout(() => {
        $('.dataTables_filter .form-control').removeClass('form-control-sm');
        $('.dataTables_length .form-select').removeClass('form-select-sm');
    }, 300);
});
