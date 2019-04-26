<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="© 2019 Țigănuș Constantin Răzvan">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>another audio jquery plugin</title>
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet"> 
  <title>Document</title>
  <style type="text/css">
	p{font-family: 'Dancing Script', cursive;}
	.play{width:36px;height:34px;padding:0;margin:0;font-size:20px;color:green;font-weight:bold;} .pause{width:36px;height:34px;padding:0;margin:0;font-size:20px;color:red;font-weight:bold;}
  </style>
  <!-- these are multiple choises to jquery or zepto (local or from cdns) -->

<!-- 

<script src="../js/zepto.min.js"></script>
 <script src="../js/jquery.js"></script>  

-->


<!-- 
<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.0.js"></script>

<script src="https://code.jquery.com/jquery-3.4.0.slim.js"></script>
<script src="https://code.jquery.com/jquery-3.4.0.slim.min.js"></script>

-->

   
<script src="https://cdnjs.cloudflare.com/ajax/libs/zepto/1.2.0/zepto.min.js"></script>

<!--



<script src="https://cdnjs.cloudflare.com/ajax/libs/zepto/1.2.0/zepto.js"></script>


 -->



 <!-- 
 
 
 -->


<script src="simpleaudiobutton.js"></script>
 </head>
 <body>
  


<p id="player">Song 1 "Voiceless"&nbsp;</p><br>

<p id="player2">Song 2 "Take-the-air"&nbsp;</p> <br>

<p id="player3">Song 3 "We Live On One Planet"&nbsp;</p> <br>

Thanks for online songs to <a href="https://icons8.com/">icons8.com</a>

<script>
if (typeof($) !== 'undefined') $(document).ready(function(){
	$( '#player' ).player({

		src: "https://assets-music.icons8.com/free-download/304/e2999994-285d-42b7-ba45-46a537a87de0.mp3?filename=voiceless.mp3"
	});
	$( '#player2' ).player({
		 src:"https://assets-music.icons8.com/free-download/355/a94dfcc9-057c-48c3-9339-709aed600ebc.mp3?filename=take-the-air.mp3"
		//src: "take-the-air.mp3"
	});
	$( '#player3' ).player({
		src: "https://assets-music.icons8.com/free-download/658/51f6ef85-3d5c-4fa9-af5c-851c8263e0c2.mp3?filename=we-live-on-one-planet.mp3"
	});
});
</script>
 </body>
</html>
