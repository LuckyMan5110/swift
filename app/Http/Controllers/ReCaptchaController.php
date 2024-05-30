<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Anhskohbo\NoCaptcha\Facades\NoCaptcha;

class ReCaptchaController extends Controller
{
    public function recaptcha(Request $request){
        $request->validate([
            'g-recaptcha-response' => 'required|captcha',
            // Other validation rules...
        ]);
        print_r('reCAPTCHA OK');exit;

        // Handle form submission...
    }
    

    public function show()
    {
        return view('recaptcha');
    }
}
