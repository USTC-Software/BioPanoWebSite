<?php
require_once("head.html")
?>
<div class="main-content">
     <div class="row large-12 columns large-centered wiki-head">
        <p style="font-size:64px;height:100%;line-height:100%;color:rgb(144,144,144)">Meet Biopano</p>
        
      </div>
      <div class="row">
        <div class="large-12 columns large-centered">

        
      <h4 id="overview">Overview</h4>
      <div class="underline-small"></div>
        <p>Designed specifically for biological research, BioPano is a software platform targeted for visualisation of biological relationships as well as cooperative net-building. You can set up your own network of biological relationship by adding information about genetic regulation and metabolic system to the network we already provided for you. Also, the software allows you to explore the links among the substances by just several clicks, and you can even look into the details of the interaction between the exogenous gene and the host. What is even more exciting is that our software will end your loneliness and frustration in research, since it is providing you with cloud cooperating system so that you can view massive amounts of resources in databases, together with build up groups to share information and set up mutual network with others.
        </p>
      
      <h4 id="m_b">Motivation & Background</h4>
      <div class="underline-small"></div>
        <p>
          As it is known to all, synthetic biology has achieved remarkable progresses recently. However, it is still facing great challenges.Synthetic biologist Chris Voigt once injected the toggle switch
successfully works in bacillus subtilis to colibacillus. Nevertheless, it 
failed to work as expected. In experiment, since the BioBrick interacts 
with the host environment unexpectedly, it is common that the designed 
circuit doesn’t work as anticipated.In fact, biological system is involved. Lots of biological parts interact
with each other in complex ways to support the system to function 
well. Many biologists try to simplify the model by finding the 
important regulation modes. However, a myriad of data in various 
databases makes combing the connection of materials difficult, 
thus divergent thinking seems even tougher.Meanwhile, people realize that research focus on merely one thing
cannot explain all biological phenomenon. Connection between c-
di-GMP Signaling and Quorum Sensing plays a significant role in 
transporting information in many cells, the study of which may 
bring our research more inspiration, even enhance the 
development of the cross biological areas.This is where our primary thought of the software comes from. We
hope to solve the problems above lucidly by data visualization.
        </p>
    
      <h4 id="features">Features</h4>
      <div class="underline-small">
      </div>
        <p>Our software has many marvelous features, with which your biology research will become extremely easy and joyful.</p>
        <div>
        <li>
          <h5>Expansion of a single node</h5>
          <p>In Biopano, every biology part of E.coli K-12 will be displayed as a node of different types and regulation relationship will be displayed as arc of different types. They are displayed in the biological network in a visualizational way. You just need to select a node and click “Expand”, and the nodes associated with it will be “expanded”. Nodes are connected to each other by all kinds of relationship, so users can see how biological parts are connected clearly, such as Lac </p>
          <img src="img/features.jpg">
          <p>However, since there are so many biological parts connected to each other in various convoluted, the expansion of all nodes will give rise to extremely involved nets, which will fail to convey useful information to the users, even interfere their thoughts. So you can choose to expand the nodes in a way you see fit. Take 转录因子CRP as an example. When you have already got the entire view and want to know more about the details, double-click the nodes and arcs and the details will be shown.</p>
          <p>Biopano displays the network dynamically, which makes you able to tease out the relationship among thousands of materials of E.coli K-12, satisfies your curiosity and helps you discover unknown biological field.</p>
        </li>
        <li>
          <h5>Search of relationship</h5>
          <p>You can input two nodes that seem irrelevant, such as gene A and B, and the software will search the route connecting the two nodes for you. Since some routes are too sinuous for further analysis or does not make sense, you can set a specific number k, Biopano will search and show the k shortest routes for you.</p>
        </li>
        <li>
          <h5>Search for host environment’s impact on exogenous sequences</h5>
          <p>By BLAST method, Biopano finds E.coli K-12 gene highly similar to the injected sequence. These genes are regulated by other parts in E.coli K-12, so can provide information of the host environment’s impact on injected exogenous sequence. Biopano also offers BioBrick helper, enabling you search all kinds of BioBricks on iGEM’s official website. By BLAST analysis, it helps you design correct gene route with appropriate BioBricks.</p>
        </li>
        <li>
          <h5>User-define network building and data sharing</h5>
          <p>Hence, while offering various functions, Biopano also serves as a cooperative network building platform. When you create a project, you can add new nodes, name new biological parts and link them with respect to your comprehension to build a brand new net gradually. Meanwhile, Biopano provides log in service. You can sign up with Google or Baidu account and upload your network to the main database to make it more plentiful. Biopano also supports data importing in batch. You can even import data of a species and a database!</p>
          <p>Moreover, you can choose company as the coworker of your project. Then can add and delete nodes and arcs like you, but they can’t delete the project. Building and sharing a more involved net together enhances communication of biologists from different fields greatly.</p>
        </li>
        <li>
          <h5>Literature network</h5>
          <p>More surprisingly, Biopano supports literature reading in the network. You can view literature corresponding to every node and arc along any gene route in the network, and you will understand how the nodes in the net are associated with each other in depth. If you cast doubt on the reliability of our database, you can verify your thought with authoritative literature.</p>
        </li>
        <p>To sum up, Biopano not only helps you know more, but enables you to study more as well!</p>
      </div>
 
      <h4 id="features">Demo</h4>
      <div class="underline-small">
      </div>
      <div>
        <h4>Next we will demonstrate some common modules of E.coli k-12:</h4>
        <li>
          <h5>1, Lac Operon: When you input LacZYA, a Transcription Unit(TU) of Lac Operon and Expand the node:</h5>
          <p>You will see four promoters, acZp1, lacZp2, lacZp3 and lacZp4 as
