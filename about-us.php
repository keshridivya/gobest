<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">

<!-- Mirrored from clovedental.in/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Mar 2022 11:43:46 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<title>Best Dentists and Dental Clinics Near You | Largest Dental Chain India	</title>
<meta name="description" content="India&#039;s Largest Dental Chain. Best Dentists and Dental Clinics in Delhi NCR, Jaipur, Chandigarh, Ahmedabad, Hyderabad, Chennai, Bangalore and pan India with a team of India’s best dentists. Find best dentist near me."/>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" ></script>

<link rel="shortcut icon" href="wp-content/themes/clove/images/favicon.png" type="image/x-icon">
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="pingback" href="xmlrpc.php"> 
<link rel="stylesheet" href="style-new.css">
<link rel="stylesheet" href="css/carousel.min.css">
<link rel="stylesheet" href="css/styleindex.css">


<link href="wp-content/themes/clove/css/font-awesome.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<link rel="stylesheet" href="wp-content/themes/clove-child/css/newhome-style.css" type="text/css">

	

	
<script>
        function initComparisons() {
            var x, i;
            /*find all elements with an "overlay" class:*/
            x = document.getElementsByClassName("img-comp-overlay");
            for (i = 0; i < x.length; i++) {
                /*once for each "overlay" element:
                pass the "overlay" element as a parameter when executing the compareImages function:*/
                compareImages(x[i]);
            }

            function compareImages(img) {
                var slider, img, clicked = 0,
                    w, h;
                /*get the width and height of the img element*/
                w = img.offsetWidth;
                h = img.offsetHeight;
                /*set the width of the img element to 50%:*/
                img.style.width = (w / 2) + "px";
                /*create slider:*/
                slider = document.createElement("img");
                // slider.setAttribute("class", "fa fa-chevron-circle-right img-comp-slider");
                slider.setAttribute("class", "img-comp-slider");
                slider.setAttribute("src","images/black-arrow.png")
                /*insert slider*/
                img.parentElement.insertBefore(slider, img);
                /*position the slider in the middle:*/
                slider.style.top = (h / 2) - (slider.offsetHeight / 2) + "px";
                slider.style.left = (w / 2) - (slider.offsetWidth / 2) + "px";
                /*execute a function when the mouse button is pressed:*/
                slider.addEventListener("mousedown", slideReady);
                /*and another function when the mouse button is released:*/
                window.addEventListener("mouseup", slideFinish);
                /*or touched (for touch screens:*/
                slider.addEventListener("touchstart", slideReady);
                /*and released (for touch screens:*/
                window.addEventListener("touchend", slideFinish);

                function slideReady(e) {
                    /*prevent any other actions that may occur when moving over the image:*/
                    e.preventDefault();
                    /*the slider is now clicked and ready to move:*/
                    clicked = 1;
                    /*execute a function when the slider is moved:*/
                    window.addEventListener("mousemove", slideMove);
                    window.addEventListener("touchmove", slideMove);
                }

                function slideFinish() {
                    /*the slider is no longer clicked:*/
                    clicked = 0;
                }

                function slideMove(e) {
                    var pos;
                    /*if the slider is no longer clicked, exit this function:*/
                    if (clicked == 0) return false;
                    /*get the cursor's x position:*/
                    pos = getCursorPos(e)
                        /*prevent the slider from being positioned outside the image:*/
                    if (pos < 0) pos = 0;
                    if (pos > w) pos = w;
                    /*execute a function that will resize the overlay image according to the cursor:*/
                    slide(pos);
                }

                function getCursorPos(e) {
                    var a, x = 0;
                    e = (e.changedTouches) ? e.changedTouches[0] : e;
                    /*get the x positions of the image:*/
                    a = img.getBoundingClientRect();
                    /*calculate the cursor's x coordinate, relative to the image:*/
                    x = e.pageX - a.left;
                    /*consider any page scrolling:*/
                    x = x - window.pageXOffset;
                    return x;
                }

                function slide(x) {
                    /*resize the image:*/
                    img.style.width = x + "px";
                    /*position the slider:*/
                    slider.style.left = img.offsetWidth - (slider.offsetWidth / 2) + "px";
                }
            }
        }
        
    </script>
