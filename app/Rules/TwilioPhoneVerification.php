<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Twilio\Rest\Client;


class TwilioPhoneVerification implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $sid    = "ACe092dc5aa5ad04469291a092cefca47c";
        $token  = "fea384da41f68942708f64e6944ec525";
        $twilio = new Client($sid, $token);
        
        // Combine dial code and phone number
        $dialCode = request('dialCode');
        $completePhoneNumber = '+'. $dialCode . $value;

        try {
            $number = $twilio->lookups->v2->phoneNumbers($completePhoneNumber)
                                    ->fetch([
                                        "fields" => "line_type_intelligence"
                                    ]);
            return $number->lineTypeIntelligence;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Please enter a valid number.';
    }
}
