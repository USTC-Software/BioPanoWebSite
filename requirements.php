<?php
require_once("head.html")
?>
<style type="text/css">
  .main-content img {
padding: 0;
}
</style>
<div class="main-content">
   <div class="row large-12 columns large-centered">
        <p style="font-size:32px">Requirements</p>
        
      </div>
     <div class="row large-12 columns large-centered">
      <h4  id="medals">Medals</h4>
      <div class="underline-small">
	      </div>

     
     <h4><img src="img/medal/2014USTC-Bronze.png" width="60" height="60" alt="Bronze" >Bronze</h4>
     <p> The following 4 goals must be achieved:</p>

  
     
      <h5><img src="img/medal/2014USTC-check.png" width="30" height="30" alt="Complete" >
     Register the team, have a great summer, and have fun attending the Jamboree in Boston.
     </h5>
 


     
     <h5><img src="img/medal/2014USTC-check.png" width="30" height="30" alt="Complete" >
     Create and share a description of the team's project via the iGEM wiki.
     </h5>
   

 
       
     <h5><img src="img/medal/2014USTC-check.png" width="30" height="30" alt="Complete" >
      Present a Poster and Talk at the Regional Jamboree and World Championship Jamboree.
     </h5>
     


       
     <h5><img src="img/medal/2014USTC-check.png" width="30" height="30" alt="Complete" >
     Develop and make available via The Registry of Software Tools, an open source software tool that supports Synthetic Biology based on Standard Parts.
     </h5>
     You can directly enter the precise number of Standard Part, you can get its all types in BioBrick Assistant Windows.
      <div class="large-12 columns text-center">
      <img style="margin:1em" src="img/2014ustc-medal1.png">
        </div>    
        <p>&nbsp;</p>

    <div class="underline-tiny"></div>     

      <h4><img src="img/medal/2014USTC-Silver.png" width="60" height="60" alt="Sliver" >Silver</h4>
     <p> In addition to the Bronze Medal requirements, the following 4 goals must be achieved:</p>




     <h5><img src="img/medal/2014USTC-check.png" width="30" height="30" alt="Complete" >
    Demonstrate the relevance of your development for Synthetic Biology based on standard Parts.
     </h5>
     You can directly enter the precise number of Standard Part, you can get its types in BioBrick Assistant Windows .then you can use blast tool with the sequence from BioBrick Assistant.By comparing the homology between the sequence of the part and in our database, we could predict its impact on the target body when injected to some extent.
      <div class="large-12 columns text-center">
      <img style="margin:1em" src="img/2014ustc-medal2.png">
        </div>
    



      
     <h5><img src="img/medal/2014USTC-check.png" width="30" height="30" alt="Complete" >
    Provide a comprehensive and well-designed User Guide. (Be creative! An instructional video may work as well.)
     </h5>
     We have a complete user manual <a href="biopanohelp.pdf">here!</a>
  

   
       
     <h5><img src="img/medal/2014USTC-check.png" width="30" height="30" alt="Complete" >
    Provide detailed API documentation, preferably, automatically built from source code documentation (use tools like doxygen, yard, rdoc, naturaldocs, etc).
     </h5>
     We use toc to automatically produce api document.<a href="./api.html">here!</a>
      

 
          
          <h5><img src="img/medal/2014USTC-check.png" width="30" height="30" alt="Complete" >
          Demonstrate that you followed best practises in software development so that other developers can modify, use and reuse your code. Provide more than one realistic test case. Examples of best practices are automated unit testing and documentation of test coverage , bug tracking facilities, documentation of releases and changes between releases.
          </h5>
          <a href="bug.biopano.org">Problem feedback and bug tracking</a>: You can cast inquiry on us by GitHub, GitLab and YouTrack. Meanwhile, YouTrack is also used for bug tracking, ensuring your feedback goes to the developer as soon as possible. 
