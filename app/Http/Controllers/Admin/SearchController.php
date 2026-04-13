<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AmbulanceService;
use App\Models\BisesoggoCategory;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\BlogSubCategory;
use App\Models\BookAppointment;
use App\Models\Cause;
use App\Models\Company;
use App\Models\ContactUs;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Member;
use App\Models\membership;
use App\Models\MembershipPackage;
use App\Models\Menu;
use App\Models\Page;
use App\Models\Section;
use App\Models\SectionSetup;
use App\Models\User;
use App\Models\Visit;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function globalSearchAjax(Request $request)
    {
        $q = $request->q;
        $type = $request->type ?? $request->route('type');

        if(empty($type)){
            return response()->json(['success' => false, 'html' => '', 'message' => 'Type is required']);
        }

        if(!$q){
            $q = '';
        }

        if($type == 'user')
        {
            $users = User::where('name', 'like', "%". $q."%")
            ->orWhere('email', 'like', "%". $q ."%")
            ->orWhere('id', 'like', "%". $q ."%")
            ->orderBy('name')
            ->paginate(100);
            // $users->appends(['q'=> $q, 'type'=>$type]);
            $html = view('admin.users.search_data', ['users' => $users]);
        }
        elseif($type == 'post')
        {
             $newses = BlogPost::where('title', 'like', "%". $q."%")
             ->orWhere('id', 'like', "%". $q ."%")
             ->orderBy('title')
             ->paginate(100);
             $html = view('admin.news.search_data', ['newses' => $newses]);
        }

        elseif($type == 'category')
        {
             $blog_categories = BlogCategory::where('name', 'like', "%". $q."%")
             ->orWhere('id', 'like', "%". $q ."%")
             ->orderBy('name')
             ->paginate(100);
             $html = view('admin.categories.search_data', ['categories' => $blog_categories]);
        }

        elseif($type == 'company')
        {
             $companies = Company::where('name', 'like', "%". $q."%")
             ->orWhere('id', 'like', "%". $q ."%")
             ->orderBy('name')
             ->paginate(100);
             $html = view('admin.companies.search_data', ['companies' => $companies]);
        }

        elseif($type == 'cause')
        {
             $causes = Cause::where('title', 'like', "%". $q."%")
             ->orWhere('id', 'like', "%". $q ."%")
             ->orderBy('title')
             ->paginate(100);
             $html = view('admin.causes.search_data', ['causes' => $causes]);
        }


        elseif($type == 'department')
        {
             $departments = Department::where('name_en', 'like', "%". $q."%")
             ->orWhere('id', 'like', "%". $q ."%")
             ->orderBy('name_en')
             ->paginate(100);
             $html = view('admin.departments.search_data', ['departments' => $departments]);
        }

        elseif($type == 'hospital')
        {
             $hospitals = Hospital::where('name_en', 'like', "%". $q."%")
             ->orWhere('name_bn', 'like', "%". $q."%")
             ->orWhere('id', 'like', "%". $q ."%")
             ->orderBy('name_en')
             ->paginate(100);
             $html = view('admin.hospital.search_data', ['hospitals' => $hospitals]);
        }


        elseif($type == 'doctor')
        {
             $doctors = Doctor::where('name_en', 'like', "%". $q."%")
             ->orWhere('email', 'like', "%". $q."%")
             ->orWhere('mobile', 'like', "%". $q."%")
             ->orWhere('id', 'like', "%". $q ."%")
             ->orderBy('name_en')
             ->paginate(100);
             $html = view('admin.doctor.search_data', ['doctors' => $doctors]);
        }

        elseif($type == 'visit')
        {
             $visits = Visit::where('patient_name', 'like', "%". $q."%")
             ->orWhere('patient_mobile', 'like', "%". $q."%")
             ->orWhere('patient_details', 'like', "%". $q."%")
             ->orWhere('id', 'like', "%". $q ."%")
             ->orderBy('patient_name')
             ->paginate(100);
             $html = view('admin.visit.search_data', ['visits' => $visits]);
        }



        elseif($type == 'subCategory')
        {
             $blog_sub_categories = BlogSubCategory::where('name', 'like', "%". $q."%")
             ->orWhere('id', 'like', "%". $q ."%")
             ->orderBy('name')
             ->paginate(100);
             $html = view('admin.blog-sub-category.search_data', ['blog_sub_categories' => $blog_sub_categories]);
        }

        elseif($type == 'menu')
        {
             $menus = Menu::where('name', 'like', "%". $q."%")
             ->orWhere('type', 'like', "%". $q ."%")
             ->orWhere('id', 'like', "%". $q ."%")
             ->orderBy('name')
             ->paginate(100);
             $html = view('admin.menu.search_data', ['menus' => $menus]);
        }

        elseif($type == 'page')
        {
             $pages = Page::where('name', 'like', "%". $q."%")
             ->orWhere('id', 'like', "%". $q ."%")
             ->orderBy('name')
             ->paginate(100);
             $html = view('admin.page.search_data', ['pages' => $pages]);
        }


        elseif($type == 'ambulance')
        {
             $ambulances = AmbulanceService::where('name', 'like', "%". $q."%")
             ->orWhere('email', 'like', "%". $q ."%")
             ->orWhere('mobile', 'like', "%". $q ."%")
             ->orWhere('id', 'like', "%". $q ."%")
             ->orderBy('name')
             ->paginate(100);
             $html = view('admin.ambulances.search_data', ['ambulances' => $ambulances]);
        }


        elseif($type == 'appointment')
        {
             $appointments = BookAppointment::where('name', 'like', "%". $q."%")
             ->orWhere('email', 'like', "%". $q ."%")
             ->orWhere('mobile', 'like', "%". $q ."%")
             ->orWhere('id', 'like', "%". $q ."%")
             ->orderBy('name')
             ->paginate(100);
             $html = view('admin.appointments.search_data', ['appointments' => $appointments]);
        }

        elseif($type == 'section_data')
        {
             $sections = \App\Models\Section::where('section_name', 'like', "%". $q."%")
             ->orWhere('page', 'like', "%". $q."%")
             ->orWhere('id', 'like', "%". $q ."%")
             ->orderBy('section_name')
             ->paginate(100);
             $html = view('admin.sections.search_data', ['data' => $sections]);
        }

        elseif($type == 'section')
        {
             $sections = SectionSetup::with(['page', 'section', 'title', 'subTitle'])
             ->whereHas('page', function($query) use ($q) {
                 $query->where('name_en', 'like', "%". $q ."%");
             })
             ->orWhereHas('section', function($query) use ($q) {
                 $query->where('section_name', 'like', "%". $q ."%");
             })
             ->orWhereHas('title', function($query) use ($q) {
                 $query->where('title', 'like', "%". $q ."%");
             })
             ->orWhere('id', 'like', "%". $q ."%")
             ->orderBy('id', 'desc')
             ->paginate(100);
             $html = view('admin.setup.search_data', ['data' => $sections]);
        }

        elseif($type == 'title')
        {
             $titles = \App\Models\Title::where('title', 'like', "%". $q."%")
             ->orWhere('side_note', 'like', "%". $q."%")
             ->orWhere('id', 'like', "%". $q ."%")
             ->orderBy('title')
             ->paginate(100);
             $html = view('admin.titles.search_data', ['data' => $titles]);
        }

        elseif($type == 'subtitle')
        {
             $subtitles = \App\Models\SubTitle::where('title', 'like', "%". $q."%")
             ->orWhere('side_note', 'like', "%". $q."%")
             ->orWhere('id', 'like', "%". $q ."%")
             ->orderBy('title')
             ->paginate(100);
             $html = view('admin.subtitles.search_data', ['data' => $subtitles]);
        }

        elseif($type == 'content')
        {
             $contents = \App\Models\Content::where('name', 'like', "%". $q."%")
             ->orWhere('content', 'like', "%". $q."%")
             ->orWhere('side_note', 'like', "%". $q."%")
             ->orWhere('id', 'like', "%". $q ."%")
             ->orderBy('name')
             ->paginate(100);
             $html = view('admin.contents.search_data', ['data' => $contents]);
        }

        elseif($type == 'feature')
        {
             $features = \App\Models\Feature::with('section')
             ->where('feature', 'like', "%". $q."%")
             ->orWhere('side_note', 'like', "%". $q."%")
             ->orWhere('id', 'like', "%". $q ."%")
             ->orderBy('feature')
             ->paginate(100);
             $html = view('admin.features.search_data', ['data' => $features]);
        }

        elseif($type == 'pricing')
        {
             $pricings = \App\Models\Pricing::with('section')
             ->where('price', 'like', "%". $q."%")
             ->orWhere('currency', 'like', "%". $q."%")
             ->orWhere('side_note', 'like', "%". $q."%")
             ->orWhere('id', 'like', "%". $q ."%")
             ->orderBy('price')
             ->paginate(100);
             $html = view('admin.pricings.search_data', ['data' => $pricings]);
        }

        elseif($type == 'contact')
        {
             $contacts = \App\Models\Contact::where('name', 'like', "%". $q."%")
             ->orWhere('email', 'like', "%". $q."%")
             ->orWhere('subject', 'like', "%". $q."%")
             ->orWhere('id', 'like', "%". $q ."%")
             ->orderBy('id', 'desc')
             ->paginate(100);
             $html = view('admin.contacts.search_data', ['data' => $contacts]);
        }


        return response()->json([
            'success' => true,
            'html' => $html->render()
        ]);
    }
}
