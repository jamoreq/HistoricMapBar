<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfileRequest;
use App\Jobs\UpdateProfile;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware(Authenticate::class);
    }

    public function edit()
    {
        return view('users.settings.settings');
    }

    public function update(UpdateProfileRequest $request)
    {
        $this->dispatchNow(UpdateProfile::fromRequest(Auth::user(), $request));

        $this->success('settings.updated');

        return redirect()->route('settings.profile');
    }
    //
}