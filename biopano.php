<?php
require_once("head.html")
?>
<div class="main-content">
     <div class="row large-12 columns large-centered">
        <p style="font-size:32px">Biopano</p>
        
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
          《科学美国人》(Scientific American)杂志编辑比艾罗(David Biello)曾经用过一个简单的 比喻,来说明什么是合成生物学:如果将生命比作电脑,那么,由许多核酸组成的程式码—— 基因体,就是生命的作业系统(operating system)。 合成生物学想做的就是,透过创造或改写基因体,让生命表现出预期的行为,执行预定的工 作。然而,有时候我们会把生命的程式写“坏”了,就像你把电脑的作业系统弄坏了一样;电脑 会因此开不了机,而生命机器也会因此不正常或是死亡。 通过尝试错误(trial and error)的方式,累积成功与失败的经验,人们就会渐渐了解生命程式 的规则与语法,进而掌握撰写生命蓝图的法则。 现有的设计应用存在于生物体中的调控模式,去不断地组合、套用,产生更为丰富的人工生物 学机器,应用到了我们生活的各个角落。然而,仅仅应用已发现的调控模式,利用标准化元件 去“拼凑”合成生物学机器远远不能满足我们理想。 正如万有引力定律支配着漫天繁星的运转,我们也有理由相信在生物机器里有许多未知的规律 在支配着生命的运行。 梳理已知的生命体内物质间的联系、分析网络中暗含的调控模式、总结支配生命运转的规律, 这些帮助我们理解生命本质的工作或许会为合成生物学的发展起到更加本质上的推动作用。每 一个新的调控模式的发现,都会极大地拓展合成生物学研究人员的设计手段,产生更加精巧的 设计思路。 同时,我们也注意到分子生物学的研究日趋细化,绝大多数的学者的研究领域仅限于生物体具 体的某一部分,需要有一种机制去整合每一点成果,从一个更高的角度去理解每一部分。
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
        <h4>下面我们将操作展示E.coli k-12几个常见的Module:</h4>
        <li>
          <h5>1,Lac操纵子：当你输入乳糖操纵子的一个Transcription Unit(TU) lacZYA，并对这个点进行Expand</h5>
          <img src="img/A.png">
          <p>你会看到在lacZYA这条TU内的上游序列有lacZp1,lacZp2,lacZp3,lacZp4四个启动子，下游有lacZ,lacY,lacA三个结构基因。同时，这个TU在结构上属于lacZYA这个Operon.</p>
          <p>在lacZYA结点上方，你会看到还有CRP，H-NS和LacI三个Transcription Factor对lacZYA的表达产生抑制作用。</p>
          <p>再分别展开lacZ,lacY,lacA三个gene会得到编码蛋白BgaL,LacY,ThgA.其中Bgal和ThgA是Enzyme,它们催化相应的反应。展开LacI得到编码它的gene lacI.</p>
          <img src="img/B.png">
          <img src="img/C.png">
          <p>再展开LacZYA Operon和lacI gene会发现更多的物质和它们之间的联系。你可以选中并拖动多个节点(黄色圆圈包围)，使网络的排布更加整齐好看；也可以选中下方Full Screen全屏展示。</p>
          <img src="img/D.png">
          <img src="img/E.png">
        </li>
        <li>
          <h5>2,同理按照上面的步骤我们也可以得到Trp操纵子的调控代谢网络。</h5>
          <img src="img/F.png">
        </li>

      </div>


         <h4>Why choose BioPano?</h4>
      <div class="underline-small"></div>
      <div>
       <p> Biopano ,do the experiment as you do in the lab.</p>
       <p>合成生物学家在实验中经常发现，biobrick组成的基因线路与宿主细胞不兼容，导致不能正常工作。而Biopano用序列比对的方式，不仅为您分析实验失败的可能原因，而且为您设计出更精巧的基因线路提供参考方向。 </p>
       <p>我们的blast算法来自NCBI，但是它只有序列比对功能，却不能帮您分析导入的gene circuit可能受到宿主哪些影响，更无法预测它是否能正常工作。</p>
       <p>首先Biopano提供biobrick查询小助手，让您便捷的了解igem官网所有标准化原件。其次您还可以输入一个biobrick甚至任意构造一段全新的序列，软件利用权威的blast算法为您精确找出E.coli K-12相似性最高的基因结点，再Expand这些点找出这个基因可能受到哪些调控。这样Biopano可以帮你分析导入的gene circuit是否可能正常工作。</p>
       <p>Biopano以数据可视化的形式，将各种生物元件以及作用关系抽象成点和边，通过不断对结点的Expand动态展示E.coli K-12基因调控和代谢网络。我们后端整合了Regulon DB,KEGG和Uniprot大量的数据，让你可以在物质的海洋中不断Expand,Expand，梳理出它们的各种联系并满足你探索的好奇心。</p>
       <p>相比而言，cytoscape和Netscience主要支持文件导入展示网络，没有后端强大的数据库支持，所以无法在线搜索生物元件，也无法按照个人需求展示局部生物网络。</p>
       <p>既然生命体中有那么多美妙的物质联系，越来越多的生物学家希望找到两种看似不相干的生物元件的具体作用路径，甚至两个生物模块，如c-di-GMP signalling和Quorum Sensing。但是一条条作用关系只是以记录形式存储在数据库中，你很难从数以万计的记录中挖掘出一条基因线路，之前也没有生物软件实现这样的功能，而Biopano带来了希望。</p>
       <p>你可以任意输入两个生物元件，设定最短的几条路径，便可以找到它们之间的联系。而我们也凭借它这一强大功能找到了c-di-GMP signalling和Quorum Sensing具体联系，并且在论文中也得到了证实，这是多么惊喜的事！</p>
       <p>当然，Biopano帮您找到的基因线路不一定是正确的，但是为您探索两个领域的联系给出了参考方向，不仅让您在设计试验时目标更加明确，而且让您从全局的视角理解生命体内联系如此紧密。</p>
       <p>We have to admit that Biopano may show you wrong gene route. However, it provides you with direction of studying the relationship of two fields. It not only makes your goal for experiment designing more clear, but enables you to understand the connection inside body is so close.</p>
       <p>Biopano在提供各种功能服务的同时，也作为一个合作建网平台为大家服务。您可以自定义新的节点和边，登陆google和百度账号将自己搭建的网络同步到数据库。你也可以邀请多个合作伙伴共同完成一个project。而常见的生物软件cytoscape和Netscience却不能提供一个良好的交流平台，Biopano以数据共享的形式加强了生物多领域的交流。</p>
       <p>Biopano,生物研究者的得力助手，你值得拥有！</p>
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
