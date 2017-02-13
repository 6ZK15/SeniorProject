<?php
if(isset($_POST['submit'])) 
{

$message=
'Full Name:	'.$_POST['fullname'].'<br />
Subject:	'.$_POST['subject'].'<br />
Phone:	'.$_POST['phone'].'<br />
Email:	'.$_POST['emailid'].'<br />
Comments:	'.$_POST['comments'].'
';
    require "class.phpmailer.php"; //include phpmailer class
	

 
    // Instantiate Class  
    $mail = new PHPMailer();  
      
    // Set up SMTP  
    $mail->IsSMTP();                // Sets up a SMTP connection  
    $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization    
    $mail->SMTPSecure = "ssl";      // Connect using a TLS connection  
    $mail->Host = "smtp.gmail.com";  //Gmail SMTP server address
    $mail->Port = 465;  //Gmail SMTP port
    $mail->Encoding = '7bit';
    
    // Authentication  
    $mail->Username   = "ejd1321@jagmail.southalabama.edu"; // Your full Gmail address
    $mail->Password   = "223vyhap64"; // Your Gmail password
      
    // Compose
    $mail->SetFrom($_POST['emailid'], $_POST['fullname']);
    $mail->AddReplyTo($_POST['emailid'], $_POST['fullname']);
    $mail->Subject = "New Contact Form Enquiry";      // Subject (which isn't required)  
    $mail->MsgHTML($message);
 
    // Send To  
    $mail->AddAddress("ejd1321@jagmail.southalabama.edu", "Recipient Eric"); // Where to send it - Recipient
    $result = $mail->Send();		// Send!  
	$message = $result ? 'Successfully Sent!' : 'Sending Failed!';      
	unset($mail);

}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html"charset="utf-8">
<title>Zeta Kappa Ques</title>
<link rel = "stylesheet" href = "blueberry.css">
<style type = "text/css">
    {
        margin: 0;
        border: 0;
        padding:0;
        
    }
    
    body
    {
        background-image:linear-gradient(to bottom, #B4B00A, #3F0274);
        background-image:("/Users/QreamOfTheQrop/Documents/Pictures/omegaBackground.jpg");
        color:#BA9E06;
        margin:0;

    }
    
    p{
        padding: 1%
    }
    
    img
    {
        text-align: center;
        max-width: 100%
        height:auto;
        width:auto;
    }
    
    a
    {
        color:#FFF;
        text-decoration: none;
        font-weight: bold;
    }
    
    a:hover
    {
        color:rebeccapurple;
        text-decoration: underline;
    }
    
    header img
    {
        float:right;    
    }
    
    header
    {
        background:#7D00E5;
        width:100%;
        height:50px;
        margin-top:0;
        opacity: .80;
    }
    
    h1
    {
	margin:0;
    text-align:center;
	border-radius:15px 15px 15px 15px;
	text-shadow:1px 1px 1px;
    }
    #doc { margin:0; }
#content {
	margin:;
	min-width: 740px;
	max-width: 1140px;
}
.blueberry { max-width: 960px; }
    
    nav{
	background-color:#B4B00A; /* Shade of blue */
	padding:0px 0px;
	margin:0px;
    position:static;
    z-index: 99;

}
nav a{
	text-decoration:none;
	
}
nav ul{
    line-height:30px;
}
nav li{
	/*margin:0;
	padding:0;*/
	list-style-type:none;
	float:left;
	position:relative;
	display:inline;
}


nav li a:hover{
	background-color:#5F9EA0; /* CadetBlue */
	color:#FFFFFF; /* White */
}

nav ul li a{
	text-align:center;
	height:30px;
	width:125px;
	display:block;
	color:#FFFFFF;
	margin:0;
	padding:0;
}

/* Hide sublist */
nav ul ul{
	position:absolute;
	margin:0;
	padding:0;
	display:none;
    z-index: 99;
}
/* Display sublist when hovering */
nav li:hover ul{
	display:block;
	position:absolute;
	background-color:purple; /* Red */
}

