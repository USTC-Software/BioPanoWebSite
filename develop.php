
<?php
require_once("head.html");
?>
<div class="main-content">
     <div class="row large-12 columns large-centered">
        <p style="font-size:32px">Technology</p>  
      </div>
   
   
      <div class="row">
        <div class="large-12 columns large-centered">
			<h3>Frontend</h3>
			<div class="underline-small"></div>
			<p>The front is mainly used to display data from the back-end and provide a user-friendly interface. In order to achieve a better display of graphics, and a better user interaction, we choose to use Actionscript3 programming language. The exported .air package can run on any virtual machine which supports Adobe air.</p>    
      <p></p>
      <h5>BioBrick Assistant:</h5>
      <p>BioBrick Assistant will get the BioPart in the form of XML from the official website when the user inputs keywords. Then we extract the important information by using Actionscript XML processing functions in the form of a table.</p>
      <h5>Google API:</h5>
      <p>When the user inputs the keyword, it will be searched on Google. Then we parse the returned HTML, and save the title, author, abstract, and URL of the literature, which is convenient for the user.</p>
      <h5>Layout Algorithm:</h5>
      <p>1 even layout: First we calculate the border region which the user selected, namely the minimum and maximum of X and Y. So that we can get the height and width of the area. During the process, the number of nodes is gotten. Then we select the value of m and n as below: m, n are integers, m / n is closest to the width / height and m*n is no smaller than the number of the nodes. After m and n are set, the nodes will be arranged that the horizontal interval between horizontally adjacent nodes is width / m, and the vertical interval between vertically adjacent nodes is height / n. 
2 plasmid arrangement: the arrangement of the radius of the circle size is in proportion to the number of nodes selected. Node will be sorted according to the type and arranged on the circle. 
3 gravitation-repulsion arrangement: Imagine that we assign each node with a positive charge, those nodes are mutually exclusive, and the repulsive force is inversely proportional to the square of the distance. Imagine that every edge is a spring, the force it applies on the nodes at its ends is proportional to the length of the spring. By calculating the force applied to each node, we can determine the direction and magnitude of its displacement. This process is called an iteration. After fifty times of iteration, all the nodes will be in steady state. We make their positions now their final positions for arrangement. The parameters of gravitation and repulsion are determined by experiments. The advantage of the algorithm is that it can arrange the graph like a tree and reduce the cross of edges greatly to show the relationships among the nodes more lucidly.
Gravitation-repulsion arrangement algorithm and GPU acceleration: the time complexity of the arrangement algorithm is O(n^2), so it will take a long time if the number of the nodes is large. So we spill the algorithm among several threads (users can still operate while the back end is calculating) and use the powerful ability for floating-point computation and parallel computation of GPU to accelerate the calculation. Taken multi-platform support into consideration, we use opencl as our programming language. The acceleration uses socket communication for data transfer. The front end send the amount of the nodes, the number and position of each node, the amount of the links and the number of nodes each edge connects to the calculation end. The calculation end spill the computation that the computation of each node is done in a single thread. Visit all the nodes and edges only once and we can get the acceleration of each node. When the computation is done, the calculation end sends every node’s position to the front end.
</p>
      <h3>Backend</h3>
      <div class="underline-small">
      </div>
				<h5>Framework</h5>
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
          <p>Our server applies automated unit testing to dealing with uploaded backend codes. It will test the basic legitimacy and function of the codes, including robustness testing with respect to illegitimate uploaded parameters, legitimacy testing on data legitimacy, status testing of the database and testing of function realizaton, etc.</p>

			<h3>Alogrithm</h3>
            <div class = "underline-small"></div>	
          <h5>Pathway Finder Alogrithm:</h5>
          <p>The software can search for paths between two selected nodes. We used a-stark short-path algorithm to achieve the function of discovering potential relationship in the biological network.
          A* algorithm is a search algorithm based on greedy, which can always visit fewer nodes and get a better solution at the same time.
          In this way, however, we get the shortest path in graph theory. By giving different and appopraite weights to different edges, the algorithm can find the shortest path in the sense of biology.</p>
          
          <h5>BLAST：</h5>
          <p>
We use two packages, namely, NCBI_Blast and the Python package called for NCBI_Blast. Different from NCBI, our alignment database combines RegulonDB and user-define databases. When the user inputs a sequence (such as a BioBrick sequence), Biopano will the node that shares the deepest homology with it in the server database, and show other nodes connected with it. Therefore, Biopano can show the nodes and regulations in the biological regulation network that probably has to do with the sequence (such as BioBrick sequece) the user inputs.
          </p>
     </div>

   
</div>
  </div>

<?php
require_once("foot.html");
?>
