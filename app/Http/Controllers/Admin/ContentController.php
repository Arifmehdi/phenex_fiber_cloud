<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index(){
        $data = Content::all();
        return view('contents.index', compact('data'));
    }

    public function create(){
        return view('contents.create');
    }

    public function store(Request $r){
        Content::create($r->all());
        return redirect()->route('contents.index');
    }

    public function edit($id){
        $data = Content::findOrFail($id);
        return view('contents.edit', compact('data'));
    }

    public function update(Request $r, $id){
        Content::findOrFail($id)->update($r->all());
        return redirect()->route('contents.index');
    }

    public function destroy($id){
        Content::destroy($id);
        return back();
    }
}
