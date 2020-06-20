<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Models\User;

class HomeController extends Controller
{
  /**
   * Show user profile
   * 
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
    return view('home');
  }
  public function show() {
    
  }
  /**
   * Store/Updates User Avatar
   * 
   * @param Request $request
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function store(Request $request, User $user)
  {
    $request->validateWithBag('avatar', [
      'avatar' => 'required|image|max:5000'
    ]);
    if ($request->avatar->isValid()) {
      $matches = preg_grep("/" . Auth::user()->id . "/", Storage::files('avatars'));
      foreach ($matches as $file) {
        if (preg_match("/" . Auth::user()->id . "/", $file)) {
          Storage::delete($file);
        }
      }
      Storage::makeDirectory('avatars');
      Image::make($request->file('avatar')->getRealPath())->resize(70, null, function ($constraint) {
        $constraint->aspectRatio();
      })->orientate()->save('storage/avatars/' . Auth::user()->id . '.jpg');
      Auth::user()->avatar = 1;
      DB::update('update users set avatar = 1 where id = ?', [Auth::user()->id]);
      return view('home', [
        'avatar' => Storage::url('avatars/' . Auth::user()->id . '.jpg')
      ]);
    }
  }
  /**
   * Delete user avatar
   * 
   * @param \App\Models\User $user
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function destroy($id)
  {
    $user = User::find($id);
    Storage::delete('avatars/' . Auth::user()->id . '.jpg');
    $user->avatar = 0;
    $user->update();
    return view('home');
  }
}
