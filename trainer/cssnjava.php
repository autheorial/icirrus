<script type="text/javascript"
src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
<script>$(document).ready(function() {

    //

//When you click on a link with class of poplight and the href starts with a # 

$('a.poplight[href^=#]').click(function() {
    var popID = $(this).attr('rel'); //Get Popup Name
    var popURL = $(this).attr('href'); //Get Popup href to define size

    //Pull Query & Variables from href URL
    var query= popURL.split('?');
    var dim= query[1].split('&');
    var popWidth = dim[0].split('=')[1]; //Gets the first query string value

    //Fade in the Popup and add close button
    $('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close">Close</a>');

    //Define margin for center alignment (vertical   horizontal) - we add 50px to the height/width to accomodate for the padding  and border width defined in the css
    var popMargTop = ($('#' + popID).height() + 50) / 2;
    var popMargLeft = ($('#' + popID).width() + 80) / 2;

    //Apply Margin to Popup
    $('#' + popID).css({
        'margin-top' : -popMargTop,
        'margin-left' : -popMargLeft
    });

    //Fade in Background
    $('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
    $('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer - .css({'filter' : 'alpha(opacity=80)'}) is used to fix the IE Bug on fading transparencies 
    return false;
});

//Close Popups and Fade Layer

$('a.close, #fade').live('click', function() { //When clicking on the close or fade layer...
    $('#fade , .popup_block').fadeOut(function() {
    $('#fade, a.close').remove();  //fade them both out
    });
    return false;
});

});
</script>

<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="../mball.ico" />
<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i" rel="stylesheet">

<style type="text/css">

@font-face {
    font-family: Futura;
    src: url('http://aroceu.com/x/futura.ttf') format(futura.ttf);
}

body{
	font: normal 100%/160% 'Futura';
	color: #fff;
	margin: 0;
	padding: 0;
	background-color: #b0dde8;

}

#top{
	width: 100%;
	padding: 2.5em 0 1.5em;
}

.container{
	width: 50em;
	margin: 0 auto 2.5em;
}

#header{
	font: italic 400% 'Futura';
	float: left;
	width: 60%;
	margin: 1em 0 0.5em;
}

b, #header a:link, #header a:visited{
	color: #82b1ca;
	font-family: 'Futura';
        text-decoration: none;
}

.poplight a:hover, b:hover{
color: #fff!important;
text-shadow: 0.05em 0.05em 0 #82b1ca;
}

#icon{
	width: 40%;
	float: right;
    margin: 2.2em 0 2em;
}

#icon img{
	width: 300px;
	height: 300px;
}
    
    ul.center{
        list-style-type:none;
        -webkit-padding-start: 0!important;
        -moz-padding-start: 0!important;
        text-align: center;
    }

ul#games{
	clear: both;
	list-style-type: none;
	-webkit-padding-start: 0!important;
    -moz-padding-start: 0!important;
	padding-top: 2.5em;
}

ul#games li{
	display: inline-block;
	width: 24%;
	text-align: center;
	margin: 5px 0;
}

ul#games li a:link, ul#games li a:visited, ul.center li a:link, ul.center li a:visited{
	text-decoration: none;
	text-transform: uppercase;
	color: #fff;
	font: normal 130% 'Futura';
	padding: 5px;
}

.ruby:hover{
	background: #CE2D25;
}

.emerald:hover{
	background: #3A947A;
}

.firered:hover{
	background: #DE663D;
}

.diamond:hover{
	background: #50A0AD;
}

.platinum:hover{
	background: #666675;
}

.heartgold:hover{
	background: #DAB648;
}

.black:hover{
	background: #000;
}

.black2:hover{
	color: #000!important;
	background: #fff;
}

.x:hover{
	background: #27A4BC;
}

.y:hover{
        background:#374768;
}

.omega:hover{
	background: #8f1a1a;
}

.moon:hover{
	background: #895FA1;
}

.misc:hover{
	background: #ffb83d;
}
    
    .shiny:hover{
        background: #ededed;
    }

i{
	color: #82b1ca;
	text-transform: uppercase;
}

mball{
	color: #7E5FC6;
	text-transform: uppercase;
	font-family: 'Futura';
}

ruby{
	color: #CE2D25;
	font-weight: bold;
}

grass{
	color: #fff;
	background: #71C049;
	padding: 2px 3px;
	margin: 0 2px;
	text-transform: uppercase;
	font-size: 85%;
}

fairy{
	color: #fff;
	background: #E385E3;
	padding: 2px 3px;
	margin: 0 2px;
	text-transform: uppercase;
	font-size: 85%;
}

#footer{
text-align: center;
margin-top: 5em;
margin-bottom: 1em;
}


#fade {
	display: none;
	background: #b0dde8;
	position: fixed;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	opacity: 100%;
	z-index: 9999;
}

.popup_block{
	display: none;
	background: #fff;
        font: normal 95%/160% 'Lato', 'Century Gothic', sans-serif;
        color: #555;
        box-shadow: 0.5em 0.5em 0em #82b1ca;
	float: left;
	position: fixed;
	top: 50%;
	left: 51%;
	z-index: 99999;
}

.close{
position: absolute;
border: none;
    font: normal 85% 'Futura', 'Century Gothic', monospace;
    background: none;
        bottom: -30px;
    right: 0px;
    text-transform: uppercase;
    color:#fff;
    text-shadow: 0.08em 0.08em 0 #82b1ca;
}

a.close:link, a.close:visited{
text-decoration: none;
}

a.close:hover, a.close:active{
color: #82b1ca;
}

*html #fade {
	position: absolute;
}

*html .popup_block {
	position: absolute;
}

.left, .right{width: 48%;}
.left{ float: left;}
.right{ float: right;}

#ot{
background: #82b1ca;
    padding: 2em;
    color: #fff;
    overflow: hidden;
font: normal 95%/160% 'Consolas', monospace;
	padding: 20px;
}

#ot b{
color: #b0dde8;
font-family: 'Consolas';
}

#trainerinfo{
	padding: 10px 20px;
}

.party{
float: right;
    padding-right: 29px;
    margin-top: -8px;
}

.trainerimg{
float: left;
padding: 10px;
}

</style>
