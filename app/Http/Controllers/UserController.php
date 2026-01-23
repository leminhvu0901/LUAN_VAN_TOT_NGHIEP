<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use finfo;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::latest()->get();
        return response()->json(
            [
                'succes' => true,
                'data' => $users,
                'message' => 'lay du lieu nguoi dung thanh cong'
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = User::find($id);
        if ($user) {

            return response()->json(
                [
                    'succes' => true,
                    'data' => $user,
                    'message' => 'lay du lieu nguoi dung thanh cong'
                ]
            );
        } else {
            return response()->json(
                [
                    'succes' => false,
                    'message' => 'khong co nguoi dung '
                ]
            );
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
