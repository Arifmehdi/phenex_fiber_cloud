<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index(Request $request){
        menuSubmenu('users', 'allUsers');

        if($request->id){
           $data['users'] = User::where('id',$request->id)->paginate(10);
        }else{
            $data['users'] = User::latest()->paginate(50);
        }

        return view('admin.users.index',$data);
    }
    public function show($id){
        menuSubmenu('users', 'allUsers');

        return view('admin.users.view',['user'=>User::find($id)]);
    }
    public function create(){
        menuSubmenu('users', 'createUser');

        return view('admin.users.create');
    }
    public function store(Request $request){
        menuSubmenu('users', 'createUser');

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'mobile' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'designation' => 'nullable|string|max:255',
            'membership_type' => 'nullable|string|max:255',
            'short_bio' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'fb_url' => 'nullable|url',
            'twitter_url' => 'nullable|url',
            'insta_url' => 'nullable|url',
            'yt_url' => 'nullable|url',
            'local_url' => 'nullable|url',
        ]);

        $data = $request->except(['image', 'password']);
        $data['password'] = Hash::make($request->password);
        $data['password_temp'] = $request->password;


        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('users', 'public');
            $data['image'] = $path;
        }

        User::create($data);

        return redirect()->route('admin.create-user')->with('success','Successfully User Created');
    }
    public function edit($id){
        menuSubmenu('users', 'allUsers');
        return view('admin.users.edit',['user'=>User::find($id)]);
    }
    public function update(Request $request, $id){

        menuSubmenu('users', 'allUsers');

        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'mobile' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'designation' => 'nullable|string|max:255',
            'membership_type' => 'nullable|string|max:255',
            'short_bio' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'fb_url' => 'nullable|url',
            'twitter_url' => 'nullable|url',
            'insta_url' => 'nullable|url',
            'yt_url' => 'nullable|url',
            'local_url' => 'nullable|url',
        ]);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            // Delete old image
            if ($user->image && \Illuminate\Support\Facades\Storage::disk('public')->exists($user->image)) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($user->image);
            }
            $path = $request->file('image')->store('users', 'public');
            $data['image'] = $path;
        }

        $user->update($data);
     
        return redirect()->route('admin.user')->with('success','Successfully User Updated');
    }
    public function changePassword(Request $request, $id){
         menuSubmenu('users', 'allUsers');

        $this->validate($request,[
            'password'=>'required|confirmed|min:6',
            'password_confirmation' => 'required| min:6'
        ]);

        User::changePassword($request, $id);
       
        return redirect('/admin/users')->with('success','Successfully Password Updated');
    }

    public function delete($id){
        User::deleteUser($id);
        menuSubmenu('users', 'allUsers');
        return redirect('/admin/users')->with('success','Successfully Deleted');
    }

    public function updateApproval(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->is_approve = $request->is_approve;
        $user->save();

        return response()->json(['message' => 'User approval status updated successfully.']);
    }
}
