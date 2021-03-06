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

     
     <h4><img src="http://2014.igem.org/wiki/images/4/4c/2014ustc-Bronze.png" width="60" height="60" alt="Bronze" >Bronze</h4>
     <p> The following 4 goals must be achieved:</p>

  
     
      <h5><img src="http://2014.igem.org/wiki/images/c/c1/Hfut-A.png" width="30" height="30" alt="Complete" >
     Register the team, have a great summer, and have fun attending the Jamboree in Boston.
     </h5>
 


     
     <h5><img src="http://2014.igem.org/wiki/images/c/c1/Hfut-A.png" width="30" height="30" alt="Complete" >
     Create and share a description of the team's project via the iGEM wiki.
     </h5>
   

 
       
     <h5><img src="http://2014.igem.org/wiki/images/c/c1/Hfut-A.png" width="30" height="30" alt="Complete" >
      Present a Poster and Talk at the Regional Jamboree and World Championship Jamboree.
     </h5>
     


       
     <h5><img src="http://2014.igem.org/wiki/images/c/c1/Hfut-A.png" width="30" height="30" alt="Complete" >
     Develop and make available via The Registry of Software Tools, an open source software tool that supports Synthetic Biology based on Standard Parts.
     </h5>
     You can directly enter the precise number of Standard Part, you can get its all types in BioBrick Assistant Windows.
      <div class="large-12 columns text-center">
      <img style="margin:1em" src="http://2014.igem.org/wiki/images/c/ce/2014ustc-medal1.png">
        </div>    
        <p>&nbsp;</p>

    <div class="underline-tiny"></div>     

      <h4><img src="http://2014.igem.org/wiki/images/c/c6/2014ustc-Silver.png" width="60" height="60" alt="Sliver" >Silver</h4>
     <p> In addition to the Bronze Medal requirements, the following 4 goals must be achieved:</p>




     <h5><img src="http://2014.igem.org/wiki/images/c/c1/Hfut-A.png" width="30" height="30" alt="Complete" >
    Demonstrate the relevance of your development for Synthetic Biology based on standard Parts.
     </h5>
     <p>You can directly enter the precise number of Standard Part, you can get its types in BioBrick Assistant Windows .then you can use blast tool with the sequence from BioBrick Assistant.By comparing the homology between the sequence of the part and in our database, we could predict its impact on the target body when injected to some extent.</p>
      <div class="large-12 columns text-center">
      <img style="margin:1em" src="http://2014.igem.org/wiki/images/e/ee/2014ustc-medal2.png">
        </div>
    



      
     <h5><img src="http://2014.igem.org/wiki/images/c/c1/Hfut-A.png" width="30" height="30" alt="Complete" >
    Provide a comprehensive and well-designed User Guide. (Be creative! An instructional video may work as well.)
     </h5>
     <p>We have a complete user manual <a href="biopanohelp.pdf">here!</a></p>
  

   
       
     <h5><img src="http://2014.igem.org/wiki/images/c/c1/Hfut-A.png" width="30" height="30" alt="Complete" >
    Provide detailed API documentation, preferably, automatically built from source code documentation (use tools like doxygen, yard, rdoc, naturaldocs, etc).
     </h5>
     <p>We use toc to automatically produce api document. <a href="./api.html">Here!</a></p>
      

 
          
          <h5><img src="http://2014.igem.org/wiki/images/c/c1/Hfut-A.png" width="30" height="30" alt="Complete" >
          Demonstrate that you followed best practises in software development so that other developers can modify, use and reuse your code. Provide more than one realistic test case. Examples of best practices are automated unit testing and documentation of test coverage , bug tracking facilities, documentation of releases and changes between releases.
          </h5>
          <p><b><a href="http://bug.biopano.org">Problem feedback and bug tracking</a>:</b> You can cast inquiry on us by GitHub, GitLab and YouTrack. Meanwhile, YouTrack is also used for bug tracking, ensuring your feedback goes to the developer as soon as possible. 
