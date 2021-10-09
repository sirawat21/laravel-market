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
use App\Models\Items;

class CustomUserController extends Controller
{
    /* Show Profile */
    public function show($id)
    {
        /* Get user profile info */
        $user = User::find($id);

        /* Check exist User  */
        if ($user == null) {
            return helperErrorPage("Unable to load user profile, User ID is not registered yet.");
        }


        /* Get following account lists */
        $followings = Followings::All()->where('users_id', $id)->toArray();

        $followed = false; // default follower status false

        /* Check profile owner */
        if(Auth::check()) {
            $owner = ($user->id == Auth::user()->id) ? true : false;
            /* Check followed */
            if (!$owner) {
                $isNotFollowed = Followings::where([
                    ['users_id', '=', Auth::user()->id],
                    ['following', '=', $id]])->get()->isEmpty();
                $followed = ($isNotFollowed) ? false : true; // if not follow
            }
        } else {
            $owner =  false;
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

    /* Show Profile Item*/
    public function item($id)
    {
        $items = Items::All()->where('users_id', '=', $id);
        return view('pages.profile-item', [
            'items'=> $items,
        ]);
    }
}