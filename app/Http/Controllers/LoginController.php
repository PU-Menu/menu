<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;

class LoginController extends Controller {
    public function show()
    {
        return View::make('back.login');
    }
    public function login()
    {
    }
    public function logout()
    {
    }
}