<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>free blog template - green web blog</title>
    <meta name="keywords" content="free blog template, css template, CSS, HTML" />
    <meta name="description" content="Green Web Blog - free blog template provided by templatemo.com" />
    <link href= "{{ asset('public/css/templatemo_style.css') }}" rel="stylesheet" type="text/css" />
    <!--  Designed by w w w . t e m p l a t e m o . c o m  -->
</head>

<body>

<div id="templatemo_menu_panel">
    <div id="templatemo_menu_section">
        <ul>
            <li><a href="{{  URL::to('/') }}" class="current">Home</a></li>
            <li><a href="{{'about-us'}}">About  Us</a></li>
            <li><a href="#">Videos</a></li>
            <li><a href="#">Archives</a></li>
            <li><a href="#">Links</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
</div>


<div id="templatemo_header_content_container">

    <div id="templatemo_header_section">
        <div id="templatemo_title_section">
            GREEN BLOG
        </div>
        <div id="templatemo_search_section">
            <form method="get" action="#">
                <input type="radio" name="search" value="thissite" />this site <input type="radio" name="search" value="theweb" checked="checked" /> the web <br />
                <input type="text" name="q" size="10" id="searchfield" title="searchfield" />
                <input type="submit" name="Search" value="Search" alt="Search" id="searchbutton" title="Search" />
            </form>
        </div>
    </div>

    @if($sidebar!=null)

    <div id="templatemo_content">

        @yield('main_content')

        @endif

        @if($sidebar==NULL)
            @yield('main_content')
            @else



        <div id="templatemo_content_right">

            <div class="templatemo_right_section">
                <h2>Categories</h2>
                <ul>
                    <li><a href="#">Morbi nec magna pulvinar</a></li>
                    <li><a href="#">Suspendisse rhoncus lectus</a></li>
                    <li><a href="#">Pellentesque rutrum est</a></li>
                    <li><a href="#">Nunc blandit orci</a></li>
                </ul>
            </div>

            <div class="templatemo_right_section">
                <h2>Archives</h2>
                <ul>
                    <li><a href="#">January 2048</a></li>
                    <li><a href="#">December 2047</a></li>
                    <li><a href="#">November 2047</a></li>
                    <li><a href="#">October 2047</a></li>
                    <li><a href="#">September 2047</a></li>
                </ul>
            </div>

            <div class="templatemo_right_section">
                <h2>Popular Posts</h2>
                <ul class="popular_post">
                    <li><a href="#">Donec mollis aliquet</a><br />Author 1 - Oct 14, 2048 <span class="comment">12 replies</span></li>
                    <li><a href="#">Aliquam tristique lacust</a><br />Author 2 - Oct 14, 2048 <span class="comment">8 replies</span></li>
                    <li><a href="#">Suspendisse potent</a><br />Author 3 - Oct 14, 2048 <span class="comment">10 replies</span></li>
                    <li><a href="#">Nullam vitae tellus</a><br />Author 4 - Oct 14, 2048 <span class="comment">30 replies</span></li>
                </ul>
            </div>

            <div class="templatemo_right_section">
                <h2>Recent Comments</h2>
                <ul>
                    <li>Lorem Ipsum on <a href="#">Donec mollis aliquet</a></li>
                    <li>Consectetuer on <a href="#">Suspendisse a nibh</a></li>
                    <li>Sed on <a href="#">Pellentesque vitae magna</a></li>
                    <li>Vitae Neque on <a href="#">Nunc blandit orci sit amet</a></li>
                    <li>Donec Mollis on <a href="#">Maecenas adipiscing</a></li>
                </ul>
            </div>

        </div>
  @endif
    </div>
</div>

<div id="templatemo_bottom_panel">
    <div id="templatemo_bottom_section">

        <div class="templatemo_bottom_section_content">
            <h3>Gallery</h3>
            <ul class="gallery">
                <li><a href="#"><img src="{{ asset('public/images/templatemo_thumb_01.jpg') }}" alt="image name" /></a></li>
                <li><a href="#"><img src="{{ asset('public/images/templatemo_thumb_02.jpg') }}" alt="image name" /></a></li>
                <li><a href="#"><img src="{{ asset('public/images/templatemo_thumb_03.jpg') }}" alt="image name" /></a></li>
                <li><a href="http://www.templatemo.com" target="_blank"><img src="{{ asset('public') }}/images/templatemo_thumb_04.jpg" alt="Free CSS" /></a></li>
                <li><a href="http://www.flashmo.com" target="_blank"><img src="{{ asset('public') }}/images/templatemo_thumb_05.jpg" alt="Free Flash" /></a></li>
                <li><a href="http://www.webdesignmo.com" target="_blank"><img src="{{ asset('public') }}/images/templatemo_thumb_06.jpg" alt="Web Design" /></a></li>
            </ul>
        </div>

        <div class="templatemo_bottom_section_content">
            <h3>Friends</h3>
            <ul class="list_section">
                <li><a href="#">Lorem ipsum</a></li>
                <li><a href="#">Duis mollis</a></li>
                <li><a href="#">Maecenas adipiscing</a></li>
                <li><a href="#">Nunc blandit orci</a></li>
                <li><a href="#">Cum sociis natoque</a></li>
            </ul>
        </div>

        <div class="templatemo_bottom_section_content">
            <h3>Other Links</h3>
            <ul class="list_section">

                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Terms</a></li>

            </ul>
            <a href="http://validator.w3.org/check?uri=referer"><img style="border:0;width:88px;height:31px" src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" width="88" height="31" vspace="8" border="0" /></a>
            <a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px"  src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" vspace="8" border="0" /></a>
        </div>

    </div> <!-- end of templatemo bottom section -->
</div> <!-- end of templatemo bottom panel -->
<!--  Designed by w w w . t e m p l a t e m o . c o m  -->
<div id="templatemo_footer_panel">
    <div id="templatemo_footer_section">
        Copyright © 2048 <a href="#">Your Company Name</a> |
        <a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
    </div>
</div>

<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>