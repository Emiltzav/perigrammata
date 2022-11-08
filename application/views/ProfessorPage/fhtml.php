

<div style="padding:0 10vw;display: block;max-width: 100%;height: auto; ">
    <br>
    <h3 style="text-align:center;"><?php echo $Course['CourseTitle'] ?> <i>(<?php echo $Course['LessonCode']?>)</i></h3>
    <br>
    <br>
    <i>
        <?php
            
            if ($Course['EducationId']== 4 || $Course['EducationId']== 1 ){ //undergraduate
                echo  t_level1 .' ';
            }
            else if ($Course['EducationId']== 2 || $Course['EducationId']== 5 ){ //postgraduate
                echo  t_level2 .' ';
            }else if ($Course['EducationId']== 3 || $Course['EducationId']== 6 ){ //phd
                echo  t_level3 .' ';
            }
            
            
        ?>

        <?php 
           
            if($_SESSION['lang']== 'gr'){
                echo  t_course .', ' . $Course['SchoolName']  .', '.$Course['Semester'].'<sup>ο</sup> '.t_semester1  ; 
            }else{
                echo  t_course .', ' . $Course['SchoolName']  .', '.t_semester1.' No '. $Course['Semester'] ; 
            }
        ?> 
    </i>
    <br>
    <br>

    <div style="font-weight:bold;">
        <u><?php echo t_course_content1." :"  ;?></u>
    </div>
    <?php 
        echo str_replace(array("\r\n","\r","\n"),'<br>',trim($Course['Content']));
        
    ?>
    <br>
    <br>
    <div style="display:inline-block;">
        <u>
            <div style="font-weight:bold;">
                    <?php 
                    echo t_learning_outcomes." : "   ;?>
            </div>
        </u>
        <?php echo  t_learning_outcomes_begin;?>
    </div>  
    
    <?php
        if(count($CourseOutcome)==0){
            echo '<br>';
        }
        if (count($CourseOutcome)!=0){
            echo '<ul style="list-style-type:disc">';
        }
        foreach ($CourseOutcome as $feature) {
            echo  '<li>&nbsp;<i>' . $feature['Verbs'].'</i> '. $feature['Sentence'] . '</li>';
        }
        if(count($CourseOutcome)!=0){
            echo '</ul>';
        }
    ?>

    <br>

    <div style="font-weight:bold;">
       <u> <?php echo t_general_capabilities." :"  ;?></u>
    </div>
    <?php echo t_general_capabilities0." :" ?>
    <?php
        if (count($CourseOutcome)!=0){
            echo '<ul style="list-style-type:disc">';
        }
        foreach ($CourseSkills as $feature) {           
            echo  '<li>&nbsp;' . $feature . '</li>';
        }
        if(count($CourseOutcome)!=0){
            echo '</ul>';
        }
    ?>

    <br>
    <div style="font-weight:bold;">
       <u> <?php echo t_use_of_technlogy1." :"  ;?></u>
    </div>
    
    <table>
        <?php 
        $string='';
        foreach($CourseMethod as $Id=>$row){
           echo '<tr>';
           if ($string!=$row['UseOfTechnologies']){
                echo '<td><u>' . $row['UseOfTechnologies'].':</u></td>';
           }
           echo '<tr>';
           echo '<ul>';
           echo '<td>&nbsp;&nbsp;&nbsp;&nbsp;' . $row['TextA'].'</td>';
           echo '<td>&nbsp;&nbsp;&nbsp;&nbsp;' . $row['TextB'].'</td>';
           echo '<td>&nbsp;&nbsp;&nbsp;&nbsp;' . $row['TextC'].'</td>';
           echo '</ul>';
           echo '</tr>';

           echo '</tr>';
           $string=$row['UseOfTechnologies'];

        }
        ?>
    </table>
    <br>

    <div style="font-weight:bold;">
       <u> <?php  echo t_teaching_organisation0." : "  ;?></u>
    </div>
    <?php  echo t_workload ;?>
    <br>

    <table style="border: 1px solid black;">
        <?php foreach($CourseActivities as $Id=>$row){
        if ($row['Hours'] !=0){
            if($_SESSION['lang']== 'gr'){
                $mo = str_replace('.',',',number_format($row['Hours']/13,1));
            }else{
                $mo = number_format($row['Hours']/13,1);
            }
           echo '<tr>';
           echo '<td style="border: 1px solid black;">' . $row['Activities'].' </td>';
           echo '<td style="border: 1px solid black;">' .$row['Hours'].' ' . t_hours .' ('.$mo. ' '.t_hours_pweek .')' .'</td>';
           echo '</tr>';
        }

        }
        ?>
    </table>
    
    
    <?php 
        if($Course['OrganizationComment']!=''){?>
            <br>
            <i><?php echo t_organisation_comment .' : ';?>  </i>
            <br>
         <?php   echo  str_replace(array("\r\n","\r","\n"),'<br>',trim($Course['OrganizationComment']));
            echo '<br>';
        }
    ?>
    <br>

    <div style="font-weight:bold;">
       <u> <?php  echo t_assess." : "  ;?></u>
    </div>
    <?php  echo t_assessment1 .':';?>
  
    
    
    <table >
        <?php foreach($CourseAssessment as $Id=>$row){
           
            echo '<tr>';
            echo '<td>' . $row['CategoryName'].' </td>';
            echo '<td>' . $row['Percentage'] .'%'.'</td>';
            if ($row['SubcategoryName']!=''){
                echo '<td>' .'('. $row['SubcategoryName'] .')'.'</td>';
            }
            echo '</tr>';
        }
        ?>
    </table>   

   
    <?php 
        if($Course['AssessmentComment']!=''){?>
            <br>
            <i><?php echo t_assessment_comment .' : ';?>  </i>
            <br>
            <?php
            echo str_replace(array("\r\n","\r","\n"),'<br>',trim($Course['AssessmentComment']));         
            echo '<br>';    
        }

     ?>
    
    <br>
    <div style="font-weight:bold;">
       <u> <?php  echo t_recommended_bibliography0." : "  ;?></u>
    </div>
    <?php   echo str_replace(array("\r\n","\r","\n"),'<br>',trim($Course['Bibliography']));?>
    <br> 


