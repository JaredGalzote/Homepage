<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class MyController extends Controller
{
   
    public function index()
    {
        return view('jared');
    }
}