upstream sequences and three structure genes, lacZ, lacY and lacA as 
downstream sequences. Meanwhile, you can see the TU belongs to 
the Operon lacZYA.
         </p>
          <p>Above the node lacZYA, you also see three Transcription
Factors, namely, CRP, H-NS and lacl. They suppress the expression of 
lazZYA.</p>
          <p>Expand lacZ, lacY and lacA, and we get BgaL, LacY and ThgA
respectively, of which Bgal and ThgA are Enzymes. They catalyze
corresponding reactions. Expand Lacl and we get the gene lacl which
codes it.</p>
       <ul class="small-block-grid-2">
          <li><img src="img/B.png"></li>
          <li><img src="img/C.png"></li>
          </ul>
        
          <p>Continue to Expand lacZYA and lacl and we find more materials’
connected with them. You can select and drag the nodes to arrange the 
network neatly; you can also click Full Screen and the network will be 
displayed in full screen.</p>
          <ul class="small-block-grid-2">
          <li><img src="img/D.png"></li>
          <li><img src="img/E.png"></li>
          </ul>
        </li>
        <li>
          <h5>2, Following the same steps, we can also get the regulation network of
the Operon Trp.</h5>
          <img src="img/F.png">
        </li>

      </div>


         <h4>Why choose BioPano?</h4>
      <div class="underline-small"></div>
      <div>
       <p> Biopano ,do the experiment as you do in the lab.</p>
       <p>In experiment, synthetic biologists always find gene circuits formed by BioBricks are incompatible with the host cell, thus cannot work as expected. However, Biopano uses sequence alignment to analyze the possible reasons of the failure and design more acute gene circuit for your consideration.</p>
       <p>Our Blast algorism derives from NCBI. However, the original version only offers sequence alignment and fails to analyze what impact the host environment might have on the injected gene circuit, let along predicts whether it will work.</p>
       <p>Firstly, Biopano offers BioBrick searching to make it convenient for you to study all standardized biological parts on the official website of iGEM. Secondly, you can input a BioBrick and even construct a brand new sequence. Biopano will find the gene nodes of E.coli K-12 sharing the deepest homology with it based on authoritative Blast algorithm. Then you can Expand these nodes to find out the possible regulation on them. In this way, Biopano helps you analyze whether the injected gene circuit will actually work.</p>
       <p>Biopano abstracts biological parts and the regulation among them into nodes and arcs to realize data visualization, and displays gene regulation and metabolism network of E.coli K-12 dynamically by continually Expanding nodes. Single database cannot make an entire material network, so our back end combines Regulon DB, KEGG, Uniprot and abundant data. You can ceaselessly Expand the nodes in the network to comb the relationship among them and satisfy your curiosity.</p>
       
       <p>Compared with Biopano, Cytoscape and Netscience mainly support file importing and network displaying without powerful database from the back end. Hence you cannot search for biological parts online and view the certain part of the biological network you need with them.</p>
       
       <p>Now that there is enormous astonishing material relationship in biological body, more and more biologists hope to find the specific function route between two biological parts or even two biological blocks that seem not related to each other, such as c-di-GMP signalling and Quorum Sensing. Unfortunately, the interactions of the biological parts are saved in database as records and it is almost impossible to find the route in thousands of records. There haven’t been any software to offer any help before. Luckily, Biopano brings hope to this.</p>
      
       <p>You can input two biological parts and set several shortest routes, then you will find their relationship. We used this powerful function to find the specific relationship betweem c-di-GMP signalling and Quorum Sensing, which was corroborated by corresponding literature. How amazing!</p>
       
       <p>We have to admit that Biopano may show you wrong gene route. However, it provides you with direction of studying the relationship of two fields. It not only makes your goal for experiment designing clearer, but enables you to understand the connection inside body is so close as well.</p>
       
       <p>While offering function services, Biopano serves as a platform for collaborative network building. You can define new nodes and arcs yourself and sign in with your Google or Baidu account to upload the network you build to our database. You can also invite several companions to complete a project together. Common biological software, such as Cytoscape and Netscience, doesn’t provide a good platform for communication, while Biopano enhances the communication of biological areas by data sharing.</p>
      
       <p>Biopano, your right hand for biological research. Get it now!</p>
      </div>

       <h4>Future Work</h4>
      <div class="underline-small"></div>
      <div>
       <p>您目前所看到的biopano只是最初的版本，有很多事情我们希望完成，但由于时间所限，我们不能在比赛截止日期前完成这些。我们将会在未来完成这些。</p>
       <li>
        <p>1. 集成更多数据库。目前biopano只有三家数据库合并而成的E.coli顶级数据库，将来我们将会加入更多的物种的调控关系和代谢关系数据。为此，我们将会集成更多的相关数据库。而且我们的数据会和所有导入的数据库同步更新。</p>
       </li>
       <li>
        <p>2. 提升数据质量。随着用户的增多，用户将会建立更多的小型数据库，而我们顶级数据库将会选择性吸取这些最新的研究成果，改进顶级数据库数据质量。我们也会公开这些小型数据库数据，支持其他生物学家的工作。</p>
      </li>
      <li>
        <p>3. 增强前端分析功能。目前，我们提供的前端分析关系只有寻找联系这一项，未来我们将加入更实用的分析功能，如聚类分析，连通度计算等。</p>
      </li>
      <li>
        <p>4. 增强多格式文件支持。目前，我们提供的前端文件格式转换只有xml与sbol，将来我们将支持更多的文件格式，与其他软件无缝兼容。</p>
      </li>
      </div>
     </div>

  </div>
</div>

<?php

require_once("foot.html")
?>
