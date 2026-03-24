<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class MembershipController extends Controller
{
    public function membership()
    {
        $executiveMembers = User::where('membership_type', 1)->where('is_approve', 1)->get();
        $volunteerMembers = User::where('membership_type', 2)->where('is_approve', 1)->get();
        $lifetimeMembers = User::where('membership_type', 3)->where('is_approve', 1)->get();
        $generalMembers = User::where('membership_type', 4)->where('is_approve', 1)->get();
        $donorMembers = User::where('membership_type', 5)->where('is_approve', 1)->get();

        return view('website.membership', compact('executiveMembers', 'volunteerMembers', 'lifetimeMembers', 'generalMembers', 'donorMembers'));
    }

    public function memberApply()
    {
        $memberships = User::where('membership_type',1)->get();
        return view('website.member_apply' , compact('memberships'));  

    }
    public function membershipStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'mobile' => 'required|string|max:20',
            'membership_type' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if (in_array($request->membership_type, [2,3,4])) { // lifetime, general, donor
            $request->validate([
                'payment_amount' => 'required|numeric|min:1',
            ]);
        }
        
        // dd($request->all());

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->father_name = $request->f_name;
        $user->designation = $request->occupation;
        $user->address = $request->address;
        $user->reg_date = now();
        $user->dob = $request->dob;
        $user->short_bio = $request->short_bio;
        $user->mobile = $request->mobile;
        $user->membership_type = $request->membership_type;
        $user->fb_url = $request->facebook;
        $user->twitter_url = $request->twitter;
        $user->insta_url = $request->insta_url;
        $user->yt_url = $request->youtube;
        $user->local_url = $request->local;
        $user->password = bcrypt('password'); // Set a default password
        $user->nid = $request->nid;

        // $user->tin_number = $request->tin_number;
        // $user->ssc_passing = $request->ssc_passing;
        // $user->ssc_registration = $request->ssc_registration;
        // $user->health_history = $request->health_history;
        // $user->bkash_number = $request->bkash_number;
        // $user->blood_group = $request->blood_group;
        // $user->writer = $request->writer;
        // $user->present_address = $request->address;
        // $user->permanent_address = $request->address;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('profile_images', 'public');
            $user->image = $imagePath;
        }

        $user->save();

        return redirect()->back()->with('success', 'Your application has been submitted successfully!');
    }
}
