
<?php
require_once("head.html");
?>
<div class="main-content">
     <div class="row large-12 columns large-centered">
        <p style="font-size:32px">Technical Introduction</p>  
      </div>
   
   
      <div class="row">
        <div class="large-12 columns large-centered">
			<h3>Front End</h3>
			<div class="underline-small"></div>
      <p>The work of front-end is various and complicated. We generally divided it into 4 large parts.<br /><br /></p>
			<p>The front is mainly used to display data from the back-end and provide a user-friendly interface. In order to achieve a better display of graphics, and a better user interaction, we choose to use Actionscript3 programming language. The exported .air package can run on any virtual machine which supports Adobe air.</p>    
      <ul>
        <li>UI Framework</li>
        <li>Canvas System</li>
        <li>Project & Cloud System</li>
        <li>Functional Units</li>
      </ul>
      <p></p>
      <p>In concise, users can create a biological network on the Canvas, save or browse their work as Projects, get or share biological information by Cloud, and analyze biological data with Functional Units, all of which happen in the friendly environment provided by the UI Framework.</p>
      <p></p>
      <p>We based our program on Adobe Air 15.0 platform, with programming language Action Script 3.0 (AS 3.0). AS 3.0 is powerful in vector illustration processing, and provides rich interactions and responsiveness, these two features meet the demand of our project exactly.</p>
      <p></p>
      <p>The major techniques we used are as following: Smart Canvas, Operation Track, Multi-Threading and Heterogeneous computing.</p>
      <p></p>
      <div class="underline-tiny"> </div>
      <h5>UI Framework</h5>
      <p>In order to provide a better user experience, we designed a completely new UI Framework, in which most of the operations can be directly performed while the interface keeps simple and tidy. Meanwhile, this new framework aims for demonstrating information clearly, so there are fewer containers but richer contents. We also added guiding animation responding to most operations so that all the processes are smooth and easy to understand.</p>
      <p></p>
      <div class="underline-tiny"> </div>
      <h5>Canvas System (Smart Canvas)</h5>
      <p>The canvas to display the biological network is the most important part of this software, so this receives the most concern. A simple canvas with all objects sticking on could not meet the demand of a boundless and highly complicated visual network. So we need to design the structure of both data and displaying object to guarantee the capability of performing mass information while consuming limited system resources. After several trials and analyses, we build our canvas in two major layers and five sub layers:</p>
      <p></p>
      <ul>
        <li>1. Node Layer
          <ul>
            <li>a) Float layer</li>
            <li>b) Compressed partitioned layer</li>
          </ul>
        </li>
        <li>2. Link Layer
          <ul>
            <li>a) Fast redraw layer</li>
            <li>b) Float layer</li>
            <li>c) Compressed layer</li>
          </ul>
        </li>
      </ul>
      <p>For float layer, objects exist independently, which means they have their own RAM and Graphic. These independent objects have many event listeners that can interact with users easily. Specifically, users can simply move, double-click and edit them. Though a few dozens of objects working in this way together will be quite well, more (thousands of) objects exist in the float layer at the same time will consume a great amount of resources with an unacceptable low speed.</p>
      <p></p>
      <p>A biological network can be huge and highly convoluted. To meet the requirement of higher efficiency, we use compressed layer, on which objects are drawn together as one or several (partitioned) bitmaps, to solve this problem. These bitmaps draw fast with GPU acceleration and cost much fewer resources, but they are not interactive. So a significant task we have done is to translate an operation towards an object drawn in compressed layer to the real object by calculating its geometry characteristic. Once a focus intension is traced, the object will emerge to the float layer to interact with the user, and when it loses focus, it will submerge into the compressed layer again and the RAM space will be cleared.</p>
      <p></p>
      <p>In most of time, objects stay in compressed layers. But there is still another problem: the graph may be too large to draw at one time while most part of the graph is out of screen. So we use partitioned bitmap blocks (for nodes) and fast drawing layer (for links) in place of one huge bitmap, and redrawing only happens to the blocks (for nodes) or the range (for lines) shown on the screen.</p>
      <p></p>
      <p>With all these methods, we could save over 90% costs of system resources while providing an enjoyable user experience.</p>
      <div class="underline-tiny"> </div>
      <h5>Project System</h5>
      <p>Project is the basic unit to manage a biological network. Three kinds of information are saved in a project:</p>
      <ul>
        <li>1. Node information</li>
        <li>2. Link information</li>
        <li>3. Project information</li>
      </ul>
      <p>You can import nodes and links to the project from cloud database or add yours; both can be saved into one project. Meanwhile, two ways are provided to store a project, storing locally and on cloud.</p>
      <p></p>
      <p>For a local project, information saved as an XML file, so you can open, save or copy it like any other kind of document.</p>
      <p></p>
      <p>Building projects on cloud is strongly recommended, for not only these projects can be open and edit on any computer with your account, but the existence of the nodes and links in the project are recorded in the global biological network database, in which all the nodes and links exist together as well. With more projects uploaded to the cloud, the global database will be extended, thus more information will be provided to users and an ultimate biological network will be built up someday.</p>
      <p></p>
      <p>With projects on cloud, researchers worldwide will be able to share and quote the findings of each other or directly build one project together by registering as colleagues. For more information about project management, see documentation of the Back-End.</p>
      <div class="underline-tiny"> </div>
      <h5>Functional Units</h5>
      <p>BioBrick Assistant: BioBrick Assistant will get the BioPart in the form of XML from the official website when the user inputs keywords. Then we extract the important information by using Actionscript XML processing functions in the form of a table.</p>
      <p></p>
      <p>Google API: When the user inputs the keyword, it will be searched on Google. Then we parse the returned HTML, and save the title, author, abstract, and URL of the literature, which is convenient for the user.</p>
      <p></p>
      <p>Layout Algorithm:</p>
      <ul>
        <li>1. even layout: First we calculate the border region which the user selected, namely the minimum and maximum of X and Y. So that we can get the height and width of the area. During the process, the number of nodes is gotten. Then we select the value of m and n as below: m, n are integers, m / n is closest to the width / height and m*n is no smaller than the number of the nodes. After m and n are set, the nodes will be arranged that the horizontal interval between horizontally adjacent nodes is width / m, and the vertical interval between vertically adjacent nodes is height / n.</li>
        <li>2. plasmid arrangement: the arrangement of the radius of the circle size is in proportion to the number of nodes selected. Node will be sorted according to the type and arranged on the circle.</li>
        <li>3. force-directed arrangement: Imagine that we assign each node with a positive charge, those nodes are mutually exclusive, and the repulsive force is inversely proportional to the square of the distance. Imagine that every edge is a spring, the force it applies on the nodes at its ends is proportional to the length of the spring. By calculating the force applied to each node, we can determine the direction and magnitude of its displacement. This process is called an iteration. After fifty times of iteration, all the nodes will be in steady state. We make their positions now their final positions for arrangement. The parameters of gravitation and repulsion are determined by experiments. The advantage of the algorithm is that it can arrange the graph like a tree and reduce the cross of edges greatly to show the relationships among the nodes more lucidly.
<br />Force-directed algorithm and GPU acceleration: the time complexity of the arrangement algorithm is O(n^2), so it will take a long time if the number of the nodes is large. So we spill the algorithm among several threads (users can still operate while the back end is calculating) and use the powerful ability for floating-point computation and parallel computation of GPU to accelerate the calculation. Taken multi-platform support into consideration, we use opencl as our programming language. The acceleration uses socket communication for data transfer. The front end send the amount of the nodes, the number and position of each node, the amount of the links and the number of nodes each edge connects to the calculation end. The calculation end spill the computation that the computation of each node is done in a single thread. Visit all the nodes and edges only once and we can get the acceleration of each node. When the computation is done, the calculation end sends every node’s position to the front end.
</li>
      </ul>
      <p></p>
      <h3>Back End</h3>
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
