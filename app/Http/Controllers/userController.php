<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class userController extends Controller
{
    protected $users =  [
        ['id' => 1, 'name' => 'Mohamed', 'email' => 'mohamed@gmail.com'],
        ['id' => 2, 'name' => 'Ahmed', 'email' => 'ahmed@gmail.com'],
        ['id' => 3, 'name' => 'Kareem', 'email' => 'kareem@gmail.com'],
    ];

    public function index()
    {
        return View("index");
    }
    public function create()
    {
        return View("create");
    }
    public function show()
    {
        return View("show");
    }
    public function edit()
    {
        return View("edit");
    }
}
