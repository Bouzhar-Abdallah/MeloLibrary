<?php
 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
 
use App\Models\User;
 
class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show()
    {
        $users = DB::select('select * from user');
        dd($users);
        return view('example', ['users' => $users]);

    }
}