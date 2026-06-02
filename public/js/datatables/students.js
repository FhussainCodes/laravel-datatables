$(document).ready(function () {

    initDataTable('students-table', "/students-data", [
        { data: 'id', name: 'id' },
        { data: 'name', name: 'name' },
        { data: 'email', name: 'email' },
        { data: 'action', name: 'action', orderable: false, searchable: false }
    ]);

});