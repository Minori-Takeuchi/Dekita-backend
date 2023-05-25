<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SignupRequest;
use App\Models\User;

class UserController extends Controller
{
    public function show($id) {
        $user = User::with('children')->find($id);
        if($user) {
            $userData = [
                'id' => $user->id,
                'notice' => $user->notice,
            ];

            return response()->json([
                'user' => $userData,
                'children' => $user->children ? $user->children : null,
            ],200);
        } else {
            return response()->json([
                'message' => 'Not found'
            ], 404);
        };
    }

    public function store(SignupRequest $request)
    {
        $user = User::create($request->all());
        if ($user) {
            return response()->json([
                'user' => $user,
                'message' => 'registration successfully'
            ], 201);
        } else {
            return response()->json([
                'massage' => 'Not found'
            ], 404);
        }
    }

    public function update(SignupRequest $request)
    {
        $user = User::where('id',$request->id)->update([
            'notice' => $request->notice
        ]);
        if($user) {
            return response()->json([
                'message' => 'updated successfully'
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found',
            ], 404);
        }
    }
}
