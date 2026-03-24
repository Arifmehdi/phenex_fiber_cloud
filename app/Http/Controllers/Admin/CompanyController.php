<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        menuSubmenu('companies', 'allCompanies');
        $companies = Company::latest()->paginate(10);
        return view('admin.companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        menuSubmenu('companies', 'createCompany');
        return view('admin.companies.create');
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
            'name' => 'required|string|max:255',
            'address' => 'nullable|string',
            'phone' => 'nullable|string|max:20',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'active' => 'boolean',
        ]);

        $data = $request->except('img');
        $data['addedby_id'] = Auth::id();

        if ($request->hasFile('img')) {
            $path = $request->file('img')->store('companies', 'public');
            $data['img'] = $path;
        }

        Company::create($data);

        return redirect()->route('admin.companies.index')
                        ->with('success','Company created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return view('admin.companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('admin.companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'nullable|string',
            'phone' => 'nullable|string|max:20',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'active' => 'boolean',
        ]);

        $data = $request->except('img');
        $data['editedby_id'] = Auth::id();

        if ($request->hasFile('img')) {
            // Delete old image
            if ($company->img) {
                Storage::disk('public')->delete($company->img);
            }
            $path = $request->file('img')->store('companies', 'public');
            $data['img'] = $path;
        }
        
        // Handle checkbox 'active'
        $data['active'] = $request->has('active');


        $company->update($data);

        return redirect()->route('admin.companies.index')
                        ->with('success','Company updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        if ($company->img) {
            Storage::disk('public')->delete($company->img);
        }
        $company->delete();

        return redirect()->route('admin.companies.index')
                        ->with('success','Company deleted successfully');
    }
}
