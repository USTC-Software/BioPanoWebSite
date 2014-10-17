<?php
require_once("head.html")
?>
<style type="text/css">
  .wiki{
    background-color: #e9f0f5;
  }  
</style>


<div style="position: relative;">
<img src="img/MainBackgroundback2.jpg" alt="" class="bg" style="width:100%;max-width:100%">
<!-- 
<img class="igem1 animated fadeInUpBig" src="img/1.png" style="width:26%;position: absolute; left:3.7em; bottom:0;">
<img class="igem2 animated fadeInUpBig" src="img/2.png" style="width:53%;position: absolute; left:26%; bottom:0;">
<img class="igem3 animated fadeInUpBig" src="img/3.png" style="width:28%;position: absolute; right:3.7em; bottom:0;">
 -->
</div>

 <div style="position: relative;">
<img src="img/page1.jpg" alt="" class="bg" style="width:100%;max-width:100%">
<!-- 
<img class="igem1 animated fadeInUpBig" src="img/1.png" style="width:26%;position: absolute; left:3.7em; bottom:0;">
<img class="igem2 animated fadeInUpBig" src="img/2.png" style="width:53%;position: absolute; left:26%; bottom:0;">
<img class="igem3 animated fadeInUpBig" src="img/3.png" style="width:28%;position: absolute; right:3.7em; bottom:0;">
 -->
</div>
<!--
<section id="features-hero">

<div class="row">
<div class="small-12 columns">

</div>
</div>
</section>
-->
<!--
<section id="features-hero">
<div class="row">
<div class="small-12 columns">
  
<img src="img/b1.jpg" alt="" style="width:126px;height:126px;">

<span style="font-size: 4.5rem;color: rgb(38,64,84);font-family: 'Roboto Condensed', sans-serif;padding-left: 11px;position: relative;top: 26px;">BioPano 3</span>

<h2 style="color:rgb(94,94,94);font-family: 'Noto Sans', sans-serif;margin-top:20px;font-weight: normal;">Draw a biological panorama for you.</h2>
<h4 style="color:rgb(58,58,58);font-family: 'Noto Sans', sans-serif;">Specifically for biological research, multifunctional cooperative software platform aimed at better visualisation of biological relationships.</h4>

</div>
</div>

</section>
-->

<div class="clear"></div>
<div class="main-box">
<section id="main-content">
  <div class="row">
      <div class="medium-12 medium-centered columns centered-text">
        
         <h4 class="subheader" style="margin:40px">
           If you want to inject several genes into some biological body, you can use Biopano to estimate the impact of host metabolism net on exogenous genetic expression.
         </h4>
         <div class="underline"></div>
        
      </div>
  </div>
</section>
<section id="cd-timeline" class="cd-container">
    <div class="cd-timeline-block">
      <div class="cd-timeline-img cd-picture">
        <img src="img/cd-icon-picture.svg" alt="Picture">
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <h2>Sequences Alignment</h2>
        <img src="/img/pg1.png">
        <p>
       First you can find E.coli K-12 gene that shares deep similar with the injected sequence by Blast method. We have reason to believe that the injected genes are probably regulated in the same way in the host body.
        </p>
        <a href="#0" class="cd-read-more">Read more</a>

       <!-- <span class="cd-date">Jan 14</span>-->
      </div> <!-- cd-timeline-content -->

    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block top-15" >
      <div class="cd-timeline-img cd-movie">
        <img src="img/cd-icon-picture.svg" alt="Movie">
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <h2>Expand</h2>
        <img src="/img/pg2.png">
        <p>When you have already found highly similar gene of the target body, you can use “Expand” to dynamically show the network and find the role the genes plays in the biological metabolism network.</p>
        <a href="#0" class="cd-read-more">Read more</a>
        <!--
        <span class="cd-date">Jan 18</span>
        -->
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block top-15" >
      <div class="cd-timeline-img cd-picture">
        <img src="img/cd-icon-picture.svg" alt="Picture">
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <h2>Link Finder</h2>
        <img src="/img/pg3.png">
        <p>
         If you want to know about the links between two genes, you can select two nodes and find the k-shortest routes connecting them in the database.
        </p>
        <a href="#0" class="cd-read-more">Read more</a>
        
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block" >
      <div class="cd-timeline-img cd-location">
        <img src="img/cd-icon-picture.svg" alt="Location">
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <h2>Details And Reference</h2>

        <p>You can double-click a node to see the detailed information of it. You can also read Papers through the network conveniently.</p>
        <a href="#0" class="cd-read-more">Read more</a>
        
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block top2-10" >
      <div class="cd-timeline-img cd-location">
        <img src="img/cd-icon-picture.svg" alt="Location">
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <h2>Cloud</h2>
        <img src="/img/pg5.png">
        <p>When you discover new regulation by literature or your own research, you can create a project to build a new network and upload it to our database to share with others</p>
        <a href="#0" class="cd-read-more">Read more</a>
       
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block top2-10" >
      <div class="cd-timeline-img cd-movie">
        <img src="img/cd-icon-location.svg" alt="Movie">
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <button style="button">Download Now!</button>
        
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->
  </section> <!-- cd-timeline -->
</div>
<?php

require_once("foot.html")
?>