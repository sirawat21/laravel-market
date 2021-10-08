<?php
/*
    Global Helper functions
*/
use Illuminate\Support\Facades\Auth;

/* Check authentication and redirect */
function helperCheckAuth($message){
    if (Auth::check()){
        // return redirect()->route('/sys/error')->with([ 'err_message' => $message ]);
        return redirect('sys/error');
    }
}

/* Check permission query data */
// $id of users_id in other tables
function helperCheckQueryPermission($id){
    return (Auth::user()->type == "moderator" || Auth::user()->id == $id) ? ture : false;
}

// $item_owner = $item->getAttributes();
// $item_owner = $item_owner['users_id'];