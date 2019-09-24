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
            $btn = '<button type="button" class="btn btn-info btn-sm btnEdit" data-edit="'.route('user.edit', $user->id).'">Edit</button>';
            $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.route('user.destroy', $user->id).'" data-original-title="Delete" class="btn btn-danger btn-sm deleteUser">Delete</a>';
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
        User::create($request->all());
        return response()->json(array("success"=>true));
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
        return response()->json(array("success"=>true));
    }
}
