@extends('layout.app')

@section('title')
ITI
@endsection

@section('content')

<div class="container my-3">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>All Users</h1>

            <table class="table table-striped table-bordered mt-5">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Omar Abdelrahman</td>
                        <td>omarahmed8k@gmail.com</td>
                        <td><button type="button" class="btn btn-primary"><a class="text-white" href="{{ url('show') }}">Show</a></button> <button type="button" class="btn btn-success"><a class="text-white" href="{{ url('edit') }}">Edit</a></button> <button type="button" class="btn btn-danger">Delete</button></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Mahmoud Hassan</td>
                        <td>mahmoudhassan@gmail.com</td>
                        <td><button type="button" class="btn btn-primary"><a class="text-white" href="{{ url('show') }}">Show</a></button> <button type="button" class="btn btn-success"><a class="text-white" href="{{ url('edit') }}">Edit</a></button> <button type="button" class="btn btn-danger">Delete</button></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Alaa Ibrahem</td>
                        <td>alaaibrahem@gmail.com</td>
                        <td><button type="button" class="btn btn-primary"><a class="text-white" href="{{ url('show') }}">Show</a></button> <button type="button" class="btn btn-success"><a class="text-white" href="{{ url('edit') }}">Edit</a></button> <button type="button" class="btn btn-danger">Delete</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection