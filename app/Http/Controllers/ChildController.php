<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Child;

class ChildController extends Controller
{
    public function store(Request $request)
    {
        $childData = [
            'user_id' => $request->user_id,
            'child_name' => $request->child_name,
            'generation' => $request->generation,
            'point' => 0,
            'child_img' => $request->child_img,
        ];
        $child = Child::create($childData);
    }
}
