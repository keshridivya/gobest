<?php
$conn = new mysqli("localhost","u188140722_dentist","Admin@123","u188140722_dentist");
//$conn = new mysqli("localhost","root","","GoBestDentist"); ?>
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
                slider = document.createElement("DIV");
                slider.setAttribute("class", "img-comp-slider");
                /*insert slider*/
                img.parentElement.insertBefore(slider, img);
                slider.style.top = (h / 2) - (slider.offsetHeight / 2) + "px";
                slider.style.left = (w / 2) - (slider.offsetWidth / 2) + "px";
                slider.addEventListener("mousedown", slideReady);
                window.addEventListener("mouseup", slideFinish);
                slider.addEventListener("touchstart", slideReady);
                window.addEventListener("touchend", slideFinish);

                function slideReady(e) {
                    e.preventDefault();
                    clicked = 1;
                    window.addEventListener("mousemove", slideMove);
                    window.addEventListener("touchmove", slideMove);
                }

                function slideFinish() {
                    clicked = 0;
                }

                function slideMove(e) {
                    var pos;
                    if (clicked == 0) return false;
                    pos = getCursorPos(e)
                    if (pos < 0) pos = 0;
                    if (pos > w) pos = w;
                    slide(pos);
                }

                function getCursorPos(e) {
                    var a, x = 0;
                    e = (e.changedTouches) ? e.changedTouches[0] : e;
                    a = img.getBoundingClientRect();
                    x = e.pageX - a.left;
                    x = x - window.pageXOffset;
                    return x;
                }

                function slide(x) {
                    img.style.width = x + "px";
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
            /*position: absolute;
            z-index: 9;
            cursor: col-resize;
            /*set the appearance of the slider:*/
          /*   width: 20px; */
            /*height: 20px;
            background-color: white; 
            border: solid black;
            border-width: 5px;
            /* opacity: 0.2; */
            /*border-radius: 0%;
            transform: rotate(45deg);
  -webkit-transform: rotate(-135deg);*/

  position: absolute; 
  width: 32px; 
  height: 32px; 
  line-height: 30px;
   text-align: center; 
   top: 50%; 
   left: 50%;
    transform: translate(-50%, -50%); 
    border-radius: 50%; background-color: rgb(250, 250, 250);
           
        }
        

 </style>

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


<style>

  @media (max-width:1024px){
    .iframe-video{
	width:150px !important;
  height:180px !important;
	}
  .iframe-photo{
	width:150px !important;
  height:150px !important;
	}
  .item1{
    height:0;
    min-height:0;
  }
  .fluid1{
      height:126px !important;
  }
  .hygines_txt{
      display:none;
  }
  .hygines h4{
      font-size:15px !important;
  }
  .image2{
   width: 100px !important;
  }
  .button-50 {
    padding: 8px 7px !important;
    width:auto;
  }
  .button-50 span{
      display:none;
  }
}
.patient_speak_videos .iframe-footer {
    text-align:center;
}
@media (max-width: 1024px){
.hi {
    font-size: 1rem !important;
    padding:0!importantt;
}
.caption{
    padding-top:10px !important;
}
}
.button-50 {
  appearance: button;
  background-color: #fe1e5b;
  background-image: none;
  border: 1px solid #000;
  border-radius: 4px;
  box-shadow: #fff 4px 4px 0 0,#000 4px 4px 0 1px;
  box-sizing: border-box;
  color: #fff;
  font-weight:700;
  cursor: pointer;
  display: inline-block;
  font-family: ITCAvantGardeStd-Bk,Arial,sans-serif;
  font-size: 14px;
  font-weight: 400;
  line-height: 20px;
  margin: 0 5px 10px 0;
  overflow: visible;
  padding: 12px 40px;
  text-align: center;
  text-transform: none;
  touch-action: manipulation;
  user-select: none;
  -webkit-user-select: none;
  vertical-align: middle;
  white-space: nowrap;
}

.button-50:focus {
  text-decoration: none;
}

