
<div class="container mycontainer1 py-2 ">
    <div class="text-center mt-2 animated fadeIn  slower">  <img  src="<?php echo URL; ?>/public/img/logo.png" height="40" width="65" alt="TUC"></div>
    <br>
    <div class="p-2 animated fadeIn delay-1s slower">
    
        <h3 class="mytext"> 
            <?php if ($langId_selected==1){
                echo 'Επιλέξτε την Σχολή σας:';
                
            }
            elseif ($langId_selected==2){
                echo 'Select department:';
                
            }
            ?>
        </h3>
     
        <form class="customSelect" method="POST" action="<?php echo URL; ?>StudentController/StudentPage3" name="studentform1">

            <div class="select" >
                <?php
                    // echo "<select id='getDname' onchange='dSelectCheck(this);' class='browser-default custom-select' name='department_'>";
                    echo "<select id='getDname' onchange='myFunction_();' class='browser-default custom-select ' name='department_'>";
                    echo "<option value=''></option>";
                    $i='a';
                    foreach ($department as $Id => $row ) {
                        echo "<option class='my_class' value='" . $row['Id'] . "'>" . $row['DepartmentName'] . "</option>";
                        $i=$i.'a';
                    }
                    echo "</select>";
                ?>

            </div>
            
            <br>
            <!-- Display first choice -->
            <div id="admDivCheck" style="display:none;"> 
                <h3 class="mytext" > 
                    <?php if ($langId_selected==1){
                        echo 'Επιλέξτε ενέργεια:';
                        
                    }
                    elseif ($langId_selected==2){
                        echo 'Select action:';
                        
                    }
                    ?>
                </h3>
                <?php
                // echo "<a id='numpay'> </a> ";
                // $variable=0;
                // $variable="<a id='numpay'> </a>"; 
                // echo $variable;
                ?>
                <div class="customSelect animated fadeIn slow">
                    <div class="select">
                        <select id='getStudentChoice' onchange='getStudChoice();' class='browser-default custom-select ' name='stud_choice'>
                            <option value=''></option>
                            <option class='my_class' value='1'>
                                <?php if ($langId_selected==1){
                                    echo 'Επιλογή Μαθημάτων Βάση Γενικών Ικανοτήτων';  
                                }
                                elseif ($langId_selected==2){
                                    echo 'Select Courses Based on General Skills'; 
                                }
                                ?>    
                            </option>
                            <option class='my_class' value='2'>
                                <?php if ($langId_selected==1){
                                    echo 'Εμφάνιση Ικανοτήτων που Αποκτήθηκαν κατα την Παρακολούθηση Μαθημάτων';  
                                }
                                elseif ($langId_selected==2){
                                    echo 'Display Skills Accomplished During Course Monitoring'; 
                                }
                                ?> 
                            
                            </option>
                        </select>
                    </div>
                </div>  
               
              

                
                 <!-- Display second choice -->
                 <!-- <div id="stud_choice2_div" class="py-4 animated zoomIn slow hide" > -->
                 <div id="stud_choice2_div" class="py-4 animated zoomIn slow " style="display:none;">
                    <div class="hr py-5"></div>
           
                    <div class="ml-3 py-3">
                        <!-- <div class="table-responsive">
                            <table id="studentCheckCourses" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%" >
                                <thead class="myblue1 text-white">
                                    <tr>
                                        <th class="font-weight-bold th-sm">#</th>
                                        <th class="th-sm font-weight-bold">< ?php echo t_course;?></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    < ? php
                                   
                                    
                                    foreach ($courses as $Id => $row ){ 
                                        ?>
                                        <tr >
                                            <td class="customCheckbox ">
                                            
                                                    <input name="courses_< ?php echo $Id; ?>" type="checkbox" id="courses_< ?php echo $Id; ?>" value="< ?php echo $row['Id']; ?>" >
                                                    <label for="courses_< ?php echo $Id; ?>"></label>
                                             
                                            </td>
                                            
                                            <td>< ?php echo "<option value='" . $row['Id'] . "'>" . $row['CourseTitle'] ." (". $row['LessonCode'] . ")</option>" ?></td>
                                            
                                        </tr>
                                        < ?php 
                                } ?>
                                </tbody>
                                
                            </table>
                        </div>   -->
                        <div class="text-center py-2">
                            <button type="submit" name="next2" class="btn btn-light next" >
                                <?php if ($langId_selected==1){
                                        echo 'Επόμενο';  
                                    }
                                    elseif ($langId_selected==2){
                                        echo 'Next'; 
                                    }
                                ?>    
                            </button>
                        </div>  
                    </div>                 
                </div>
              
      
                <div id="stud_choice1_div" class="py-4 " style="display:none;">
                    <div class="hr py-5"></div>
                    <div class="ml-3 py-4">
                        <div class="customCheckbox">
                            <div class="row animated fadeIn slow">
                                <h3>
                                <?php if ($langId_selected==1){
                                    echo 'Ποιές απο τις παρακάτω γενικές ικανότητες σας ενδιαφέρουν περισσότερο;';
                                
                                }
                                elseif ($langId_selected==2){
                                    echo 'Which of the followng general skills are you most interest in?';
                                
                                }
                                ?>  
                                </h3>
                            </div>
                            <br>
                            <?php 
                            $i=1;
                            foreach ($skills as $Id => $row ){ ?>
                                <div class="row">
                                    <input name="skill_<?php echo $Id; ?>" type="checkbox" id="skill_<?php echo $Id; ?>" value="<?php echo $row['Id']; ?>" >
                                    <label class="animated fadeIn slow" for="skill_<?php echo $Id; ?>"><?php echo $row['Description'] ;?> </label>
                                </div>
        
                            <?php } ?> 
                        </div> 
                        <div class="text-center py-2">
                            <button type="submit" name="next2" class="btn btn-light next" >
                                <?php if ($langId_selected==1){
                                        echo 'Επόμενο';  
                                    }
                                    elseif ($langId_selected==2){
                                        echo 'Next'; 
                                    }
                                ?>    
                            </button>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- End of first choice -->
            <br>
        </div>
            

        </form>

        <?php 

        ?>

        
       
      
    </div>
    
</div>
