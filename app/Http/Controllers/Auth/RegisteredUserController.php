<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\TrxID;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    public function verfication()
    {
        return view('auth.verification');
    }

    public function package()
    {
        return view('auth.package');
    }

    public function storeFees(Request $request)
    {
        $validated = $request->validate([
            'easypaisa_number' => 'required',
            'sender_name' => 'required',
            'trx_id' => 'required',
        ]);

        $trx_id = new TrxID();
        $trx_id->easypaisa_number = $validated['easypaisa_number'];
        $trx_id->sender_name = $validated['sender_name'];
        $trx_id->trx_id = $validated['sender_name'];
        $trx_id->save();
        return redirect()->route('verification.page');

    }



    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'mobile' => 'required',
            'package' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'package' => $request->package,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
