@extends('layout.app')

@section('title')
ITI
@endsection

@section('content')

<div class="container my-3">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Edit Users Info</h1>
        </div>

        <div class="col-md-2"></div>

        <div class="col-md-8">

            <form class="mt-5">
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleInputName" aria-describedby="name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>

        </div>

        <div class="col-md-2"></div>

    </div>
</div>

@endsection