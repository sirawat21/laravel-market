<?php
/*
    Global Validate functions
*/
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

/* Validate input from create item page */
function validateCreateItem(Request $request) {
    $input = [
        'name' => $request->name,
        'description' => $request->description,
        'price' => $request->price,
        'origin_link' => $request->origin_link,
        'manufacturers_id' => $request->manufacturers_id
    ];
    /* Set pattern rules */
    $rules = [
        'name' => 'required|string|max:200',
        'description' => 'required|string|min:30|max:3000',
        'price' => 'required|numeric|min:1',
        'origin_link' => 'nullable|string|min:0|max:1000',
        'manufacturers_id' => 'required|numeric'
    ];
    /* Validate client requests */
    $validator = Validator::make($input, $rules);

    /* Set error message if occured error */
    if ($validator->fails()) {
        $messages = $validator->messages()->getMessages();
        foreach($messages as $message) {
            helperNotification($message);
        }
    }
    return $validator;
} // end validateCreateItem

/* Validate image of item */
function validateImageItem($image) {
    /* Set img specification rules */
    $rules = ['required|image|mimes:jpg,png,jpeg|max:2048|
            dimensions:min_width=100,min_height=100,
            max_width=1000,max_height=1000'];
    /* Validate client requests */
    $validator = Validator::make($image, $rules);

    /* Set error message if occured error */
    if ($validator->fails()) {
        $messages = $validator->messages()->getMessages();
        foreach($messages as $message) {
            helperNotification($message);
        }
    }
    return $validator;
} // end validateImageItem

