<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use App\Models\Section;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function index(){
        menuSubmenu('cloudcontent', 'allFeatures');
        $data = Feature::orderBy('created_at', 'desc')->with('section')->paginate(20);
        return view('admin.features.index', compact('data'));
    }

    public function create(){
        menuSubmenu('cloudcontent', 'allFeatures');
        $sections = Section::all();
        return view('admin.features.create', compact('sections'));
    }

    public function store(Request $r){
        $r->validate([
            'section_id' => 'required|exists:sections,id',
            'feature' => 'required|string|max:255',
            'side_note' => 'nullable|string'
        ]);
        Feature::create($r->all());
        return redirect()->route('features.index')->with('success', 'Feature created successfully.');
    }

    public function edit($id){
        $data = Feature::findOrFail($id);
        $sections = Section::all();
        return view('admin.features.edit', compact('data','sections'));
    }

    public function update(Request $r, $id){
        $r->validate([
            'section_id' => 'required|exists:sections,id',
            'feature' => 'required|string|max:255',
            'side_note' => 'nullable|string'
        ]);
        Feature::findOrFail($id)->update($r->all());
        return redirect()->route('features.index')->with('success', 'Feature updated successfully.');
    }

    public function show($id){
        $data = Feature::with('section')->findOrFail($id);
        return view('admin.features.show', compact('data'));
    }

    public function destroy($id){
        Feature::destroy($id);
        return back()->with('success', 'Feature deleted successfully.');
    }
}