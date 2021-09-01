@extends('layout.app')

@section('content')
<div class="container my-3">
    <div class="row">

        <div class="col-md-3"></div>

        <div class="col-md-6">

            <form class="mt-5" method="POST" action="{{route('users.update',['id' => $edit->id ])}}">
                @method("PUT")
                @csrf
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$edit->name}}" aria-describedby="name" placeholder="Name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{$edit->email}}" aria-describedby="emailHelp" placeholder="Email">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" value="{{$edit->password}}" id="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary w-100">Edit</button>
            </form>

        </div>

        <div class="col-md-3"></div>
    </div>
</div>
@endsection