<style>
       
       * {
            box-sizing: border-box;
        }
        
        .img-comp-container {
            position: relative;
            height: 350px;
            /*should be the same height as the images*/
        }
        
        .img-comp-img {
            position: absolute;
            width: auto;
            height: auto;
            overflow: hidden;
        }
        
        .img-comp-img {
            display: block;
            vertical-align: middle;
        }
        
        .img-comp-slider {
            /* position: absolute;
            z-index: 9;
            cursor: col-resize;
            set the appearance of the slider:
            width: 20px;
            height: 20px;
            background-color: white; 
            border: solid black;
            border-width: 5px;
            opacity: 0.2;
            border-radius: 0%;
            transform: rotate(45deg);
  -webkit-transform: rotate(-135deg); */
           

  position: absolute; 
  width: 45px; 
  height: 45px; 
  cursor: col-resize;
  line-height: 30px;
   text-align: center; 
   top: 50%; 
   left: 50%;
    /* transform: translate(-50%, -50%); 
    border-radius: 50%; background-color: rgb(250, 250, 250); */
        font-size:40px;
        z-index:1;   
        font-weight:500;
        }
        
        
        

 </style>
	
	
	
<script defer src="wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4"></script>
<script defer src="wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1"></script>



 

<!--<script async src="https://www.google.com/jsapi"></script> -->
<!-- Owl Carousel Assets -->
<!--<link href="https://clovedental.in/wp-content/themes/clove/css/owl.carousel.css" rel="stylesheet">
<link href="https://clovedental.in/wp-content/themes/clove/css/owl.theme.css" rel="stylesheet"> -->
<!--<script async src="https://clovedental.in/wp-content/themes/clove/js/jquery.mousewheel.js"></script>
<script async src="https://clovedental.in/wp-content/themes/clove/js/jquery.jscrollpane.min.js"></script> -->
<script async id="sourcecode">
//jQuery(function(){ jQuery('.scroll-pane').jScrollPane();});


</script>
<!-- Global site tag (gtag.js) - Google Ads: 958029923 -->
<script defer async src="https://www.googletagmanager.com/gtag/js?id=AW-958029923"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script defer async src="https://www.googletagmanager.com/gtag/js?id=UA-58837352-1"></script>

<!--<script defer src="/wp-content/themes/clove-child/js/newhome-head.js"></script>-->
<link rel="canonical" href="index.html" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Best Dentists and Dental Clinics Near You | Largest Dental Chain India" />
<meta property="og:description" content="India&#039;s Largest Dental Chain. Best Dentists and Dental Clinics in Delhi NCR, Jaipur, Chandigarh, Ahmedabad, Hyderabad, Chennai, Bangalore and pan India with a team of India’s best dentists. Find best dentist near me." />
<meta property="og:url" content="https://clovedental.in/" />
<meta property="og:site_name" content="Clove Dental" />
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.defer=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-58837352-1', 'auto');
  ga('send', 'pageview');
  /*Facebook Pixel Code */
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '400629990135976');
  fbq('track', 'PageView');
  fbq('track', 'Lead');
 /* End Facebook Pixel Code*/
</script>
<!-- Global site tag (gtag.js) - Google Ads: 958029923 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-958029923"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'AW-958029923');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-58837352-1"></script>
<script async>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-58837352-1');
</script>












<script type="application/ld+json"> {
            "@context": "http://schema.org", "@type": "MedicalOrganization", "name": "Gobest Dentist", "url": "https://clovedental.in/", "logo": "https://clovedental.in/wp-content/themes/clove/images/logo-img.jpg", "contactPoint": {"@type": "ContactPoint", "telephone": "+9111 3355 3232", "contactType": "customer service" },
            "sameAs": [ "https://www.facebook.com/clovedentalindia", "https://twitter.com/Clove_Dental", "https://www.instagram.com/Gobest Dentist/", "https://www.youtube.com/watch?v=7XEZ7qnVaeg" ] } </script>


</head>
<body class="home-page header-home">
     
<?php include("include/topbar.php"); ?>
<script>

</script>


  


<!--
<div class="showcase mobile">
	<ul class="slides">
			
		</ul>
		
		
	</div>wp-content/themes/clove-child/images/banner-1.jpg
    -->
<!--banner open-->
<header>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active"style="background-image: url('wp-content/themes/clove-child/images/banner1.jpg');height:30vh;">
      <div class="carousel-caption" style="height:auto;position: absolute;z-index: 10; width: auto;box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.7);">
                <h1><span>Best Dentist in Pune<br>and Pimpri Chinchwad</span></h1>
              </div>
      </div>
  </div>
