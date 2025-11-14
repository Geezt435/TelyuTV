<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('profile.edit', ['user' => auth()->user()]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'location' => 'nullable|string|max:255',
        ]);

        $user = auth()->user();
        $user->update($request->only('fullname','bio','location'));

        return back()->with('success', 'Profil diperbarui');
    }

    public function preferences(Request $request)
    {
        $user = auth()->user();
        $user->update([
            'email_notify' => $request->has('email_notify'),
            'dark_mode' => $request->has('dark_mode'),
            'adult_content' => $request->has('adult_content'),
            'language' => $request->language,
        ]);

        return back()->with('success', 'Preferensi diperbarui');
    }

    public function avatar(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|max:2048'
        ]);

        $path = $request->file('avatar')->store('avatars','public');

        $user = auth()->user();
        $user->update(['avatar' => $path]);

        return back()->with('success', 'Avatar diperbarui');
    }
}
