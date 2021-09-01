<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UserController extends Controller
{
    public function index()
    {
        $all = Users::all();
        return view('index', compact('all'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $data = $request->only('name', 'email', 'password');
        Users::create($data);
        return redirect(route('users.index'));
    }

    public function show($id)
    {
        $show = Users::find($id);
        return view('show', compact('show'));
    }

    public function edit($id)
    {
        $edit = Users::find($id);
        return view('edit', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        Users::find($id)->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
        ]);

        return  redirect(route('users.index', ['users' => $id]));
    }


    public function destroy($id)
    {
        Users::find($id)->delete();
        return redirect(route('users.index'));
    }
}