.button-50:hover {
  text-decoration: none;
}

button:active {
  box-shadow: rgba(0, 0, 0, .125) 0 3px 5px inset;
  outline: 0;
  background:red !important;
}

.button-50:not([disabled]):active {
  box-shadow: #fff 2px 2px 0 0, #000 2px 2px 0 1px;
  transform: translate(2px, 2px);
}

@media (min-width: 768px) {
  .button-50 {
    padding: 12px 50px;
  }
}


</style>








<script type="application/ld+json"> {
            "@context": "http://schema.org", "@type": "MedicalOrganization", "name": "Gobest Dentist", "url": "https://clovedental.in/", "logo": "https://clovedental.in/wp-content/themes/clove/images/logo-img.jpg", "contactPoint": {"@type": "ContactPoint", "telephone": "+9111 3355 3232", "contactType": "customer service" },
            "sameAs": [ "https://www.facebook.com/clovedentalindia", "https://twitter.com/Clove_Dental", "https://www.instagram.com/Gobest Dentist/", "https://www.youtube.com/watch?v=7XEZ7qnVaeg" ] } </</script>


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
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active"style="background-image: url('wp-content/themes/clove-child/images/banner-1.jpg')">
      <div class="carousel-caption caption">
                <h1 class=" hi" style="width: max-content;padding:0 10px"><span>Best Dentist in Pune<br>and Pimpri Chinchwad</span></h1>
              </div>
              <div class="btn1">
                <a href="#" class="btn1 mt-sm-1 toggle1" >Make Your Appointment </a>
              </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('wp-content/themes/clove-child/images/banner-2.jpg')">
      <div class="carousel-caption caption">
                <h1 class=" hi" style="width: max-content;padding:0 10px"><span>Best Dentist in Pune<br>and Pimpri Chinchwad</span></h1>
              </div>
              <div class="btn1">
                <a href="#" class="btn1 mt-sm-1 toggle1" >Make Your Appointment </a>
              </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('wp-content/themes/clove-child/images/banner-3.jpg')">
      <div class="carousel-caption caption">
                <h1 class=" hi" style="width: max-content;padding:0 10px"><span>Best Dentist in Pune<br>and Pimpri Chinchwad</span></h1>
              </div>
              <div class="btn1">
                <a href="#" class="btn1 mt-sm-1 toggle1" >Make Your Appointment </a>
              </div>
      </div>
    </div>
  </div>
</header>




<!--banner close-->
    
