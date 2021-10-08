<?php
/*
    Global Helper functions
*/
use Illuminate\Support\Facades\Auth;

/* Get current time */
function helperTimeNow() {
    return date("Y-m-d H:i:s", time());
}

/* Check authentication and redirect */
function helperCheckAuth($message) {
    if (!Auth::check()){
        $err_message = "No permission to continue task.";
        return view('pages.error')->with([ 'err_message' => $err_message ]);
    }
}

/* Check permission query data */
// $id of users_id in other tables
function helperCheckQueryPermission($id) {
    return (Auth::user()->type == "moderator" || Auth::user()->id == $id) ? ture : false;
}

/* Error Redirect Handler */
function helperErrorPage($err_message) {
    return view('pages.error')->with([ 'err_message' => $err_message ]);
}

// $item_owner = $item->getAttributes();
// $item_owner = $item_owner['users_id'];