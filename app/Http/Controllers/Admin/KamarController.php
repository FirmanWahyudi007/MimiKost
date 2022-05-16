<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function index()
    {
        # code...
        return view('admin.kamar.index');
    }

    public function create()
    {
        # code...
        return view('admin.kamar.create');
    }
}
