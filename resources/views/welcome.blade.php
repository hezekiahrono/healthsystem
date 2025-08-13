<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>M-Hai</title>
<meta name="keywords" content="violet, free css templates, CSS, HTML" />
<meta name="description" content="Violet is one of the Free CSS Templates provided by templatemo.com" />


<link rel="stylesheet" href="{{asset('assets/css/templatemo_style.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/contentslider.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/gallery_slider.css')}}">


<script src="{{asset('assets/js/contentslider.js')}}"></script>






<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>


<script src="{{asset('assets/js/mootools-1.2.1-core.js')}}"></script>

<script src="{{asset('assets/js/mootools-1.2-more.js')}}"></script>

<script src="{{asset('assets/js/slideitmoo-1.1.js')}}"></script>
<script language="javascript" type="text/javascript">
	window.addEvents({
		'domready': function(){
			/* thumbnails example , div containers */
			new SlideItMoo({
						overallContainer: 'SlideItMoo_outer',
						elementScrolled: 'SlideItMoo_inner',
						thumbsContainer: 'SlideItMoo_items',		
						itemsVisible: 4,
						elemsSlide: 2,
						duration: 180,
						itemsSelector: '.SlideItMoo_element',
						itemWidth: 190,
						showControls:1 });
		},
		
	});
</script>

