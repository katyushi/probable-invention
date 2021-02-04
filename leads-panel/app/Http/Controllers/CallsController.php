<?php

namespace App\Http\Controllers;

use App\Models\Calls;
use App\Models\Leads;
use Redirect;
use Illuminate\Http\Request;

class CallsController extends Controller
{
    public function index()
    {
        $leads = Leads::get();
        
        return view('calls.form', ['leads' => $leads]);
    }

    public function add(Request $request)
    {
        $call = new Calls;
        $call = $call->create($request->all());
        return Redirect::to('/home');
    }
}
