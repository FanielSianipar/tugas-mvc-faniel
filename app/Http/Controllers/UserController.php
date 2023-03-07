<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        // $payload['user'] = 'tono';
        // $payload['item'] = 'sendok';

        $payload['modelUser'] = User::all();

        // $payload['modelUser'] = User::select('name')->get();

        return view('index', $payload);
    }
}
