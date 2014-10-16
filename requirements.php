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
      <div>
        <li>
         <h5>Bronze. The following 4 goals must be achieved:</h5>
         <p>Register the team, have a great summer, and have fun attending the Jamboree in Boston.</p>
         <p>Create and share a description of the team's project via the iGEM wiki.</p>
         <p>Present a Poster and Talk at the Regional Jamboree and World Championship Jamboree.</p>
         <p>Develop and make available via The Registry of Software Tools, an open source software tool that supports Synthetic Biology based on Standard Parts.</p>
         <p>您可以直接输入Standard Parts的编号，进而将其序列与我们数据库中的序列进行对比，分析其与目标生物体中现有调控关系的联系</p>
        </li>
        <li>
          <h5>Silver: In addition to the Bronze Medal requirements, the following 4 goals must be achieved:</h5>
          <p>！Demonstrate the relevance of your development for Synthetic Biology based on standard Parts.</p>
          <p>通过Part序列与我们数据库中的序列同源性，一定程度上可以预测将之导入目标生物体中可能造成的影响。</p>
          <p>!Provide a comprehensive and well-designed User Guide. (Be creative! An instructional video may work as well.)</p>
          <p>link用户手册</p>
          <p>!Provide detailed API documentation, preferably, automatically built from source code documentation (use tools like doxygen, yard, rdoc, naturaldocs, etc).</p>
          <p>!Demonstrate that you followed best practises in software development so that other developers can modify, use and reuse your code. Provide more than one realistic test case. Examples of best practices are automated unit testing and documentation of test coverage , bug tracking facilities, documentation of releases and changes between releases.</p>
        </li>
        <li>
          <h5>Gold: In addition to the Bronze and Silver Medal requirements, two additional goals must be achieved:</h5>
          <p>！Provide a convincing validation, testing the performance of the development -- experimentally (can be outsourced) or by other teams and users. Note, even if the algorithm or tool turns out not to work that well, the Gold requirement is fulfilled if the test is good and the analysis convincing. Validation may include: preferably experiments, informatics analysis (complexity, run time) of an algorithm, or user studies.</p>
        </li>  
        <li>
          <h5>And the second goal can be any one of the following:</h5>
          <p>！Make your software interact / interface with the Registry.</p>
          <p>！Re-use and further develop previous iGEM software projects (or parts thereof) or use and/or improvement of existing synthetic biology tools or frameworks.</p>
          <p>复用改进2013年的代码用于同源性比对</p>
          <p>！Develop a well documented library or API for other developers (rather than “only” a stand-alone app for end users.)</p>
          <p>！Support and use the SBOL and / or SBOLv standard.</p>
          <p>我们软件完美支持文件格式转为sbol</p>
          <p>iGEM projects involve important questions beyond the bench, for example relating to (but not limited to) ethics, sustainability, social justice, safety, security, or intellectual property rights. Describe an approach that your team used to address at least one of these questions. Evaluate your approach, including whether it allowed you to answer your question(s), how it influenced the team’s scientific project, and how it might be adapted for others to use (within and beyond iGEM). We encourage thoughtful and creative approaches, and those that draw on past Policy & Practice (formerly Human Practices) activities.</p>
        </li>  

      </div>

        <h4>Safety</h4>
        <div class="underline-small">   </div>
        <li>1. Are you using the iGEM Software repository at github.com/igemsoftware? If you have instead stored your code elsewhere, please explain where and why you have put it there. If your code is not in the iGEM repository, a re you using any version control system such as Git, CVS, or SVN?
Yes, we use the iGEM Software repository at github.com/igemsoftware.
        </li>2. Does your software store any private data supplied by the user? (For example: the user's name and email address, passwords, DNA sequences, circuit designs, etc.) If yes, please describe what kind of data is stored. If no, skip the rest of this question and move on to question 3.
We store the user's name, the email address(if he/she logs in using Gmail account)or the username(if logged in using Baidu account), and the user's  all data designed with our software.
Especially, we DO NOT store the user's password because we only allow users to log in with their Gmail account or Baidu account using OAuth2.0 ,
which is a very secure protocol describing a third-party loggin pattern.
        <li>3. Does your software include any other security features? Please describe them here.
We use OAuth technology in user system. So user can log in with their GOOGLE account or BAIDU account without telling us password.
        </li>
        <li>4. Does your software let the user create a design by choosing parts/genes from a list/database, such as the Registry? If so, which lists/databases are included? Is there any restriction on which parts/ genes the user can choose?
Yes, user can use database which built by our team to assist themself create a design. The database we build is the result of merging and reforming parts of KEGG,RegulonDB,Uniport.
        </li>
        <li>5. Does your software allow users to write new data into any public lists or databases? If so, do you check the new data for errors before allowing it to be written?
Yes, user can upload their data to our database anytime. Yes, we will check validation and format of data before they be written in backend.
        </li>
        <li>6. Does your software include any other features that encourage the user to create safe designs? Please describe them here.
No
        </li>
        <li>7. Is your team also doing biological work in a wet lab ?
No

        </li>
   
        <p></p>

        <h4>Collaboration</h4>
      <div class="underline-small">
        
      </div>
        <p>Background（生物学家的交流方式，研究领域分立，影响</p>
        <p>软件合作功能描述（配图，配案例）</p>
        <p>展望</p>
        <p>意义（增进联系，类比wikipedia，成果分享）</p>
        <p>用户的使用体验</p>
        <p>组委会提供的Meetup说明</p>
        <p>活动过程记录、在校学生旁听</p>
        <p>成果、合工大</p>
        <p>各队反馈</p>
  </div>
</div>
<?php

require_once("foot.html")
?>
