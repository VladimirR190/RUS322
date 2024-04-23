<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.register.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        session()->flash('success', 'Региятсрация пройдена');
        Auth::login($user);
        return redirect()->route('home');
    }
    // @if (session()->has('success'))
    //     <div class="alert alert-success">
    //         {{session('success')}}
    //     </div>
    // @endif

    public function loginForm()
    {
        return view('user.login');
    }

    public function login(Request $request)
    {
        dd($request->all());
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.create');
    }
}
