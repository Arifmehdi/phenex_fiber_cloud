<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pricing;
use App\Models\Section;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index(){
        menuSubmenu('cloudcontent', 'allPricings');
        $data = Pricing::with('section')->paginate(20);
        return view('admin.pricings.index', compact('data'));
    }

    public function create(){
        menuSubmenu('cloudcontent', 'allPricings');
        $sections = Section::all();
        return view('admin.pricings.create', compact('sections'));
    }

    public function store(Request $r){
        $r->validate([
            'section_id' => 'required|exists:sections,id',
            'price' => 'required|numeric|min:0',
            'currency' => 'required|string|max:10',
            'side_note' => 'nullable|string'
        ]);
        Pricing::create($r->all());
        return redirect()->route('pricings.index')->with('success', 'Pricing created successfully.');
    }

    public function edit($id){
        $data = Pricing::findOrFail($id);
        $sections = Section::all();
        return view('admin.pricings.edit', compact('data','sections'));
    }

    public function update(Request $r, $id){
        $r->validate([
            'section_id' => 'required|exists:sections,id',
            'price' => 'required|numeric|min:0',
            'currency' => 'required|string|max:10',
            'side_note' => 'nullable|string'
        ]);
        Pricing::findOrFail($id)->update($r->all());
        return redirect()->route('pricings.index')->with('success', 'Pricing updated successfully.');
    }

    public function destroy($id){
        Pricing::destroy($id);
        return back()->with('success', 'Pricing deleted successfully.');
    }
}