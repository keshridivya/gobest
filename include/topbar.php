<link rel="stylesheet" href="style.css">
<div class="form-overlay  ">
<div class="request-formbox">
<span class="close-form">X</span>
<h3>Get Callback</h3>
<form method="post" id="rsform" action="indexphp.php">
<input type="hidden" name="form_type" id="frm_type">
<div id="for_banner"></div>
<div class="form-content">
<div class="fill_box">
  <input type="hidden" name="utm_source" id="1 " value="">
    <input type="hidden" name="utm_campaign" id="2 " value="">
    <input type="hidden" name="utm_medium" id="3"  value="">
    <input type="hidden" name="utm_term" id="4"  value="">
<input type="text" name="name" id="name_id_r" class="form-control" placeholder="Enter Your Name *" value="">
<p class="error-n error-c" id="r_app_error2"></p>
</div>
<div class="fill_box">
 <input type="tel" name="PhoneNumber" id="phone_r" class="form-control" maxlength="10"  minlength="10" pattern="^\d{10}$" required placeholder="Enter Your Mobile Number *" value="" >
<p class="error-n error-c" id="r_app_error1"></p>

</div>


<div class="fill_box submitbox">
<div class="clearfix"></div>
                                      <div class="form-disclaimer"><input id="disclaimer_r" checked="checked" name="disclaimer_r" type="checkbox" value="Y" /><label style="font-size: 9px;" for="disclaimer_r">I declare that the information provided above is correct. I would like to receive communication about Go Best Dentist.</label></div>                      
                                                             <div class="clearfix"></div>
<input type="submit" name="submit2" class="req_submitbtn sbt" value="Submit">
<input type="text" readonly class="req_submitbtn plwt" value="Please wait...">
</div>
<div class="form-disclaimer">
<label style="font-size: 9px; margin-top:6px;">By clicking Submit you agree to be contacted by Go Best Dentist over Phone or SMS/WhatsApp/Email.<br></label></div>

</div>
</form>
</div>
</div>
<div class="main-site">
<div class="transparent-bg"></div>
<div class="side-menu">
    <span class="side-menu-close"><i class="fa fa-times" aria-hidden="true"></i></span>
    <div class="logo-side-menu">
    <a href="index.php"><img src="wp-content/themes/clove/images/img_logo_new.png" class="logo1" alt="Go Best Dental Clinic" width="125" height="56"></a>
    </div>
    <div class="side-menu-scroll">
        <div class="menu-scroll-in">
        
        
            <div class="common links">
            <ul>
            <li><a href="about-us.php"><span><!--<img src="https://clovedental.in/wp-content/themes/clove-child/images/hospital-icon.png" alt="best dental hospital">--></span>About us</a></li>
            <!--<li><a href="https://clovedental.in/clove-dental-doctors/"><span><!--<img src="https://clovedental.in/wp-content/themes/clove-child/images/doctor-icon2.png" alt="dental doctor near me"></span>Our Doctors</a></li>-->
            <li><a href="careers.php"><span><!--<img src="https://clovedental.in/wp-content/themes/clove-child/images/career-icon.png" alt="dental clinic in delhi">--></span>CAREER</a></li>
            <li><a href="contact-us.php"><span><!--<img src="https://clovedental.in/wp-content/themes/clove-child/images/info-icon.png" alt="dentist in delhi">--></span>Contact us</a></li>
            </ul>
            </div>
            <div class="common follow">
                <h3>Follow Us</h3>
                <ul>
                <li><a href="" title="Twitter" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                <li><a href="" title="Facebook" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                <li><a href="" title="LinkedIn" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                <li><a href="" title="Youtube" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                <li><a href="" title="Instagram" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="head-outer">
