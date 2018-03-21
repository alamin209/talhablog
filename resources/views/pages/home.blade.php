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
            <img src="{{ asset('public/images/templatemo_image_01.jpg') }}" alt="Web Template" />
            <p>This is a free blog template provided by <a href="http://www.templatemo.com" target="_parent">templatemo.com</a> website. You may download, modify and apply this CSS layout for your personal or business websites.</p>
            <p>Credit goes to <a href="http://www.photovaco.com" target="_blank">photovaco.com</a> for photos used in this template.</p>

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

