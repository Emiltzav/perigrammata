<section class="container py-5">
    <div id="create_course">   
        <form method="POST" action="<?php echo URL; ?>AdminController/updateCourse" name="professorform">
            <h4 class="text-center"> <?php echo t_course_description;?> </br> </h4>
            
            <div class="table-wrapper table-responsive py-2" >
                <table class="table table-bordered table-hover mt-0">
                    <input type="hidden" name='CourseId' value="<?php echo $Course['Id'];?>"/>  
                    
                    <th class="font-weight-bold myblue1 text-white"><?php echo t_language;?></th>
                    <td colspan="4">
                        <input class="form-control form-control-sm " name='LanguageOfTeaching' value="<?php echo $Course['LanguageOfTeaching'];?>" readonly/>
                    </td>
                    <tr>   
                        <th class="font-weight-bold myblue1 text-white" width="40%">
                            <?php echo t_school;?> 
                        </th>
                        <td colspan="4" width="60%">
                            <?php
                                echo "<select class='browser-default custom-select' name='school'>";
                                foreach ($school as $Id => $row ) {
                                    $selected= '';
                                    if($row['Id'] == $Course['SchoolId'])
                                    {
                                        $selected = 'selected';
                                    }
                                    echo "<option value='" . $row['Id'] . "' " . $selected . ">" . $row['SchoolName'] . "</option>";
                                }
                                echo "</select>";
                            ?>
                        </td>
                    </tr>
                    <tr>   
                        <th class="font-weight-bold myblue1 text-white">
                            <?php echo t_curriculum;?> 
                        </th>
                        <td colspan="4">
                            <?php
                                if ($_SESSION['admin_id'] != 3) {
                                    echo "<select class='browser-default custom-select' name='department'>";
                                    foreach ($department as $Id => $row ) {
                                        $selected= '';
                                        if($row['Id'] == $Course['DepartmentId'])
                                        {
                                            $selected = 'selected';
                                        }
                                        echo "<option value='" . $row['Id'] . "' " . $selected . ">" . $row['DepartmentName'] . "</option>";
                                    }
                                    echo "</select>";
                                } else {
                                    foreach ($my_department as $Id => $my_department_row ) {
                                    ?>
                                        <input class="form-control form-control-sm " name='DepartmentName' value="<?php echo $my_department_row['DepartmentName'];?>" readonly />
                                        <input type='hidden' name='department' value="<?php echo $my_department_row['Id']; ?>" />
                                    <?php   
                                    } 
                                }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th class="font-weight-bold myblue1 text-white">
                            <?php echo t_level;?> 
                        </th>
                        <td colspan="4">
                            <?php
                                echo "<select class='browser-default custom-select' name='LevelOfEducation'>";
                                foreach ($LevelOfEducation as $Id => $row ) {
                                    $selected= '';
                                    if($row['Id'] == $Course['EducationId'])
                                    {
                                        $selected = 'selected';
                                    }
                                    echo "<option value='" . $row['Id'] . "' " . $selected . ">" . $row['Education'] . "</option>";
                                }
                                echo "</select>";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th class="font-weight-bold myblue1 text-white">
                            <?php echo t_lesson_code;?>
                        </th>
                        <td>
                            <input class="form-control form-control-sm " name='LessonCode' value="<?php echo $Course['LessonCode'];?>"/>
                        </td>
                        <th class="font-weight-bold myblue1 text-white">
                            <?php echo t_semester;?> 
                        </th>
                        <td colspan="2">
                            <select class='browser-default custom-select' name='Semester'>
                                <?php
                                for( $i=1; $i <=12; $i++ )
                                {
                                    $selected = $Course['Semester'] == $i ? 'selected' : '';
                                    echo '<option value="' . $i . '" ' . $selected . '> ' . $i . '</option>';
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th class="font-weight-bold myblue1 text-white">
                            <?php echo t_course_title;?>
                        </th>
                        <td colspan="4">
                            <input class="form-control form-control-sm " name='CourseTitle' value="<?php echo $Course['CourseTitle'];?>"/>
                        </td>
                    </tr>
                    <tr>
                        <th class="font-weight-bold myblue1 text-white">
                            <?php echo t_professor;?> 
                        </th>
                        <td colspan="3">
                            <?php
                                echo "<select class='browser-default custom-select' name='Professor' id='js-Professor' onchange='addProfessors()'>";
                                echo "<option value=''></option>";
                                foreach ($Professor as $Id => $row ) {
                                    $disabled = "";
                                    if( key_exists( $Id, $CourseProfessors ) )
                                    {
                                        $disabled = "disabled";
                                    }
                                    echo "<option value='" . $row['Id'] . "' ".$disabled.">" . $row['LastName']." </br></br>". $row['FirstName'] . "</option>";
                                }
                                echo "</select>";
                            ?>
                            <div id="js-professors"> 
                                <?php
                                    foreach ($CourseProfessors as $ProfessorId => $name ) {
                                        $selected_index = array_search($ProfessorId, array_keys($Professor))+1;
                                        echo '<input type="text" name="ProfessorName[]" id="pname_'.$selected_index.'" value="'.$name.'" readonly/>';
                                        echo '<input type="hidden" name="ProfessorId[]" id="pid_'.$selected_index.'" value="'.$ProfessorId.'" />';
                                        echo '<button type="button" name="remove" id="pbutton_'.$selected_index.'" class="btn btn-sm js-table-row-remove" onclick="removeProfessors('.$selected_index.')">-</button>';
                                    }
                                    
                                ?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th class="font-weight-bold myblue1 text-white" colspan="2">
                            <?php echo t_teaching_activities;?>
                            </br>
                            <div class="text_left">
                                <small>
                                    <?php echo t_teaching_activities1;?>
                                    <?php echo t_comment;?> 
                                </small>
                            </div>
                        </th>
                        <th class="font-weight-bold myblue1 text-white">
                            <div class="text_center">
                                <?php echo t_teaching_hours;?>
                            </div>
                        </th>
                        <th class="font-weight-bold myblue1 text-white">
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
                        <td class="Lectures"><input class="form-control form-control-sm " name="Lectures" value="<?php echo $Course['LectureHours'] + 0;?>" min="0" id="js-lectures" onchange="addNumbers()"></input></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">  
                            <div class="text_right">
                                <?php echo t_teaching_activities_name2;?>
                            </div>
                        </td>
                        <td class="Laboratories"><input class="form-control form-control-sm " name="Laboratories" value="<?php echo $Course['LaboratoryHours'] + 0;?>" min="0" id="js-laboratories" onchange="addNumbers()"></input></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">  
                            <div class="text_right">
                                <?php echo t_teaching_activities_name3;?>
                            </div>
                        </td>
                        <td class="Tutorials"><input class="form-control form-control-sm " name="Tutorials" value="<?php echo $Course['TutorialHours'] + 0;?>" min="0" id="js-tutorials" onchange="addNumbers()"></input></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">  
                            <div class="text_right">
                                <?php echo t_teaching_activities_name4;?>
                            </div>
                        </td>
                        <td class="LabTutorials"><input class="form-control form-control-sm " name="LabTutorials" value="<?php echo $Course['LabTutorialHours'] + 0;?>" min="0" id="js-lab-tutorials" onchange="addNumbers()"></input></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">  
                            <div class="text_right"> 
                                <b><?php echo t_total;?></b>
                            </div>
                        </td>
                        <td class="Total"><input class="form-control form-control-sm mt-0" id="js-total_sum" type="text" name="Total" value="<?php echo $Course['TotalHours'];?>" readonly/></td>
                        <td class="CreditUnits"><input class="form-control form-control-sm " name="CreditUnits" value="<?php echo $Course['CreditUnits'];?>" type="number" step="0.1" min="0" id="credit_units"></input></td>
                    </tr>
                    <tr>
                        <th class="font-weight-bold myblue1 text-white">
                            <?php echo t_prerequisite_courses;?>
                        </th>
                        <td colspan="4">
                            <?php
                                echo "<select class='browser-default custom-select' name='Prerequisites' id='js-Prerequisites' onchange='addPrerequisites()'>";
                                echo "<option value=''></option>";
                                foreach ($courses as $Id => $row ) {
                                    $disabled = "";
                                    if( key_exists( $Id, $RequiredCourses ) )
                                    {
                                        $disabled = "disabled";
                                    }
                                    echo "<option value='" . $row['Id'] . "' ".$disabled.">". $row['CourseTitle'] . " </br></br>(". $row['LessonCode'] . ")</option>";
                                }
                                echo "</select>";
                            ?>
                            <div id="js-courses"> 
                                <?php
                                    foreach ($RequiredCourses as $PrerequisiteId => $title ) {
                                    
                                        $selected_index = array_search($PrerequisiteId, array_keys($courses))+1;
                                        echo '<input  type="text" name="CourseName[]" id="prname_'.$selected_index.'" value="'.$title.'" readonly/>';
                                        echo '<input  type="hidden" name="PrerequisiteId[]" id="prid_'.$selected_index.'" value="'.$PrerequisiteId.'" />';
                                        echo '<button type="button" name="remove" id="prbutton_'.$selected_index.'" class="btn btn-sm js-table-row-remove" onclick="removePrerequisites('.$selected_index.')">-</button>';
                                    }
                                ?>  
                            </div>
                        </td>         
                    </tr>
                    <tr>
                        <th class="font-weight-bold myblue1 text-white">
                            <?php echo t_erasmus;?>
                        </th>
                        <td colspan="4">
                            <select class='browser-default custom-select' name='Erasmus'>
                                <?php 
                                    $selected_yes = $Course['ErasmusFl']=='1'? 'selected':'' ;
                                    $selected_no = $Course['ErasmusFl']=='0'? 'selected':'' ;
                                    echo "<option value='0' ".$selected_no.">" .t_no. "</option>" ;
                                    echo "<option value='1' ".$selected_yes.">" .t_yes. "</option>" 
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th class="font-weight-bold myblue1 text-white" colspan="5">
                            <?php echo t_course_content;?>
                        </th>
                    </tr> 
                    <tr>      
                        <td colspan="5"><textarea class="form-control " rows="10" name='Content'><?php echo $Course['Content'];?></textarea></td>
                    </tr>
                </table>
            </div>
            <div class="text-center">
                <button type="submit" name="finish_creation" class="btn btn-light"><?php echo t_finish;?></button>
            </div>
            </br>
        </form>
    </div>
</section>