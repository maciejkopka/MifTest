@extends('layouts.app')

@section('content')
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>

    <div class="card">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Imie i Nazwisko</th>
      <th scope="col">Email</th>
      <th scope="col">Akcje</th>
    </tr>
  </thead>
  <tbody>
      @foreach($users as $user)
        <tr>
            <th scope="row">{{ $user->id}}</th>
            <td>{{ $user->name}}</td>
            <td>{{ $user->email}}</td>
            <td> <a class="btn btn-primary" href="{{ route('admin.users.edit', $user->id) }}" role="button">Edytuj</a>
                  
                <button type="button" class="btn btn-danger"
                        onclick="event.preventDefault();
                        document.getElementById('delete-user-form-{{ $user->id }}').submit()">
                  Delete
                </button>  

                  <form id="delete-user-form-{{$user->id }}" action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display: none">
                    @csrf
                    @method("DELETE")
                  </form>
            </td>
        </tr>
      @endforeach
  </tbody>
</table>
{{ $users->links()}}
</div>

</body>
@endsection
