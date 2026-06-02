<!DOCTYPE html>
<html>
<head>
    <title>Students DataTable</title>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
</head>
<body>

<h2>Students List</h2>

<table id="students-table" class="display">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Program</th>
            <th>Action</th>
        </tr>
    </thead>
</table>

<script>
$(document).ready(function () {
    $('#students-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ url('students-data') }}",
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'program', name: 'program' },
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ]
    });
});
</script>

</body>
</html>