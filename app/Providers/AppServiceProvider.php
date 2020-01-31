<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function boot()
    {


        $form = '<p>' . captcha_img() . '</p>';
        $form .= '<label for="captcha">Enter Captcha</label>';
        $form .= '<p><input type="text" id="captcha" name="captcha" placeholder="Prove you are not a bot. Type in what you see above."></p>';

        $form .= '</form>';


        View::share('captchaform', $form);
    }
}
