<html>
<head>

<title>MASTERBALL</title>
<meta name="viewport" content="initial-scale=1.0">
<link rel="shortcut icon" type="image/x-icon" href="mball.ico" />

<style type="text/css">

body{
	background: url('bg.png') repeat-x top;
	margin: 0;
}

#left, #right{
	width: 210px;
	height: 800px;
	position: absolute;
	top: 0;
}

#left{
	left: 0;
	background: url('left.png');
	z-index: -1;
}

#right{
	right: 0;
	background: url('right.png');
	z-index: -1;
}

#center{
	background: url('button.png');
	left: 50%;
	top: 474px;
transform: translateX(-50%);
position: absolute;
width: 197px;
height: 202px;
}

#center:hover{
	background: url('button002.png');
}

#header{
	margin: 2.5em auto;
	text-align: center;
	color: #fff;
	font: normal 5em 'Futura', 'Century Gothic', sans-serif;
	letter-spacing: 3px;
	text-transform: uppercase;
}

#navleft{
	position: absolute;
	left: 11.5em;
	top: 537px;
	float: left;
}

#navright{
	position: absolute;
	right: 8.5em;
	top: 537px;
	float: right;
}

#navleft ul, #navright ul{
	-webkit-padding-start: 0!important;
}

#navleft ul li, #navright ul li{
	display: inline;
	list-style-type: none;
	padding-right: 5em;
}

#navleft ul li a:link, #navleft ul li a:visited, #navright ul li a:link, #navright ul li a:visited{
	text-decoration: none;
	color: #fff;
	font: normal 230% 'Futura', 'Century Gothic', sans-serif;
	text-transform: uppercase;
	letter-spacing: 3px;
}

#navleft a:hover, #navleft a:active, #navright a:hover, #navright a:active{
	color: #f30000!important;
}

#error{
display: none;
}

/* tablets and landscape */

@media only screen and (max-width: 960px) and (min-width: 0px) {

html {
-webkit-text-size-adjust: none;
}

#header, #left, #right, #navleft, #navright{
display: none;
}

body{
	background: #fff;
	margin: 0;
	background: url('buttbg.png') repeat-x;
}

#error{
	margin: 1em auto;
	font: normal 150%/160% 'Futura';
	padding: 3em 0;
	text-align: center;
	display: block;
}

.text{
	width: 90%;
	margin: 0 auto;
	color: #c8413d;
}

#center{
	background: url('butt.png');
	left: 50%;
	top: 262px;
	transform: translateX(-50%);
	position: absolute;
	width: 228px;
	height: 225px;
}

#center:hover{
	background: url('butt.png');
}

}


</style>

</head>

<body>

<div id="header">MASTERBALL</div>


<div id="left"></div>
<div id="right"></div>
<a href="/"><div id="center"></div></a>

<div id="navleft">
<ul>
	<li><a href="/trainer">Trainer</a></li>
	</ul>
	</div>

<div id="navright">
<ul>
	<li><a href="/gym">Gym</a></li>
	<!-- <li><a href="/faint">Someone's PC</a></li> -->
	</ul>
	</div>

<div id="error"><div class="text">This site is not yet responsive! Please view this website on your PC.</div></div>


</body>
</html>