<br /><br />
<b><a href="http://ci.biopano.org"> Automated Deployment</a>:</b> Our server has automated deployment capabilities. Server-side applications are bound with the Product branch of Git. All codes pushed to the Product branch will be deployed to many servers over the world in ten seconds. In order to prevent fault codes from being deployed to the servers by mistake, all the testing branches will be deployed to the testing server real-timely to be tested by developers.
<br /><br />
<b>Unit Testing:</b> Our server applies automated unit testing to dealing with uploaded back end codes. It will test the basic legitimacy and function of the codes, including robustness testing with respect to illegitimate uploaded parameters, legitimacy testing on data legitimacy, status testing of the database and testing of function realizaton, etc.</p>
   
<p>&nbsp;</p>
             <div class="underline-tiny"></div>
     <h4><img src="http://2014.igem.org/wiki/images/8/88/2014ustc-Gold.png" width="60" height="60" alt="Gold" >Gold</h4>
     <p> In addition to the Bronze and Silver Medal requirements, two additional goals must be achieved:</p>


 
      
     <h5><img src="http://2014.igem.org/wiki/images/c/c1/Hfut-A.png" width="30" height="30" alt="Complete" >
   Provide a convincing validation, testing the performance of the development -- experimentally (can be outsourced) or by other teams and users. Note, even if the algorithm or tool turns out not to work that well, the Gold requirement is fulfilled if the test is good and the analysis convincing. Validation may include: preferably experiments, informatics analysis (complexity, run time) of an algorithm, or user studies.
     </h5>
  <p><b>Analysis of pathway finder (k-shortest pathway search):</b><br />
