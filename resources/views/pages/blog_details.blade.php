@extend('master')
@section ('main_content')
    <div id="templatemo_content_left">

        <div class="templatemo_post">
            <div class="post_title">
                Free Blog Template
                <div class="post_info">
                    <h4> Category Name: {{ $blog_info->category_name }} Posted Date : {{ $blog_info->created_at }} </h4>
                
                </div>
            </div>

            <div class="post_body">


                <img src="{{ asset ($blog_info->blog_image) }}" style="width:500px" alt=" " />
                    <h2>{{ $blog_info->blog_title }}</h2>
                    {{--{{ $blog->short_description }}--}}
                    <?php  echo  $blog_info->long_description ?>
                    <p>{{ $blog_info->created_at }}</p>

            </div>

        </div>
        <h3 class="bd-success text-primary  text-center " style="font-family:monospace;font-weight:bold;color:green" >
            @if(Session ::has('message'))
                {{ session('message') }}
            @endif
        </h3>
        <div class="templatemo_post">

        <div class="post_comment">


        <p class="signin button">
            <h2>Comments</h2>
        <h4 style="text-align: left"> @foreach($comment_info as $c)
             {{ $c->name  }}</h4>
            <span> {{ $c->comments }} </span>
        <br/>
            <a href="">Reply</a>
        <hr/>
            @endforeach
        </p>






        </div>




        </div>

        @if(Auth::user()!=NULL)
        <div class="templatemo_post">
            <div class="post_comment">
            {!!  Form::open(['url'=>'user_commnets_save']) !!}
            <input type="hidden" name="blog_id" value="{{ $blog_info->blog_id }}">
            <input type="hidden" name="user_id" value=" {{ Auth::user()->id }} ">
            <textarea   rows="4"  name="comments"   cols="35" >  Post Your Commnets ...........</textarea>
            <p class="signin button" style="text-align: right">
                <input type="submit" name="submit" value="Post Commnets"/>
            </p>
            {!! Form::close()  !!}
           </div>


        </div> <!-- end of post two -->
        @else
            {{--<div class="templatemo_post">--}}

                {{--<div class="post_comment">--}}


                {{--<p class="signin button">--}}
                    {{--<h2 style="text-align: left">  </h2>--}}
                {{--</p>--}}





            {{--</div>--}}




            {{--</div>--}}


    @endif

    </div>
@endsection

