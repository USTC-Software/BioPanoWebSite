
<?php
require_once("head.html")
?>
<div class="main-content">
     <div class="row large-12 columns large-centered">
        <p style="font-size:32px">Technology</p>
        
      </div>
      <div class="row">
        <div class="large-12 columns large-centered">
    
      <h4>The Introduction of Backend Framework</h4>
      <div class="underline-small">
      </div>

        <p>Our server uses Linux as operating system, MongoDB to manage abundant biological data, including information of millions of nodes, and MySQL database to store data of users and information of projects and species. Our server-side program is based on Django development, and is optimized for multi-node and remote-controlling circumstances, ensuring that your request will be answered wherever you are. When a node breaks down, our server will separate the node from the group and realize automatic failover.</p>  
    

   
        
          <h5>Account System:</h5>
          <p>Oauth is used as login credential. You just need to provide your Google or Baidu account and use Biopano conveniently without signing up. Meanwhile, Oauth is decoupled with local account system, providing convenience for developers to offer more ways for authentication.</p>
          
          <h5>Rapid Server Deployment:</h5>         
          <P>We do not recommend users to build at local Biopano server, for one of the main advantages of Biopano is data sharing. However, for special cases such as intranet, you could use the docker repository we provide to deploy a Biopano server rapidly. We encapsulate basic databases to offer powerful basic biological data support for your intranet server.</P>
        
          <h5>Interface Design:</h5>
          <p>The server communicate with frontend based on HTTP protocol. It uses interfaces of RESTful style. It is a kind of completely public and universal interface and offers detailed documentation. You can develop your own applications based on these interfaces. These interfaces have been optimized a lot for Biopano-client, so the communication efficiency has been enhanced significantly.</p>

          <h5>Automated Deployment:</h5>
          <p>Our server has automated deployment capabilities. Server-side applications are bound with the Product branch of Git. All codes pushed to the Product branch will be deployed to many servers over the world in ten seconds. In order to prevent fault codes from being deployed to the servers by mistake, all the testing branches will be deployed to the testing server real-timely to be tested by developers.</p>

          <h5>Unit Testing:</h5>
          <p>Our server has automated deployment capabilities. Server-side applications are bound with the Product branch of Git. </p>

			<h4>Alogrithm</h4>
            <div class = "underline-small"></div>	
          <h5>Pathway Finder Alogrithm:</h5>
          <p>The software can search for paths between two selected nodes. We used a-stark short-path algorithm to achieve the function of discovering potential relationship in the biological network.</p>
          <p>A* algorithm is a search algorithm based on greedy, which can always visit fewer nodes and get a better solution at the same time.</p>
          <p>In this way, however, we get the shortest path in graph theory. By giving different and appopraite weights to different edges, the algorithm can find the shortest path in the sense of biology.</p>
          
          <h5>BLAST：</h5>
          <p>
We use two packages, namely, NCBI_Blast and the Python package called for NCBI_Blast. Different from NCBI, our alignment database combines RegulonDB and user-define databases. When the user inputs a sequence (such as a BioBrick sequence), Biopano will the node that shares the deepest homology with it in the server database, and show other nodes connected with it. Therefore, Biopano can show the nodes and regulations in the biological regulation network that probably has to do with the sequence (such as BioBrick sequece) the user inputs.
          </p>
     </div>

   
</div>
  </div>

<?php

require_once("foot.html")
?>