<br />
<a href="ci.biopano.org"> Automated Deployment</a>:Our server has automated deployment capabilities. Server-side applications are bound with the Product branch of Git. All codes pushed to the Product branch will be deployed to many servers over the world in ten seconds. In order to prevent fault codes from being deployed to the servers by mistake, all the testing branches will be deployed to the testing server real-timely to be tested by developers.
<br />
Unit Testing:Our server applies automated unit testing to dealing with uploaded backend codes. It will test the basic legitimacy and function of the codes, including robustness testing with respect to illegitimate uploaded parameters, legitimacy testing on data legitimacy, status testing of the database and testing of function realizaton, etc.
   
<p>&nbsp;</p>
             <div class="underline-tiny"></div>
     <h4><img src="img/medal/2014USTC-Gold.png" width="60" height="60" alt="Gold" >Gold</h4>
     <p> In addition to the Bronze and Silver Medal requirements, two additional goals must be achieved:</p>


 
      
     <h5><img src="img/medal/2014USTC-check.png" width="30" height="30" alt="Complete" >
   Provide a convincing validation, testing the performance of the development -- experimentally (can be outsourced) or by other teams and users. Note, even if the algorithm or tool turns out not to work that well, the Gold requirement is fulfilled if the test is good and the analysis convincing. Validation may include: preferably experiments, informatics analysis (complexity, run time) of an algorithm, or user studies.
     </h5>(update 2)
     algorithm pathway finder（ K short path search in our net） anylsis：
