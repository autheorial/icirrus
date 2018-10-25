<html>

<head>

<title>GYM / BAG</title>

<link rel="shortcut icon" type="image/x-icon" href="../../mball.ico" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="idk.js"></script>
<script type="text/javascript">// <![CDATA[
		function ShowHide(divId)
		{
		if(document.getElementById(divId).style.display == 'none')
		{
		document.getElementById(divId).style.display='block';
		}
		else
		{
		document.getElementById(divId).style.display = 'none';
		}
		}
	// ]]>
		
		function changeThis() {
    var div = document.getElementById('select').innerHTML;
    if (div === 'Select an item') {
        document.getElementById('select').innerHTML = "There's a time and place for everything! But not now.";
    } else {
        document.getElementById('select').innerHTML = "Select an item";
    }
}

function changeThat() {
    var div = document.getElementById('select').innerHTML;
    if (div === "There's a time and place for everything! But not now.") {
        document.getElementById('select').innerHTML = "Select an item";
    } else {
        document.getElementById('select').innerHTML = "Select an item";
    }
}
	</script>

<style type="text/css">

body{
	background: #fff;
}

#select{
	text-transform: uppercase;
	font: normal 100% 'Consolas';
	text-align: center;
	margin-bottom: 1em;
}

#container{
	width: 40em;
	margin: 12% auto;
	font: normal 100%/160% 'Consolas';
}

#openbag, #map{
	border: 5px double #000;
	padding: 15px;
	border-radius: 10px;
}

#openbag{
	text-transform: uppercase;
	width: 30%;
	margin: 0 auto;
	font-size: 120%;
}

#openbag ul{
	list-style-type: none;
	-webkit-padding-start: 0!important;
margin: 0;}

#openbag li a:link, #openbag li a:visited{
	color: #000;
	text-decoration: none;
}

#openbag li a:hover:before, #map li a:hover:before{
	content:"> ";
}

#map {
  display: none;
}

#map ul > li, #map ul > li li {
	text-transform: uppercase;
	list-style-type: none;
}

#map ul > li li li{
	text-transform: none;
}

a{
	color: #000;
	text-decoration: none;
}

a:hover{
	cursor: pointer;
}

#footer{
	text-align: center;
}

#footer a:link, #footer a:visited{
	color: #000;
	font: normal 80% 'Consolas';
	text-transform: uppercase;
	margin: 0 auto;
	letter-spacing: 2px;
}

#footer a:hover, #footer a:active{
	text-decoration: underline;
}

</style>

</head>

<body>

<div id="container">

<div id="select">Select an item</div>

<div id="content">

<div id="openbag"><ul><li><a onclick='changeThis()'>Bicycle</a></li>
<li><a href="javascript:void(0);" value="Click" onclick="switchVisible();changeThat()"/>Town Map</a></li>
<li><a href="/" title="(pretend this is a key item)">Masterball</a> x 1</li>
<li><a href="../">Close Bag</a></li></ul></div>


<div id="map">
<ul><li><a href="javascript:void(0);" value="Click" onclick="switchVisible();"/>Close Map</a></li>
<li><a onclick="javascript:ShowHide('ballin')">Masterball (index)
<ul class="mid" id="ballin" style="display: none;">
<li><a onclick="javascript:ShowHide('trainer')">Trainer</a>
<ul class="mid" id="trainer" style="display: none;">
<li>Ruby (2003)</li>
<li>Emerald (2006)</li>
<li>Diamond (2007)</li>
<li>Platinum (2009)</li>
<li>Fire Red (2011)</li>
<li>Heart Gold (2012)</li>
<li>Black (2011)</li>
<li>Black 2 (2012)</li>
<li>X (2013)</li>
<li>Y (2016)</li>
<li>Omega Ruby (2014)</li>
<li>Moon (2016)</li>
<li>Misc</li></ul></li>
<li><a onclick="javascript:ShowHide('gym')">Gym</a>
<ul class="mid" id="gym" style="display: none;">
<li><a onclick="javascript:ShowHide('fight')">FIGHT</a>
<ul class="mid" id="fight" style="display: none;"><li>Leader Alice would like to battle! (Cloyster)</li>
<li>Contact & 3DS Friend Code (Walrein)</li>
<li>Cliques (Ninetales)</li>
<li>Site Info (Mega Glalie)</li>
<li>Linkback Buttons (Aurorus)</li></ul></li>
<li>Bag (Site Map)</li>
<li>Pok&eacute;mon (Pokemon Go Log)</li>
<li>Run (Exits/Affiliates)</li></ul></li>
</li></ul>
</div>

</div>

</div>


</body>

</html>