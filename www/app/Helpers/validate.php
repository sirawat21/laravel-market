<?php
/*
    Global Validate functions
*/
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

/* Validate input from create item page */
function validateCreateItem(Request $request) {
    try{
        $validator = $request->validate([
            'name' => 'required|string|max:30',
            'description' => 'required|string|max:255',
            'price' => 'required|numeric|min:1',
            'origin_link' => 'nullable|string|max:100',
            'manufacturers_id' => 'required|numeric'
        ]);
    } catch(exception $error) {
        $vError = $error->validator;
        dd($vError);
    }


    dd($validator);
    return $Validator;
}