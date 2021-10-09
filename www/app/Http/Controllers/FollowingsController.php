<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Followings;

class FollowingsController extends Controller
{
    public function __construct() {
        /* Regist permited controller */
        $this->middleware('auth', [
            'only' => [
                'store',
                'destroy',
            ]
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* Get user ID from current logined session */
        $users_id = Auth::user()->id;

        /* Insert following user record */
        $user = Followings::create([
            'users_id' => $users_id,
            'following' => $request->following,
            'created_at' => helperTimeNow(),
            'updated_at' => helperTimeNow(),
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /* Delete Following user */
        $following = Followings::where([
            ['users_id', '=', Auth::user()->id],
            ['following', '=', $id],
        ]);
        $following->delete();

        return redirect()->back();
    }
}
