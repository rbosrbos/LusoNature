<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

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
     * User Store procedures
     * 
     * @param  \Illuminate\Http\Request  $request
     */
    public function storeUser(Request $request) {
        $request->validate([
            'email' => 'required|email|unique:users',
            
        ]);
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
}
