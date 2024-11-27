<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Handle the incoming request.
 *
 * @param \Illuminate\Http\Request $request
 * @param string $plan
 * @return \Symfony\Component\HttpFoundation\Response
 */
class CheckoutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $plan = 'price_1QPqprRsKfqiLeFXSsztcoLV')
    {
        return $request->user()
            ->newSubscription('prod_RIRj2SHTliuf4P', $plan)
            ->checkout([
                'success_url' => route('subscription.success'),
                'cancel_url' => route('subscription.cancel'),
            ]);
    }
}
