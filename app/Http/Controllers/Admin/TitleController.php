<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    public function index(){
        $data = Title::all();
        return view('titles.index', compact('data'));
    }

    public function create(){
        return view('titles.create');
    }

    public function store(Request $r){
        Title::create($r->all());
        return redirect()->route('titles.index');
    }

    public function edit($id){
        $data = Title::findOrFail($id);
        return view('titles.edit', compact('data'));
    }

    public function update(Request $r, $id){
        Title::findOrFail($id)->update($r->all());
        return redirect()->route('titles.index');
    }

    public function destroy($id){
        Title::destroy($id);
        return back();
    }
}
