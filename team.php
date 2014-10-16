<?php
require_once("head.html")
?>
<style type="text/css"> 

.profilewrap img{              
  cursor:pointer;
}

.nameplate a{
  text-align: center;   
  cursor:pointer;
  margin: 0 auto;
  color: #000;
}
.nameplate a:hover{
  color: #000;
}
.row .details {
  display: none;
}

#pop_up{
    display:none;
    z-index:999;
    position:relative;
}

#pop_up_underlay{
  height:100%;
  width:100%;
  background-color:black;
  position:fixed;
        left:0px;
  margin:0px;
        top:0px;
  opacity:0.8;
        text-align:center;
        cursor:pointer;
}

#pop_up_display {
height: 350px;
width: 620px;
background-color: white;
margin: 150px 340px 0px;
position: fixed;
padding: 5px;
top: 0;
}
#pop_up_content{
        height:100%;
        width:100%;
        overflow-y:auto;
        padding-left:7px;
}
#pop_up_content h2{
        font-family:"Times New Roman",sans-serif ;
        margin-top:5%;
        width:65%;
        float:right;

}
#pop_up_content img{
        padding-right:15px;
}
#pop_up_content p{
        clear:right;
        font-size:100%;
}
#pop_up_close{
        position:absolute;
        z-index:9999;
        color:grey;
        font-family:Calibri;
        right: 1em;
       /* margin:-3px 5px 6px;*/
        cursor:pointer;
        font-size:25px;
}
  </style>
