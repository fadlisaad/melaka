<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index($id)
    {
        return view('admin/'.$id);
    }
}
