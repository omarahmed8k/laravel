@extends('layout.app')

@section('content')

<div class="container my-3">
    <div class="row">

        <div class="col-md-3"></div>

        <div class="col-md-6">

            <form class="mt-5" method="POST" action="{{route('users.store')}}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>

        </div>

        <div class="col-md-3"></div>

    </div>
</div>
@endsection