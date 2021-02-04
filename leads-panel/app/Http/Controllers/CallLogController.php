<?php

namespace App\Http\Controllers;

use App\Models\Calls;
use Illuminate\Http\Request;

class CallLogController extends Controller
{
    public function index()
    {
        $calls = Calls::get();

        return view('callLog.list', ['calls' => $calls]);
    }
}
