<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class backendController extends Controller
{
    public function index()
    {
        return view ('backend/page/index');
    }
    public function login()
    {
        return view ('backend/login2');
    }
    public function register()
    {
        return view ('backend/register2');
    }
}
