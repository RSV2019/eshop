@extends('layouts.app')
@section('content')

  <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1">
                    <div class="blog-sidebar">
                        <div class="search-form">
                            <h4>Search</h4>
                            <form action="#">
                                <input type="text" placeholder="Search . . .  ">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="blog-catagory">
                            <h4>Categories</h4>
                            <ul>
                                @foreach ($categories as $category)
                            <li><a href="{{url('/category/'.$category->id)}}">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                          
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <h2>{{$cat->name}}</h2>
                    <div class="row">
                        @foreach ($articles as $article)
                            <div class="col-lg-6 col-sm-6">
                                <div class="blog-item">
                                    <div class="bi-pic">
                                        <img src="{{Voyager::image($article->cover)}}" alt="">
                                    </div>
                                    <div class="bi-text">
                                        <a href="{{ url('/blog/article/'.$article->id)}}">
                                        <h4>{{$article->title}}</h4>
                                        </a>
                                        <p>{{$article->category->name}}<span>- May 19, 2019</span></p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

@endsection