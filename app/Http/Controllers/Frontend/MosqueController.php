<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mosque;
use App\Models\Division;
use App\Models\District;
use App\Models\Upazila;
use App\Models\Union;
use App\Models\Village;
use App\Models\BlogPost;

class MosqueController extends Controller
{
    public function index(Request $request)
    {

        $query = Mosque::where('status', 1);

        if ($request->division_id) {
            $query->where('division_id', $request->division_id);
        }

        if ($request->district_id) {
            $query->where('district_id', $request->district_id);
        }

        if ($request->upazila_id) {
            $query->where('upazila_id', $request->upazila_id);
        }

        if ($request->union_id) {
            $query->where('union_id', $request->union_id);
        }

        if ($request->village_id) {
            $query->where('village_id', $request->village_id);
        }

        $data['mosques'] = $query->latest()->paginate(12);

        $data['divisions'] = Division::orderBy('name')->get();
        $data['districts'] = District::orderBy('name')->get();
        $data['upazilas']  = Upazila::orderBy('name')->get();
        $data['unions'] = Union::orderBy('name')->get();
        $data['villages'] = Village::orderBy('name')->get();

        $data['blogs'] = BlogPost::paginate(12);

        return view('website.mosque', $data);
    }

    public function getDistricts($division_id)
    {
        return District::where('division_id', $division_id)->orderBy('name')->get();
    }

    public function getUpazilas($district_id)
    {
        return Upazila::where('district_id', $district_id)->orderBy('name')->get();
    }

    public function getUnions($upazila_id)
    {
        return Union::where('upazila_id', $upazila_id)->orderBy('name')->get();
    }

    public function getVillages($union_id)
    {
        return Village::where('union_id', $union_id)->orderBy('name')->get();
    }

}
