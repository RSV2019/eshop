
@extends('layouts.app')
@section('content')
    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details-inner">
                        <div class="blog-detail-title">
                        <h2>{{$article->title}}</h2>
                            <p>{{$article->category->name}} <span>- May 19, 2019</span></p>
                        </div>
                        <div class="blog-large-pic">
                            <img src="{{Voyager::image($article->cover)}}" alt="">
                        </div>
                        <div class="blog-detail-desc">
                            <p>
                                {!!$article->body!!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->
@endsection