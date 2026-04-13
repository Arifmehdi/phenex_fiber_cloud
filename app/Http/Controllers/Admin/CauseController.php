<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cause;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CauseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        menuSubmenu('causes', 'allCauses');
        $causes = Cause::latest()->paginate(10);
        return view('admin.causes.index', compact('causes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        menuSubmenu('causes', 'createCause');
        return view('admin.causes.create');
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
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string',
            'short_description' => 'nullable|string',
            'duration' => 'nullable|numeric|min:0',
            'amount' => 'required|numeric|min:0',
            'goal_amount' => 'nullable|numeric|min:0',
            'raised_amount' => 'nullable|numeric|min:0',
            'active' => 'boolean',
        ]);

        $data = $request->except('image');
        $data['slug'] = Str::slug($request->title);
        $data['addedby_id'] = Auth::id();
        $data['active'] = $request->has('active') ? 1 : 0;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('causes', 'public');
            $data['image'] = $path;
        }

        Cause::create($data);

        return redirect()->route('admin.causes.index')
                        ->with('success','Price created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cause  $cause
     * @return \Illuminate\Http\Response
     */
    public function show(Cause $cause)
    {
        return view('admin.causes.show', compact('cause'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cause  $cause
     * @return \Illuminate\Http\Response
     */
    public function edit(Cause $cause)
    {
        return view('admin.causes.edit', compact('cause'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cause  $cause
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cause $cause)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string',
            'short_description' => 'nullable|string',
            'duration' => 'nullable|numeric|min:0',
            'amount' => 'required|numeric|min:0',
            'goal_amount' => 'nullable|numeric|min:0',
            'raised_amount' => 'nullable|numeric|min:0',
            'active' => 'boolean',
        ]);

        $data = $request->except('image');
        $data['slug'] = Str::slug($request->title);
        $data['editedby_id'] = Auth::id();

        if ($request->hasFile('image')) {
            // Delete old image
            if ($cause->image) {
                Storage::disk('public')->delete($cause->image);
            }
            $path = $request->file('image')->store('causes', 'public');
            $data['image'] = $path;
        }
        
        // Handle checkbox 'active'
        $data['active'] = $request->has('active') ? 1 : 0;

        $cause->update($data);

        return redirect()->route('admin.causes.index')
                        ->with('success','Price updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cause  $cause
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cause $cause)
    {
        if ($cause->image) {
            Storage::disk('public')->delete($cause->image);
        }
        $cause->delete();

        return redirect()->route('admin.causes.index')
                        ->with('success','Prcie deleted successfully');
    }

    public function causeActive(Request $request){
        $cause = Cause::find($request->id);
        if($cause){
            $cause->active = $request->mode == 'true' ? 1 : 0;
            $cause->save();
            return response()->json(['msg'=>'Successfully updated status','status'=>true]);
        }
        return response()->json(['msg'=>'Cause not found','status'=>false]);
    }
}
