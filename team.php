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
        width:96%;
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
        position:relative;
        z-index:9999;
        color:grey;
        font-family:Calibri;
        float:right;
        margin:-3px 5px 6px;
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
              <div class = "details"><img style="width:160px" src="img/ltx.jpg" alt="Haiyan Liu"  align="left"><p>Haiyan Liu was born in Sichuan Province, China. He received his BS degree in Biology in 1990 and PhD degree in Biochemistry and Molecular Biology in 1996, both from USTC. Between 1993 and 1995 he was a visiting graduate student in Laboratory of Physical Chemistry of ETH, Zurich (Switzerland).  Since 2001, he has been a professor of computational biology at School of Life Sciences, USTC. </p>
              </div>
         </li>
          <li class ="profilewrap">
              <img src="img/wws.jpg" alt="Haiyan Liu">
              <div class ="nameplate"><a href="#">Wang Wenshuo</a></div>
              <div class = "details"><img style="width:160px" src="img/wws.jpg" alt="Haiyan Liu"  align="left"><p>Haiyan Liu was born in Sichuan Province, China. He received his BS degree in Biology in 1990 and PhD degree in Biochemistry and Molecular Biology in 1996, both from USTC. Between 1993 and 1995 he was a visiting graduate student in Laboratory of Physical Chemistry of ETH, Zurich (Switzerland).  Since 2001, he has been a professor of computational biology at School of Life Sciences, USTC. </p>
              </div>
         </li>
          <li class ="profilewrap">
              <img src="img/zzy.jpg" alt="Haiyan Liu">
              <div class ="nameplate"><a href="#">Zhang Zhiyuan</a></div>
              <div class = "details"><img style="width:160px" src="img/zzy.jpg" alt="Haiyan Liu"  align="left"><p>Haiyan Liu was born in Sichuan Province, China. He received his BS degree in Biology in 1990 and PhD degree in Biochemistry and Molecular Biology in 1996, both from USTC. Between 1993 and 1995 he was a visiting graduate student in Laboratory of Physical Chemistry of ETH, Zurich (Switzerland).  Since 2001, he has been a professor of computational biology at School of Life Sciences, USTC. </p>
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
              <div class = "details"><img style="width:160px" src="img/dcx.jpg" alt="Haiyan Liu"  align="left"><p>Haiyan Liu was born in Sichuan Province, China. He received his BS degree in Biology in 1990 and PhD degree in Biochemistry and Molecular Biology in 1996, both from USTC. Between 1993 and 1995 he was a visiting graduate student in Laboratory of Physical Chemistry of ETH, Zurich (Switzerland).  Since 2001, he has been a professor of computational biology at School of Life Sciences, USTC. </p>
              </div>
        </li>
        
        <li class ="profilewrap">
              <img src="img/jzy.jpg" alt="Haiyan Liu">
              <div class ="nameplate"><a href="#">Jin Zeyu</a></div>
              <div class = "details"><img style="width:160px" src="img/jzy.jpg" alt="Haiyan Liu"  align="left"><p>Haiyan Liu was born in Sichuan Province, China. He received his BS degree in Biology in 1990 and PhD degree in Biochemistry and Molecular Biology in 1996, both from USTC. Between 1993 and 1995 he was a visiting graduate student in Laboratory of Physical Chemistry of ETH, Zurich (Switzerland).  Since 2001, he has been a professor of computational biology at School of Life Sciences, USTC. </p>
              </div>
        </li>
      
        
 </ul>
 <h4>Instructors & Advisors</h4>
      <div class="underline-small"></div>


      <div>
       <li>
        <img src="img/G.png">
        <p>刘海燕，教授，博士生导师。1990年本科博士毕业于中国科学技术大学生物系。1996年博士毕业于中国科学技术大学，获郭沫若奖。1993-1995年作为联合培养研究生在瑞士苏黎世高等理工学院物理化学实验室学习。1998-2000年在杜克大学和北卡罗来纳大学博士后。现为我校生命科学学院教授、博士生导师。在生物分子计算机模拟与设计方法和酶催化模拟领域发表研究论文六十余篇。2000年入选中国科学院“引进国外杰出人才”项目。2001年获“国家杰出青年基金”资助。2004年获安徽省青年科技奖。</p>
        <p>实验室主页：http://biocomp.ustc.edu.cn/</p>
        <h4>主要研究兴趣：</h4>
        <li>1) 蛋白质空间结构和动力学的计算机模拟方法与应用；</li>
        <li>2) 蛋白质设计理论与实验方法及其在合成生物学中的应用。</li>
       </li>
       <li>
        <img src="img/H.png">
        <p>梁治，博士，特任副研究员。2000年毕业于中国科学技术大学生命科学学院，获生物学学士学位和电子与信息工程双学士学位。2006年毕业于中国科学技术大学生命科学学院蛋白质晶体学实验室，获博士学位。2007年至2012年在中国科学技术大学生命科学学院系统生物学实验室从事系统生物学方面的博士后研究。博士后期间先后获得中国博士后科学基金二等资助和自然科学青年基金资助。2012年任中国科学技术大学生命科学学院特任副研究员。研究成果发表于Nucleic Acids Res, Bioinformatics, BMC Bioinformatics, J Biol Chem等期刊。</p>
        <h4>主要研究兴趣：</h4>
        <li>1. 生物分子网络的拓扑和动力学研究及相关的实验方法发展</li>
        <li>2. 非编码RNA的计算系统生物学研究</li>
        <li>3. 结构生物信息学</li>
        <li>4. 疾病（癌、病毒-宿主相互作用）的系统生物学研究</li>
        <li>5. 大规模生物学数据的建模和分析方法及工具 </li>
      <li>
        <img src="img/I.png">
        <p>洪泂, 博士，副教授。出生于安徽省。1989年至1993年就读于安徽师范大学生命科学学院获学士学位。1993年至1996年就读于北京师范大学生命科学学院，获硕士学位，2000年至2003年就读于日本京都大学，获博士学位。1996-2003年在北京师范大学生命科学学院工作，2003年至2006年在京都大学和石川县立大学作博士后研究，2006年至2008年在美国弗吉尼亚理工大学作博士后研究。 2008年4月作为中国科技大学优秀人才引进，现为生命科学学院副教授。共发表论文22篇。其中SCI学术期刊发表研究论文12篇。</p>
      </li>
      <li>
        <img src="img/J.png">
        <p>金帆：毕业于中国科学技术大学应用化学系。2007年毕业于香港中文大学化学系高分子物理化学专业，获理学博士学位。</p>
        <li> 2007年6月-2009年1月   香港中文大学化学系，博士后</li>
        <li> 2009年1月-2009年11月  美国伊利诺伊斯州大学香槟分校材料系，博士后</li>
        <li> 2009年11月-2011年8月  美国加州大学洛杉矶分校生物工程系，博士后,合肥微尺度物质科学国家实验室Bio-X 研究部</li>
        <li> 2011年8月-现今  中国科学技术大学高分子材料科学工程系,中国科学院软物质化学重点实验室，特任教授</li>
        <h4>目前研究方向:</h4>
        <li>1.聚电解质、胶体粒子在油水界面的排列和组装</li>
        <li>2.抗菌多肽和磷脂双分子膜的相互作用</li>
        <li>3.活细胞图像和活细胞的显微操作</li>
        <li>4.生物大分子、超分子组装体的表征和其在药物载体和基因转染中的应用</li>
        <li>5.细菌菌落，微生物社会学（生物膜的信号传递，运动行为，社会行为）</li>
      </li>


       </li>
      </div>


      <h4>Additional Thanks</h4>
      <div class="underline-small">
        
      </div>
       <p>感谢德意志银行，中科大校友基金会和中科大教务处的资金支持，有了他们，我们才得以完成比赛；</p>
       <p>感谢Regulon DB,KEGG,Uniprot，biobrick和NCBI的数据支持，有了他们的数据及api才完善我们的软件生物数据；</p>
       <p>感谢Pro刘海燕，梁治，金帆，洪炯的平时课题指导,有了他们建议指导，我们的课题才得以进一步深化改进；</p>
       <p>感谢廖晨等学长参与软件的使用，评价和推广，他们指出软件的许多不足与bug。</p>    
     </div>

   

  </div>

<?php

require_once("foot.html")
?>