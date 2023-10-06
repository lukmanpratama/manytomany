<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
    	$users = User::has('roles')->get();
    	return view('welcome',
        compact('users'));
    }
}