It is sometimes crucial to have more than one path between two nodes in a given network. In the event there are additional constraints, other paths different from the shortest path can be computed. To find the shortest path one can use shortest path algorithms such as Dijkstra’s algorithm or Bellman Ford algorithm and extend them to find more than one path. The K Shortest path routing algorithm is a generalization of the shortest path problem. The algorithm not only finds the shortest path, but also K other paths in order of increasing cost. K is the number of shortest paths to find.
A* algorithm is a search algorithm based on greedy, which can always visit fewer nodes and get a better solution at the same time. When we are searching, we always traversal a search tree, such as level traversal in bfs and preorder traversal in dfs. We will get the solution which is lowest in the search tree during bfs. But it is far from enough to judge only on depth. We can construct a heuristic function to judge whether the state is good or not, and then expand the good-state node to get a better solution more quickly.
In the k shortest path problem, 不妨设是从S到T的k短路，we can use the length of shortest path from node X to node T as node X’s heuristic function, which can be calculated in O((n+m)logn) using Dijkstra during the pretreatment of the algorithm. And we can make a function f as below:
f(x)=g(x)+h(x)
h(x) is X’s heuristic function, g(x) is the actual cost from S to X and f(x) represent the total cost needs at node X.We can expands the node x which f(x) is minimum, maintaining it using the a sorted priority queue to Ensure efficiency。When x equals t, we get a shortest solution except those we have got before. We can get the k shortest path using this approach efficiently.

  


       <h4>
         And the second goal can be any one of the following:
       </h4>


     
     
     <h5><img src="img/medal/2014USTC-check.png" width="30" height="30" alt="Complete" >
    Make your software interact / interface with the Registry.
     </h5>You can directly enter the precise number of Standard Part, you can get its types in BioBrick Assistant Windows .then you can use blast tool with the sequence from BioBrick Assistant.By comparing the homology between the sequence of the part and in our database, we could predict its impact on the target body when injected to some extent.
   
   <div class="large-12 columns text-center">
          <img style="margin:1em" src="img/2014ustc-medal1.png">
   </div>
        


    
     <h5><img src="img/medal/2014USTC-check.png" width="30" height="30" alt="Complete" >
    Re-use and further develop previous iGEM software projects (or parts thereof) or use and/or improvement of existing synthetic biology tools or frameworks.
     </h5>
     We use blast code from <a href="http://blast.ncbi.nlm.nih.gov/Blast.cgi">ncbi </a>to comparing the homology.
    

  

  
     <h5><img src="img/medal/2014USTC-check.png" width="30" height="30" alt="Complete" >
    Develop a well documented library or API for other developers (rather than “only” a stand-alone app for end users.)
     </h5>
     We use toc to automatically produce api document.<a href="./docs/">here!</a>
      



     <h5><img src="img/medal/2014USTC-check.png" width="30" height="30" alt="Complete" >
    Support and use the SBOL and / or SBOLv standard.
     </h5>
    Biopano supports file format conversion to sbol perfectly
     <div class="large-12 columns text-center">
     <img  style="margin:1em" src="img/2014ustc-medal3.png">
        </div>


        <h4 id="safety">Safety</h4>
        <div class="underline-small">   </div>
        <h4>1. Are you using the iGEM Software repository at github.com/igemsoftware? If you have instead stored your code elsewhere, please explain where and why you have put it there. If your code is not in the iGEM repository, a re you using any version control system such as Git, CVS, or SVN?
        </h4>
        <p>Yes, we use the iGEM Software repository at github.com/igemsoftware.
        </p>
        <h4> 2. Does your software store any private data supplied by the user? (For example: the user's name and email address, passwords, DNA sequences, circuit designs, etc.) If yes, please describe what kind of data is stored. If no, skip the rest of this question and move on to question 3.
        </h4>
 <p>We store the user's name, the email address(if he/she logs in using Gmail account)or the username(if logged in using Baidu account), and the user's  all data designed with our software.
Especially, we DO NOT store the user's password because we only allow users to log in with their Gmail account or Baidu account using OAuth2.0 ,
which is a very secure protocol describing a third-party loggin pattern.
         </p>
          <h4>3. Does your software include any other security features? Please describe them here. </h4>
          <p>
          We use OAuth technology in user system. So user can log in with their GOOGLE account or BAIDU account without telling us password.
        </p> 
       <h4> 4. Does your software let the user create a design by choosing parts/genes from a list/database, such as the Registry? If so, which lists/databases are included? Is there any restriction on which parts/ genes the user can choose?</h4>
        <p> 
Yes, user can use database which built by our team to assist themself create a design. The database we build is the result of merging and reforming parts of KEGG,RegulonDB,Uniport.
         </p>
         <h4>5. Does your software allow users to write new data into any public lists or databases? </h4>
          <p>If so, do you check the new data for errors before allowing it to be written?
Yes, user can upload their data to our database anytime. Yes, we will check validation and format of data before they be written in backend.
         </p>
          <h4>6. Does your software include any other features that encourage the user to create safe designs?Please describe them here. </h4>
         <p>No</p>
        
        <h4>7. Is your team also doing biological work in a wet lab ? </h4>
        <p>No</p>

        <h4 id="collaboration">Collaboration</h4>
      <div class="underline-small">
        
      </div>
      <p>While preparing for iGEM, we always hope we can accomplish more and more people can join this great project. Luckily, by cooperation with others, all these hopes come ture.</p>
      <li>Collaboration with professors</li> 
      <p>While completing our project, we encountered all kinds of problems, of which some could hardly solve by ourselves. We solved them by discussing and cooperating with many professors of USTC. At the same time, we knew more about the original thoughts of synthetic biological researchers. So we tried to combine their needs and our project, hoping we could also help them. Now, we believe that we realized our original intention.</p>
        <li>Collaboration with Chinese iGEMers</li>
        <p>One reason why iGEM competition is unforgettable is that it makes us know more like-minded people. This year, we hoped iGEM teams could communicate more with each other, so we organized iGEM meetup this summer. Teams from China got familiar through the meetup, and we kept in touch after it. We not only got to know each other by frequent communication, but helped each other with their problems to bring about good results for us all as well.</p>
        <li>Collaboration with HFUT_CHINA</li>
        <p>While enjoying iGEM, we hoped more people could join us. This year, HFUT_CHINA sent a team for iGEM for the first time. As a team new to iGEM, it would surely encounter more problems. As their neighbor, we kept in touch with them and did everything we could to help them with their project. Through the course, we got to know a lot of people enthusiastic about iGEM of our age. We are glad that they also join iGEM.</p>
  </div>
</div>
</div>
<?php

require_once("foot.html")
?>
