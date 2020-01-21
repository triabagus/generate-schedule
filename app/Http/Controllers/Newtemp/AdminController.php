<?php

namespace App\Http\Controllers\Newtemp;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('new.newtemp');
    }
}
