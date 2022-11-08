<section class="container py-5">
        <div id="create_course ">
            <form method="POST" action="<?php echo URL; ?>AdminController/saveCourse" name="professorform">
                <h4 class="text-center font-weight-bold"> <?php echo t_course_description;?> </br> </h4>


                <div class="table-wrapper table-responsive py-3" >
                <table class="table table-bordered table-hover mt-0" >
                    <tr style="padding:0 !important;margin:0 !important;">
                        <th scope="row" class="font-weight-bold myblue1 text-white"><?php echo t_language;?></th>
                        <td colspan="4">
                            <input class="form-control form-control-sm " name='TeachingLang' value="<?php echo $teaching_lang_selected;?>" readonly />
                            <input type='hidden' name='langId' value="<?php echo $langId_selected;?>" />
                        </td> 
                        <tr>      
                            <th scope="row" class="font-weight-bold myblue1 text-white" width="40%">
                                <?php echo t_institution;?> 
                            </th>           
                            <td colspan="4" width="60%">    
                                <?php
                                    if ($_SESSION['admin_id'] == 3 || $_SESSION['admin_id'] == 4) { // if super admin or syllabus admin, the user can choose the institution of the school 
                                        echo "<select class='browser-default custom-select' name='InstitutionId'>";
                                        //echo "<option value=''></option>";
                                        foreach ($institution as $row ) {
                                            echo "<option value='" . $row['Id'] . "'>" . $row['InstitutionName'] . "</option>";
                                        }
                                        echo "</select>";
                                    } else { // if not super admin, the institution of the school is read-only 
                                        foreach ($institution as $Id => $row ) {      
                                            echo "<input class='form-control form-control-sm' name='institution_name' value='". $row['InstitutionName'] ."' readonly/>";
                                            echo "<input type='hidden' class='form-control form-control-sm' name='InstitutionId' value='". $row['Id'] ."' readonly/>";                               
                                        }       
                                    }     
                                ?>     
                            </td>
                        </tr>             
                        <tr>      
                            <th scope="row" class="font-weight-bold myblue1 text-white" width="40%">
                                <?php echo t_institution2;?> 
                            </th>           
                            <td colspan="4" width="60%">    
                                <?php
                                    //if ($_SESSION['admin_id'] == 3 || $_SESSION['admin_id'] == 4) { // if super admin or syllabus admin, the user can choose the institution of the school 
                                        echo "<select class='browser-default custom-select' name='InstitutionId2'>";
                                        echo "<option value='1'>-</option>";
                                        foreach ($second_institution as $row ) {
                                            echo "<option value='" . $row['Id'] . "'>" . $row['InstitutionName'] . "</option>";
                                        }
                                        echo "</select>";
                                    /*
                                    } else { // if not super admin, the institution of the school is read-only 
                                        foreach ($institution as $Id => $row ) {      
                                            echo "<input class='form-control form-control-sm' name='institution_name' value='". $row['InstitutionName'] ."' readonly/>";
                                            echo "<input type='hidden' class='form-control form-control-sm' name='InstitutionId' value='". $row['Id'] ."' readonly/>";                               
                                        }       
                                    } */    
                                ?>     
                            </td>
                        </tr>   
                        <tr>      
                            <th scope="row" class="font-weight-bold myblue1 text-white" width="40%">
                                <?php echo t_school;?> 
                            </th>  
                            <td colspan="4" width="60%">  
                                <?php
                                    echo "<select class='browser-default custom-select' name='school'>";
                                    //echo "<option value=''></option>";
                                    foreach ($school as $Id => $row1) {
                                        echo "<option value='" . $row1['Id'] . "'>" . $row1['SchoolName'] . "</option>";
                                    }                                     
                                    echo "</select>";
                                ?>
                            </td>    
                        </tr>  
                        <tr>      
                            <th scope="row" class="font-weight-bold myblue1 text-white" width="40%">
                                <?php echo t_second_school; ?> 
                            </th>  
                            <td colspan="4" width="60%">  
                                <?php     
                                    echo "<select class='browser-default custom-select' name='school2'>";
                                    echo "<option value='1'>-</option>";
                                    foreach ($second_school as $Id => $row2) {
                                        echo "<option value='" . $row2['Id'] . "'>" . $row2['SchoolName'] . "</option>";
                                    }                                     
                                    echo "</select>";
                                ?>  
                            </td>
                        </tr>    
                        <tr>
                            <th scope="row" class="font-weight-bold myblue1 text-white">
                                <?php echo t_curriculum;?> 
                            </th>
                            <td colspan="4">   
                                <?php
                                    if ($_SESSION['admin_id'] != 3) {

                                    echo "<select class='browser-default custom-select' name='department'>";
                                    //echo "<option value=''></option>";
                                    foreach ($department as $Id => $department_row ) {
                                        echo "<option value='" . $department_row['Id'] . "'>" . $department_row['DepartmentName'] . "</option>";
                                    }
                                    echo "</select>";

                                    } else {

                                    foreach ($department as $Id => $department_row ) {
                                ?>
                                        <input class="form-control form-control-sm " name='DepartmentName' value="<?php echo $department_row['DepartmentName'];?>" readonly />
                                        <input type='hidden' name='department' value="<?php echo $department_row['Id']; ?>" />
                                <?php   
                                    } 

                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="font-weight-bold myblue1 text-white">
                                <?php echo t_level;?> 
                            </th>
                            <td colspan="4">
                                <?php
                                    echo "<select class='browser-default custom-select' name='LevelOfEducation'>";
                                    echo "<option value=''></option>";
                                    foreach ($LevelOfEducation as $Id => $row ) {
                                        echo "<option value='" . $row['Id'] . "'>" . $row['Education'] . "</option>";
                                    }
                                    echo "</select>";
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="font-weight-bold myblue1 text-white">
                                <?php echo t_lesson_code;?>
                            </th>
                            <td>
                                <input class="form-control form-control-sm " name='LessonCode'></input>  
                            </td>
                            <th scope="row" class="font-weight-bold myblue1 text-white">
                                <?php echo t_semester;?> 
                            </th>
                            <td colspan="2">
                                <select class='browser-default custom-select' name='Semester'>
                                    <option value=""> </option>
                                    <option value="1"> 1</option>
                                    <option value="2"> 2</option>
                                    <option value="3"> 3</option>
                                    <option value="4"> 4</option>
                                    <option value="5"> 5</option>
                                    <option value="6"> 6</option>
                                    <option value="7"> 7</option>
                                    <option value="8"> 8</option>
                                    <option value="9"> 9</option>
                                    <option value="10"> 10</option>
                                    <option value="11"> 11</option>
                                    <option value="12"> 12</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="font-weight-bold myblue1 text-white">
                                <?php echo t_course_title;?>
                            </th>
                            <td colspan="4">
                                <input class="form-control form-control-sm " name='CourseTitle'></input>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="font-weight-bold myblue1 text-white">
                                <?php echo t_professor;?> 
                            </th>
                            <td colspan="3">
                                <?php
                                    echo "<select class='browser-default custom-select' name='Professor' id='js-Professor' onchange='addProfessors()'>";
                                    echo "<option value=''></option>";
                                    foreach ($Professor as $Id => $row ) {
                                        echo "<option value='" . $row['Id'] . "'>" . $row['LastName']." </br></br>". $row['FirstName'] . "</option>";
                                    }
                                    echo "</select>";
                                ?>
                                <div id="js-professors"></div>
                            </td>
                        </tr>
                        <tr>
                        <th scope="row" class="font-weight-bold myblue1 text-white" colspan="2">
                            <?php echo t_teaching_activities;?>
                            </br>
                            <div class="text_left">
                                <small>
                                    <?php echo t_teaching_activities1;?>
                                    <?php echo t_comment;?> 
                                </small>
                            </div>
                        </th>
                        <th scope="row" class="font-weight-bold myblue1 text-white">
                            <div class="text_center">
                                <?php echo t_teaching_hours;?>
                            </div>
                        </th>
                        <th scope="row" class="font-weight-bold myblue1 text-white">
                            <div class="text_center">
                                <?php echo t_credit_units;?>
                            </div>
                        </th>
                    </tr>
                        <tr>
                            <td colspan="2">  
                                <div class="text_right">
                                    <?php echo t_teaching_activities_name1;?>
                                </div>
                            </td>
                            <td class="Lectures"><input class="form-control form-control-sm " name="Lectures" min="0" id="js-lectures" onchange="addNumbers()" value="0"></input></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="2">  
                                <div class="text_right">
                                    <?php echo t_teaching_activities_name2;?>
                                </div>
                            </td>
                            <td class="Laboratories"><input class="form-control form-control-sm " name="Laboratories" min="0" id="js-laboratories" onchange="addNumbers()" value="0"></input></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="2">  
                                <div class="text_right">
                                    <?php echo t_teaching_activities_name3;?>
                                </div>
                            </td>
                            <td class="Tutorials"><input class="form-control form-control-sm " name="Tutorials" min="0" id="js-tutorials" onchange="addNumbers()" value="0"></input></td>
                            <td></td>
                        </tr>
                        <tr> 
                            <td colspan="2">  
                                <div class="text_right">
                                    <?php echo t_teaching_activities_name4;?>
                                </div>
                            </td>
                            <td class="LabTutorials"><input class="form-control form-control-sm " name="LabTutorials" min="0" id="js-lab-tutorials" onchange="addNumbers()" value="0"></input></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="2">  
                                <div class="text_right"> 
                                    <b><?php echo t_total;?></b>
                                </div>
                            </td>
                            <td class="Total"><input id="js-total_sum" type="text" name="Total" value="0" readonly /></td>
                            <td class="CreditUnits"><input class="form-control form-control-sm " name="CreditUnits" type="number" step="0.1" min="0" id="credit_units" value="0"></input></td>
                        </tr>
                        <tr>
                            <th scope="row" class="font-weight-bold myblue1 text-white">
                                <?php echo t_prerequisite_courses;?>
                            </th>
                            <td colspan="4">
                                <?php
                                    echo "<select class='browser-default custom-select' name='Prerequisites' id='js-Prerequisites' onchange='addPrerequisites()'>";
                                    echo "<option value=''></option>";
                                    foreach ($courses as $Id => $row ) {
                                        echo "<option value='" . $row['Id'] . "'>" . $row['CourseTitle'] ." </br></br>(". $row['LessonCode'] . ") </option>";
                                    }
                                    echo "</select>";
                                ?>
                                <div id="js-courses"></div>
                                
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="font-weight-bold myblue1 text-white">
                                <?php echo t_erasmus;?>
                            </th>
                            <td colspan="4">
                                <select class='browser-default custom-select' name='Erasmus' required>
                                    
                                    <option value="1"> <?php echo t_yes;?></option>
                                    <option value="0"> <?php echo t_no;?></option>
                                </select>
                            </td>
                        </tr>
                       
                        <tr>
                            <th  scope="row" class="font-weight-bold myblue1 text-white" colspan="5">
                                <?php echo t_course_content;?>
                            </th>
                        </tr> 
                        <tr>          
                            <td colspan="5"><textarea class="form-control " rows="10" name='Content' ></textarea></td>
                        </tr>
                    </tr>
                    
                </table>
                </div>
                <br>
                <div class="text-center">
                    <button type="submit" name="finish_creation" class="btn btn-light"><?php echo t_finish;?></button>
                </div>
                </br>
            </form>
        </div>

</section>