nav > ul {margin: 0}

.blueberry
 {
     max-width:500px;
     display: inline-block;
        
 }

#wrapper{
	width:90%;
	margin-left:auto;
	margin-right:auto;
    background-color: black;
    }

.twitter
    {
        float:left;
    }
.instagram
    {
        float:right;
    }
.slides
    {
        text-align: center;
        
    }
h2
    {
        text-align: center;
        font-size: 30pt;
        border-radius:15px 15px 15px 15px;
	   text-shadow:1px 1px 1px;
    }

#connect 
    {
        margin:auto;
        text-align: center;
    }
    
.left
    .{
        text-align: center;
        left: auto;
        right:auto;
    }
 
    
</style>
<!---Insert Jquery libraries from jquery.com -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src= "http://code.jquery.com/jquery-1.9.0.js"></script>
<script src= "http://code.jquery.com/jquery-migrate-1.2.1.js"></script>
<!--Insert jquery for the slideshow -->
<script src="js/jquery.cycle2.min.js"></script>
<script src="js/jquery-2.2.2.min.js"></script>
<script src="js/jquery.blueberry.js"></script>
<!--Insert Jquery for twitter --->
<script async src="http://platform.twitter.com/widgets.js" charset="utf-8"></script>

</head>
    
<body>
<div id ="wrapper">
    
<header>
<img src ="../zksite/images/OmegaShield.gif" height="50" width ="8">
<h1>FAQ's</h1>
</header>


    <!--Navigation Screen--->
<nav>
<ul>
	<li><a href="index.html">Home</a></li> &nbsp;
	<li><a href="">About Omega</a>
		<ul>
			<li><a href="founders.html">Founders</a></li>
			<li><a href="famousOmegas.html">Famous Omegas</a></li>
            <li><a href ="famousPoems.html">Famous Poems</a></li>
            <li><a href ="mandatedPrograms.html">Programs</a></li>
            <li><a href ="http://www.oppf.org/">IHQ Website</a></li>
        </ul>
	</li>	
    <li><a href="">About ZK</a>
		<ul>
			<li><a href="zkHistory.html">History</a></li>
            <li><a href="officers.html">Officers</a></li>
			<li><a href="zkAccomplishments.html">Accomplishments</a>
		</ul>
	</li>
    <li><a href="events.php">Events</a></li>
	<li><a href="gallery.html">Photo Gallery</a></li>
    <li><a href="questions.php">FAQs</a></li>
    
</ul>
</nav>
<h2><b><u>Frequently Asked Questions</u></b></h2>
</head>
<body>
    <b><p>These are the most Frequently asked questions. If you haven any other qustions, fill out the contact form at the bottom of the page</p></b>
<p>Q)What is a fraternity?<br>
A) A fraternity is an organization of men bound together by friendship, knowledge, brotherhood, common goals and aspirations. Omega Psi Phi is a unique group of men that encourage high standards; community service and assist in the building of character and leadership development among men. Members of Omega share a common foundation comradeship that last a lifetime.
<br>
<br>

Q) What are the advantages of joining Omega Psi Phi? 
<br>
A) Omega Psi Phi does not seek members; quality men seek Omega Psi Phi. A man who successfully completes the membership selection process will immediately have access to a brotherhood of men who share similar ideals and aspirations. Those who seek admission will learn the history of the fraternity from a historical perspective, written test and personal accounts. 
<br>
<br>
Successful applicants will have a strong presence at the college, university or graduate chapter where they gain admission, but he will also become a part of an international organization known worldwide. 
<br>
<br>
Omega Psi Phi has more than 700 chapters with members engaged in various academic disciplines and professional endeavors. 
<br>
<br>

