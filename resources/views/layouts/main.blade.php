<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>M-Hai</title>
<meta name="keywords" content="violet, free css templates, CSS, HTML" />
<meta name="description" content="Violet is one of the Free CSS Templates provided by templatemo.com" />


<link rel="stylesheet" href="{{asset('assets/css/templatemo_style.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/contentslider.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/gallery_slider.css')}}">
@yield('css')

</head>
<body>
<div>

<div id="templatemo_wrapper">
<div id="templatemo_header">
        
        <div id="site_title"><h1><a href="#">Free CSS Templates</a></h1></div>
        
        <div id="templatemo_menu">
            <ul>
            <li><a href="{{ url('/') }}" class="current">Home</a></li>
            <li><a href="{{ url('users') }}">Registered users</a></li>
			    <li><a href="{{ url('auth/spouse') }}">Spouse details</a></li>
                <li><a href="{{ url('listall') }}">Beneficiaries</a></li>
                <li><a href="{{ url('auth/auth/register') }}">Register</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#" class="last">Contact</a></li>
            </ul>    	
            <div class="cleaner"></div>
        </div> <!-- end of templatemo_menu -->
        
        <div class="cleaner"></div>
    </div>


</div>
<div class="content">
      @yield('content')
       
      </div>

<div id="templatemo_footer_wrapper" >
	<div id="templatemo_footer" >
    	
        <div class="footer_box">
            <h4>Cool Links</h4>
            <ol class="footer_list">
                <li>Duis vitae velit sed lesuada dignis</li>
                <li>Donec mollis aliquet ligula</li>
                <li>Maecenas adipiscing elementum</li>
                <li>Nascetur ridiculus mus</li>
          </ol>
      </div>
        
         <div class="footer_box">
            <h4>Best Partners</h4>
            <ol class="footer_list">
                <li><a href="http://www.templatemo.com" target="_parent">CSS Templates</a></li>
                <li><a href="http://www.flashmo.com" target="_parent">Flash Templates</a></li>
                <li><a href="http://www.webdesignmo.com/blog" target="_parent">Web Design Tips</a></li>
                <li><a href="http://www.koflash.com" target="_parent">Cool Flash Websites</a></li>
            </ol>
        </div>
        
         <div class="footer_box">
            <h4>About Us</h4>
            <p>Nullam ultrices tempor nisi, ac egestas diam aliquam a. Ut eleifend semper turpis, id feugiat arcu dignissim eu. </p>
        </div>
        
         <div class="footer_box footer_box_last">
            <h4>Our Policy</h4>
            <p>Nullam ultrices tempor nisi, ac egestas diam aliquam a. Ut eleifend semper turpis, id feugiat arcu dignissim eu.Mauris quis nulla sed ipsum pretium sagittis.</p>
      </div>
    
		<div class="cleaner"></div>
    </div> <!-- end of footer -->
    
    <div id="footer_menu_box">
    	<ol class="footer_menu">
        	<li><a href="#">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">Contact</a></li>
		</ol>
    </div>
    
    <div id="copyright">

        Copyright © 2048 <a href="#">Your Company Name</a> | 
        <a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> by <a href="http://www.templatemo.com" target="_parent">CSS Templates</a>
    
    </div> <!-- end of templatemo_footer -->
</div> <!-- end of footer wrapper -->

<!-- <div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a> -->
</div>
</div>
</body>
</html>