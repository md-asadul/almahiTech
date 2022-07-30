<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostComment;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        $post_comments = PostComment::take(5)->get();
        $post_all = Post::select('id')->count();
        return view('admin.dashboard', compact('post_all','post_comments'));
    }

}