</div>


  <div class="symt-treatments_h ">
    <h1 data-appear-animation="fadeInDown" data-appear-animation-delay="10">SYMPTOMS &amp; TREATMENTS</h1>
    <ul>
      <li><a href="Dental-Cavity-Fillings.php">
          <div class="treat-imgbox"><img src="wp-content/themes/clove-child/images/filling-icon.png"
              alt="nearest dental clinic" width="100" height="100"></div>
          <div class="treat-txtbox">Dental Fillings</div>
        </a></li>
      <li><a href="Root-Canal-Treatment.php">
          <div class="treat-imgbox"><img src="wp-content/themes/clove-child/images/root-canal-icon.png"
              alt="nearest dental hospital" width="100" height="100"></div>
          <div class="treat-txtbox">Root Canal Treatment</div>
        </a></li>
      <li><a href="Wisdom-Tooth-Extraction.php">
          <div class="treat-imgbox"><img src="wp-content/themes/clove-child/images/teeth-removal-icon.png"
              alt="near by dental clinic" width="100" height="100"></div>
          <div class="treat-txtbox">Wisdom Teeth Removal</div>
        </a></li>
      <li><a href="Braces-Orthodontic Treatment.php">
          <div class="treat-imgbox"><img src="wp-content/themes/clove-child/images/braces-aligners-icon.png"
              alt="best dental clinic near me" width="100" height="100"></div>
          <div class="treat-txtbox">Braces &amp; Aligners</div>
        </a></li>
      <li><a href="Dental-Implants.php">
          <div class="treat-imgbox"><img src="wp-content/themes/clove-child/images/dental-implant-icon.png"
              alt="dental hospital near me" width="100" height="100"></div>
          <div class="treat-txtbox">Dental Implants</div>
        </a></li>
      <li><a href="Flexible-Partial-Complete-Denture.php">
          <div class="treat-imgbox"><img src="wp-content/themes/clove-child/images/dentures-icon.png"
              alt="dentist in greater noida" width="100" height="100"></div>
          <div class="treat-txtbox">Dentures</div>
        </a></li>
      <li><a href="Crown-and-Bridges.php">
          <div class="treat-imgbox"><img src="wp-content/themes/clove-child/images/crowns-bridges-icon.png"
              alt="best dental clinic in delhi" width="100" height="100"></div>
          <div class="treat-txtbox">Bridges &amp; Crowns</div>
        </a></li>
      <li><a href="Children-Pediatric-Dentistry.php">
          <div class="treat-imgbox"><img src="wp-content/themes/clove-child/images/childrens-dentistry-icon.png"
              alt="best dentist in south delhi" width="100" height="100"></div>
          <div class="treat-txtbox">Kids Dentistry</div>
        </a></li>
      <li><a href="Oral-Maxillofacial-Surgery.php">
          <div class="treat-imgbox"><img src="wp-content/themes/clove-child/images/smile-makeover-icon.png"
              alt="best dentist" width="100" height="100"></div>
          <div class="treat-txtbox">Smile Makeover</div>
        </a></li>
      <li class="mobile-none"><a href="Teeth-Whitening.php">
          <div class="treat-imgbox"><img src="wp-content/themes/clove-child/images/teeth-whitening-icon.png"
              alt="best dentist in delhi" width="100" height="100"></div>
          <div class="treat-txtbox">Teeth Whitening</div>
        </a></li>

      <li class="mobile-none"><a href="Full-Mouth-Rehabilitation.php">
          <div class="treat-imgbox"><img src="wp-content/themes/clove-child/images/mouth-ulcers-icon.png"
              alt="best dentist" width="100" height="100"></div>
          <div class="treat-txtbox">Mouth Ulcers</div>
        </a></li>
      <li><a href="treatment.php">
          <div class="treat-imgbox"><img src="wp-content/themes/clove-child/images/read-more-icon.png"
              alt="best dentist" width="100" height="100"></div>
          <div class="treat-txtbox">View More</div>
        </a></li>

    </ul>
  </div>


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
                                <div class="col-lg-4 col-6  about-btn" data-aos="fade-up" data-aos-duration="1200">
                                    <div class="point"><a href="#." class="btn">Advanced Instruments</a></div>
                                </div>
                                <div class="col-lg-4 col-6  about-btn" data-aos="fade-up" data-aos-duration="1500">
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
  

<!--stories-->
<section class="counter1 ">
            <div class="container text-center">
                <h2 class=" offset-xl-2">Know More About Our Success Stories</h2>
                <div class="row">
                    <div class="col-lg-2 offset-lg-1 col-12 my-lg-0">
                        <img src="images/ISO-CERTIFIED-logo.png" alt="ISO" class="img-fluid image2">
                    </div>
                    <div class="col-lg-2 col-sm-6 col-5 shiva">
                        <div id="shiva"><span class="counter count">30,000</span> <span class="plus">+</span><p>Happy Patients</p></div>
                        
                    </div>
                    <div class="col-lg-2 col-sm-6 col-5 shiva">
                        <div id="shiva"><span class="counter count">30</span> <span class="plus">+</span><p>Experts Doctors</p></div>

                    </div>
                    <div class="col-lg-2 col-sm-6 col-5 shiva">
                        <div id="shiva"><span class="counter count">100</span> <span class="plus">+</span><p>Treatments</p></div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-5 shiva">
                        <div id="shiva"><span class="counter count">4</span> <span class="plus">+</span><p>Branches In Pune</p></div>
                    </div>
                    <div class="offset-lg-1"></div>
                </div>
            </div>
        </section>
<!--stories-->


<!--video-->

<section class="patient_speaks light_gray_bg light">
 <div class="container_2">
   <div class="heading">
     <h2>Patient Speaks</h2> 
   </div> 
   <div class="patients_speaks_wrap">
    <div class="patient_speak_videos row">
    <?php
              $sql = "SELECT * FROM review WHERE is_delete = '0' LIMIT 4";
              $data = mysqli_query($conn, $sql);
              foreach($data as $d){
          ?>		
      <div class="item item1 ">
       <div class="video-box">
        <!--<div class="play_btn" data-src="Lo_qC-_d_us"></div>-->
        <iframe width="260" height="320" src="https://www.youtube.com/embed/<?php echo $d['link']; ?>" class="iframe-video" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
        <!--<div class="iframe-footer"><span class="clinic-location"><?php //echo $d['client_name']; ?></span><span class="video-time"></span></div>-->
       </div>
      </div><!-- item end here -->
      <?php } ?>
      <div class="clearfix"></div>
      <div style="text-align:center;">
        <a href="testimonials.php" class="btn view_more">View More</a>
      </div>
    </div>   
   </div><!-- patients_speaks_wrap end here -->  
 </div>
</section>
<!--video-->

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
                    <div class="carousel-caption d-md-block" style="position:absolute;bottom:0rem !important">
                      <h3 class="blockquote-footer"><i>Irfan M</i></h3>
                      <p><i class="fa fa-quote-left"></i>
                        Dr. Mokashi's is very experienced doctor. They provide very best treatement at
                          affordable prices. You can feel relaxed after visiting the place. It is surely the
                          <strong>best dental clinic in pimpri chinchwad </strong> <i class="fa fa-quote-right"></i>
                      </p>
                    </div>
                  </div>

                  <div class="carousel-item item">
                    <div class=" img-area text-center">
                      <img src="wp-content/themes/clove-child/images/Karishma-A.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-caption d-md-block" style="position:absolute;bottom:0rem !important">
                      <h3 class="blockquote-footer" style="padding:5px;"><i> Karishma A</i></h3>
                      <p><i class="fa fa-quote-left"></i>
                            Very friendly staff. Nice ambience of the clinic. I had gone to Dr Sana Mokashi for my teeth whitening. The results are pretty immaculate. I'm very happy with my treatment. I recommend this clinic as <strong>best dentist in nigdi pradhikaran</strong>. <i class="fa fa-quote-right"></i>
                      </p>
                    </div>
                  </div>

                  <div class="carousel-item item">
                    <div class="img-area">
                      <img src="wp-content/themes/clove-child/images/Rafiq-M.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-caption d-md-block" style="position:absolute;bottom:0rem !important">
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
                    <div class="carousel-caption  d-md-block" style="position:absolute;bottom:0rem !important">
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
                    <div class="carousel-caption  d-md-block" style="position:absolute;bottom:0rem !important">
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
                    <div class="carousel-caption d-md-block" style="position:absolute;bottom:0rem !important"> 
                      <h3 class="blockquote-footer"><i> Shainaj M</i></h3>
                      <p><i class="fa fa-quote-left"></i>
                      Visited two dentists for my tooth pain but both doctors made it worse but my friend suggested Dr Mokashi is genuine and affordable dentists. In few visits only my problem was resolved. She is suerly the <strong>best dentist in pimpri </strong>. <i
                      class="fa fa-quote-right"></i>
                      </p>
                    </div>
                  </div>

                  <div class="carousel-item item">
                    <div class="img-area">
                      <img src="wp-content/themes/clove-child/images/Shama-M.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-caption d-md-block" style="position:absolute;bottom:0rem !important">
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
                    <div class="carousel-caption d-md-block" style="position:absolute;bottom:0rem !important">
                      <h3 class="blockquote-footer"><i>Shekhar M</i></h3>
                      <p><i class="fa fa-quote-left"></i>
                      I had severe pain on Sunday and called so many dentists in my area, nobody helped me but Dr Mokashi attended by appointment on my request. Explained treatment plan and<strong> overall good experience. </strong>. <i class="fa fa-quote-right"></i>
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

<!-- equipments-->
<section class="advTechnology">
            <div class="container text-center">
                <h5 data-aos="fade-up" data-aos-duration="1000">Equipments</h5>
                <h2 data-aos="fade-up" data-aos-duration="1500">Advanced Technology</h2>
                <p data-aos="fade-up" data-aos-duration="2000">We offer the very latest advantages in dental technology
                    and equipment. Our doctors are continually trained in the use of our advanced technology and
                    equipments.</p>

                <div class="row ">
                    <div class="col-lg-3 col-sm-6 col-6 my-4" id="hygn">
                        <div class="machine" data-aos="fade-up" data-aos-duration="800">
                            <img src="wp-content/themes/clove-child/images/advT1.jpg" alt="" class="img-fluid">
                            <h4 style="fontsize:12px">Rotary Endodontics</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6 hygn my-4" id="hygn">
                        <div class="machine" data-aos="fade-up" data-aos-duration="1600">
                            <img src="wp-content/themes/clove-child/images/lightcore.webp" alt="" class="img-fluid fluid1" >
                            <h4>Light Cure </h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6 hygn d-sm-flex my-4" id="hygn">
                        <div class="machine" data-aos="fade-up" data-aos-duration="2400">
                            <img src="wp-content/themes/clove-child/images/advT3.jpg" alt="" class="img-fluid">
                            <h4>CAD CAM & Zirconia </h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-6 hygn d-sm-flex my-4" id="hygn">
                        <div class="machine" data-aos="fade-up" data-aos-duration="3000">
                            <img src="wp-content/themes/clove-child/images/advT4.jpg" alt="" class="img-fluid">
                            <h4>Ultrasonic Cleaning </h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- equipments- -->


<!--hygiene-->
<section class="hygiene ">
            <div class="container text-center">
                <h5>HYGIENE</h5>
                <h2>We <strong>‘Care’</strong> For You!</h2>
                <p>To ensure hygine and good health, all the instruments are properly sterialised which makes us
                    <strong>Best dentist in pune.</strong></p>
                <div class="row text-lg-left" id="hygiene-part">
                    <div class=" col-lg-12 d-flex pb-4">
                        <div data-aos="fade-up" data-aos-duration="1000">
                            <div class="row">
                                <div class="col-lg-12 mt-3">

                                    <h2>STERIALIZATION</h2>
                                    <p>It is very essential for people to understand the importance of hygiene and
                                        sterilization especially when visiting a dental clinic. We takes every possible
                                        step to prevent cross contamination and protect the health of our patients which
                                        makes us <strong>Best dentist in wakad, pune</strong>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-6 d-flex pb-4 col-sm-6 col-6" id="size">
                        <div class=" hygines" data-aos="fade-up" data-aos-duration="2000">
                            <div class="row">
                                <div class="col-lg-6 ">
                                    <img src="wp-content/themes/clove-child/images/hygiene1.jpg" alt="hygiene1" class="img-fluid">

                                    <h4>DISINFECTION</h4>
                                </div>
                                <div class="col-lg-6">
                                    <p class="hygines_txt">OSHA requires surface disinfectants to be efficacious against
                                        HIV and HBV. If blood is present on the surface, an intermediate-level
                                        disinfectant labeled as tuberculocidal should be used for proper hygine. Visit
                                        the <strong>Best dental clinic in wakad, pune</strong> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-6 d-flex pb-4  col-sm-6 col-6" id="size">
                        <div class="hygines" data-aos="fade-up" data-aos-duration="3000">
                            <div class="row">
                                <!-- <div class="hygines row"> -->
                                <div class="col-lg-6 size">
                                    <img src="wp-content/themes/clove-child/images/hygiene1_img.png" alt="hygiene1" class="img-fluid">

                                    <h4>ULTRASONIC CLEANING DEVICES</h4>
                                </div>
                                <div class="col-lg-6 ">
                                    <p class="hygines_txt">These devices use sound waves, that are outside the human
                                        hearing range to form oscillating bubbles, a process called cavitation. These
                                        bubbles act on debris to remove it from the instruments. Visit the <strong>Best
                                            dental clinic in pune</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!--hygiene-->

<!--more review-->
<section class="more-review" style="background: url(images/background.png) no-repeat center center; background-size: cover;background-attachment: fixed;">
            <div class="container text-center">
                <h2 class="text-center">More Reviews On</h2>
              
               
                <div class="row mt-3">
                     <div class="col-lg-3">
                        <div class="img-sec">
                             <?php
              $sql = "SELECT * FROM review WHERE is_delete = '0' LIMIT 1";
              $data = mysqli_query($conn, $sql);
              foreach($data as $d){
          ?>	
                             <iframe width="260" height="auto" src="https://www.youtube.com/embed/<?php echo $d['link']; ?>" class="iframe-video" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
                              <?php } ?>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="box mb-3 google-box" data-aos="fade-up" data-aos-duration="2000" style="background:white">
                            <div class="row">
                                <div class="col-lg-3">
                                    <img src="images/google.png" style="max-width:initial!important;">
                                </div>
                                <div class="col-lg-9">
                                    <h5>Google</h5>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="col-lg-12 mt-3">
                                    <p><span class="color">5.0</span> Stars - 1100+ Reviews </p>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-3">
                        <div class="box mb-3 justdial-box" data-aos="fade-up" data-aos-duration="2000" style="background:white">
                            <div class="row">
                                <div class="col-lg-3">
                                    <img src="images/jd.png" style="max-width:initial!important;">
                                </div>
                                <div class="col-lg-9">
                                    <h5>Just Dial</h5>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="col-lg-12 mt-3">
                                    <p><span class="color">5.0</span> Stars - 1400+ Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-3">
                        <div class="box mb-3 practo-box" data-aos="fade-up" data-aos-duration="2000" style="background:white"> 
                            <div class="row">
                                <div class="col-lg-3">
                                    <img src="images/practo.png" style="max-width:initial!important;">
                                </div>
                                <div class="col-lg-9">
                                    <h5>Practo</h5>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="col-lg-12 mt-3">
                                    <p><span class="color">5.0</span> Stars - 100+ Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
<!--more review-->


<!--casestudy-->

<section class="patient_speaks light_gray_bg">
 <div class="container_2">
   <div class="heading">
     <h2>Case Study</h2> 
   </div> 
   <div class="row">
   <?php
              
              $sql = "SELECT * FROM casestudy WHERE is_delete = '0' LIMIT 4";
              $data = mysqli_query($conn, $sql);
              foreach($data as $d){
          ?>	
      <div class="col-lg-3 col-6 col-sm-6">
        <div class="case_study_img">
          <img src="adm/pages/forms/caseimage/<?php echo $d['banner']; ?>" alt="case_study_img" class="img-fluid">
        </div>
        <div class="iframe-footer"><span class="clinic-location"><?php echo $d['title']; ?></span><span class="video-time"></span></div>
      </div>
      <?php } ?>
              </div>
   <!--<div class="patients_speaks_wrap">
    <div class="patient_speak_videos">
    <?php
             /*  
              $sql = "SELECT * FROM casestudy WHERE is_delete = '0' LIMIT 4";
              $data = mysqli_query($conn, $sql);
              foreach($data as $d){*/
          ?>		
      <div class="item item1">
       <div class="video-box">
        <img style="height:250px ;width:270px" src="adm/pages/forms/caseimage/<?php //echo $d['banner']; ?>" class="iframe-photo" title="YouTube video player"> 
        <div class="iframe-footer"><span class="clinic-location"><?php //echo $d['title']; ?></span><span class="video-time"></span></div>
       </div>
      </div><!-- item end here -->
      <?php //} ?>
      <!--<div class="clearfix"></div>
      <div style="text-align:center;">
        <a href="fullcasestudy.php" class="btn view_more" style="margin-top:0;">View More</a>
      </div>
    </div>   
   </div>--><!-- patients_speaks_wrap end here -->  
 </div>
</section>
<!--casestudy-->



<!--offer-->
<div class="processing-contact-us-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                    <?php $link="select * from offer";
    $reviews = mysqli_query($conn,$link);
    while($row = mysqli_fetch_array($reviews)) {?>
                        <div class="footer-cta d-lg-flex" style="background-image:url(adm/pages/forms/image/<?php echo $row["image"]; ?>)">
                        <?php } ?>
                        
                            <div class="ad-price">
                                <span>Special Offer <br> <span class="rate">50% Off</span></span><br>
                                <a href="#.">Get Offer</a>
                            </div>
                            <div class="cta-whitebox ml-auto">
                                <h2><img class="smile" src="wp-content/themes/clove-child/images/smile.png" alt="image"> Smile At <span
                                        class="hylyt">Affordable</span> Fees !</h2>
                                <p style="font-size:15px;margin-bottom:1rem !important;">Free Check Up &amp; Upto 50% Discount On All Dental Treatments | Free Consultation |
                                    Root Canal 50% Flat Discount</p>
                                    <a href="javascript:void(0);" class="call-back click-form btn-primary "  title="Call Us" ">Get Offer</a>
                                    
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--offer-->

<!--map-->
<section class="section">
        <div class="container"> 
          <h2 class="mb-5">Our Branch Location</h2>        
				<div class="row pl-0" >
				<div class="r tab" id="r1" style="margin-bottom:40px; margin:10px; text-align: center;">
  <button class="button-50 "  onclick="openCity(event, 'akurdi')" id="defaultOpen">AKURDI <span>BRANCH</span></button>
  <button class="button-50" onclick="openCity(event, 'wakad')">WAKAD <span>BRANCH</span>	</button> 
  <button class="button-50 active" onclick="openCity(event, 'baner')">BANER <span>BRANCH</span></button>
  <button class="button-50" onclick="openCity(event, 'pimple')"><span>PIMPLE</span> SAUDAGAR</button> 
  
</div>

<div id="akurdi" class="tabcontent" style="display: none;">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3780.283122167295!2d73.77923291437065!3d18.651286970032448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b9daea121625%3A0xca107f7a00fa4ca4!2sMokashi%20Dental%20Clinic%2C%20Akurdi!5e0!3m2!1sen!2sin!4v1621339077398!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

<div id="wakad" class="tabcontent" style="display: none;"> 
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3781.506302887447!2d73.77018061436988!3d18.59628357170897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b93e66ce1db7%3A0xcf9781de98e710a3!2sMokashi%20Dental%20Clinic%2C%20Wakad%20Branch!5e0!3m2!1sen!2sin!4v1621338745758!5m2!1sen!2sin" width="100%" height="350" style="border:0; margin-bottom:0" allowfullscreen="" loading="lazy"></iframe>

</div>

<div id="baner" class="tabcontent" style="display: block;">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.285064490907!2d73.78567981489334!3d18.561182687385397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x58d63f0c16e34386!2sGo%20Best%20Dentist%20-%20Earlier%20Mokashi%20Dental%20clinic!5e0!3m2!1sen!2sin!4v1629264989353!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

<div id="pimple" class="tabcontent" style="display: none;"> 
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3781.5573524673227!2d73.79077811489384!3d18.59398458736632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc5b1e259af1e4cdb!2sGo%20Best%20Dentist%20-%20earlier%20Mokashi%20Dental%20clinic%2C%20Pimple%20Saudagar!5e0!3m2!1sen!2sin!4v1629264870279!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

</div>
 
 
					</div>	
         
        </div> 
    </section>
<!--map-->
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

<?php include("include/footer.php"); ?>

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
  tablinks = document.getElementsByClassName("button-50");
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


