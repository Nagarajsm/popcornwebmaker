<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/popcorn.css">
<!--  out git -->
<script type="text/javascript">

function loadvideofile(){
	var finename = document.getElementById('txtarea').value;
	document.getElementById('videotag').src=finename;
}
</script>


</head>
  <body>

  		<div class="topsection">
  		</div>

  		<div class="bodysection">
  			<div class="playersection">
  				<div class="player">
  					<div id="vvv" class="insideplayer">
  					<video id="videotag" loop controls src="" style="width:100%;height:100%;visibility:none;">
  					
  					</video>
  					</div>
  				</div>
    		</div>
    		
    		<div class="leftmenusection">
    			<div class="tabsection">
    				<ul class="tabs">
				 		<li><a href="">Media</a></li>
				 		<li><a href=""></a></li>
				 		<li><a href=""></a></li>
				 		
 					</ul>	
    			</div>

    			<div>
    				<h4 id="linktext">Paste a link from YouTube, SoundCloud, Vimeo or an HTML5 video<h4>
    					
    					<TEXTAREA  id="txtarea">http://ads.brizztv.com/movies/1.webm</TEXTAREA>
    					<br><br><br>
    					<input id="loadbtn" type="button" name="Load" value="Load Clip" onClick="loadvideofile();"/> 
    			</div>
    			
				
    		</div>
  		</div>
    	
  </body>
</html>
