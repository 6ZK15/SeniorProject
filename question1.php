
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
<script>
    $(window).load(function)()(
    {
        $(.'blueberry').blueberry();
    )};
</script>
</head>
    
<body>
<div id ="wrapper">
    
<header>
<img src ="/Users/QreamOfTheQrop/Documents/Pictures/OmegaShield.gif" height="50" width ="8">

<h1>FAQ's</h1>
</header>


    <!--Navigation Screen--->
<nav>
<ul>
	<li><a href="index.html">Home</a></li> &nbsp;
	<li><a href="aboutOmega.html">About Omega</a>
		<ul>
			<li><a href="founders.html">Founders</a></li>
			<li><a href="famousOmegas.html">Famous Omegas</a></li>
            <li><a href ="famousPoems.html">Famous Poems</a></li>
            <li><a href ="mandatedPrograms.html">Programs</a></li>
            <li><a href ="http://www.oppf.org/">IHQ Website</a></li>
        </ul>
	</li>	
    <li><a href="aboutZK.html">About ZK</a>
		<ul>
			<li><a href="zkHistory.html">History</a></li>
			<li><a href="zkLines.html">ZK Lines</a></li>
            <li><a href="officers.html">Officers</a></li>
			<li><a href="zkAccomplishments.html">Accomplishments</a>
		</ul>
	</li>
    <li><a href="Events.html">Events</a></li>
	<li><a href="gallery.html">Photo Gallery</a></li>
    <li><a href="questions.html">FAQs</a></li>
    
</ul>
</nav>
<title>Form submission</title>
</head>
<body>
<form method="post">
  Email: <input name="email" type="text" /><br />
  Subject: <input name="subject" type="text" /><br />
  Phone Number: <input name="number" type="text" /><br />
  Message:<br />
  <textarea name="comment" rows="15" cols="40"></textarea><br />
  <input type="submit" value="Submit" />
  </form>

</body>
</html> 
<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "ejd1321@jagmail.southalabama.edu";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];
  $number = $_REQUEST['number'};
  
  //send email
  mail($admin_email, "$subject", $comment, $number, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>