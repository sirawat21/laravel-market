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
    /* Map client request to assoc arr */
    $input = [
        'name' => $request->name,
        'description' => $request->description,
        'price' => $request->price,
        'origin_link' => $request->origin_link,
        'manufacturers_id' => $request->manufacturers_id
    ];
    /* Set pattern rules */
    $rules = [
        'name' => 'required|string|max:30',
        'description' => 'required|string|max:255',
        'price' => 'required|numeric|min:1',
        'origin_link' => 'nullable|string|max:100',
        'manufacturers_id' => 'required|numeric'
    ];
    /* Validate client requests */
    $validator = Validator::make($input, $rules);

    /* Set error message if occured error */
    if($validated->fails()){
        $messages = $validated->messages();
        foreach($messages as $message) {
            echo $message;
        }
        exit(); //break
    }

    return $validator;
}