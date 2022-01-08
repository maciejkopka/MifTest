@extends('layouts.app')

@section('content')
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<h1> Edycja </h1>
<div class="card">
    <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
        @method('PATCH')
        @include('admin.users.partials.form')
    </form>
</div>
@endsection