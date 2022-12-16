<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" type="text/css" href="/DataTables/datatables.css">
  <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
</head>
<title>Laravel App</title>
<body>
    <strong>Database Connected: </strong>
<?php
    try {
        \DB::connection()->getPDO();
        echo \DB::connection()->getDatabaseName();
        } catch (\Exception $e) {
        echo 'None';
    }
?>
    <div class="min-h-screen flex flex-wrap">

        <div class="w-60 bg-pink">
            {{ $name }}
        </div>
        <div class="flex-auto bg-blue">

            <a class="btn btn-success" style="float:left;margin-right:20px;" href="https://codepen.io/collection/XKgNLN/" target="_blank">Other examples on Codepen</a>
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Order</th>
                        <th>Description</th>
                        <th>Deadline</th>
                        <th>Status</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->user_id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->lastname }}</td>
                            <td>{{ $user->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>        

        </div>
        <div class="w-20">
            hello
        </div>

    </div>

</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
      $('#example').DataTable({
         "bPaginate": true,
         "bInfo" : false,
        // "searching": false,
         "language": {
           "emptyTable": "No data detected"
         },
          "responsive": true,
          "order": [[ 0, "asc" ]],
      });
  } );
</script>