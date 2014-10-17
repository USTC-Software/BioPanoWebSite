<?php
require_once("head.html")
?>
<div class="main-content">
   <div class="row large-12 columns large-centered">
        <p style="font-size:32px">Requirements</p>
        
      </div>
     <div class="row large-12 columns large-centered">
       <h4>Medals</h4>
      <div class="underline-small">
      </div>
     <h4>Bronze. The following 4 goals must be achieved:</h4>
     <p>
     ! Register the team, have a great summer, and have fun attending the Jamboree in Boston.
     </p>
     <p>
   !Create and share a description of the team's project via the iGEM wiki.
   </p>
     <p>
   !Present a Poster and Talk at the Regional Jamboree and World Championship Jamboree.
   </p>
     <p>
   ?Develop and make available via The Registry of Software Tools, an open source software tool that supports Synthetic Biology based on Standard Parts.
   </p>
    <p>
     You can directly enter the number of numberStandard Part, then BioPano compare its sequence with the sequences in our database, analyze its existing regulatory relations contact with the target organism
</p>
    
  <h4>Silver: In addition to the Bronze Medal requirements, the following 4 goals must be achieved: </h4>




        <h4>Safety</h4>
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

        <h4>Collaboration</h4>
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
<?php

require_once("foot.html")
?>
