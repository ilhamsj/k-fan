<?php

namespace App\Http\Controllers;

use App\User;
use DataTables;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        
        return Datatables::of($user)
        ->addColumn('action', function($user) {
            $btn = '<a class="btn btn-primary btn-sm" href="'.route('user.edit', $user->id).'"><i class="fa fa-edit"></i></a>';
            $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$user->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteUser"><i class="fa fa-trash"></i></a>';
            return $btn;
        })
        ->toJson();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        User::create(
            $request->all()
        );
        return response()->json([
            'success' => 'data berhasil ditambahkan'
        ]);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return response()->json(['success'=>'Deleted successfully.']);
    }
}
