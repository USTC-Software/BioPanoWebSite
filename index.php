<?php
require_once("head.html")
?>
<script type="text/javascript">
function checkOS(){
    var OSName="unknownOS";
    if (navigator.appVersion.indexOf("Win") != -1) OSName = "win";
    if (navigator.appVersion.indexOf("Mac") != -1) OSName = "mac";
    if (navigator.appVersion.indexOf("Linux") != -1 || navigator.userAgent.indexOf("Linux") != -1 || navigator.userAgent.indexOf("Unix") != -1) OSName = "linux";
    return OSName;
}

function downloadFile(OSName) {
    if(OSName == "win")
    	url = "http://www.biopano.org/biopano.exe";
    else// if(OSName == "Mac")
    	url = "http://www.biopano.org/biopano.air";
    window.open(url);
}

</script>
<style type="text/css">
  .wiki{
    background-color: #434343;
  }  
</style>


<div style="position: relative;">
	<!--
	<img src="http://2014.igem.org/wiki/image/5/50/2014ustc-MainBackgroundback2.jpg" alt="" class="bg" style="width:100%;max-width:100%">
	-->
	<img src="img/2014ustc-MainBackgroundback2.jpg" alt="" class="bg" style="width:100%;max-width:100%">
	
</div>

<div style="position: relative;">
	<img src="img/page1.jpg" alt="" class="bg" style="width:100%;max-width:100%">
</div>

<div style="position: relative;">
	<img src="img/page2.jpg" alt="" class="bg" style="width:100%;max-width:100%">
</div>

<div style="position: relative;">
	<img src="img/page3.jpg" alt="" class="bg" style="width:100%;max-width:100%">
</div>

<div style="position: relative;">
	<img src="img/page4.jpg" alt="" class="bg" style="width:100%;max-width:100%">
</div>

<div style="position: relative;">
	<img src="img/page5.jpg" alt="" class="bg" style="width:100%;max-width:100%">
</div>



<div style="position: relative;">
	<img src="img/page7.jpg" alt="" class="bg" style="width:100%;max-width:100%">
</div>

<div style="position: relative; color: #DFDFDF;background-color: #DFDFDF;" class="text-center" >
	<div  class="button" onclick="downloadFile(checkOS());" style="margin: 1em 0;color:#fff;font-size:3em;background-color: #9DACBD;">
		Download Now !
	</div>
</div>

<div class="clear"></div>
      
<?php

require_once("foot.html")
?>