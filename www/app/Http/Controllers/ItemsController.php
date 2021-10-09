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
use App\Models\Votes;


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
        $noti = helperNotificationGet(); // get notification
        $manufacturers = Manufacturers::All();

        return view('pages.item.create', [
            'notification' => $noti,
            'manufacturers' => $manufacturers
        ]);
    }

    /* Store a newly created resource in storage */
    public function store(Request $request)
    {
        /*
        * Item Validate  
        */
        /* Get current id*/
        $user_id = Auth::user()->id;
        /* Varidate client request */
        $validated = validateCreateItem($request); 
        if($validated->fails()){ 
            // if error redirect back with error messages
            return redirect()->back()
                    ->withInput()
                    ->withErrors($validated->messages());
        }
        /* 
        * Image Validate
        */
        try {
            $files = request()->file();
            if (count($files) == 0) {
                helperNotification(['Image upload at least one picture.']);
                return redirect()->back()->withInput();
            }
        } catch (e $error) {
            helperNotification('Image upload failed to process.');
            return redirect()->back()->withInput();
        }
        $imageValidatedLists = []; // accumurate validation result
        foreach ($files['image'] as $file) { // validate each image file
            $validated = validateImageItem([$file]);
            array_push($imageValidatedLists, $validated);
        }
        /* Check validation result if found redirect instantly */
        $imageFailStatus = false;
        foreach ($imageValidatedLists as $validatedImage){
            // if error redirect back with error messages
            if ($validatedImage->fails()) return redirect()->back()->withInput();
        }
        /* 
        * Save data 
        */
        /* Check item name duplicate */
        $numberOfDuplicateItem = Items::where('name', '=', $request->name)->count();
        if ($numberOfDuplicateItem > 0){
            helperNotification(['Duplicated Item name.']);
            return redirect()->back()
                        ->withInput()
                        ->withErrors(['messages' => ['name']]);
        }
        $createdItem = Items::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'origin_link' => $request->origin_link,
            'manufacturers_id' => $request->manufacturers_id,
            'users_id' => $user_id,
            'created_at' => helperTimeNow(),
            'updated_at' => helperTimeNow()
        ]);
        /* Get created item id */
        $item_id = $createdItem->getAttributes();
        $item_id = $item_id['id'];
 
        /* Save actual image file and insert path into db */
        foreach ($files['image'] as $file) {
            $path = $file->store('images/items', 'public_path');
            $imageCreate2 = Images::create([
                'image' => $path,
                'items_id' => $item_id,
                'created_at' => helperTimeNow(),
                'updated_at' => helperTimeNow()
            ]);
        }
        return redirect('item/'.$item_id );
    } // end store controller

    /* Display the specified resource. */
    public function show($id)
    {
        /* Get item by ID */
        $item = Items::find($id);
        /* Check exist item */
        if ($item == null) {
            return helperErrorPage("Item is not registed in the market yet.");
        }
        /* Fetch related image */
        $imgs = Images::All()->where('items_id', $id)->toArray();
        $images = []; // accumurate image lists
        foreach ($imgs as $img){
           array_push($images, $img['image']);
        }
        /* Get Item owner info */
        $owner = User::find($item->users_id);
        /* Get Manufacturer info */
        $manufacturer = Manufacturers::find($item->manufacturers_id);
        return view('pages.item.show', [
            'item' => $item,
            'item_imgs' => $images,
            'manufacturer' => $manufacturer,
            'owner' => $owner
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
