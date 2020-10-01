<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePassword;
use App\Http\Requests\UpdatePlayerProfile;
use App\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PlayerProfileController extends Controller
{
    public function edit()
    {
        return view('profile.index');
    }

    public function update(UpdatePlayerProfile $request, $id)
    {
        // update players table
        Player::where('id', $id)->update([
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'address' => $request->address,
            'dob' => $request->birthday,
            'mobile' => $request->mobile,
            'nic' => $request->nic,
            'gender' => $request->gender,
            'height' => $request->height,
            'weight' => $request->weight,
        ]);
        // return success message
        return back()->with('success', 'Hello ' . $request->firstname . " " . $request->lastname . ', Your profile has been updated!');
    }

    public function showChangePasswordForm()
    {
        return view('profile.password');
    }

    public function updatePassword(UpdatePassword $request, $id)
    {
        $hashed_password = Hash::make($request->password_confirmation);
        Player::where('id', $id)->update(['password' => $hashed_password]);
        return back()->with('success', 'Your password has been updated!');
    }
}
