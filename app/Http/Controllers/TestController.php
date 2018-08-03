<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function ajax()
    {
        return response()->json([
            'Example Item 1',
            'Example Item 2',
            'Example Item 3'
        ]);
    }

    public function backend()
    {
        $data = [
            'Example Item 1',
            'Example Item 2',
            'Example Item 3'
        ];

        return view('welcome')->with(['data' => $data]);
    }
}
