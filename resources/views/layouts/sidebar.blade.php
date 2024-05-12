<div class="sidebar">
    <div class="widget">
        <h2 class="widget-title">Recent Posts</h2>
        <div class="blog-list-widget">
            <div class="list-group">
                @foreach ($popular_posts as $post)
                    <a href="{{ route('posts.single', ['slug' => $post->slug]) }}"
                        class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="w-100 justify-content-between">
                            <img src="{{ asset('uploads/' . $post->thumbnail) }}" alt=""
                                class="img-fluid float-left">
                            <h5 class="mb-1">{{ $post->title }}</h5>
                            <small>{{ $post->getPostDate() }}</small>
                            <small><i class="fa fa-eye"></i>{{ $post->views }}</small>
                        </div>
                    </a>
                @endforeach

                <a href="marketing-single.html"
                    class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="w-100 justify-content-between">
                        <img src="upload/small_08.jpg" alt="" class="img-fluid float-left">
                        <h5 class="mb-1">Let's make an introduction for creative life</h5>
                        <small>11 Jan, 2016</small>
                    </div>
                </a>

                <a href="marketing-single.html"
                    class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="w-100 last-item justify-content-between">
                        <img src="upload/small_09.jpg" alt="" class="img-fluid float-left">
                        <h5 class="mb-1">Did you see the most beautiful sea in the world?</h5>
                        <small>07 Jan, 2016</small>
                    </div>
                </a>
            </div>
        </div><!-- end blog-list -->
    </div><!-- end widget -->



    <div class="widget">
        <h2 class="widget-title">Instagram Feed</h2>
        <div class="instagram-wrapper clearfix">
            <a class="" href="#"><img src="upload/small_09.jpg" alt="" class="img-fluid"></a>
            <a href="#"><img src="upload/small_01.jpg" alt="" class="img-fluid"></a>
            <a href="#"><img src="upload/small_02.jpg" alt="" class="img-fluid"></a>
            <a href="#"><img src="upload/small_03.jpg" alt="" class="img-fluid"></a>
            <a href="#"><img src="upload/small_04.jpg" alt="" class="img-fluid"></a>
            <a href="#"><img src="upload/small_05.jpg" alt="" class="img-fluid"></a>
            <a href="#"><img src="upload/small_06.jpg" alt="" class="img-fluid"></a>
            <a href="#"><img src="upload/small_07.jpg" alt="" class="img-fluid"></a>
            <a href="#"><img src="upload/small_08.jpg" alt="" class="img-fluid"></a>
        </div><!-- end Instagram wrapper -->
    </div><!-- end widget -->

    <div class="widget">
        <h2 class="widget-title">Popular Categories</h2>
        <div class="link-widget">
            <ul>
                @foreach ($cats as $cat)
                    <li><a
                            href="{{ route('categories.single', ['slug' => $cat->slug]) }}">{{ $cat->title }}<span>{{ $cat->posts_count }}</span></a>
                    </li>
                @endforeach
            </ul>
        </div><!-- end link-widget -->
    </div><!-- end widget -->
</div><!-- end sidebar -->
