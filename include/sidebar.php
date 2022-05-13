
	
	<style>
	body{
  margin:0;
  padding:0;
  font-family:sans-serif;
}
 
.content{
  padding:50px 100px;
}
.content h2{
  padding:0;
  margin:0 0 20px;
  font-size:30px;
}
.content p{
  font-size:18px;
}
.sidebar-contact{
  position:fixed;
  top:50%;
  left:-350px;
  transform:translateY(-50%);
  width:350px;
  height:auto;
  padding:40px;
  background:#fff;
  box-shadow: 0 20px 50px rgba(0,0,0,.5);
  box-sizing:border-box;
  transition:0.5s;
}
.sidebar-contact.active{
  left:0;
}
.sidebar-contact input,
.sidebar-contact select,
.sidebar-contact textarea{
  width:100%;
  height:36px;
  padding:5px;
  margin-bottom:10px;
  box-sizing:border-box;
  border:1px solid rgba(0,0,0,.5);
  outline:none;
}
.sidebar-contact h2{
  margin:0 0 20px;
  padding:0;
}
.sidebar-contact textarea{
  height:60px;
  resize:none;
}
.sidebar-contact input[type="submit"]{
  background:#00bcd4;
  color:#fff;
  cursor:pointer;
  border:none;
  font-size:18px;
}

.toggle.active:before{
  content:'\f00d';
  font-family:fontAwesome;
  font-size:18px;
  color:#fff;
  position:absolute;
  height:48px;
  width:48px;
  text-align:center;
  cursor:pointer;
  background:#f00;
  top:0;
  right:-48px;
  line-height:48px;
}
@media(max-width:1024px)
{
    .toggle.active:before{
        top:-40px;
    }
  .sidebar-contact{
    width:100%;
    height:60%;
    left:-100%;
  }
  .sidebar-contact .toggle{
    top:50%;
    transform:translateY(-50%);
    transition:0.5s;
  }
  .sidebar-contact.active{
      top:300px;
}
  .sidebar-contact.active .toggle
  {
    top:0;
    right:0;
    transform:translateY(0);
  }
  .scroll{
    width:100%;
    height:100%;
    overflow-y:auto;
  }
  .content{
    padding:50px 50px;
  }
  .hidepop{
      display:none;
  }
}
	</style>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<?php
if(isset($_POST['submit'])){
$name= $_POST['name'];
$PhoneNumber = $_POST['PhoneNumber'];
$branch = $_POST['branch'];
$comments= $_POST['comments'];
$date= $_POST['date'];

// configure
$from = 'Enquiry <maheshniwate10@gmail.com>';
$sendTo = 'Enquiry <maheshniwate10@gmail.com>';
$subject = 'Book an Appointment Form';
$fields = array('name' => 'name', 'PhoneNumber' => 'PhoneNumber', 'branch' => 'branch', 'comments' => 'comments', 'date' => 'date'); // array variable name => Text to appear in email
$okMessage = 'Thank You';
$errorMessage = 'There was an error while submitting the form. Please try again later';

// let's do the sending

try
{
    $emailText = "You have new message from contact form\n=============================\n";

    foreach ($_POST as $key => $value) {

        if (isset($fields[$key])) {
            $emailText .= "$fields[$key]: $value\n";
        }
    }

    mail($sendTo, $subject, $emailText, "From: " . $from);
    echo "<script>window.location.href='thankyou.php';</script>";
        //$responseArray = array('type' => 'success', 'message' => $okMessage);
}
catch (\Exception $e)
{
    
    echo "<script>alert('$errorMessage');</script>";
    //$responseArray = array('type' => 'danger', 'message' => $errorMessage);
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
</head>


<body>
    
	<div class="sidebar-contact pb-10"style="z-index:9999999999999999;">
    <div class="toggle" onclick="div_hide()"></div>
    <h2>Book An Appointment</h2>
    <div class="scroll">
    <form  method="post" >
      <input type="text" name="name" placeholder="Name" required>
      <input type="text" name="PhoneNumber" minlength="10" maxlength="10" placeholder="Phone Number" required>
      <select class="" name="branch">
          <option selected>Select Branch</option>
          <option value="Akurdi Branch">Akurdi Branch</option>
          <option value="Wakad Branch">Wakad Branch</option>
          <option value="Baner Branch">Baner Branch</option>
          <option value="Pimple Saudagar Branch">Pimple Saudagar Branch</option>
        </select>
      <textarea name="comments" placeholder="Message here.." required></textarea>
      <input name="date" class="form-control input-group date input-group-addon" type="text" id="VisitorDtime2" value="<?php date_default_timezone_set('Asia/Calcutta'); echo date("Y-m-d H:i:s"); ?>" style="padding-left: 73px;" required>
                        
    
      <input type="submit" name="submit" value="Make Your Appointment" required >
    </form>
  
    </div>
  </div>
  
  
  
  
<style>


.element.style {
    padding-left: 82px;
}

.form-control {
    display: block;
    width: 100%;
    font-size: 1rem;
    font-weight: 500;
    line-height: 1.5;
    color: rgb(33, 37, 41);
    background-color: rgb(255, 255, 255);
    background-clip: padding-box;
    appearance: none;
    padding: 0.375rem 0.75rem;
    border-width: 1px;
    border-style: solid;
    border-color: rgb(206, 212, 218);
    border-image: initial;
    border-radius: 0.25rem;
    transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
}


</style>  



	<script>
	$(document).ready(function(){
  $('.toggle1').click(function(){
    $('.sidebar-contact').toggleClass('active');
    $('.sidebar-contact').css('display','block');
    $('.toggle').toggleClass('active');
    $('.orange').css('display','none');
  });
  $('.toggle').click(function(){
          $('.sidebar-contact').fadeOut();
          $('.orange').css('display','block');
  })
})
</script>


