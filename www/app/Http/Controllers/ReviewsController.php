<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\Items;
use App\Models\User;
use App\Models\Reviews;
use App\Models\Votes;


class ReviewsController extends Controller
{
    public function __construct() {
        /* Regist permited controller */
        $this->middleware('auth', [
            'only' => [
                'create',
                'store',
                'edit',
                'update',
                'destroy'
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $rating = (isset($request->rating)) ?  $request->rating : 1;
        // $rating = (isset($request->rating)) ?  $request->rating : 0;
        $review = Reviews::create([
            'message'  => $request->message,
            'rate'     => $rating,
            'items_id' => $request->items_id,
            'users_id' => Auth::user()->id,
            'created_at' => helperTimeNow(),
            'updated_at' => helperTimeNow()
        ]);
        /* Create review vote */
        Votes::create([
            'like' => 0,
            'dislike' => 0,
            'users_id' => Auth::user()->id,
            'reviews_id' => $review->id,
            'created_at' => helperTimeNow(),
            'updated_at' => helperTimeNow()           
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
        /* Get item by ID */
        $reviews = Reviews::find($id);
        /* Check exist item */
        if ($item == null) {
            return helperErrorPage("A review not found.");
        }
        /* Check permission for edit item */
        if (!helperCheckQueryPermission($item->users_id)) return redirect()->back();

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
        /* Get item by ID */
        $reviews = Reviews::find($id);
        /* Check exist item */
        if ($reviews == null) {
            return helperErrorPage("A review not found.");
        }
        /* Get Item id */
        $item = $reviews->items_id;
        Votes::where('reviews_id', '=', $reviews->id)
            ->first()->delete(); // delete vote       
        $reviews->delete(); // delete review
        return redirect('item/'.$item);
    }
}
