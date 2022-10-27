@extends('layout.main')

@section('container')

<div class="container mb-5">
    <div class="row  justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <p>by. <a href="/posts?author={{ $post->author->username }}"  class= "text-decoration-none" > {{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class= "text-decoration-none">{{ $post->category->name }}</a></p>
                
            @if ($post->image)
            <div style="max-height: 350px; overflow:hidden">
                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top " alt="{{ $post->category->name }}" class="img-fluid">
            </div>
            @else
            <img src="https://source.unsplash.com/random/1200×400/?{{ $post->category->name }}" class="card-img-top " alt="{{ $post->category->name }}" class="img-fluid"> 
            @endif
                
            <article class="my-3 fs-5">
                {!! $post->body !!} 
            </article>

            <p class="mt-3"><a  class="btn btn-primary" style="text-decoration:none" href="/posts">Back To Posts</a></p>


        </div>
    </div>
</div>
    

@endsection