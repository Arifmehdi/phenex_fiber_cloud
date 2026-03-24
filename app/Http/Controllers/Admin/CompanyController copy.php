<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    
    public function index()
    {
        $companies = Company::latest()->paginate(20);
        return view('admin.companies.index', compact('companies'));
    }

    public function create()
    {
        return view('admin.companies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'nullable|string',
            'phone' => 'nullable|string',
            'img' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
        ]);

        $data = $request->all();
        $data['addedby_id'] = Auth::id();

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('uploads/companies'), $filename);
            $data['img'] = 'uploads/companies/'.$filename;
        }

        Company::create($data);

        return redirect()->route('companies.index')->with('success', 'Company created successfully.');
    }

    public function edit($id)
    {
        $company = Company::findOrFail($id);
        return view('admin.companies.edit', compact('company'));
    }

    public function update(Request $request, $id)
    {
        $company = Company::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'nullable|string',
            'phone' => 'nullable|string',
            'img' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
        ]);

        $data = $request->all();
        $data['editedby_id'] = Auth::id();

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('uploads/companies'), $filename);
            $data['img'] = 'uploads/companies/'.$filename;
        }

        $company->update($data);

        return redirect()->route('companies.index')->with('success', 'Company updated successfully.');
    }

    public function destroy($id)
    {
        $company = Company::findOrFail($id);
        $company->delete();

        return redirect()->route('companies.index')->with('success', 'Company deleted successfully.');
    }
}