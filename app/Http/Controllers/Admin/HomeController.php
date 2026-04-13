<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\BisesoggoCategory;
use App\Models\BlogPost;
use App\Models\BookAppointment;
use App\Models\BlogCategory;
use App\Models\Cause;
use App\Models\Company;
use App\Models\Contact;
use App\Models\ContactUs;
use App\Models\Doctor;
use App\Models\Feature;
use App\Models\Member;
use App\Models\Order;
use App\Models\Page;
use App\Models\Pricing;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Section;
use App\Models\SectionSetup;
use App\Models\Tag;
use App\Models\User;
use App\Models\Department;
use App\Models\Hospital;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        menuSubmenu('dashboardM','dashboardSM');
        
        // User stats
        $totalUsers = User::count();
        $activeUsers = User::where('is_approve', 1)->count();
        
        // Membership stats
        $membership = User::where('membership_type',1)->count();
        $volunteer = User::where('membership_type',2)->count();
        
        // Content stats
        $news = BlogPost::count();
        $activeNews = BlogPost::where('active', true)->count();
        $newsCategories = BlogCategory::count();
        
        // Content Management
        $sections = Section::count();
        $activeSections = Section::where('status', 'active')->count();
        $sectionSetups = SectionSetup::count();
        
        // Features & Pricing
        $features = Feature::count();
        $pricings = Pricing::count();
        // $activePricings - Pricing table has no active column
        
        // Causes/Donations
        $causes = Cause::count();
        $activeCauses = Cause::where('active', true)->count();
        
        // Departments & Services
        $department = Department::count();
        // $activeDepartments - need to check if active column exists
        
        // Companies
        $companies = Company::count();
        $activeCompanies = Company::where('active', true)->count();
        
        // Contacts
        $totalContacts = Contact::count();
        
        // Pages
        $totalPages = Page::count();
        
        // Recent data for tables
        $recentNews = BlogPost::latest()->take(5)->get();
        $recentContacts = Contact::latest()->take(5)->get();
        
        return view('admin.index',compact(
            'causes', 'volunteer', 'membership', 'news', 'department',
            'totalUsers', 'activeUsers', 'newsCategories', 'sections', 'activeSections',
            'sectionSetups', 'features', 'pricings', 'activeNews',
            'companies', 'activeCompanies', 'totalContacts', 'totalPages',
            'recentNews', 'recentContacts', 'activeCauses'
        ));
    }



    public function selectTagsOrAddNew(Request $request)
    {

        $tags = Tag::where('name', 'like', '%'.$request->q.'%')
        ->select(['name'])->take(30)->get();

        if($tags->count())
        {
            if ($request->ajax())
            {
                return $tags;
            }
        }
        else
        {
            if ($request->ajax())
            {
                return $tags;
            }
        }
    }


    public function selectAuthorsOrAddNew(Request $request)
    {

        $tags =Author::where('name', 'like', '%'.$request->q.'%')
        ->select(['name'])->take(30)->get();
        if($tags->count())
        {
            if ($request->ajax())
            {
                return $tags;
            }
        }
        else
        {
            if ($request->ajax())
            {
                return $tags;
            }
        }
    }


    public function allAppointments(){
        menuSubmenu('appointments','allAppointments');
        $data['appointments'] = BookAppointment::paginate(50);
        return view('admin.appointments.index',$data);
    }


    public function deleteAppointment($id){
        $appointment = BookAppointment::find($id);
        $appointment->delete();
        return back()->with("success","Appointment Delated Successfuly");
    }


}
