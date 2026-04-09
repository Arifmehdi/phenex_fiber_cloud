<?php

namespace App\Http\Controllers\Admin;

use App\Models\Feature;
use App\Models\Section;

class FeatureController extends Controller
{
    public function index(){
        $data = Feature::with('section')->get();
        return view('features.index', compact('data'));
    }

    public function create(){
        $sections = Section::all();
        return view('features.create', compact('sections'));
    }

    public function store(Request $r){
        Feature::create($r->all());
        return redirect()->route('features.index');
    }

    public function edit($id){
        $data = Feature::findOrFail($id);
        $sections = Section::all();
        return view('features.edit', compact('data','sections'));
    }

    public function update(Request $r, $id){
        Feature::findOrFail($id)->update($r->all());
        return redirect()->route('features.index');
    }

    public function destroy($id){
        Feature::destroy($id);
        return back();
    }
}