<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\User;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
}
