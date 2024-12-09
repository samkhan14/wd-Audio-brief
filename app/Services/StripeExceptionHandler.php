<?php

namespace App\Services;

use Exception;
use Illuminate\Support\Facades\Log;
use Stripe\Exception\AuthenticationException;
use Stripe\Exception\ApiErrorException;
use Stripe\Exception\CardException;
use Stripe\Exception\RateLimitException;
use Stripe\Exception\InvalidRequestException;
use Stripe\Exception\ApiConnectionException;

class StripeExceptionHandler
{
    public static function handle(\Exception $e, $token="")
    {
        if (
            $e instanceof AuthenticationException ||
            $e instanceof ApiErrorException ||
            $e instanceof CardException ||
            $e instanceof RateLimitException ||
            $e instanceof InvalidRequestException ||
            $e instanceof ApiConnectionException
        ) {
            Log::error("Token: ".$token." has an exception on ".get_class($e).". Message: ".$e->getMessage());

            return response()->json([
                'error' => $e->getMessage(),
                'code' => $e->getError()->code,
            ]);
        } else {
            Log::error("Token: ".$token." has an exception on ".get_class($e).". Message: ".$e->getMessage());
            return response()->json([
                'error' => $e->getMessage(),
            ]);
        }
    }
}
