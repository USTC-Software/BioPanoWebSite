<?php
require_once("head.html")
?>
<div class="main-content">
     <div class="row large-12 columns large-centered">
        <p style="font-size:32px">Implementation</p>
        
      </div>
      <div class="row">
        <div class="large-12 columns large-centered">
      <h4>Framework</h4>
      <div class="underline-small"></div>
        <p>
          ???
        </p>
    
      <h4>Interface</h4>
      <div class="underline-small"></div>
       <li>Air & Flash Application</li>
       <li>Framework</li>
    
      <h4>Cloud</h4>
      <div class="underline-small">
      </div>

      <div>
        <h4>后端技术简介</h4>
        <p>后端可以分为4个部分：数据库、前端API接口、Oauth权限认证、分析算法。可以完成数据的存储、读取、修改、管理以及分析。由于python简单易学，第三方支持包较多，语言上主要采用Python（和c++）。下面将依次介绍每个部分用到的工具以及技术。</p>  
      </div>

      <div>
        <li>
          <h5>一、数据库</h5>
          <p>技术上采用了MongoDB非关系性数据库，主要用python中pymongo包驱动数据库，并自发设计了ref-object数据库架构，解决了多用户数据修改冲突的问题，并在一定程度上共享了不同用户的数据补全成果。</p>
          <p>数据上整合了RegulonDB、KEGG、Uniprot三大数据库。通过精心设计，将regulondb的调控数据、KEGG的代谢数据紧密统一在一个新的数据库，通过Uniprot的补全，构成一个整体的生命物质关系网。</p>
          <li>
            <h5>技术：</h5>
            <li>
              <h6>1、采用MongoDB的原因及优势：</h6>
              <p>MongoDB为非关系性数据库，而非传统主流的关系性数据库(SQL)语言。原因有三个关键词，生物数据、自由度大、高效。</p>
              <li> 
                <p>生物数据庞杂属性不统一，而mongo这种文档管理的特点就是数据的属性可以不统一，比较契合生物数据的特性，数据管理上自由度大，方便。如果用关系型语言，虽然结构化、分类完整，但十分琐碎，自定义功能也背削弱。</p>
                <p>在数据库中设立了边这种数据类型，以存储边的信息。SQL用外键表示数据关系，如再设立一个边的表，未免累赘，也失去了关系型数据库的这种内置的管理优势。而用非关系型数据库可以自由管理存储机制，可以搭建合适的存储结构。</p>
              </li>
            </li>
            <li>
              <h6>2、MongoDB存储数据内容：</h6>
              <p> Mongodb的存储层次由大到小分别为：数据库（database）、集合（collection）、文档（document）。整体生物数据存储在同一个数据库下，目前命名为igemdata_new。</p>
              <img src="img/4.jpg">
              <p>其下面分为多个collection，名称分别为node、link、node_ref、link_ref、u_t_r与mongodb自动生成的system.indexes。</p>
              <img src="img/5.jpg">
              <p>顾名思义，node和link存储所有生物节点信息和连接信息的数据。而node_ref和link_ref是稍后ref_object架构的产物，在这里简单说就是存储用户对数据库的使用情况。</p>
              <p>而u_t_r存储的是序列比对用到的序列库，在这个库里有序列和数据库内节点的键值对。序列比对匹配后可以快速找到数据库中被匹配到的节点。</p>
              <p>现在数据库中生物节点有51616，边共存储50858，可见是一个关联密集的网络。</p>
              <img src="img/6.jpg">
            </li>
            <li>
              <h6>3. ref_object框架</h6>
              <p>这个框架简单来讲，就是将数据公有化，用户私有的是对他们的使用（引用情况）。node里存储的是每一个节点的详细信息，而node_ref里存储不同用户对node里面数据的使用情况。</p>
              <p>形象来讲就是两个东西，一边是装有很多数据的大池子（node和link集合），另一边是一个台子上每个用户拿着一把钩子（node_ref和link_ref）。用户用哪个数据就要勾住哪个数据，一个数据被很多人引用（具体表现形式就是在屏幕上显示）就会被很多用户勾住。</p>
              <p>如果用户新建了一个数据记录，那他就要向数据池扔一份数据，然后再用钩子把它勾住。</p>
              <p>如果用户想删除一份数据的使用，那他只要将钩子断开即可。是的，数据还会留在池子里。当一份数据上面没有钩子时，他有可能被池子清理掉。</p>
              <p>所以以node为例，node集合只存储节点的详细信息，与用户无关。而node_ref每条记录里有node_id属性来指向node集合相应数据（钩住），有owner属性存储该记录属于哪个用户，另有x、y存储该点在用户屏幕上显示的位置。</p>
              <p>由于node所有人是共用一份的，所以当搜索数据库数据时，每个人的修改结果都可以被搜索到，但别人修改的结果并不会影响你现有所关注的数据。在某种程度上解决了数据修改冲突和实现了数据共享。</p>
          </li>
        </li>
        <li>
          <h5>API</h5>
          <p>We provide our users a bunch of RESTful apis hence they can get access to our database expediently and easily. Moreover, not only users can use these apis, but our client(software) also interacts with our server&database in this pattern.</p>
          <p>Our concept in designing the api accord with the RESTful style, which means the interaction between user and server will be very direct and simple. For example, users can easily get data, delete data, and add data using GET, DELETE, POST method when sending a HTTP request.What's more, they can get what they want with our SEARCH API, what they should do is merely POST us a standard JSON search query.</p>
        </li>
        <li>Database</li>
        <li>
          <h5>OAuth2.0</h5>
          <p>Considering it may be inconvenient for users to register a new account to use our software, wo provide third-party login service abiding by the OAuth2.0 protocol. This means you will be able to login to our software only if you have a Google account(gmail account) or a QQ account.</p>
        </li>
        <li>
          <h4>Algorithm</h4>
          <li>
            <h5>1. 序列比对算法</h5>
            <p>序列比对在软件中可以实现biopano序列比对配对功能，算法使用NeedleWunch算法。可以输入一个biobrick的序列信息，通过序列比对算法找到数据库中匹配上的生物节点（如某个Promoter），从而发现biobrick和原有生物体系的相互影响的可能性。</p>
          </li>
          <li>
            <h5>2. 关联路径搜索</h5>
            <p> 给定两个点，可以搜索两点之间的路径。本软件使用a-star k短路径算法，实现给两个生物节点，寻找生物网络中潜在的关系。</p>
          </li>
        </li>

      </div>
      <div class="underline-small">
        
      </div>
        <p>???</p>
 

    
     </div>

   

  </div>

<?php

require_once("foot.html")
?>