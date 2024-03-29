<?php
/*
    Global Helper functions
*/
use Illuminate\Support\Facades\Auth;

/* Session Message create */
function helperNotification($arr) {
    if (session()->exists('notification')) {
        $arr_old = session('notification');
        $arr = array_merge($arr_old, $arr);
    }
    session(['notification' => $arr]);
}
/* Session Message get */
function helperNotificationGet() {
    $notification = null;
    if (session()->exists('notification')) {
        $notification = session('notification');
        session()->forget('notification');
    }
    return $notification;
}

/* Get current time */
function helperTimeNow() {
    return date("Y-m-d H:i:s", time());
}

/* Check authentication and redirect */
function helperCheckAuth() {
    if (Auth::check() == false){
        $err_message = "No permission to continue a task.";
        return view('pages.error')->with([ 'err_message' => $err_message ]);
    }
}

/* Check permission query data */
// $id of users_id in other tables
function helperCheckQueryPermission($id) {
    return (Auth::user()->type == "moderator" || Auth::user()->id == $id) ? true : false;
}

/* Error Redirect Handler */
function helperErrorPage($err_message) {
    return view('pages.error')->with([ 'err_message' => $err_message ]);
}

// $item_owner = $item->getAttributes();
// $item_owner = $item_owner['users_id'];