Q) What is the policy on hazing?
<br>
A) Omega Psi Phi Fraternity does not condone hazing in any form. 
<br>
<br>
The organizations of the National Pan-Hellenic Council, Inc. (NPHC) are committed to nurturing the ideals of fraternalism and sisterhood in an atmosphere of responsibility and respect. We are also committed to upholding the dignity and self-respect of all persons seeking membership therein. Hazing is contrary to this commitment and is prohibited by the rules of each NPHC organization. 
<br>
<br>
In 1990, the member organizations of the NPHC jointly agreed to disband pledging as a form of admission. At the dawn of a new millennium, we the members of the National Pan-Hellenic Council do hereby reaffirm our unequivocal opposition to hazing and those who seek to perpetuate it. Read Our Anti-Hazing statement here 
<br>
<br>

Q) Do you have to pay to become a member of Omega Psi Phi? 
<br>
A) There is an application fee for men who seek consideration for membership. The dues are applied to local, district and national operating expenses. A portion of the collected dues are allocated for community service, social functions and nationally mandated projects. 
<br>
<br>

Q) How much time is required? 
<br>
A) Chapter members typically attend monthly meetings and participate in committee assignments. Beyond these obligations the time commitment that one chooses to invest in the organization is at their own discretion. The majority of members enjoy the comradeship and they are eager to participate in chapter functions, fellowship with the brotherhood and become officers and accept committee assignments. 
<br>
<br>
Clearly, members will get out the fraternal association as much as they invest. 
<br>
<br>
Q) I'm interested in becoming an Omega Man, how do I go about joining?
<br>
A) The first thing an interested man should do who seeks admission into Omega is to get acquainted with the men who are already members of Omega Psi Phi. A candidate should inquire to an active member how the fraternity has served them, and also, how the active member has served Omega. Successful candidates should possess the principles of Manhood, Scholarship, Perseverance and Uplift. 
<br>
<br>
Community service should be an important element of the resume and the successful candidate must be able to obtain a character reference from an active member of Omega Psi Phi to sponsor the applicant's request for membership. 
<br>
<br>

Undergraduate candidates must also meet academics standards set by the International organization and the academic institution where they are enrolled
</p>
<br>
<br>
<p> If there are any more questions that you are curious about, fill out the FAQ form below and we will get back in contact with you</p>
<div style="margin: 100px auto 0;width: 300px;">
			<h3>Contact Form</h3>
			<form name="form1" id="form1" action="" method="post">
					<fieldset>
					  Name:<input type="text" name="fullname" placeholder="Full Name" />
					  <br />
					  Subject:<input type="text" name="subject" placeholder="Subject" />
					  <br />
					  Phone:<input type="text" name="phone" placeholder="Phone" />
					  <br />
					  Email:<input type="text" name="email" placeholder="Email" />
					  <br />
					  <textarea rows="4" cols="20" name="comments" placeholder="Comments"></textarea>
					  <br />
					  <input type="submit" name="submit" value="Send" />
					</fieldset>
			</form>
			<p><?php if(!empty($message)) echo $message;
			$nameErr = $addrErr = $emailErr = $howManyErr = $favFruitErr = "";
$name = $address = $email = $howMany = "";
$favFruit = array();

if(isset($_POST['submit']))  {
    if (empty($_POST["fullname"])) {
        $nameErr = "Missing";
    }
    else {
        $name = $_POST["fullname"];
    }

    if (empty($_POST["subject"])) {
        $addrErr = "Missing";
    }
    else {
        $address = $_POST["subject"];
    }

    if (empty($_POST["phone"]))  {
        $emailErr = "Missing";
    }
    else {
        $email = $_POST["phone"];
    }

    if (!isset($_POST["email"])) {
        $howManyErr = "You must select 1 option";
    }
    else {
        $howMany = $_POST["email"];
    }

    if (empty($_POST["comments"])) {
        $favFruitErr = "You must select 1 or more";
    }
    else {
        $favFruit = $_POST["fcomments"];
    }
}
			
			 ?></p>
            
       
		</div>
					
</body>
</html> 

  