</head>
<body>
@extends('layouts.main')
@section('content')
<div id="templatemo_wrapper">
    
   
    
    <div id="templatemo_middle">
        <div id="mid_img_wrap"><span></span>

            <div id="slider1" class="sliderwrapper">

                <div class="contentdiv">
                  
                    <img src="{{ asset('assets/img/slider/image_00.jpg') }}" alt="products">
                </div>
    
                <div class="contentdiv">
                <img src="{{ asset('assets/img/slider/image_01.jpg') }}" alt="products">
                   
                </div>            
                
                <div class="contentdiv">
                <img src="{{ asset('assets/img/slider/image_02.jpg') }}" alt="products">
                  
                </div>
                
                <div class="contentdiv">
                <img src="{{ asset('assets/img/slider/image_03.jpg') }}" alt="products">
                   
                </div>
            
            </div>
            
            <div id="paginate-slider1" class="pagination">
            
            </div>
            
            <script type="text/javascript">
            
            featuredcontentslider.init({
                id: "slider1",  //id of main slider DIV
                contentsource: ["inline", ""],  //Valid values: ["inline", ""] or ["ajax", "path_to_file"]
                toc: "#increment",  //Valid values: "#increment", "markup", ["label1", "label2", etc]
                nextprev: ["", ""],  //labels for "prev" and "next" links. Set to "" to hide.
                revealtype: "click", //Behavior of pagination links to reveal the slides: "click" or "mouseover"
                enablefade: [true, 0.2],  //[true/false, fadedegree]
                autorotate: [true, 2000],  //[true/false, pausetime]
                onChange: function(previndex, curindex){  //event handler fired whenever script changes slide
                    //previndex holds index of last slide viewed b4 current (1=1st slide, 2nd=2nd etc)
                    //curindex holds index of currently shown slide (1=1st slide, 2nd=2nd etc)
                }
            })
         
            </script>
        </div>
        <div id="mid_right">
      <div id="mid_title"> M-Hai</div>
          <p>	<a href="#">Welcome</a> Our mission is to provide access to essential drugs solutions for your personal and family needs as well as obtaining your happiness. Our member’s satisfaction is our main priority. We understand the importance of an exceptional service, therefore we always focus on quality, safety, and strong relationships with our members..</p>
          <a  class="view_port" href="#"></a>
        </div>
    </div>
    
    <div id="templatemo_main">
    	
        <div class="content_box">
        	<h2>Welcome <span>M-Hai</span></h2>
            <p>	<a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a> are available for your personal or commercial websites. You may download, edit or adapt, and use any template for any purpose. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>. Credit goes to <a href="http://www.photovaco.com" target="_blank">Free Photos</a> for photos used in this template. Quisque in diam a justo condimentum molestie. Vivamus a velit.Vivamus leo velit, convallis id, ultrices sit amet, tempor a, libero. Quisque rhoncus nulla quis sem. Mauris quis nulla sed ipsum pretium sagittis. Suspendisse feugiat. Ut sodales libero ut odio. Maecenas venenatis metus eu est. In sed risus ac felis varius bibendum. Nulla imperdiet congue metus. Vestibulum dapibus tortor vel orci.</p>
        </div>
        
        <div class="content_box">
        	<div class="col_3">
            	<h3>Pellentsque dolor nulla<span>Nunc blandit orci sit amet risus.</span></h3>
            	<p>Pellentesque dolor nulla, congue vitae, fringilla in, varius a, orci. Mauris convallis. Proin vel libero id erat venenatis accumsan. Nunc blandit orci sit amet risus.</p>
				<a href="#" class="more">Read More</a>
            </div>
            <div class="col_3">
            	<h3>Nunc blandit amet risus<span>Lorem ipsum dolor sit</span></h3>
            	<p>Donec iaculis felis id neque. Morbi nunc. Praesent varius egestas velit. Donec a massa ut pede pulvinar vulputate. Nulla et augue. Sed eu nunc quis pede tristique suscipit. </p>
                <a href="#" class="more">Read More</a>
            </div>
            <div class="col_3 col_last">
            	<h3>Duis pulvinar scelerisque<span>Duis pulvinar scelerisque ante</span></h3>
            	<p>Duis vitae velit. Ut ultricies. Fusce sollicitudin nisl a lectus. Pellentesque odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                <a href="#" class="more">Read More</a>
            </div>
            <div class="cleaner"></div>
        </div>
        
        <div class="content_box">
        	<h2>Featured <span>Projects</span></h2>
             <div id="SlideItMoo_outer">	
                <div id="SlideItMoo_inner">			
                    <div id="SlideItMoo_items">
                        <div class="SlideItMoo_element"><span></span>
                                <a href="#">
                                <img src="{{ asset('assets/img/gallery/image_01.jpg') }}" alt="products">
                               </a>
                           
                        </div>	
                        <div class="SlideItMoo_element"><span></span>
                                <a href="#">
                                <img src="{{ asset('assets/img/gallery/image_02.jpg') }}"
                                alt="product 2" /></a>
                
                        </div>
                        <div class="SlideItMoo_element"><span></span>
                                <a href="#">
                                <img src="{{ asset('assets/img/gallery/image_03.jpg') }}"
                                 alt="product 3" /></a>
                
                        </div>
                        <div class="SlideItMoo_element"><span></span>
                                <a href="#">
                                <img src="{{ asset('assets/img/gallery/image_04.jpg') }}"
                                alt="product 4" /></a>
                
                        </div>
                        <div class="SlideItMoo_element"><span></span>
                                <a href="#">
                                <img src="{{ asset('assets/img/gallery/image_05.jpg') }}"
                                alt="product 5" /></a>
                
                        </div>
                        <div class="SlideItMoo_element"><span></span>
                                <a href="#">
                                <img src="{{ asset('assets/img/gallery/image_06.jpg') }}"
                                alt="product 6" /></a>
                
                        </div>
                        <div class="SlideItMoo_element"><span></span>
                                <a href="#">
                                <img src="{{ asset('assets/img/gallery/image_07.jpg') }}"
                                alt="product 7" /></a>
                        </div>
                        <div class="SlideItMoo_element"><span></span>
                                <a href="#">
                                <img src="{{ asset('assets/img/gallery/image_08.jpg') }}"
                                 alt="product 8" /></a>
                        </div>
                    </div>			
                </div>
            </div>
        </div>
        
      <div class="cleaner"></div>
    </div> <!-- end of main -->
    
<div class="cleaner"></div>	
</div> <!-- end of wrapper -->


</body>
</html>
@endsection