</header>




<!--banner close-->
    
</div>


  


<!--video-->


  

<!--video close-->



<!-- video popup -->
<div class="patient_speak_modal" id="patient_speak_modal">
 <div class="patient_speak_modal_body">
  <div class="modal_video_box">
   <div class="close_btn"><i class="fa fa-close"></i></div>
   <iframe src="#" height="400" frameborder="0" allowfullscreen=""></iframe> 
  </div>
 </div>
</div>
<!-- video popup end here -->
<script>

</script>

<!--ddd-->
<section class="about">
            <div class="container">
                <div class="row">


                    <div class="col-xl-4 mt-3 " id="sliderCompImg">
                    <div class="img-comp-container" >
                        <div class="img-comp-img">
                             <img style="display: block; vertical-align: middle;" src="wp-content/uploads/2020/10/safety1-min.jpg" width="350px" height="350px">
                        </div>
                        <div class="img-comp-img img-comp-overlay">
                            <img style="display: block; vertical-align: middle;" src="wp-content/uploads/2020/10/safety2-min.webp" width="350px" height="350px">
                        </div>
                    </div>
                    <!-- <div class="juxtapose" style="position:sticky">
                      <img src="wp-content/uploads/2020/10/safety2-min.webp" alt="" />
                      <img src="wp-content/uploads/2020/10/safety1-min.jpg" alt=""/>
                    </div> -->
                  </div>


                    <div class="col-xl-8">
                        <div class="about-info py-3" data-aos="fade-up" data-aos-duration="2000">
                            <h5 class="mb-3">WHO WE ARE</h5>
                            <h2 class="mb-3">Multi-Specialty Dental Clinic In Pimpri-Chinchwad, Pune</h2>
                            <p>If you need to know is there a <strong>Best Dentist in pimpri chinchwad</strong> or
                                <strong>Best Dental Clinic in pimpri chinchwad</strong>. Yes, there is. GoBest Dentist
                                is a modern, hi-tech, and ISO certified chain of multi-specialty dental clinic in Pune,
                                India. Headed by Dr. Sana Mokashi it has a team of super specialists that is dedicated
                                towards delivering all dental treatment under one roof. We strive to provide high
                                quality, personalized dental care in a relaxing, comfortable, and safe environment.
                                Lifelong relationships are created with our patients based on trust and honesty.</p>
                            <div class="row about-point">
                                <div class="col-lg-4 col-6 about-btn" data-aos="fade-up" data-aos-duration="500">
                                    <div class="point"><a href="#." class="btn">Affordable Dentists</a></div>
                                </div>
                                <div class="col-lg-4 col-6 about-btn" data-aos="fade-up" data-aos-duration="700">
                                    <div class="point"><a href="#." class="btn">Advanced Techniques</a></div>
                                </div>
                                <div class="col-lg-4 col-6 about-btn" data-aos="fade-up" data-aos-duration="900">
                                    <div class="point"><a href="#." class="btn">Hygiene Safety priority</a></div>
                                </div>
                                <div class="col-lg-4 col-6 about-btn" data-aos="fade-up" data-aos-duration="1200">
                                    <div class="point"><a href="#." class="btn">Advanced Instruments</a></div>
                                </div>
                                <div class="col-lg-4 col-6 about-btn" data-aos="fade-up" data-aos-duration="1500">
                                    <div class="point"><a href="#." class="btn">Multispecialist Dentists</a></div>
                                </div>
                                <div class="col-lg-4 col-6 about-btn" data-aos="fade-up" data-aos-duration="1800">
                                    <div class="point"><a href="#." class="btn">Professional Staff</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
<!--ddd--> 
  
