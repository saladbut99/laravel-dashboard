<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
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

            <table class="table-auto w-full">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Lastname</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)          
                      <tr>
                         <td>{{ $user->user_id }}</td>
                         <td>{{ $user->name }}</td>
                         <td>{{ $user->lastname }}</td>
                      </tr>
                    @endforeach
                </tbody>
              </table>           

        </div>
        <div class="w-20">
            
        </div>

    </div>
</body>
</html>