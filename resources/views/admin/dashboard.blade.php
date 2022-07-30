
@extends('admin.layouts.app')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-block dashboard">
    <div class="title-section d-flex flex-column justify-content-center align-items-start pt-3 pb-2 mb-3">
        <div class="text-block">
        <h3>OVERVIEW</h3>
        <h1 class="h2">Dashboard</h1>
    </div>
</main>
<div class="dashboard-section col-md-9 ms-sm-auto col-lg-10 main-block px-md-4">
        <div class="single-item-inner">
            <div class="single-item">
                <div class="section-title">
                    <h6>Post</h6>
                    <h1>{{ $post_all }} </h1>
                    <a href="{{ route('post.index') }}">All post <i class="ti ti-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="latest-comment">
            <div class="comment-header">
                <h6>Latest comment</h6>
                <a href="{{ route('post_comment.index') }}">View all</a>
            </div>
            <div class="table-inner">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">post_id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Comment</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($post_comments as $post_comment)
                        <tr>
                            <th scope="row">{{ $post_comment->id }}</th>
                            <td>{{ $post_comment->post_id }}</td>
                            <td>{{ $post_comment->name }}</td>
                            <td>{{ $post_comment->email }}</td>
                            <td>{{ $post_comment->comment}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
