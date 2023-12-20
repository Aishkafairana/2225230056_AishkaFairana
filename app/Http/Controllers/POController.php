<?php

namespace App\Http\Controllers;

use App\Models\PO;
use Illuminate\Http\Request;

class POController extends Controller
{
    public function index(){
        $PO = PO::all();
        return view('po.index',compact(['PO']));
    }

    public Function create() 
    {
       return view('po.create');
    }

    public Function store(Request $request)  
    {
        // dd($request->except(['_token', 'submit']));
        PO::create($request->all());
        return redirect('/po');
    }

    public function edit($id)
    {
        $po = PO::find($id);
        return view('po.edit',compact(['po']));
    }

    public function update($id, Request $request) 
    {
        $po = PO::find($id);
        $po->update($request->except(['_token', 'submit']));
        return redirect('/po');
    }

    public function destroy($id)
    {
        $po = PO::find($id);
        $po->delete();
        return redirect('/po');
    }
}
