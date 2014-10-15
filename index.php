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
<img class="igem1 animated fadeInUpBig" src="img/1.png" style="width:26%;position: absolute; left:3.7em; bottom:0;">
<img class="igem2 animated fadeInUpBig" src="img/2.png" style="width:53%;position: absolute; left:26%; bottom:0;">
<img class="igem3 animated fadeInUpBig" src="img/3.png" style="width:28%;position: absolute; right:3.7em; bottom:0;">
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
        
         <h4 class="subheader" style="margin:40px">如果你正想将几个基因转入某个生物体中，你可以用我们的biopano来估计目标生物体自身调控网对转入的基因表达的影响。</h4>
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
        <h2>同源性</h2>
        <img src="/img/pg2.png">
        <p>

你可以先利用blast搜索该物种数据库中与导入基因同源性较高的基因，我们有理由相信导入基因很可能与他们在生物体中受到同样的调控作用。
        </p>
        <a href="#0" class="cd-read-more">Read more</a>

       <!-- <span class="cd-date">Jan 14</span>-->
      </div> <!-- cd-timeline-content -->

    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block top-15" >
      <div class="cd-timeline-img cd-movie">
        <img src="img/cd-icon-movie.svg" alt="Movie">
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <h2>Expand</h2>
        <img src="/img/pg3.png">
        <p>当你已经得到高度同源的目标生物体基因，你可以用动态展示网络的expand探索它在生物体内调控网的位置。</p>
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
        <h2>Link</h2>
        <img src="/img/pg2.png">
        <p>
          当你想了解导入基因与已有基因的关系时，你可能会用到k-short功能，你可以将选中两个点在数据库中寻找他们间前k短的连通路径
        </p>
        <a href="#0" class="cd-read-more">Read more</a>
        
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block" >
      <div class="cd-timeline-img cd-location">
        <img src="img/cd-icon-location.svg" alt="Location">
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <h2>Information</h2>
        <p>你可以双击一点查看该点的详细信息，也可以用Paper方法在软件方便地阅读论文……</p>
        <a href="#0" class="cd-read-more">Read more</a>
        
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block top2-10" >
      <div class="cd-timeline-img cd-location">
        <img src="img/cd-icon-location.svg" alt="Location">
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <h2>Cloud</h2>
        <p>当你通过paper或者自己的研究找到新的调控关系，你也可以分享你的发现到我们数据库中</p>
        <a href="#0" class="cd-read-more">Read more</a>
       
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->

    <div class="cd-timeline-block top2-10" >
      <div class="cd-timeline-img cd-movie">
        <img src="img/cd-icon-movie.svg" alt="Movie">
      </div> <!-- cd-timeline-img -->

      <div class="cd-timeline-content">
        <h2>Final Section</h2>
        <p>This is the content of the last section</p>
        
      </div> <!-- cd-timeline-content -->
    </div> <!-- cd-timeline-block -->
  </section> <!-- cd-timeline -->
</div>
<?php

require_once("foot.html")
?>