<div class="header-main"><div class="orange helpme overlay animateHeader aos-init aos-animate" id="myModal" data-aos="fade-up" data-aos-delay="15000">
    <div class="container positionRel"> 
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <span class="cp-info-bar-msg" style="line-height: 1.8;font-size:14px">Leave your mobile number to get a call back.</span>
            </div>
            <div class="col-lg-4 col-md-6 col-7 pdr-0">
               <div class="validateContainer">
                <form class="form-inline form" name="form1" method="post" id="form1"> 
                  <!--  <div class="form-group">
                    <div class="input-container">
                        <div class="validateField">
                            <input type="text" class="validateRequired validateNumber validateMobileNoLimit" name="PhoneNumber" id="message-input" placeholder="Mobile Number*">
                        </div>
                    </div>
                </div> -->
                <div class="form-group">
                    <div class="input-container">
                        <div class="">
                            <input type="text" required="" name="PhoneNumber" id="message-input"  minlength="10" maxlength="10" placeholder="Mobile Number*" aria-required="true">
                        </div>
                    </div>
                </div>

                <input type="submit" class="submitBtn checkValidationBtn" name="sub2" value="Submit" data-sitekey="6Lf6h1EcAAAAAMFnv3HckaiAGnSU3DDEBX2OCVok" style="max-width: fit-content;">
                    <!-- <input type="text" id="number" placeholder="Mobile Number" name="number">  -->
                    <!-- <button type="submit" class="submitBtn">Submit</button> -->
                </form>
                	<?php
	if(isset($_POST['sub2'])){
$PhoneNumber= $_POST['PhoneNumber'];
// configure
$from = 'Enquiry <info@sachinenterprise.in>'; 
$sendTo = 'Enquiry <maheshniwate10@gmail.com>';
$subject = 'Baner Form from Website';
$fields = array('PhoneNumber' => 'PhoneNumber'); // array variable name => Text to appear in email
$okMessage = 'thank you! We will respond to you as early as possible. For Quick Confirmation, Call us on 7264889986 and take instant appointment on Call.';
$errorMessage = 'There was an error while submitting the form. Please try again later';

try
{
    $emailText = "You have new message from contact form\n=============================\n";

    foreach ($_POST as $key => $value) {

        if (isset($fields[$key])) {
            $emailText .= "$fields[$key]: $value\n";
        }
    }

    mail($sendTo, $subject, $emailText, "From: " . $from);
    echo "<script>alert('$okMessage');</script>";
    
}
catch (\Exception $e)
{
    echo "<script>alert('$errorMessage');</script>";
   // $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);
    
    header('Content-Type: application/json');
    
    echo $encoded;
}
else {
    echo $responseArray['message'];
}
}
?>
            </div>
          </div>
            <div class="col-lg-3 col-md-4 col-5 pd-0" style="line-height: 2;">
                <span class="cp-info-bar-msg"><i class="fa fa-phone"></i> <a href="tel:+917264889986" style="color: #fff;font-size:13px">+91 72648 89986</a></span>
            </div>
        </div>
        <a class="close close2" data-dismiss="modal">×</a>


</div>
</div>
<div style="padding:5px 5px 5px 55px;background:white;height: 4rem;">
<div class="logo-box">
<a href="index.php" class="logo-dsk"><img src="wp-content/themes/clove/images/img_logo_new.png"  alt="Gobest Dentist" width="125" height="56"></a>
<a href="index.php" class="logo-mbl"><img src="wp-content/uploads/2020/10/logo_clove_new-min.png" class="logo1" alt="Clove Dental Clinic" width="263" height="102"></a>
</div>
<div class="toggle-icon"><i class="fa fa-bars" aria-hidden="true"></i></div>
<div class="toggle-menu"><span></span></div>
<div class="nav-bar ppp">
<div class="navigation">
<div class="navigation-scroll">
<div class="menu-menu-1-container">
<ul id="primary-menu" class="menu">
<li id="menu-item-427" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-427"><a href="index.php" class="a">HOME</a>
</li>
<li id="menu-item-4792" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-4792"><a href="about-us.php" class="a">ABOUT US</a>
</li>
<li id="menu-item-7267" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-7267"><a class="a" href="treatment.php" style="cursor:pointer">TREATMENT</a>
	<ul class="sub-menu">
	<li id="menu-item-12108" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12108"><a href="Root-Canal-Treatment.php" class="a">Root Canal Treatment</a></li>
	<li id="menu-item-7269" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7269"><a href="Crown-and-Bridges.php" class="a" >Crown and Bridges</a></li>
	<li id="menu-item-12104" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12104"><a href="Braces-Orthodontic Treatment.php" class="a">Braces- Orthodontic Treatment </a></li>
	<li id="menu-item-7271" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7271"><a href="Scaling-Polishing.php" class="a">Scaling/Polishing</a></li>
	<li id="menu-item-7268" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7268"><a href="Children-Pediatric-Dentistry.php" class="a">Children/Pediatric dentistry</a></li>
	<li id="menu-item-8191" class="menu-item menu-item-type-post_type menu-item-object-specialties menu-item-8191"><a href="Dental-Cavity-Fillings.php" class="a">Dental cavity and Fillings</a></li>
	<li id="menu-item-8192" class="menu-item menu-item-type-post_type menu-item-object-specialties menu-item-8192"><a href="Tooth-Extraction.php" class="a">Tooth Extraction</a></li>
	<li id="menu-item-8193" class="menu-item menu-item-type-post_type menu-item-object-specialties menu-item-8193"><a href="Dental-Implants.php" class="a">Dental implants</a></li>
	<li id="menu-item-7259" class="menu-item menu-item-type-post_type menu-item-object-specialties menu-item-7259"><a href="Invisalign-Clear-Aligners.php" class="a">Invisalign/Clear Aligners</a></li>
	<li id="menu-item-10646" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10646"><a href="Dental-Care-Hygiene.php" class="a">Dental care and hygiene</a></li>
	<li id="menu-item-8194" class="menu-item menu-item-type-post_type menu-item-object-specialties menu-item-8194"><a href="Oral-Maxillofacial-Surgery.php" class="a">Oral and Maxillofacial Surgery</a></li>
	<li id="menu-item-8195" class="menu-item menu-item-type-post_type menu-item-object-specialties menu-item-8195"><a href="Flexible-Partial-Complete-Denture.php" class="a">Flexible Partial/Complete Dentures</a></li>
	<li id="menu-item-7261" class="menu-item menu-item-type-post_type menu-item-object-specialties menu-item-7261"><a href="Teeth-Discoloration-Stained-Teeth.php" class="a">Teeth Discoloration/Stained teeth</a></li>
	<li id="menu-item-8196" class="menu-item menu-item-type-post_type menu-item-object-specialties menu-item-8196"><a href="Teeth-Sensitivity.php" class="a">Teeth Sensitivity</a></li>
	<li id="menu-item-7258" class="menu-item menu-item-type-post_type menu-item-object-specialties menu-item-7258"><a href="Cosmetic-Dentistry.php" class="a">Cosmetic Dentistry</a></li>
	<li id="menu-item-7256" class="menu-item menu-item-type-post_type menu-item-object-specialties menu-item-7256"><a href="Dental-X-Ray.php" class="a">Dental X-ray</a></li>
	<li id="menu-item-8197" class="menu-item menu-item-type-post_type menu-item-object-specialties menu-item-8197"><a href="Full-Mouth-Rehabilitation.php" class="a">Full Mouth Rehabilitation</a></li>
	<li id="menu-item-8003" class="menu-item menu-item-type-post_type menu-item-object-specialties menu-item-8003"><a href="Flap-Surgery-Gum-Treatments.php" class="a">Flap Surgery and Gum Treatment</a></li>
	<li id="menu-item-7257" class="menu-item menu-item-type-post_type menu-item-object-specialties menu-item-7257"><a href="Wisdom-Tooth-Extraction.php" class="a">Wisdom tooth Extraction</a></li>
	<li id="menu-item-7359" class="menu-item menu-item-type-post_type menu-item-object-specialties menu-item-7257"><a href="Teeth-Whitening.php" class="a">Tooth Whitening</a></li>
	</ul>
