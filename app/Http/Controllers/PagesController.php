<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PostCategory;
use App\Models\Post;
use App\Models\PostComment;


class PagesController extends Controller
{
    public function home()
    {
        $single_post = Post::take(1)->first();
        $posts = Post::skip(1)->take(4)->get();
        $latest_posts = Post::select('id', 'slug', 'title')->orderBy('id', 'desc')->get();
        return view(
            'front.home',
            compact(
                'posts',
                'single_post',
                'latest_posts'
            )
        );
    }
    public function mytestmail()
    {
        return view('emails.myTestMail');
    }
    public function privacy_policy()
    {
        return view('front.privacy-policy');
    }
    public function refund_policy()
    {
        return view('front.refund-policy');
    }
    public function terms()
    {
        return view('front.terms');
    }
    public function contact()
    {
        return view('front.contact');
    }
    public function about()
    {
        return view('front.about');
    }
    public function faq()
    {
        return view('front.faq');
    }
    public function pricing()
    {
        return view('front.pricing');
    }
    public function search(Request $request){

        $search = $request->query('search');

        $results = Post::query()
                    ->where('title', 'LIKE', "%{$search}%")
                    ->select('title', 'slug')
                    ->get();
        return response()->json($results);
    }   
    public function blog(Request $request)
    {
        $category = $request->query('category');
        $month = $request->query('month');

        if (isset($category)) {
            $posts = Post::where('slug', $category)->paginate(10);
        } elseif (isset($month)) {
            $posts = Post::whereMonth('created_at', $month)->paginate(10);
        } else {
            $posts = Post::paginate(10);
        }
        $latest_posts = Post::select('id', 'slug', 'title')->orderBy('id', 'desc')->take(5)->get();
        return view('front.blog', compact('posts', 'latest_posts'));
    }

    public function blog_details(Request $request, $slug)
    {
        $post = Post::where('slug', $slug)->first();
        // dd($post->id);
        $comments = PostComment::where('post_id', $post->id)->get();
        $latest_posts = Post::select('id', 'slug', 'title')->orderBy('id', 'desc')->take(5)->get();
        $random_post = Post::select('slug')->get();
        $random_post_prev = Post::whereNotIn('id',  [$post->id])->inRandomOrder()->first();
        // dd($post->id);
        $random_post_next = Post::whereNotIn('id',  [$random_post_prev->id])->inRandomOrder()->first();
        // dd($random_post_prev, $random_post_next);
        return view('front.blog-details', compact('post', 'comments', 'latest_posts','random_post_next', 'random_post_prev'));
    }
    function getPostCategories()
    {
        $post_categories = PostCategory::select('id', 'name', 'slug')->get();
        return $post_categories;
    }

}
