<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Section;
use App\Models\Title;
use App\Models\SubTitle;
use App\Models\Content;
use App\Models\Pricing;
use App\Models\Feature;
use App\Models\SectionSetup;
use Illuminate\Http\Request;

class SectionSetupController extends Controller
{
    public function index(){
        $data = SectionSetup::with([
            'section','title','subTitle','content','pricing','features'
        ])->paginate(20);

        return view('admin.setup.index', compact('data'));
    }

    public function create(){
        return view('admin.setup.create', [
            'sections' => Section::all(),
            'titles' => Title::all(),
            'subtitles' => SubTitle::all(),
            'contents' => Content::all(),
            'pricings' => Pricing::all(),
            'features' => Feature::all(),
        ]);
    }

    public function store(Request $r){
        $r->validate([
            'section_id' => 'required|exists:sections,id',
            'title_id' => 'required|exists:titles,id',
            'sub_title_id' => 'required|exists:sub_titles,id',
            'content_id' => 'required|exists:contents,id',
            // 'pricing_id' => 'required|exists:pricings,id',
            'features' => 'nullable|array',
            'side_note' => 'nullable|string'
        ]);
        $setup = SectionSetup::create($r->all());

        if($r->features){
            $setup->features()->sync($r->features);
        }

        return redirect()->route('section-setups.index')->with('success', 'Section Setup created successfully.');
    }

    public function edit($id){
        $data = SectionSetup::findOrFail($id);

        return view('admin.setup.edit', [
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
        $r->validate([
            'section_id' => 'required|exists:sections,id',
            'title_id' => 'required|exists:titles,id',
            'sub_title_id' => 'required|exists:sub_titles,id',
            'content_id' => 'required|exists:contents,id',
            // 'pricing_id' => 'required|exists:pricings,id',
            'features' => 'nullable|array',
            'side_note' => 'nullable|string'
        ]);
        $setup = SectionSetup::findOrFail($id);
        $setup->update($r->all());

        if($r->features){
            $setup->features()->sync($r->features);
        }

        return redirect()->route('section-setups.index')->with('success', 'Section Setup updated successfully.');
    }

    public function destroy($id){
        SectionSetup::destroy($id);
        return back()->with('success', 'Section Setup deleted successfully.');
    }
}
