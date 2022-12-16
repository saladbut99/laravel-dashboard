@extends('layouts')
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
            hello
        </div>

    </div>
\