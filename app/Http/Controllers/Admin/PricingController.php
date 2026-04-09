<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index(){
        $data = Pricing::with('section')->get();
        return view('pricings.index', compact('data'));
    }

    public function create(){
        $sections = Section::all();
        return view('pricings.create', compact('sections'));
    }

    public function store(Request $r){
        Pricing::create($r->all());
        return redirect()->route('pricings.index');
    }

    public function edit($id){
        $data = Pricing::findOrFail($id);
        $sections = Section::all();
        return view('pricings.edit', compact('data','sections'));
    }

    public function update(Request $r, $id){
        Pricing::findOrFail($id)->update($r->all());
        return redirect()->route('pricings.index');
    }

    public function destroy($id){
        Pricing::destroy($id);
        return back();
    }
}