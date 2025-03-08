<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $data = User::all();
        return response()->json([
            'message'   => 'Data user',
            'data'      => $data
        ]);
    }

    public function create(Request $req) {
        $user = User::create($req->all());
        return response()->json([
            'message'   => 'User created',
            'data'      => $user
        ]);
    }
}
