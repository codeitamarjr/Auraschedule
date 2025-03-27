<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use App\Models\Tenant;
use App\Models\Business;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BusinessController extends Controller
{
    public function showUpgradeForm()
    {
        return Inertia::render('Business/UpgradeToBusiness');
    }

    public function showSubscription()
    {
        $user = Auth::user();

        return Inertia::render('Business/Subscription', [
            'plan1' => route('business.checkout', 'price_1QPqprRsKfqiLeFXSsztcoLV'),
            'plan2' => route('business.checkout', 'price_1QPqprRsKfqiLeFXJqiZFtrd'),
            'plan3' => route('business.checkout', 'price_1QPqprRsKfqiLeFXD7HKFwq0'),
            'isSubscribed' => $user->subscribed('prod_RIRj2SHTliuf4P'),
        ]);
    }

    public function showSuccess()
    {
        return Inertia::render('Business/Success');
    }

    public function showCancel()
    {
        return Inertia::render('Business/Cancel');
    }

    public function store(Request $request)
    {
        $user = $request->user();

        if ($user->business_account) {
            return redirect()->back()->with('error', 'You already have a business account.');
        }

        // Validate the request
        $data = $request->validate([
            'business_name' => 'required|string|max:255',
            'business_subdomain' => 'required|string|max:255|unique:tenants,subdomain',
            'tax_id' => 'nullable|string|max:50',
            'contact_email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
        ]);

        // Create business details
        $business = Business::create([
            'user_id' => Auth::id(),
            'business_name' => $data['business_name'],
            'tax_id' => $data['tax_id'],
            'contact_email' => $data['contact_email'],
            'phone' => $data['phone'],
        ]);

        // Create tenant details
        $business->tenant()->create([
            'name' => $data['business_name'],
            'subdomain' => $data['business_subdomain'],
        ]);

        $user->update(['business_account' => true]);
        $user->save();

        return redirect()->route('dashboard')->with('success', 'Your account has been upgraded to a business account.');
    }

    /**
     * Display the business edit form.
     */
    public function edit(): Response
    {
        $user = Auth::user();
        $business = $user->business;

        return Inertia::render('Business/Edit', [
            'business' => $business->toArray()
        ]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $business = $user->business;
        dd($business);

        $data = $request->validate([
            'business_name' => 'required|string|max:255',
            'business_subdomain' => 'required|string|max:255',
            'tax_id' => 'nullable|string|max:50',
            'contact_email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
        ]);

        $business->tenant->update([
            'name' => $data['business_name'],
            'subdomain' => $data['business_subdomain'],
        ]);

        $business->update($data);
        $business->save();

        return back()->with('success', 'Business details updated successfully.');
    }

    /**
     * Delete the authenticated user's business.
     */
    public function destroy(Request $request)
    {
        $user = $request->user();

        // Ensure the user has a business
        if (!$user->business) {
            return back()->withErrors(['error' => 'No business found to delete.']);
        }

        // Delete the tenant and business
        $user->business->tenant->delete();
        $user->business->delete();

        // Update the user's business_account status
        $user->update(['business_account' => false]);
        $user->save();

        return redirect()->route('dashboard')->with('success', 'Business account deleted successfully.');
    }
}
