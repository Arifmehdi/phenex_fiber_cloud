<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubTitleController extends Controller
{
    public function index(){
        $data = SubTitle::all();
        return view('subtitles.index', compact('data'));
    }

    public function create(){
        return view('subtitles.create');
    }

    public function store(Request $r){
        SubTitle::create($r->all());
        return redirect()->route('subtitles.index');
    }

    public function edit($id){
        $data = SubTitle::findOrFail($id);
        return view('subtitles.edit', compact('data'));
    }

    public function update(Request $r, $id){
        SubTitle::findOrFail($id)->update($r->all());
        return redirect()->route('subtitles.index');
    }

    public function destroy($id){
        SubTitle::destroy($id);
        return back();
    }
}