<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Title;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    public function index(){
        menuSubmenu('cloudcontent', 'allTitles');
        $data = Title::orderBy('created_at', 'desc')->paginate(20);
        return view('admin.titles.index', compact('data'));
    }

    public function create(){
        menuSubmenu('cloudcontent', 'allTitles');
        return view('admin.titles.create');
    }

    public function store(Request $r){
        $r->validate([
            'title' => 'required|string|max:255',
            'side_note' => 'nullable|string'
        ]);
        Title::create($r->all());
        return redirect()->route('titles.index')->with('success', 'Title created successfully.');
    }

    public function edit($id){
        $data = Title::findOrFail($id);
        return view('admin.titles.edit', compact('data'));
    }

    public function update(Request $r, $id){
        $r->validate([
            'title' => 'required|string|max:255',
            'side_note' => 'nullable|string'
        ]);
        Title::findOrFail($id)->update($r->all());
        return redirect()->route('titles.index')->with('success', 'Title updated successfully.');
    }

    public function show($id){
        $data = Title::findOrFail($id);
        return view('admin.titles.show', compact('data'));
    }

    public function destroy($id){
        Title::destroy($id);
        return back()->with('success', 'Title deleted successfully.');
    }
}
