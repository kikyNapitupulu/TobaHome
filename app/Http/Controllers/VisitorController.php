<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function index()
    {
        return view('visitor.index');
    }

    public function info()
    {
        return view('visitor.infoaccount');
    }
}
