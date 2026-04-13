<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index(){
        $data = Content::paginate(20);
        return view('admin.contents.index', compact('data'));
    }

    public function create(){
        return view('admin.contents.create');
    }

    public function store(Request $r){
        $r->validate([
            'name' => 'nullable|string|max:255',
            'content' => 'required|string',
            'side_note' => 'nullable|string',
            'accent_color' => 'nullable|string|max:20',
            'icon' => 'nullable|string|max:50',
            'button_text' => 'nullable|string|max:100',
            'button_link' => 'nullable|string|max:255'
        ]);
        Content::create($r->all());
        return redirect()->route('contents.index')->with('success', 'Content created successfully.');
    }

    public function edit($id){
        $data = Content::findOrFail($id);
        return view('admin.contents.edit', compact('data'));
    }

    public function update(Request $r, $id){
        $r->validate([
            'name' => 'nullable|string|max:255',
            'content' => 'required|string',
            'side_note' => 'nullable|string',
            'accent_color' => 'nullable|string|max:20',
            'icon' => 'nullable|string|max:50',
            'button_text' => 'nullable|string|max:100',
            'button_link' => 'nullable|string|max:255'
        ]);
        Content::findOrFail($id)->update($r->all());
        return redirect()->route('contents.index')->with('success', 'Content updated successfully.');
    }

    public function show($id){
        $data = Content::findOrFail($id);
        return view('admin.contents.show', compact('data'));
    }

    public function destroy($id){
        Content::destroy($id);
        return back()->with('success', 'Content deleted successfully.');
    }
}
