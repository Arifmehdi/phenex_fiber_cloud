<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SubTitle;
use Illuminate\Http\Request;

class SubTitleController extends Controller
{
    public function index(){
        $data = SubTitle::paginate(20);
        return view('admin.subtitles.index', compact('data'));
    }

    public function create(){
        return view('admin.subtitles.create');
    }

    public function store(Request $r){
        $r->validate([
            'title' => 'required|string|max:255',
            'side_note' => 'nullable|string'
        ]);
        SubTitle::create($r->all());
        return redirect()->route('subtitles.index')->with('success', 'SubTitle created successfully.');
    }

    public function edit($id){
        $data = SubTitle::findOrFail($id);
        return view('admin.subtitles.edit', compact('data'));
    }

    public function update(Request $r, $id){
        $r->validate([
            'title' => 'required|string|max:255',
            'side_note' => 'nullable|string'
        ]);
        SubTitle::findOrFail($id)->update($r->all());
        return redirect()->route('subtitles.index')->with('success', 'SubTitle updated successfully.');
    }

    public function destroy($id){
        SubTitle::destroy($id);
        return back()->with('success', 'SubTitle deleted successfully.');
    }
}