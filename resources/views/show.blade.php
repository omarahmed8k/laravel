@extends('layout.app')

@section('title')
ITI
@endsection

@section('content')

<div class="container my-3">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>Omar Abdelrahman</h1>

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
                        <td></button> <button type="button" class="btn btn-success"><a class="text-white" href="{{ url('edit') }}">Edit</a></button> <button type="button" class="btn btn-danger">Delete</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection