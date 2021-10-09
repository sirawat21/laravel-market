<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

/* Models */
use App\Models\Items;
use App\Models\User;
use App\Models\Images;
use App\Models\Manufacturers;
use App\Models\Reviews;


class ItemsController extends Controller
{

    public function __construct() {
        /* Regist permited controller */
        $this->middleware('auth', [
            'only' => [
                'create',
                'store',
            ]
        ]);
    }

    /* Display a listing of the resource */
    public function index()
    {
        $items = Items::All();
        return view('pages.market', [
            'items'=> $items,
        ]);
    }

    /* Show the form for creating a new resource */
    public function create()
    {   
        $noti = helperNotificationGet();
        $manufacturers = Manufacturers::All();

        return view('pages.item.create', [
            'notification' => $noti,
            'manufacturers' => $manufacturers
        ]);
    }

    /* Store a newly created resource in storage */
    public function store(Request $request)
    {
        /* Insert Item info */

        /* Image uploading */
        $files = request()->file();
        if (count($files) == 0) {
            helperNotification(['Image upload at least one picture.']);
            return redirect()->back();
        } 
        foreach($files as $file) {
            var_dump($file);
        }
        
    }

    /* Display the specified resource. */
    public function show($id)
    {
        return view('pages.item.list', [
            'id' => $id,
        ]);
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
        //
    }
}
