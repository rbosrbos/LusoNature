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
        //$avatar = preg_grep("/" . $auth->user()->id . "/", Storage::files('avatars'));
        // $avatarUrl = '';
        // if (count($avatar) > 0) {
        //     $avatarUrl = Storage::url($avatar[0]);
        // }
        // $this->avatar = $avatarUrl;
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
                $avatar = preg_grep("/" . Auth::user()->id . "/", Storage::files('avatars'));
                $avatarUrl = '';
                if (count($avatar) > 0) {
                    $avatarUrl = Storage::url(array_values($avatar)[0]);
                }
                $view->with(['avatar' => $avatarUrl]);
            }
        });
    }
}
