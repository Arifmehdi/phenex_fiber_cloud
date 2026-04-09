<?php

namespace App\Http\Controllers\Admin;

use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index(){
        $data = Section::latest()->get();
        return view('sections.index', compact('data'));
    }

    public function create(){
        return view('sections.create');
    }

    public function store(Request $r){
        Section::create($r->all());
        return redirect()->route('sections.index');
    }

    public function edit($id){
        $data = Section::findOrFail($id);
        return view('sections.edit', compact('data'));
    }

    public function update(Request $r, $id){
        Section::findOrFail($id)->update($r->all());
        return redirect()->route('sections.index');
    }

    public function destroy($id){
        Section::destroy($id);
        return back();
    }
}