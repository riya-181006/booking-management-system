<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Booking;  
use App\Models\WebPage;  
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function index(){
    $data = User::get();
    return view('AdminDashboard.Users.index', ['data' => $data]);
}

public function add(){
    return view('AdminDashboard.Users.addEdit');
}

public function save(Request $request){

    $user = new User([
        'name' => $request->get('name'),
        'email' => $request->get('email'),
        'phone_no' => $request->get('phone_no'),
        'password' => Hash::make($request->get('secret')),
        'user_type' => $request->get('user_type'),
    ]);

    $user->save();

    return redirect()->route('dashboard.admin'); 
}

public function edit($id){
    $data = User::find($id);

    return view('AdminDashboard.Users.addEdit', [
        'data' => $data
    ]);
}

    public function update(Request $request, $id){
    $user = User::find($id);

    $user->name = $request->get('name');
    $user->email = $request->get('email');
    $user->phone_no = $request->get('phone_no');
    $user->user_type = $request->get('user_type');

    $user->save();

    return redirect()->route('user.user'); 
}


public function viewDelete($id){
    $user = User::find($id);

    return view('AdminDashboard.Users.delete', [
        'user' => $user
    ]);
}

   public function delete($id){
    User::where('id', $id)->delete();

    return redirect()->route('user.user');
}


public function getProfile(){
    $data = User::find(Auth::id());

    if(Auth::user()->user_type == 1){
        $view = 'AdminDashboard.Profile.index';
    } else {
        $view = 'UserDashboard.Profile.index';
    }

    return view($view, ['data' => $data]);
}


public function saveProfile(Request $request){
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . Auth::id(),
        'phone_no' => 'nullable|string|max:20',
    ]);

    $user = User::find(Auth::id());

    $user->name = $request->get('name');
    $user->email = $request->get('email');
    $user->phone_no = $request->get('phone_no');

    $user->save();

    return redirect()->route('user.profile.get')->with('success', 'Profile updated!');
}

    public function adminDashboard()
{
    $data['totalUsers'] = User::count();
    $data['adminUsers'] = User::where('user_type', 1)->count();
    $data['clientUsers'] = User::where('user_type', 2)->count();
    $data['totalBookings'] = Booking::where('user_id', Auth::id())->count();
    $data['completedBookings'] = Booking::where('user_id', Auth::id())->where('status', 3)->count();
    $data['totalWebpages'] = WebPage::count();
    $data['activeWebpages'] = WebPage::where('status', 1)->count();

    return view('AdminDashboard.index', compact('data'));
}

public function userDashboard()
{
    $data['totalBookings'] = Booking::count();
    $data['completedBookings'] = Booking::where('status', 3)->count();

    return view('UserDashboard.index', compact('data')); 
}

    }