<!--section-->
<section class="why-choose ">
            <div class="container text-center">

                <h5>WHY YOU CHOOSE US</h5>
                <h2>why we are exceptional than others ?</h2>
                <p>GoBest Dentist is the most reputed dental clinic in Pune specialising in treating a variety of dental
                    problems, under one roof.</p>
                <div class="row text-left why-choose-point d-flex">
                    <div class="col-sm-6 col-6 col-xl-3 " data-aos="fade-up" data-aos-duration="800">
                        <div class="why text-center container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <img src="wp-content/themes/clove-child/images/AFFORDABLE-DENTISTS.png" alt="Why choose us"
                                        class="img-fluid p-xl-2">
                                </div>
                                <div class="col-12 pt-2">
                                    <h5>AFFORDABLE DENTISTS</h5>
                                    <p>The best affordable dental care, for your family.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-6  col-xl-3" data-aos="fade-up" data-aos-duration="1000">
                        <div class="why text-center">
                            <div class="row">
                                <div class="col-12">
                                    <img src="wp-content/themes/clove-child/images/ISO-CERTIFIED.png" alt="Why choose us" class="img-fluid p-xl-2">
                                </div>
                                <div class="col-12 pt-2">
                                    <h5>ISO CERTIFIED</h5>
                                    <p>We are a hi-tech, modern and ISO certified dental care.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-6 col-md-6 col-xl-3" data-aos="fade-up" data-aos-duration="1500">
                        <div class="why text-center">
                            <div class="row">
                                <div class="col-12 ">
                                    <img src="wp-content/themes/clove-child/images/Advanced-Technology1.png" alt="Why choose us"
                                        class="img-fluid p-xl-2">
                                </div>
                                <div class="col-12 pt-2">
                                    <h5>ADVANCED TECHNOLOGY</h5>
                                    <p>We strive to use advanced dental technology.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-6 col-xl-3" data-aos="fade-up" data-aos-duration="2000">
                        <div class="why text-center">
                            <div class="row">
                                <div class="col-12 ">
                                    <img src="wp-content/themes/clove-child/images/SAFETY-&-QUALITY.png" alt="Why choose us" class="img-fluid p-xl-2">
                                </div>
                                <div class="col-12 pt-2">
                                    <h5>SAFETY & QUALITY</h5>
                                    <p>Dedication to quality & patient safety is embedded in everything we do.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!--section-->

