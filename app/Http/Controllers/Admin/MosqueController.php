<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Division;
use App\Models\Mosque;
use App\Models\Upazila;
use App\Models\Union;
use App\Models\Village;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MosqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        menuSubmenu('mosques', 'allMosques');
        $mosques = Mosque::with('division', 'district', 'upazila', 'union', 'village')->latest()->paginate(10);
        return view('admin.mosques.index', compact('mosques'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        menuSubmenu('mosques', 'createMosque');
        $divisions = Division::all();
        return view('admin.mosques.create', compact('divisions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'division_id' => 'required|exists:divisions,id',
            'district_id' => 'required|exists:districts,id',
            'upazila_id' => 'required|exists:upazilas,id',
            'union_id' => 'nullable|exists:unions,id',
            'village_id' => 'nullable|exists:villages,id',
            'name' => 'required|string|max:255',
            'foundation_year' => 'nullable|string|max:4',
            'address' => 'required|string',
            'imam_name' => 'nullable|string|max:255',
            'secretary_name' => 'nullable|string|max:255',
            'reg_number' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();
        $data['status'] = $request->has('status');

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('mosques', 'public');
            $data['image'] = $path;
        }

        Mosque::create($data);

        return redirect()->route('admin.mosques.index')->with('success', 'Mosque created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mosque $mosque
     * @return \Illuminate\Http\Response
     */
    public function edit(Mosque $mosque)
    {
        $divisions = Division::all();
        $districts = District::where('division_id', $mosque->division_id)->get();
        $upazilas = Upazila::where('district_id', $mosque->district_id)->get();
        $unions = Union::where('upazila_id', $mosque->upazila_id)->get();
        $villages = Village::where('union_id', $mosque->union_id)->get();
        return view('admin.mosques.edit', compact('mosque', 'divisions', 'districts', 'upazilas', 'unions', 'villages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mosque $mosque
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mosque $mosque)
    {
        $request->validate([
            'division_id' => 'required|exists:divisions,id',
            'district_id' => 'required|exists:districts,id',
            'upazila_id' => 'required|exists:upazilas,id',
            'union_id' => 'nullable|exists:unions,id',
            'village_id' => 'nullable|exists:villages,id',
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'imam_name' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();
        $data['status'] = $request->has('status');

        if ($request->hasFile('image')) {
            if ($mosque->image) {
                Storage::disk('public')->delete($mosque->image);
            }
            $path = $request->file('image')->store('mosques', 'public');
            $data['image'] = $path;
        }

        $mosque->update($data);

        return redirect()->route('admin.mosques.index')->with('success', 'Mosque updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mosque $mosque
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mosque $mosque)
    {
        if ($mosque->image) {
            Storage::disk('public')->delete($mosque->image);
        }
        $mosque->delete();
        return redirect()->route('admin.mosques.index')->with('success', 'Mosque deleted successfully.');
    }
}
