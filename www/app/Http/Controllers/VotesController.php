<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Votes;

class VotesController extends Controller
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
        //
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
        /* Get vote by review id */
        $vote = Votes::find($id);
        /* Check like or dislike */
        $noVote = $vote->like == 0 && $vote->dislike == 0 ;
        if ( $noVote && $request->status == 1) {
            $vote->like += 1;
        } else if ( $noVote && $request->status == 0)
            $vote->like += 1;
        else if ($request->status == 1) {
            $vote->like += 1;
            $vote->dislike -= 1;
        } else {
            $vote->like -= 1;
            $vote->dislike += 1;
        }
        $vote->save();
        return redirect("item/$request->items_id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
