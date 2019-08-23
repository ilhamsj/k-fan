<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\User;

class AdminController extends Controller
{
    
    public function userData()
    {
        $user = User::all();
        
        return Datatables::of($user)
        ->addColumn('action', function($user) {
            $btn = '<a class="btn btn-primary btn-sm" href="'.route('paket.index', $user->id).'"><i class="fa fa-edit"></i></a>';
            $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$user->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteUser"><i class="fa fa-trash"></i></a>';
            return $btn;
        })
        ->toJson();
    }

    public function index()
    {
        return view('admin.dashboard');
    }
}