<div class="main-content">
     <div class="row large-12 columns large-centered">
        <p style="font-size:32px">Team</p>
        
      </div>
      <div class="row">
        <div class="large-12 columns large-centered">
      <h4>Team Members</h4>
      <div class="underline-small"></div>
     <ul class="large-block-grid-6 medium-block-grid-4 small-block-grid-2 text-center">
        
          <li class ="profilewrap">
              <img src="img/xyc.jpg" alt="Haiyan Liu">
              <div class ="nameplate"><a href="#">Xue Yuechuan</a></div>
              <div class = "details"><img style="width:160px" src="img/xyc.jpg" alt="Xue Yuechuan"  align="left"><p>Haiyan Liu was born in Sichuan Province, China. He received his BS degree in Biology in 1990 and PhD degree in Biochemistry and Molecular Biology in 1996, both from USTC. Between 1993 and 1995 he was a visiting graduate student in Laboratory of Physical Chemistry of ETH, Zurich (Switzerland).  Since 2001, he has been a professor of computational biology at School of Life Sciences, USTC. </p>
              </div>
         </li>

         <li class ="profilewrap">
              <img src="img/zss.jpg" alt="Haiyan Liu">
              <div class ="nameplate"><a href="#">Zhao Shensen</a></div>
              <div class = "details"><img style="width:160px" src="img/zss.jpg" alt="Zhao Shensen"  align="left"><p>Work which make idea true make me happy.</p>
              </div>
         </li>
          <li class ="profilewrap">
              <img src="img/glz.jpg" alt="Haiyan Liu">
              <div class ="nameplate"><a href="#">Gan Longzhi</a></div>
              <div class = "details"><img style="width:160px" src="img/glz.jpg" alt="Haiyan Liu"  align="left"><p>Try hard, have fun.</p>
              </div>
         </li>
          <li class ="profilewrap">
              <img src="img/ltx.jpg" alt="Haiyan Liu">
              <div class ="nameplate"><a href="#">Lin Taixing</a></div>
              <div class = "details"><img style="width:200px" src="img/ltx.jpg" alt="Haiyan Liu"  align="left"><p>Haiyan Liu was born in Sichuan Province, China. He received his BS degree in Biology in 1990 and PhD degree in Biochemistry and Molecular Biology in 1996, both from USTC. Between 1993 and 1995 he was a visiting graduate student in Laboratory of Physical Chemistry of ETH, Zurich (Switzerland).  Since 2001, he has been a professor of computational biology at School of Life Sciences, USTC. </p>
              </div>
         </li>
          <li class ="profilewrap">
              <img src="img/wws.jpg" alt="Haiyan Liu">
              <div class ="nameplate"><a href="#">Wang Wenshuo</a></div>
              <div class = "details"><img style="width:160px" src="img/wws.jpg" alt="Haiyan Liu"  align="left"><p>There is no fate but what we make.</p>
              </div>
         </li>
          <li class ="profilewrap">
              <img src="img/zzy.jpg" alt="Haiyan Liu">
              <div class ="nameplate"><a href="#">Zhang Zhiyuan</a></div>
              <div class = "details"><img style="width:160px" src="img/zzy.jpg" alt="Haiyan Liu"  align="left"><p>To see, to ask, to search, to believe.</p>
              </div>
         </li>
          
          <li class ="profilewrap">
              <img src="img/gyf.jpg" alt="Haiyan Liu">
              <div class ="nameplate"><a href="#">Gao Yifan</a></div>
              <div class = "details"><img style="width:160px" src="img/gyf.jpg" alt="Haiyan Liu"  align="left"><p>Haiyan Liu was born in Sichuan Province, China. He received his BS degree in Biology in 1990 and PhD degree in Biochemistry and Molecular Biology in 1996, both from USTC. Between 1993 and 1995 he was a visiting graduate student in Laboratory of Physical Chemistry of ETH, Zurich (Switzerland).  Since 2001, he has been a professor of computational biology at School of Life Sciences, USTC. </p>
              </div>
         </li>
 		<li class ="profilewrap">
              <img src="img/dcx.jpg" alt="Haiyan Liu">
              <div class ="nameplate"><a href="#">Dong Chenxiao</a></div>
              <div class = "details"><img style="width:160px" src="img/dcx.jpg" alt="Haiyan Liu"  align="left"><p>All the time, try killing any idea from team.</p>
              </div>
        </li>
        
        <li class ="profilewrap">
              <img src="img/jzy.jpg" alt="Haiyan Liu">
              <div class ="nameplate"><a href="#">Jin Zeyu</a></div>
              <div class = "details"><img style="width:160px" src="img/jzy.jpg" alt="Haiyan Liu"  align="left"><p>Not most powerful, but highly responsible!</p>
              </div>
        </li>
        
        <li class ="profilewrap">
              <img src="img/zl.jpg" alt="Haiyan Liu">
              <div class ="nameplate"><a href="#">Zhou Long</a></div>
              <div class = "details"><img style="width:160px" src="img/zl.jpg" alt="Haiyan Liu"  align="left"><p>Simply Enjoy.</p>
              </div>
        </li>
        
         <li class ="profilewrap">
              <img src="img/hlx.jpg" alt="Haiyan Liu">
              <div class ="nameplate"><a href="#">Han Luxin</a></div>
              <div class = "details"><img style="width:160px" src="img/hlx.jpg" alt="Haiyan Liu"  align="left"><p>Where there is a will, there is a way.</p>
              </div>
        </li>
        
        <li class ="profilewrap">
              <img src="img/ycp.jpg" alt="Haiyan Liu">
              <div class ="nameplate"><a href="#">Yu Chuanping</a></div>
              <div class = "details"><img style="width:160px" src="img/ycp.jpg" alt="Haiyan Liu"  align="left"><p>Do one thing at a time, and do well.</p>
              </div>
        </li>
        
        <li class ="profilewrap">
              <img src="img/zhy.jpg" alt="Haiyan Liu">
              <div class ="nameplate"><a href="#">Zhang Renying</a></div>
              <div class = "details"><img style="width:160px" src="img/zhy.jpg" alt="Haiyan Liu"  align="left"><p>Be the best yourself, to be No.1. </p>
              </div>
        </li>
        
        </li>
        
        <li class ="profilewrap">
              <img src="img/fyc.jpg" alt="Haiyan Liu">
              <div class ="nameplate"><a href="#">Fei Yicheng</a></div>
              <div class = "details"><img style="width:160px" src="img/fyc.jpg" alt="Haiyan Liu"  align="left"><p>Be the best yourself, to be No.1. </p>
              </div>
        </li>
        
        <li class ="profilewrap">
              <img src="img/ctl.jpg" alt="Haiyan Liu">
              <div class ="nameplate"><a href="#">Chen Tianlong</a></div>
              <div class = "details"><img style="width:160px" src="img/ctl.jpg" alt="Haiyan Liu"  align="left"><p>Be the best yourself, to be No.1. </p>
              </div>
        </li>
        
        <li class ="profilewrap">
              <img src="img/clf.jpg" alt="Haiyan Liu">
              <div class ="nameplate"><a href="#">Chen Lingfan</a></div>
              <div class = "details"><img style="width:160px" src="img/clf.jpg" alt="Haiyan Liu"  align="left"><p>Be the best yourself, to be No.1. </p>
              </div>
        </li>
        
 </ul>
 <h4>Instructors & Advisors</h4>
      <div class="underline-small"></div>


      <div>
    <ul class="large-block-grid-6 medium-block-grid-4 small-block-grid-2 text-center">
          <li class ="profilewrap">
              <img src="img/G.png" alt="Haiyan Liu">
              <div class ="nameplate"><a href="#">Haiyan Liu</a></div>
              <div class = "details"><img style="width:160px" src="img/G.png" alt="Haiyan Liu" >
            <p><b>Email:</b>hyliu@ustc.edu.cn</p>
            <p><b>Brief Intro:</b>Haiyan Liu was born in Sichuan Province, China. He received his BS degree in Biology in 1990 and PhD degree in Biochemistry and Molecular Biology in 1996, both from USTC. Between 1993 and 1995 he was a visiting graduate student in Laboratory of Physical Chemistry of ETH, Zurich (Switzerland). From 1998 to 2000 he was post-doctoral research associate at Department of Chemistry, Duke University (USA) and Department of Biochemistry and Biophysics UNC-Chapel Hill (USA). Since 2001, he has been a professor of computational biology at School of Life Sciences, USTC.</p>
              </div>
        </li>


             <li class ="profilewrap">
              <img src="img/H.png" alt="Zhi Liang">
              <div class ="nameplate"><a href="#">Zhi Liang</a></div>
              <div class = "details"><img style="width:160px" src="img/H.png" alt="Zhi Liang" >
            <p><b>Email:</b>liangzhi@ustc.edu.cn</p>
            <p><b>Brief Intro:</b>Liang Zhi, Ph.D., Associate Professor Extraordinary . 2000 graduated from the school of Life Sciences in the University of Science and Technology of China, received bachelor's degree in biology and electronics and information engineering dual degree. 2006 graduated from the school of Life Sciences in the University of Science and Technology of China protein crystallography laboratory , PhD. From 2007 to 2012 in the school of Life Sciences in the University of Science and Technology of China Systems Biology Laboratory in systems biology postdoctoral research. Postdoctoral period has won China Postdoctoral Science Foundation funded second and Natural Science Foundation funding. 2012 University of Science and Technology of China Extraordinary Life Sciences Research Associate . Research results published on Nucleic Acids Res, Bioinformatics, Bioinformatics, J Biol Chem.</p>
              </div>
        </li>

           <li class ="profilewrap">
               <img src="img/I.png">
              <div class ="nameplate"><a href="#">Jiong Hong</a></div>
              <div class = "details"><img style="width:160px" src="img/I.png" alt="Jiong Hong" >
              <p>Professor, School of Life Sciences University of Science & Technology of China</p>
              <p>
                <b>Email:</b> hjiong@ustc.edu.cn<br /><br />
                <b>Brief Intro:</b>Jiong Hong was born in Anhui Province, China. He received his BS degree in 1993 from Anhui Normal University, MSc degree in 1996 from Beijing Normal University, and Ph.D degree in 2003 from Kyoto University, all in Life Sciences. From 2006 to 2008, he did post-doctoral research in Virginia Tech University, USA. Since 2008, he has been introduced to the USTC as talented.
              </p>
              </div>
        </li>


       <li class ="profilewrap">
              <img src="img/J.png" alt="Fan Jin">
              <div class ="nameplate"><a href="#">Fan Jin</a></div>
              <div class = "details"><img style="width:160px" src="img/J.png" alt="Fan Jin" >

 <br /><br />
