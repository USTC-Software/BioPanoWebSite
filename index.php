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
	<img src="http://2014.igem.org/wiki/images/5/50/2014ustc-MainBackgroundback2.jpg" alt="" class="bg" style="width:100%;max-width:100%">
	
</div>

<div style="position: relative;">
	<img src="http://2014.igem.org/wiki/images/1/1a/2014ustc-page1.jpg" alt="" class="bg" style="width:100%;max-width:100%">
</div>

<div style="position: relative;">
	<img src="http://2014.igem.org/wiki/images/a/a5/2014ustc-page2.jpg" alt="" class="bg" style="width:100%;max-width:100%">
</div>

<div style="position: relative;">
	<img src="http://2014.igem.org/wiki/images/a/a3/2014ustc-page3.jpg" alt="" class="bg" style="width:100%;max-width:100%">
</div>

<div style="position: relative;">
	<img src="http://2014.igem.org/wiki/images/5/54/2014ustc-Page4.jpg" alt="" class="bg" style="width:100%;max-width:100%">
</div>

<div style="position: relative;">
	<img src="http://2014.igem.org/wiki/images/5/5f/2014ustc-page5.jpg" alt="" class="bg" style="width:100%;max-width:100%">
</div>



<div style="position: relative;">
	<img src="http://2014.igem.org/wiki/images/2/20/2014ustc-page7.jpg" alt="" class="bg" style="width:100%;max-width:100%">
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