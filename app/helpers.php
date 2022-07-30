<?php

use App\Models\UserActivity;
// use App\Category;
use App\User;
use App\Models\PostCategory;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
// use DB;


function getPostCategories()
{
    $post_categories = PostCategory::select('id', 'name', 'slug')->get();
    return $post_categories;
}


function createUserActivity($request, $action, $description, $log_level, $email)
{
    $userActivity = new UserActivity();
    $userActivity->action = $action;
    $userActivity->email = $email ?? auth()->user()->name . '<' . auth()->user()->email . '>';
    $userActivity->description = $description;
    $userActivity->log_level = $log_level;
    $userActivity->ip = $request->ip();
    $userActivity->browser = $request->header('User-Agent');
    $userActivity->save();
}

// last login helpers create
function lastLoginUser()
{
    $date = Auth::user()->last_login;
    $jplast_login = Carbon::parse($date)->format('Y/m/d H:i');
    return $jplast_login;
}

function isChecked($optionId, $itemArray = array())
{
    $checked = false;
    if (!empty($itemArray) && isset($optionId)) {
        if (in_array($optionId, $itemArray)) {
            $checked = true;
        }
    }
    return $checked;
}

/**
 * Unauthorized User
 */

function unauthorizedAccess($id)
{
    if (Auth::user()->id != $id) {
        return true;
    }
}
