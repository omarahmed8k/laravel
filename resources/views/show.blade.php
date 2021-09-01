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
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>{{$show->id}}</th>
                        <td>{{$show->name}}</td>
                        <td>{{$show->email}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection