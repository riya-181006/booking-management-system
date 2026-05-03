<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    public function login(){
        return view('Auth.login'); 
    }
      public function authenticate(Request $request)
        {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required'
            ]);
            if (Auth::attempt([
                'email' => $request->email,
                'password' => $request->password
            ])) {
                $request->session()->regenerate();
                if (Auth::user()->user_type == 1) {
                    return redirect()->route('dashboard.admin');
                } else {
                    return redirect()->route('dashboard.user'); // or whatever your user dashboard route is
                }
                }
                return back()->withErrors([
                'email' => 'Invalid email or password'
            ]);
        }
    public function signup(){
        return view('Auth.register');
    }
   public function createUser(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'phone_no' => 'required',
        'password' => 'required|confirmed',
    ]);
    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone_no' => $request->phone_no,
        'user_type' => 2,
        'password' => Hash::make($request->password),
    ]);
    return redirect('/login')->with('success', 'Registered successfully');
}
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}