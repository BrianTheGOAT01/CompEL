
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CompEL</title>
    <meta name="description" content="Blueprint: A basic template for a page stack navigation effect" />
    <meta name="keywords" content="blueprint, template, html, css, page stack, 3d, perspective, navigation, menu" />
    <meta name="author" content="Codrops" />


    @include('csslink')

</head>

<body class="laybody">
	{{-- <img src="img/thumbnail/logo1.png" class="home-logo" alt=""> --}}
    <!-- navigation -->
    <nav class="pages-nav" id="pagesnav">
        <div class="pages-nav__item"><a class="link link--page white" href="#page-home">Home</a></div>
        <div class="pages-nav__item"><a class="link link--page white" href="#page-docu" id="browse_nav">Browse</a></div>
        <div class="pages-nav__item"><a class="link link--page white" href="#page-manuals">Login/Register</a></div>
        <div class="pages-nav__item"><a class="link link--page white" href="#page-software">Suggestion</a></div>
        <div class="pages-nav__item"><a class="link link--page white" href="#page-custom">Statistics</a></div>
        <div class="pages-nav__item"><a class="link link--page white" href="#page-upload">Upload</a></div>
        <div class="pages-nav__item"><a class="link link--page white" href="#page-requested">Requested</a></div>

        {{-- <div class="pages-nav__item pages-nav__item--small"><a class="link link--page link--faded" href="#page-buy">Where to buy</a></div>
        <div class="pages-nav__item pages-nav__item--small"><a class="link link--page link--faded" href="#page-blog">Blog &amp; News</a></div>
        <div class="pages-nav__item pages-nav__item--small"><a class="link link--page link--faded" href="#page-contact">Contact</a></div> --}}
        {{-- <div class="pages-nav__item pages-nav__item--social">
            <a class="link link--social link--faded" href="#"><i class="fa fa-twitter"></i><span class="text-hidden">Twitter</span></a>
            <a class="link link--social link--faded" href="#"><i class="fa fa-linkedin"></i><span class="text-hidden">LinkedIn</span></a>
            <a class="link link--social link--faded" href="#"><i class="fa fa-facebook"></i><span class="text-hidden">Facebook</span></a>
            <a class="link link--social link--faded" href="#"><i class="fa fa-youtube-play"></i><span class="text-hidden">YouTube</span></a>

        </div> --}}
    </nav>
    <!-- /navigation-->
    <!-- pages stack -->
    <div class="pages-stack">
        <!-- page -->
        <div class="page" id="page-home">
            
            @include('pages/home')

        </div>    

        
        <div class="page" id="page-docu">

            @include('pages/browse')
            
        </div>
        <div class="page" id="page-manuals">
            
           @include('pages/loginregister')

        </div>
        <div class="page" id="page-software">
            
           @include('pages/suggestion')

        </div>
        <div class="page" id="page-custom">
            @include('pages/statistics')
        </div>
        <div class="page" id="page-training">
           
        </div>
        <div class="page" id="page-buy">
          
        </div>
        <div class="page" id="page-blog">
            
        </div>
        <div class="page" id="page-contact">
           
        </div>
        <div class="page" id="page-upload">
           @include('pages/upload')
        </div>
         <div class="page" id="page-requested">
           @include('pages/requested')
        </div>
        
        @yield('extra')
    </div>
    <!-- /pages-stack -->
    <button class="btnlogotoggle menu-button"><span>Menu</span></button>
    <img src="img/thumbnail/logo1.png" class="home-logo" alt="">
@include('modal')
@include('srclink')
@include('script')


</body>

</html>
