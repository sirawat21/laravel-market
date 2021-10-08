<?php
/** 
* Custom User Controller 
*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Followings;
use App\Models\Reviews;

class CUserController extends Controller
{
    public function show($id)
    {
        $user = User::find($id);
        $followings = Followings::All()->where('users_id', $id)->toArray();
        return view('pages.profile', [
            'user' => $user,
            'followings' => $followings
        ]);
    }
}