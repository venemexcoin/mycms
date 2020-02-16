<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnerctController extends Controller
{
    public function getLogin()
    {
        return view('connect.login');
    }
}
