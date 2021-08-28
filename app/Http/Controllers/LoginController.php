<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Auth\Events\Registered;

class LoginController extends Controller
{
    /**
     * Display a login form
     *
     * @return \Illuminate\Http\Response
     */
    public function loginFormDisplay()
    {
        // dd('login form here ');

        return view('auth.login');
    }

    /**
     * Display a login form
     *
     * @return \Illuminate\Http\Response
     */
    public function registerFormDisplay()
    {
        // dd('login form here ');

        return view('auth.register');
    }

    /**
     * handle login ops
     */

    public function authLogin(Request $request)
    {

        //dd($request->email);
        Cart::destroy();

        $validatedData = $request->validate([
            'email' => ['required', 'max:255'],
            'password' => ['required'],
        ]);


        if (Auth::attempt($validatedData)) {

            $role = Auth()->user()->is_admin;
            if ($role == '1') {
                return redirect()->route('profile-admin');
            } else {

                return redirect()->route('profile-client');
            }

        } else {
            return redirect()->back()->with('message', 'Mot de passe ou email invalide');
        }

    }

    /**
     * handle register ops
     */

    public function authRegister(Request $request)
    {

        $validatedData = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:6', 'string'],
        ]);

        $validatedData['img_uri'] = '/img/empty_photo/empty-user.jpg';
        $validatedData['is_admin'] = 0;
        $validatedData['password'] = bcrypt($request->password);
        $user = User::create($validatedData);

        if (!is_null($user)) {
            Auth::login($user);
            event(new Registered($user));
            return redirect()->route('verification.notice');
        } else {
            return redirect()->back()->with('message', 'probleme d inscription');
        }

    }

    /**
     * handle logout
     */

    public function authLogout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Login $login
     * @return \Illuminate\Http\Response
     */
    public function show(Login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Login $login
     * @return \Illuminate\Http\Response
     */
    public function edit(Login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Login $login
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Login $login
     * @return \Illuminate\Http\Response
     */
    public function destroy(Login $login)
    {
        //
    }
}
