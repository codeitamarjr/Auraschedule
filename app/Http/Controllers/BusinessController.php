<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Business;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BusinessController extends Controller
{
    public function showUpgradeForm()
    {
        return Inertia::render('Business/UpgradeToBusiness');
    }

    public function upgrade(Request $request)
    {
        $user = Auth::user();

        if ($user->business_account) {
            return redirect()->back()->with('error', 'You already have a business account.');
        }

        // Validate the request
        $data = $request->validate([
            'business_name' => 'required|string|max:255',
            'tax_id' => 'nullable|string|max:50',
            'contact_email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
        ]);

        $user->update(['business_account' => true]);

        // Create business details
        Business::create([
            'user_id' => Auth::id(),
            'business_name' => $data['business_name'],
            'tax_id' => $data['tax_id'],
            'contact_email' => $data['contact_email'],
            'phone' => $data['phone'],
        ]);

        return redirect()->route('dashboard')->with('success', 'Your account has been upgraded to a business account.');
    }
}
