<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class RegisterUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $attributes = Validator::validate($request->all(), [
            'name'  => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6', Password::min(6)]
        ]);

        $user = User::create($attributes);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);

    }
}
