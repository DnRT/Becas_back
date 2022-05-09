<?php

namespace App\Http\Controllers;

use App\Models\login;
use App\Http\Requests\StoreloginRequest;
use App\Http\Requests\UpdateloginRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class LoginController extends Controller
{
    use RegisterUsers;
    public function __construct(){
        $this -> middleware('guest');
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|string|email|max:255|unique:login',
            'passcode' => 'required|string|min:6|confirmed',
        ]);
    }
    protected function create(array $data)
    {
        return Login::create([
            'email' => $data['email'],
            'passcode' => bcrypt($data['passcode']),
            'active' => 1,
        ]);
    }
}
