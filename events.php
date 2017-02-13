<?php
//Include the event calendar functions file
include_once('functions.php');
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Zeta Kappa Ques</title>
<link rel = "stylesheet" href = "blueberry.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Include the stylesheet -->
    <link type="text/css" rel="stylesheet" href="style.css"/>
    <!-- Include the jQuery library -->
    <script src="jquery.min.js"></script>
</head>
<style type = "text/css">
    {
        margin: 0;
        border: 0;
        padding:0;
        
    }
    
    body
    {
        background-image:linear-gradient(to bottom, #3F0274, #B4B00A);
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
nav > ul {margin: 0}

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
<script>
    $(window).load(function)()(
    {
        $(.'blueberry').blueberry();
    )};
</script>
    
<body>

    
<header>
<img src ="../zksite/images/OmegaShield.gif" height = "50" width ="8">
<h1>Event Calendar</h1>
</header>


    <!--Navigation Screen--->
<nav>
<ul>
	<li><a href="home.html">Home</a></li> &nbsp;
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
    


    <!-- Display event calendar -->
    
<div id="calendar_div">
	<?php echo getCalender(); ?>
</div>
    </body>
</html>