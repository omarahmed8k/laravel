<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\userController;

class userController extends Controller
{
    public function index(){
        return "Index";
    }
    public function create(){
        return "create";
    }
    public function show($id)
    {
        return 'show '. $id;
    }
    public function edit($id)
    {
        return 'edit '. $id;
    }
    public function delete($id)
    {
        return 'delete '. $id;
    }
}
