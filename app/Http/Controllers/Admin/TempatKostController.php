<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TempatKostController extends Controller
{
    public function index()
    {
        # code...
        return view('admin.tempat');
    }
}