We use a specail heuristic algorithm , <a href="http://en.wikipedia.org/wiki/A*_search_algorithm">A* search algorithm</a>, to find  more than one path connected two nodes in a given network.The run time of A* depends on structure of the given network. The space complexity is the number of edges plus the number of nodes. In our back end, we test this algorithm. The average of time which database reading costs is 1"40, the average of time which Vars initialization costs is 0"70, the average of time which <a href="http://en.wikipedia.org/wiki/Shortest_Path_Faster_Algorithm">SPFA(abbreviation for Shortest Path Faster Algorithm)</a> costs is 0"37, and the average of time which Serialize costs is 0"21.</p> 


       <h4>
         And the second goal can be any one of the following:
       </h4>


     
     
     <h5><img src="http://2014.igem.org/wiki/images/c/c1/Hfut-A.png" width="30" height="30" alt="Complete" >
    Make your software interact / interface with the Registry.
     </h5><p>You can directly enter the precise number of Standard Part, you can get its types in BioBrick Assistant Windows .then you can use blast tool with the sequence from BioBrick Assistant.By comparing the homology between the sequence of the part and in our database, we could predict its impact on the target body when injected to some extent.</p>
   
   <div class="large-12 columns text-center">
          <img style="margin:1em" src="http://2014.igem.org/wiki/images/c/ce/2014ustc-medal1.png">
   </div>
        


    
     <h5><img src="http://2014.igem.org/wiki/images/c/c1/Hfut-A.png" width="30" height="30" alt="Complete" >
    Re-use and further develop previous iGEM software projects (or parts thereof) or use and/or improvement of existing synthetic biology tools or frameworks.
     </h5>
     <p>We use blast code from <a href="http://blast.ncbi.nlm.nih.gov/Blast.cgi">ncbi </a>to comparing the homology.</p>
    

  

  
     <h5><img src="http://2014.igem.org/wiki/images/c/c1/Hfut-A.png" width="30" height="30" alt="Complete" >
    Develop a well documented library or API for other developers (rather than “only” a stand-alone app for end users.)
     </h5>
     <p>We use toc to automatically produce api document. <a href="./docs/">Here!</a></p>
      



     <h5><img src="http://2014.igem.org/wiki/images/c/c1/Hfut-A.png" width="30" height="30" alt="Complete" >
    Support and use the SBOL and / or SBOLv standard.
     </h5>
    <p>Biopano supports file format conversion to sbol perfectl</p>
     <div class="large-12 columns text-center">
     <img  style="margin:1em" src="http://2014.igem.org/wiki/images/d/dd/2014ustc-medal3.png">
        </div>

				<p></p>
        <h4 id="safety">Safety</h4>
        <div class="underline-small">   </div>
        <h5>1. Are you using the iGEM Software repository at github.com/igemsoftware? If you have instead stored your code elsewhere, please explain where and why you have put it there. If your code is not in the iGEM repository, a re you using any version control system such as Git, CVS, or SVN?
        </h5>
        <p>Yes, we use the iGEM Software repository at github.com/igemsoftware.
        </p>
        <h5> 2. Does your software store any private data supplied by the user? (For example: the user's name and email address, passwords, DNA sequences, circuit designs, etc.) If yes, please describe what kind of data is stored. If no, skip the rest of this question and move on to question 3.
        </h5>
 <p>We store the user's name, the email address (if he/she logs in using Gmail account) or the username (if logged in using Baidu account), and the user's  all data designed with our software.
Especially, we DO NOT store the user's password because we only allow users to log in with their Gmail account or Baidu account using OAuth2.0 ,
which is a very secure protocol describing a third-party login pattern.
         </p>
          <h5>3. Does your software include any other security features? Please describe them here. </h5>
          <p>
          We use OAuth technology in user system. So users can log in with their GOOGLE account or BAIDU account without telling us their passwords.
        </p> 
       <h5> 4. Does your software let the user create a design by choosing parts/genes from a list/database, such as the Registry? If so, which lists/databases are included? Is there any restriction on which parts/ genes the user can choose?</h5>
        <p> 
Yes, users can use database built by our team to assist themself to create a design. The database we build is the result of merging and reforming parts of KEGG, RegulonDB, Uniport.
         </p>
         <h5>5. Does your software allow users to write new data into any public lists or databases? If so, do you check the new data for errors before allowing it to be written?</h5>
          <p>
Yes, users can upload their data to our database anytime.<br /><br />Yes, we will check validation and format of data before it is written in the back end.
         </p>
          <h5>6. Does your software include any other features that encourage the user to create safe designs? Please describe them. </h5>
         <p>No.</p>
        
        <h5>7. Is your team also doing biological work in a wet lab ? </h5>
        <p>No.</p>
				<p></p>
        <h4 id="collaboration">Collaboration</h4>
      <div class="underline-small">
        
      </div>
      <p>While preparing for iGEM, we always hope we can accomplish more and more people can join this great project. Luckily, by cooperation with others, all these hopes come ture.</p>
      <li>Collaboration with professors</li> 
      <p></p>
      <p>While completing our project, we encountered all kinds of problems, of which some could hardly solve by ourselves. We solved them by discussing and cooperating with many professors of USTC. At the same time, we knew more about the original thoughts of synthetic biological researchers. So we tried to combine their needs and our project, hoping we could also help them. Now, we believe that we realized our original intention.</p>
        <li>Collaboration with Chinese iGEMers</li>
        <p></p>
        <p>One reason why iGEM competition is unforgettable is that it makes us know more like-minded people. This year, we hoped iGEM teams could communicate more with each other, so we organized iGEM meetup this summer. Teams from China got familiar through the meetup, and we kept in touch after it. We not only got to know each other by frequent communication, but helped each other with their problems to bring about good results for us all as well.</p>
        <li>Collaboration with HFUT_CHINA</li>
        <p></p>
        <p>While enjoying iGEM, we hoped more people could join us. This year, HFUT_CHINA sent a team for iGEM for the first time. As a team new to iGEM, it would surely encounter more problems. As their neighbor, we kept in touch with them and did everything we could to help them with their project. Through the course, we got to know a lot of people enthusiastic about iGEM of our age. We are glad that they also join iGEM.</p>
  </div>
</div>
</div>
<?php

require_once("foot.html")
?>
