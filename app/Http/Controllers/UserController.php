<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request){
        $data = $request->all();
    }

    public function update(Request $request, $id){
        var_dump('update ' . $id);exit();
    }

    public function index(Request $request){
        var_dump('index');exit();
    }

    public function getUser(Request $request, $id){
        var_dump('getUser ' . $id);exit();
    }

    public function remove(Request $request, $id){
        var_dump('remove '. $id);exit();
    }
}