<!--review-->
<section class="review ">
            <div class="container text-center">
                <h5 style="color:#fe235b;">REVIEWS</h5>
                <h2>What Patients Speak</h2>
                <p>Know what our patients say about GoBest Dentist</p>
                <div class="slider-area mt-0">
                <div id="carouselExampleControls" class="carousel slide mt-0" data-bs-ride="carousel">
                <div class="carousel-inner" >
                  <div class="carousel-item item active">
                    <div class="img-area text-center">
                      <img src="wp-content/themes/clove-child/images/Irfan-M.png" class="d-block w-100 " alt="...">
                    </div>
                    <div class="carousel-caption d-md-block" style="position:absolute;bottom:0.001rem !important">
                      <h3 class="blockquote-footer"><i>Irfan M</i></h3>
                      <p><i class="fa fa-quote-left"></i>
                        Doctor of GoBest Dentist is very experienced. They provide very best treatement at
                          affordable prices. You can feel relaxed after visiting the place. It is surely the
                          <strong>best dental clinic in pimpri chinchwad </strong> <i class="fa fa-quote-right"></i>
                      </p>
                    </div>
                  </div>

                  <div class="carousel-item item">
                    <div class=" img-area text-center">
                      <img src="wp-content/themes/clove-child/images/Karishma-A.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-caption d-md-block">
                      <h3 class="blockquote-footer"><i> Karishma A</i></h3>
                      <p><i class="fa fa-quote-left"></i>
                            Very friendly staff. Nice ambience of the clinic. I had gone to GoBest Dentistfor my teeth whitening. The results are pretty immaculate. I'm very happy with my treatment. I recommend this clinic as <strong>best dentist in nigdi pradhikaran</strong>. <i class="fa fa-quote-right"></i>
                      </p>
                    </div>
                  </div>

                  <div class="carousel-item item">
                    <div class="img-area">
                      <img src="wp-content/themes/clove-child/images/Rafiq-M.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-caption d-md-block">
                      <h3 class="blockquote-footer"><i> Rafiq M</i></h3>
                      <p><i class="fa fa-quote-left"></i>
                          Thanks a lot doctor for such a nice treatment to my daughter. The doctor was handling
                          very nicely to her. Even i visited for root canal of my father and that too done very
                          nicely at affordable cost. It is the <strong>best dental clinic in pune</strong>. <i
                          class="fa fa-quote-right"></i>
                      </p>
                    </div>
                  </div>
                  
                  <div class="carousel-item item">
                    <div class="img-area">
                      <img src="wp-content/themes/clove-child/images/Rahul-K.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-caption  d-md-block">
                      <h3 class="blockquote-footer">Rahul K</h3>
                      <p><i class="fa fa-quote-left"></i>
                          I went for wisdom tooth extraction of my mother and that happened very smoothly with
                          minimum pain and minimum cost too. Also Root canal and CAP were suggested for other
                          teeth as precaution. <strong>It can be sonsidered as best orthodontist in pune.</strong><i class="fa fa-quote-right"></i>
                      </p>
                    </div>
                  </div>

                  <div class="carousel-item item">
                    <div class="img-area">
                      <img src="wp-content/themes/clove-child/images/Samir-S.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-caption  d-md-block">
                      <h3 class="blockquote-footer"><i> Samir S</i></h3>
                      <p><i class="fa fa-quote-left"></i>
                            The doctor is so polite and yet knowledgeable.The clinic has good facilities and my root canal and capping were done so neatly with so less pain at affordable prices. It is surely the <strong>best dental clinic in pimpri chinchwad </strong>. <i class="fa fa-quote-right"></i>
                      </p>
                    </div>
                  </div>

                  <div class="carousel-item item">
                    <div class="img-area">
                      <img src="wp-content/themes/clove-child/images/Shainaj-M.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-caption d-md-block">
                      <h3 class="blockquote-footer"><i> Shainaj M</i></h3>
                      <p><i class="fa fa-quote-left"></i>
                      Visited two dentists for my tooth pain but both doctors made it worse but my friend suggested GoBest Dentist is genuine and affordable dentists. In few visits only my problem was resolved. GoBest Dentist is suerly the <strong>best dentist in pimpri </strong>. <i
                      class="fa fa-quote-right"></i>
                      </p>
                    </div>
                  </div>

                  <div class="carousel-item item">
                    <div class="img-area">
                      <img src="wp-content/themes/clove-child/images/Shama-M.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-caption d-md-block">
                      <h3 class="blockquote-footer"><i>  Shama M</i></h3>
                      <p><i class="fa fa-quote-left"></i>
                      Great facilities in the clinic. Effective treatments and dental surgeries. And most importantly all the doctors are very friendly, cooperative and caring. They make Most painful dental problem look<strong> like small ones. </strong>. <i
                      class="fa fa-quote-right"></i>
                      </p>
                    </div>
                  </div>

                  <div class="carousel-item item">
                    <div class="img-area">
                      <img src="wp-content/themes/clove-child/images/Shekhar-M.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-caption d-md-block">
                      <h3 class="blockquote-footer"><i>Shekhar M</i></h3>
                      <p><i class="fa fa-quote-left"></i>
                      I had severe pain on Sunday and called so many dentists in my area, nobody helped me but GoBest Dentist attended by appointment on my request. Explained treatment plan and<strong> overall good experience. </strong>. <i class="fa fa-quote-right"></i>
                      </p>
                    </div>
                  </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <i class="fa fa-chevron-left" aria-hidden="true"></i></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              </div>

                
                
            </div>
        </section>
<!--review close-->






</div>
</div>


<script>

</script>



<!-- corona popup start here -->
<!-- corona popup end here -->
<!--<div class="important_info_icon">
 <a href="https://clovedental.in/press-release-on-covid-19/"></a>
 <div class="info"><p>Notice!</p><a href="https://clovedental.in/press-release-on-covid-19/"></a></div> -->
<!-- </div> -->
<style>
.important_info_icon{
  width:50px;
  height:50px;
  border-radius:50%;
  background:url('wp-content/uploads/2020/03/info_icon_white.png') no-repeat center;
  background-size:30px;
  background-color:#F00;
  position:fixed;
  left:10px;
  bottom:40px;
  z-index:99999;
  box-shadow:0 0 4px rgba(0,0,0,.3);
  -webkit-animation:bounce 2s infinite linear 1s;
  animation:bounce 2s infinite linear 1s;
}
@-webkit-keyframes bounce{
   from{bottom:30px}
   to{bottom:50px}
}
@keyframes bounce{
   from{bottom:30px}
   to{bottom:50px}
}

.important_info_icon a{
   display:block;
   position:absolute;
   left:0;right:0;
   top:0;bottom:0;
}
.important_info_icon .info{
  width:auto;
  position:absolute;
  left:60px;
  bottom:0;
  background-color:#FFF;
  padding:10px 15px;
  border-radius:4px;
  box-shadow:0 0 4px rgba(0,0,0,.3);
}
.important_info_icon .info:before{
  content:'';
  width:10px;height:10px;
  position:absolute;
  top:0;bottom:0;
  margin:auto;left:-10px;
  border-top:10px solid transparent;
  border-bottom:10px solid transparent;
  border-right:10px solid #FFF;
}
</style>

