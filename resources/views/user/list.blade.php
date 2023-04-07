@extends('commons.header')
@section('content')

<div class="text-center m-5">
     <h1><u>Multiple Database Switching in One Project</u></h1>
</div>

<div class="float-right">
    <a href="{{ route('change-db-connection', 'db-1') }}" class="btn btn-primary">Database 1</a>
    <a href="{{ route('change-db-connection', 'db-2') }}" class="btn btn-success">Database 2</a>
    <a href="{{ route('change-db-connection', 'db-3') }}" class="btn btn-danger">Database 3</a>
</div>

<br>
<div class="mt-5">
<h2 class="text-center">User's Table </h2><br>
<h5 class="text-center">Total Users - {{ $total_usres }} </h5>

<table class="table table-dark table-bordered table-hover text-center mt-5">
    <thead>
        <tr class="table-info">
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>DB Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $key => $user)
        <tr>
            <td> {{ ($key + 1) }} </td>
            <td>{{ $user->name }}</td>
            <td> {{ $user->email }} </td>
            <td> {{ $database }} </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>

@endsection