<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Section;
use App\Models\Title;
use App\Models\SubTitle;
use App\Models\Content;
use App\Models\Pricing;
use App\Models\Feature;
use App\Models\Page;
use App\Models\SectionSetup;
use Illuminate\Http\Request;

class SectionSetupController extends Controller
{
    public function index(){
        $data = SectionSetup::with([
            'section','title','subTitle','content','pricing','features', 'page'
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
            'pages' => Page::where('active', 1)->get(),
        ]);
    }

    public function store(Request $r){
        $r->validate([
            'section_id' => 'required|exists:sections,id',
            'title_id' => 'nullable|exists:titles,id',
            'sub_title_id' => 'nullable|exists:sub_titles,id',
            'content_id' => 'nullable|exists:contents,id',
            'page_id' => 'nullable|exists:pages,id',
            'features' => 'nullable|array',
            'side_note' => 'nullable|string'
        ]);
        $setup = SectionSetup::create($r->all());

        if($r->features){
            $setup->features()->sync($r->features);
        }

        return redirect()->route('section-setups.index')->with('success', 'Section Setup created successfully.');
    }

    public function show($id){
        abort(404);
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
            'pages' => Page::where('active', 1)->get(),
        ]);
    }

    public function update(Request $r, $id){
        $r->validate([
            'section_id' => 'required|exists:sections,id',
            'title_id' => 'nullable|exists:titles,id',
            'sub_title_id' => 'nullable|exists:sub_titles,id',
            'content_id' => 'nullable|exists:contents,id',
            'page_id' => 'nullable|exists:pages,id',
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

    public function toggleActive($id){
        $setup = SectionSetup::findOrFail($id);
        $setup->active = !$setup->active;
        $setup->save();
        return back()->with('success', 'Status updated successfully.');
    }

    public function destroy($id){
        SectionSetup::destroy($id);
        return back()->with('success', 'Section Setup deleted successfully.');
    }
}
