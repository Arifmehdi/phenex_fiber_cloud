<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index(){
        menuSubmenu('cloudcontent', 'allSections');
        $data = Section::latest()->paginate(20);
        return view('admin.sections.index', compact('data'));
    }

    public function create(){
        menuSubmenu('cloudcontent', 'allSections');
        return view('admin.sections.create');
    }

    public function store(Request $r){
        $r->validate([
            'section_name' => 'required|string|max:255',
            'template' => 'nullable|string|max:255',
            'serial' => 'nullable|integer',
            'page' => 'nullable|string|max:255',
            'status' => 'nullable|in:0,1',
            'side_note' => 'nullable|string'
        ]);
        Section::create($r->all());
        return redirect()->route('sections.index')->with('success', 'Section created successfully.');
    }

    public function edit($id){
        $data = Section::findOrFail($id);
        return view('admin.sections.edit', compact('data'));
    }

    public function update(Request $r, $id){
        $r->validate([
            'section_name' => 'required|string|max:255',
            'template' => 'nullable|string|max:255',
            'serial' => 'nullable|integer',
            'page' => 'nullable|string|max:255',
            'status' => 'nullable|in:0,1',
            'side_note' => 'nullable|string'
        ]);
        Section::findOrFail($id)->update($r->all());
        return redirect()->route('sections.index')->with('success', 'Section updated successfully.');
    }

    public function show($id){
        return redirect()->route('sections.destroy', $id);
    }

    public function destroy($id){
        Section::destroy($id);
        return back()->with('success', 'Section deleted successfully.');
    }
}