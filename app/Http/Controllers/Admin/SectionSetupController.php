<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SectionSetupController extends Controller
{
    public function index(){
        $data = SectionSetup::with([
            'section','title','subTitle','content','pricing','features'
        ])->get();

        return view('setup.index', compact('data'));
    }

    public function create(){
        return view('setup.create', [
            'sections' => Section::all(),
            'titles' => Title::all(),
            'subtitles' => SubTitle::all(),
            'contents' => Content::all(),
            'pricings' => Pricing::all(),
            'features' => Feature::all(),
        ]);
    }

    public function store(Request $r){
        $setup = SectionSetup::create($r->all());

        if($r->features){
            $setup->features()->sync($r->features);
        }

        return redirect()->route('section-setups.index');
    }

    public function edit($id){
        $data = SectionSetup::findOrFail($id);

        return view('setup.edit', [
            'data' => $data,
            'sections' => Section::all(),
            'titles' => Title::all(),
            'subtitles' => SubTitle::all(),
            'contents' => Content::all(),
            'pricings' => Pricing::all(),
            'features' => Feature::all(),
        ]);
    }

    public function update(Request $r, $id){
        $setup = SectionSetup::findOrFail($id);
        $setup->update($r->all());

        if($r->features){
            $setup->features()->sync($r->features);
        }

        return redirect()->route('section-setups.index');
    }

    public function destroy($id){
        SectionSetup::destroy($id);
        return back();
    }
}
