<?php

namespace App\Http\Controllers;

use App\Models\Leads;
use Redirect;
use Illuminate\Http\Request;

class LeadsController extends Controller
{
    public function index()
    {
        $leads = Leads::get();

        return view('leads.list', ['leads' => $leads]);
    }

    public function new()
    {
        return view('leads.form');
    }

    public function add(Request $request)
    {
        $lead = new Leads;
        $lead = $lead->create($request->all());
        return Redirect::to('/leads');
    }

    public function edit($id)
    {
        $lead = Leads::findOrFail($id);
        return view('leads.form', ['lead' => $lead]);
    }

    public function update($id, Request $request)
    {
        $lead = Leads::findOrFail($id);
        $lead->update($request->all());
        return Redirect::to('/leads');
    }

    public function delete($id)
    {
        $lead = Leads::findOrFail($id);
        $lead->delete();
        return Redirect::to('/leads');
    }
}