<p>1997.07-2002.07 B.S., Student, Department of Applied Chemistry, University of Science & Technology of China, P. R. China.
Degree awarded: B.S. in chemistry, 07/2002</p>
 
<p>2003.08-2007.06 Ph.D. Candidate, Department of Chemistry, The Chinese University of Hong Kong.
Degree awarded: Ph.D in chemistry, 06/2007</p>
                                                                                                        
<p>2002.07-2003.07 R.A.,  The Hefei National Laboratory of Physical Science at Microscale, Department of Chemical Physics, University of Science & Technology of China, P. R. China.</p>
 
<p>2007.06-2009.01 Postdoctoral Associate,  Department of Chemistry, The Chinese University of Hong Kong.</p>
 
<p>2009.01-2009.11 Postdoctoral Associate,   Department of Materials Science and Engineering, University of Illinois at Urbana Champaign.</p>
 
<p>2009.11-2011.8 Postdoctoral Associate,  Department of  Bioengineering, California Nanosystems Institute, University of California, Los Angeles. </p>
 
<p>2011.8-present Professor,  Department of Polymer Materials Science and Engineering, University of Science and Technology of China,  CAS Key Lab of Soft Matter Chemistry. </p>
 
<h4>Research Interests</h4>
 <p>Polyelectrolyte and colloidal particles in the oil-water interface. </p>
<p>Interaction between Antibiotic peptides and lipids membrane. </p>
<p>Living cell image and living cell micro-manipulation.</p>
<p>Biological macromolecules, characterization of supramolecular assembly and its applications in drug delivery and gene transfection. </p>
<p>Bacterial communities. (Ex: signaling, motility, social organization in biofilms)</p>



              </div>
        </li>
        </ul>

      </div>


      <h4>Additional Thanks</h4>
      <div class="underline-small">
        
      </div>
      <div style="line-height:200%">
       <li>
       Thanks for financial assistance from Deutsche Bank, USTCIF and USTC Teaching Affair Office. Only with their help could we finish the competition;
       </li>
         <li>
        Thank data from RegulonDB, KEGG, Uniprot and NCBI. Only with their data and apis could we refine our database; 
        </li>
         <li>
        Thank project guidance from Haiyan Liu, Zhi Liang, Fan Jin and Jiong Hong.
         </li>
         <li>
        Only with their guidance could our project be improved and deepened; 
        </li>
         <li>
        Thank Chen Liao for participating in the use, evaluation and popularization of Biopano.
        </li>
         <li>
         He pointed out many deficiencies and bugs of our software. 
       </li>
       </div>
     </div>
    </div>

<?php

require_once("foot.html")
?>