</div>

<!--Modal: Login with Avatar Form-->
<div class="modal fade" id="modalLoginAvatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable cascading-modal modal-avatar modal-lg mt-2" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Header-->
      <div class="modal-header mt-3 d-flex justify-content-center">
      <i class="fas fa-4x fa-code"></i>
      <button class="btn btn-cyan ml-5 " id="button1" onclick="CopyToClipboard('div1')" ><?php echo t_copy?> </button>
      </div>
      <!--Body-->
      <div class="modal-body mb-0">

        

        <div class="md-form ml-0 mr-0" id="div1">

            <xmp style="white-space: pre-wrap;">
                <div style="padding:0 10vw;display: block;max-width: 100%;height: auto; ">
                    <br>
                    <h3 style="text-align:center;"><?php echo $Course['CourseTitle'] ?> <i>(<?php echo $Course['LessonCode']?>)</i></h3>
                    <br>
                    <br>
                    <i>
                        <?php
                            
                            if ($Course['EducationId']== 4 || $Course['EducationId']== 1 ){ //undergraduate
                                echo  t_level1 .' ';
                            }
                            else if ($Course['EducationId']== 2 || $Course['EducationId']== 5 ){ //postgraduate
                                echo  t_level2 .' ';
                            }else if ($Course['EducationId']== 3 || $Course['EducationId']== 6 ){ //phd
                                echo  t_level3 .' ';
                            }
                            
                            
                        ?>

                        <?php 
                        
                            if($_SESSION['lang']== 'gr'){
                                echo  t_course .', ' . $Course['SchoolName']  .', '.$Course['Semester'].'<sup>ο</sup> '.t_semester1  ; 
                            }else{
                                echo  t_course .', ' . $Course['SchoolName']  .', '.t_semester1.' No '. $Course['Semester'] ; 
                            }
                        ?> 
                    </i>
                    <br>
                    <br>

                    <div style="font-weight:bold;">
                        <u><?php echo t_course_content1." :"  ;?></u>
                    </div>
                    <?php 
                        echo str_replace(array("\r\n","\r","\n"),'<br>',trim($Course['Content']));
                        
                    ?>
                    <br>
                    <br>
                    <div style="display:inline-block;">
                        <u>
                            <div style="font-weight:bold;">
                                    <?php 
                                    echo t_learning_outcomes." : "   ;?>
                            </div>
                        </u>
                        <?php echo  t_learning_outcomes_begin;?>
                    </div>  
                    
                    <?php
                        if(count($CourseOutcome)==0){
                            echo '<br>';
                        }
                        if (count($CourseOutcome)!=0){
                            echo '<ul style="list-style-type:disc">';
                        }
                        foreach ($CourseOutcome as $feature) {
                            echo  '<li>&nbsp;<i>' . $feature['Verbs'].'</i> '. $feature['Sentence'] . '</li>';
                        }
                        if(count($CourseOutcome)!=0){
                            echo '</ul>';
                        }
                    ?>

                    <br>

                    <div style="font-weight:bold;">
                    <u> <?php echo t_general_capabilities." :"  ;?></u>
                    </div>
                    <?php echo t_general_capabilities0." :" ?>
                    <?php
                        if (count($CourseOutcome)!=0){
                            echo '<ul style="list-style-type:disc">';
                        }
                        foreach ($CourseSkills as $feature) {           
                            echo  '<li>&nbsp;' . $feature . '</li>';
                        }
                        if(count($CourseOutcome)!=0){
                            echo '</ul>';
                        }
                    ?>

                    <br>
                    <div style="font-weight:bold;">
                    <u> <?php echo t_use_of_technlogy1." :"  ;?></u>
                    </div>
                    
                    <table>
                        <?php 
                        $string='';
                        foreach($CourseMethod as $Id=>$row){
                        echo '<tr>';
                        if ($string!=$row['UseOfTechnologies']){
                                echo '<td><u>' . $row['UseOfTechnologies'].':</u></td>';
                        }
                        echo '<tr>';
                        echo '<ul>';
                        echo '<td>&nbsp;&nbsp;&nbsp;&nbsp;' . $row['TextA'].'</td>';
                        echo '<td>&nbsp;&nbsp;&nbsp;&nbsp;' . $row['TextB'].'</td>';
                        echo '<td>&nbsp;&nbsp;&nbsp;&nbsp;' . $row['TextC'].'</td>';
                        echo '</ul>';
                        echo '</tr>';

                        echo '</tr>';
                        $string=$row['UseOfTechnologies'];

                        }
                        ?>
                    </table>
                    <br>

                    <div style="font-weight:bold;">
                    <u> <?php  echo t_teaching_organisation0." : "  ;?></u>
                    </div>
                    <?php  echo t_workload ;?>
                    <br>

                    <table style="border: 1px solid black;">
                        <?php foreach($CourseActivities as $Id=>$row){
                        if ($row['Hours'] !=0){
                            if($_SESSION['lang']== 'gr'){
                                $mo = str_replace('.',',',number_format($row['Hours']/13,1));
                            }else{
                                $mo = number_format($row['Hours']/13,1);
                            }
                        echo '<tr>';
                        echo '<td style="border: 1px solid black;">' . $row['Activities'].' </td>';
                        echo '<td style="border: 1px solid black;">' .$row['Hours'].' ' . t_hours .' ('.$mo. ' '.t_hours_pweek .')' .'</td>';
                        echo '</tr>';
                        }

                        }
                        ?>
                    </table>
                    
                    
                    <?php 
                        if($Course['OrganizationComment']!=''){?>
                            <br>
                            <i><?php echo t_organisation_comment .' : ';?>  </i>
                            <br>
                        <?php   echo  str_replace(array("\r\n","\r","\n"),'<br>',trim($Course['OrganizationComment']));
                            echo '<br>';
                        }
                    ?>
                    <br>

                    <div style="font-weight:bold;">
                    <u> <?php  echo t_assess." : "  ;?></u>
                    </div>
                    <?php  echo t_assessment1 .':';?>
                
                    
                    
                    <table >
                        <?php foreach($CourseAssessment as $Id=>$row){
                        
                            echo '<tr>';
                            echo '<td>' . $row['CategoryName'].' </td>';
                            echo '<td>' . $row['Percentage'] .'%'.'</td>';
                            if ($row['SubcategoryName']!=''){
                                echo '<td>' .'('. $row['SubcategoryName'] .')'.'</td>';
                            }
                            echo '</tr>';
                        }
                        ?>
                    </table>   

                
                    <?php 
                        if($Course['AssessmentComment']!=''){?>
                            <br>
                            <i><?php echo t_assessment_comment .' : ';?>  </i>
                            <br>
                            <?php
                            echo str_replace(array("\r\n","\r","\n"),'<br>',trim($Course['AssessmentComment']));         
                            echo '<br>';    
                        }

                    ?>
                    
                    <br>
                    <div style="font-weight:bold;">
                    <u> <?php  echo t_recommended_bibliography0." : "  ;?></u>
                    </div>
                    <?php   echo str_replace(array("\r\n","\r","\n"),'<br>',trim($Course['Bibliography']));?>
                    <br> 


                </div>
                </xmp>
          <!-- <label data-error="wrong" data-success="right" for="form29" class="ml-0">Enter password</label> -->
        </div>
                  
        
      </div>

    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: Login with Avatar Form-->
<br>
<div class="text-center">
  <a href="" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#modalLoginAvatar"><?php echo t_html?></a>
</div>
<br>
<br>