<style>
  
.phone-btn {
    position: fixed;
    z-index: 999;
    background-color: #fe0600;
    color: #fff;
    padding: .6rem .9rem;
    border-radius: 50%;
    transition: .6s;
    box-shadow: 0 0 0 0.2rem rgb(254 6 0 / 48%);
    animation: cc-calto-action-ripple .6s linear infinite !important;
    width: 3.5rem;
    height: 3.5rem;
    /* display: flex; */
    align-items: center;
}

@-webkit-keyframes cc-calto-action-ripple {
    0% {
        -webkit-box-shadow: 0 4px 10px rgba(236, 139, 0, .2), 0 0 0 0 rgba(236, 139, 0, .2), 0 0 0 5px rgba(236, 139, 0, .2), 0 0 0 10px rgba(236, 139, 0, .2);
        box-shadow: 0 4px 10px rgba(236, 139, 0, .2), 0 0 0 0 rgba(236, 139, 0, .2), 0 0 0 5px rgba(236, 139, 0, .2), 0 0 0 10px rgba(236, 139, 0, .2)
    }
    100% {
        -webkit-box-shadow: 0 4px 10px rgba(236, 139, 0, .2), 0 0 0 5px rgba(236, 139, 0, .2), 0 0 0 10px rgba(236, 139, 0, .2), 0 0 0 20px transparent;
        box-shadow: 0 4px 10px rgba(236, 139, 0, .2), 0 0 0 5px rgba(236, 139, 0, .2), 0 0 0 10px rgba(236, 139, 0, .2), 0 0 0 20px transparent
    }
}

@keyframes cc-calto-action-ripple {
    0% {
        -webkit-box-shadow: 0 4px 10px rgba(236, 139, 0, .2), 0 0 0 0 rgba(236, 139, 0, .2), 0 0 0 5px rgba(236, 139, 0, .2), 0 0 0 10px rgba(236, 139, 0, .2);
        box-shadow: 0 4px 10px rgba(236, 139, 0, .2), 0 0 0 0 rgba(236, 139, 0, .2), 0 0 0 5px rgba(236, 139, 0, .2), 0 0 0 10px rgba(236, 139, 0, .2)
    }
    100% {
        -webkit-box-shadow: 0 4px 10px rgba(236, 139, 0, .2), 0 0 0 5px rgba(236, 139, 0, .2), 0 0 0 10px rgba(236, 139, 0, .2), 0 0 0 20px transparent;
        box-shadow: 0 4px 10px rgba(236, 139, 0, .2), 0 0 0 5px rgba(236, 139, 0, .2), 0 0 0 10px rgba(236, 139, 0, .2), 0 0 0 20px transparent
    }
}

.phone-btn:hover {
    text-decoration: none;
}

.phone-btn i {
    font-size: 2rem;
    transition: .3s ease;
}

.phone-btn:hover {
    color: #fff;
    box-shadow: 0px 0px 16px 3px #fff;
    transform: translateY(-10px);
    transition: .6s;
}

@media (max-width: 1024px) {
  .phone-btn {
        bottom: 1rem;
        right: auto;
        left: 15px;
    }
}

</style>

<?php include("include/footer.php") ?>

    <!-- Call Us -->
    <a href="tel:+917264889986;" class="phone-btn wow slideInRight ui-btn ui-shadow ui-corner-all " title="Call Us" style="color:#ffffff;"><i class="fa fa-phone"></i></a>

<script defer src="wp-content/themes/clove/js/waypoints.min.js" ></script>
<script defer src="wp-content/themes/clove/js/jquery.counterup.min.js" ></script>
<!--<script src="https://clovedental.in/wp-content/themes/clove/js/owl.carousel.min.js" ></script>-->

<script defer src="wp-content/themes/clove/js/jquery.flexslider.js" ></script>
<script defer src="wp-content/themes/clove/js/scripts.js" ></script>

<script defer src="wp-content/themes/clove-child/js/style.js"></script>
<script src="js/comparisonimage.js"></script>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}


</script>



<script>
/*Execute a function that will execute an image compare function for each element with the img-comp-overlay class:*/
  initComparisons();
 </script>






</body>
</html>


