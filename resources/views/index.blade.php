@extends('layout.app')

@section('content')

<div class="container my-3">
  <div class="row">

    <div class="col-md-12 mt-3">
      <table class="table table-striped table-bordered text-center">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
          </tr>
        </thead>

        @foreach ($all as $user)
        <tr>
          <th>{{$user->id}}</th>
          <td><a href="{{route('users.show',$user->id)}}"> {{$user->name}} </a></td>
          <td>{{$user->email}}</td>

          <td>
            <a class="btn btn-success me-2" href="{{route('users.edit',$user->id)}}" role="button">Edit</a>
            <form method="POST" class="d-inline" action="{{route('users.destroy',['users' => $user->id ])}}">
              @csrf
              @method('Delete')
              <button type="submit" class="btn btn-danger" value="Delete">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach

      </table>
    </div>
  </div>
</div>
@endsection