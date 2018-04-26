@extend('master')
@section ('main_content')
<div id="templatemo_content_left">

    <div class="templatemo_post">
        <div class="post_title">
            Free Blog Template
            <div class="post_info">
                Posted by <a href="http://www.templatemo.com" target="_parent">templatemo.com</a>, December 7, 2048 at 2:13 am, in <a href="#">Web Template.</a>
            </div>
        </div>

        <div class="post_body">
            @foreach($all_blog as $blog)

                <h2>{{ $blog->blog_title }}</h2>
                {{--{{ $blog->short_description }}--}}
             <?php  echo  $blog->short_description ?>
                <p>{{ $blog->created_at }}</p>
                <img src="{{ $blog->blog_image }}" style="width:500px" alt=" " />
                <a href="{{ URL::to('/bolg_details/'.$blog->blog_id ) }}" ><span class="btn btn-success">Read More</span> </a>

            @endforeach

        </div>
        <div class="post_comment">
            <a href="#">12 comments</a></div>
    </div> <!-- end of post two -->

    <div class="templatemo_post">
        <div class="post_title">
            HTML CSS Website Layout
            <div class="post_info">
                Posted by <a href="http://www.templatemo.com" target="_parent">templatemo.com</a>, December 2, 2048 at 6:45 am, in <a href="#">Web Template.</a>
            </div>
        </div>

        <div class="post_body">
            <img src="{{ asset('public') }}/images/templatemo_image_02.jpg" alt="CSS Template" />
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc quis sem nec tellus blandit tincidunt. Suspendisse hendrerit turpis id augue.</p>
            <p>Suspendisse at pede vel lorem pulvinar laoreet. Etiam et neque. Donec dapibus viverra est. Maecenas dignissim, quam a posuere scelerisque, ligula arcu dictum turpis, id tempus turpis erat at nulla.</p>
        </div>
        <div class="post_comment">
            <a href="#">No comment</a></div>
    </div> <!-- end of post two -->


</div>
@endsection

