<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the administration dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Lists all users
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function users()
    {
        return view('admin.users.index', [
            'users' => User::all()
        ]);
    }

    /**
     * User edit form
     * 
     * @param string $id
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function userEdit(string $id)
    {
        $user = User::find($id);
        return view('admin.users.edit', [
            'user' => $user
        ]);
    }

    /**
     * User update procedures
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function userUpdate(Request $request)
    {
        $user = User::find($request->id);
        $fields = ['name'];
        $password_change = false;
        $rules = [
            'name' => 'required|min:5'
        ];
        
        if (strtolower($user->email) != strtolower($request->email)) {
            array_push($fields, 'email');
            $rules = array_merge($rules, [
                'email' => 'required|email|unique:users'
            ]);
        }
        if (!empty($request->password)) {
            $password_change = true;
            $rules = array_merge($rules, [
                'password' => 'min:8',
                'password_confirmation' => 'same:password'
            ]);
        }
        $request->validate($rules);
        if ($password_change) {
            $user->password = Hash::make($request->password);
            $user->save();
        }
        $user->update($request->only($fields));
        return back()->with(['message' => 'User ' . $request->email . ' updated']);
    }

    /**
     * Destroy user procedure
     * 
     * @param string $id
     * @return string
     */

    public function userDestroy(string $id)
    {
        $email = User::find($id)->email;
        User::destroy($id);
        return 'User ' . $email . ' deleted';
    }

    /**
     * Delete user's avatar
     * 
     * @param string $id
     * @return string
     */

    public function userDeleteAvatar(string $id)
    {
        Storage::delete('avatars/' . $id . '.jpg');
        $user = User::find($id);
        $user->avatar = null;
        $user->save();
        return $user->email . '\'s avatar deleted';
    }
}
