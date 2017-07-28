<?php

namespace App\Http\Controllers;


use App\User;
use Request;

class UserController extends Controller
{
    public function list()
    {
        $users = User::all();
        return view('users.list')->with('users', $users);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:10|confirmed',
        ]);
    }

    public function create()
    {
        $params = Request::all();
        $params['password'] = bcrypt($params['password']);
        $params['password_confirmation'] = bcrypt($params['password_confirmation']);

        User::created($params);
        return redirect(action('UserController@list'));
    }
}
