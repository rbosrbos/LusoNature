<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class AvatarProvider extends ServiceProvider
{
    protected $avatar;
    /**
     * Register services.
     *
     * @return void
     */

    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            if (Auth::check()) {
                $avatar = preg_grep("/" . Auth::user()->uuid . "/", Storage::files('avatars'));
                $avatarUrl = '';
                if (count($avatar) > 0) {
                    $avatarUrl = Storage::url(array_values($avatar)[0]);
                }
                $view->with(['avatar' => $avatarUrl]);
            }
        });
    }
}
