<?php
/** 
* Custom User Controller 
*/
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Followings;
use App\Models\Reviews;

class CustomUserController extends Controller
{
    public function show($id)
    {
        /* Get user profile info */
        $user = User::find($id);

        /* Get following account lists */
        $followings = Followings::All()->where('users_id', $id)->toArray();

        /* Check profile owner */
        $owner = ($user->id == Auth::user()->id) ? true : false;

        /* Check followed */
        $followed = false;
        if (!$owner) {
            $isNotFollowed = Followings::where([
                ['users_id', '=', Auth::user()->id],
                ['following', '=', $id]])->get()->isEmpty();
            $followed = ($isNotFollowed) ? false : true; // if not follow
        }

        /* Render veiw */
        return view('pages.profile', [
            'user' => $user,
            'owner' => $owner,
            'current_profile_id' => $id,
            'followings' => $followings,
            'followed' => $followed
        ]);
    }
}