</li>

<li id="menu-item-11888" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11888"><a href="ourdoctors.php" class="a">Our Doctors</a></li>
<li id="menu-item-14145" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14145"><a href="careers.php" class="a">Careers</a></li>
<li id="menu-item-8073" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8073"><a href="testimonials.php" class="a">REVIEW</a></li>
<li id="menu-item-8074" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8073"><a class="a" style="cursor:pointer">OUR CLINIC</a>
	<ul class="sub-menu">
	<li id="menu-item-4811" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4817"><a href="dentist-near-me-akurdi-nigdi-pradhikaran.php" class="a">AKURDI BRANCH</a></li>
	<li id="menu-item-4812" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4817"><a href="dentist-near-me-wakad-hinjewadi-dange-chowk.php" class="a">WAKAD BRANCH</a></li>
	<li id="menu-item-13791" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13797"><a href="best-dentist-in-baner-pune.php" class="a">BANER BRANCH</a></li>
	<li id="menu-item-13792" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13797"><a href="best-dentist-in-pimple-saudagar.php" class="a">PIMPLE SAUDAGAR BRANCH</a></li>
	</ul>
</li>
</ul></div> <div class="mobile-nav">
<ul>
<li class="menu-item "><a href="about-us.php" class="a">About us</a></li>

<li class="menu-item "><a href="careers.php" class="a">CAREER</a></li>
<li class="menu-item "><a href="contact-us.php" class="a">Contact us</a></li>
</ul>
</div>
</div>
</div>
<p href="" title="Book an appointment" class="book-btn toggle1 display" style="cursor:pointer;margin-top:0px;">
<i class="fa fa-calendar" aria-hidden="true"></i> <samp>book an <span>appointment</span></samp></p>
</div>

<div class="number-mbl toggle1">
   <div class="toggle1" style="cursor:pointer; padding-bottom:-20px;"></div><i class="fa fa-calendar" style="margin-left:40%;font-size:28px"></i>
   <p style="margin-bottom:0rem;font-size:12px!important;">Book &nbsp; Appointment</p>
</div>
</div>
</div>
<!--<div class="head-gray">
<ul>
<li><p href="" title="Book an appointment" class="book-btn toggle1" style="cursor:pointer">
<i class="fa fa-calendar" aria-hidden="true"></i> <samp>book an <span>appointment</span></samp></p></li></ul>
<!--<li><a href="javascript:void(0);" class="click-form"><strong><img src="https://clovedental.in/wp-content/themes/clove-child/images/ico_callback.png" alt="dentist nearby" width="20" height="20"></strong><span>Get callback</span></a></li>
</div>-->
</div>







