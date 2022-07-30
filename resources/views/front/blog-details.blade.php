
@extends('front.layouts.app')
@push('custom-style')
    <link rel="stylesheet" href="{{ asset('css/front/blog-details.css') }}">
@endpush
@section('content')
<main class="blog-details-container">
        <div class="man_intro_cont">
            <h1>{{ $post->title }}</h1>
        </div>
    <div class="mail-blog">
        <div class="container">
            <div class="blog-content-area">
                <div class="blog-content">
                    <div class="blog-item">
                        <img src="{{ asset($post->cover_image_md) }}" alt="">
                        <p>{!! $post->description !!}</p>
                    </div>
                    <div class="comments-block">
                        @foreach($comments as $comment)
                        <h3>{{$comment->name}}</h3>
                        <span>{{$comment->created_at}}</span>
                        <p>{{$comment->comment}}</p>
                        @endforeach
                    </div>
                    <div class="reply-form">
                        <div class="comment-reply">
                            <h3>Leave a Reply</h3>
                            <p>Your email address will not be published. Required fields are marked *</p>
                        </div>
                        <form onsubmit="return saveInfo()" action="{{ route('post_comment.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                            <textarea class="form-control textarea-height" name="comment" placeholder="Comment" required></textarea>
                            <div class="custom-form">
                                <div class="input-name">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Name*" required></input>
                                </div>
                                <div class="input-email">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email*" required></input>
                                </div>
                                <div class="input-web">
                                    <input type="text" id="website" name="website"   class="form-control" placeholder="Website" required></input>
                                </div>
                            </div>
                            <div class="custom-checkbox">
                                <input type="checkbox" name="radio_two" value="Save" class="custom-control-input" id="checkout-create-ac"></input>
                                <label for="checkout-create-ac">Save my name, email, and website in this browser for the next time I comment.</label>
                            </div>
                            <div class="product-gallery-btn">
                                <!-- <a href="#" type="submit" class="btn">Post Comment</a> -->
                                <button type="submit" class="btn common-btn btn-lg btn-block">Post Comment</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="blog-sidebar">
                    <div class="product_categories">
                        <h3>categories</h3>
                        <div class="block">
                            <div class="item">
                                @foreach(getPostCategories() as $category)
                                    <a href="{{ route('blog') }}?category={{ $category->id }}">{{ $category->name }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="recent-posts">
                        <h3>recent posts</h3>
                        <div class="block">
                            <div class="item">
                                @foreach($latest_posts as $item)
                                    <a href="{{ route('blog.details', $item->slug) }}">{{ $item->title }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="archives">
                        <h3>archives</h3>
                        <div class="block">
                            <div class="item">
                                <a href="{{ route('blog') }}?month={{ date('m', strtotime('-1 month')) }}">{{ date('F Y', strtotime("-1 month")) }}</a>
                                <a href="{{ route('blog') }}?month={{ date('m', strtotime('-2 month')) }}">{{ date('F Y', strtotime("-2 month")) }}</a>
                                <a href="{{ route('blog') }}?month={{ date('m', strtotime('-3 month')) }}">{{ date('F Y', strtotime("-3 month")) }}</a>
                                <a href="{{ route('blog') }}?month={{ date('m', strtotime('-4 month')) }}">{{ date('F Y', strtotime("-4 month")) }}</a>
                                <a href="{{ route('blog') }}?month={{ date('m', strtotime('-5 month')) }}">{{ date('F Y', strtotime("-5 month")) }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="container-fluid">

        </div>           -->
        <div class="nearby_posts">
            <div class="nav_previous">
                @if($random_post_prev->cover_image_md)
                <img src="{{ asset($random_post_prev->cover_image_md) }}" alt="">
                @else
                <img src="{{ asset('images/front/white-bg.jpg') }}" alt="">
                @endif
                <div class="man_nav_over"></div>
                <a href="{{ route('blog.details', $random_post_prev->slug) }}"><div  class="man_nav_txt">
                    <span><i class="ti ti-arrow-left"></i>Previous</span>
                    <h3>{{ $random_post_prev->title }}</h3>
                </div>
                </a>
            </div>
            <div class="nav_next">
                @if($random_post_next->cover_image_md)
                <img src="{{ asset($random_post_next->cover_image_md) }}" alt="">
                @else
                <img src="{{ asset('images/front/white-bg.jpg') }}" alt="">
                @endif
                <div class="man_nav_over"></div>
                <a href="{{ route('blog.details', $random_post_next->slug) }}"><div  class="man_nav_txt">
                    <span><i class="ti ti-arrow-right"></i>Next</span>
                    <h3>{{ $random_post_next->title }}</h3>
                </div>
                </a>
            </div>
        </div>
    </div>
</main>
@endsection

@push('custom-scripts')
    <!-- Scripts -->
    <script type="text/javascript">
        function saveInfo() {
            if (document.getElementById('checkout-create-ac').checked) {
                var name = document.getElementById('name').value;
                var email = document.getElementById('email').value;
                var website = document.getElementById('website').value;
                localStorage.setItem("name", name);
                localStorage.setItem("email", email);
                localStorage.setItem("website", website);
            }
        }
        window.onload = function() {
            if (localStorage.getItem("name")) {
                document.getElementById('name').value = localStorage.getItem("name");
            }
            if (localStorage.getItem("email")) {
                document.getElementById('email').value = localStorage.getItem("email");
            }
            if (localStorage.getItem("website")) {
                document.getElementById('website').value = localStorage.getItem("website");
            }
        };
    </script>
@endpush
