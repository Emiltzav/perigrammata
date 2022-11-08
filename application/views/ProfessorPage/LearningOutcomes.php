<section class="main-container">
    <div class="main-wrapper">
        <div>
            <form method="POST" action="<?php echo URL; ?>ProfessorController/saveLearningOutcomes" id="learning_outcomes_form">
                <h4>
                    <?php echo t_course_description;?> </br>(1)
                    <?php echo t_general;?>
                </h4>
                <input type="hidden" name='CourseId' value="<?php echo $Course['Id'];?>"/> 
                <table class="course_description">
                    <tr>
                        <th width="40%">
                            <?php echo t_school;?> 
                        </th>
                        
                        <td colspan="4" width="60%">
                            <input name='school' value="<?php echo $Course['SchoolName'];?>" readonly/>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo t_department;?> </th>
                        <td colspan="4">
                            <input name='department' value="<?php echo $Course['DepartmentName'];?>" readonly/>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo t_level;?> </th>
                        <td colspan="4">
                            <input name='LevelOfEducation' value="<?php echo $Course['Education'];?>" readonly/>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo t_lesson_code;?>
                        </th>
                        <td>                           
                            <input name='LessonCode' value="<?php echo $Course['LessonCode'];?>" readonly/>
                        </td>
                        <th>
                            <?php echo t_semester;?> </th>
                        <td colspan="2">
                            <input name='Semester' value="<?php echo $Course['Semester'];?>" readonly/>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo t_course_title;?>
                        </th>
                        <td colspan="4">
                            <input name='CourseTitle' value="<?php echo $Course['CourseTitle'];?>" readonly/>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="2">
                            <?php echo t_teaching_activities;?>
                            </br>
                            <small>
                                <?php echo t_teaching_activities1;?>
                            </small>
                        </th>
                        <th>
                            <?php echo t_teaching_hours;?>
                        </th>
                        <th>
                            <?php echo t_credit_units;?>
                        </th>
                    </tr>
                    <tr>
                        <td colspan="2">  
                            <?php echo t_teaching_activities_name1;?>
                        </td>
                        <td class="Lectures"><input name="Lectures" value="<?php echo $Course['LectureHours'] + 0;?>" readonly></input></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">  
                            <?php echo t_teaching_activities_name2;?>
                        </td>
                        <td class="Laboratories"><input name="Laboratories" value="<?php echo $Course['LaboratoryHours'] + 0;?>" readonly></input></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">  
                            <?php echo t_teaching_activities_name3;?>
                        </td>
                        <td class="TutorialsTutorials"><input name="Tutorials" value="<?php echo $Course['TutorialHours'] + 0;?>" readonly></input></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">  
                            <?php echo t_teaching_activities_name4;?>
                        </td>
                        <td class="LabTutorials"><input name="LabTutorials" value="<?php echo $Course['LabTutorialHours'] + 0;?>" readonly></input></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">  
                            <b><?php echo t_total;?></b>
                        </td>
                        <td class="Total"><input  type="text" name="Total" value="<?php echo $Course['TotalHours'] + 0;?>" readonly/></td>
                        <td class="CreditUnits"><input name="CreditUnits" value="<?php echo $Course['CreditUnits'] +0;?>" readonly></input></td>
                    </tr>
                    <tr>
                        <th colspan="2">
                            <?php echo t_comment;?> 
                        </th>
                        <td> </td>
                        <td> </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo t_course_type;?>
                        </th>
                        <td colspan="4">
                            <?php
                                echo "<select name='CourseType'>";
                                //echo "<option value=''></option>";
				if($Course['LangId'] == 1){
                                    echo "<option value='2'> </option>";
                                }else{
                                    echo "<option value='6'> </option>";                                
                                }
                                foreach ($CourseType as $Id => $row ) {
                                    echo "<option value='" . $row['Id'] . "'>" . $row['CourseType'] . "</option>";
                                }
                                echo "</select>";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo t_prerequisite_courses;?>
                        </th>
                        <td colspan="4">
                            <div id="js-courses">
                                <?php
                                    foreach ($RequiredCourses as $PrerequisiteId => $title ) {
                                        echo '<input type="text" name="CourseName[]" value="'.$title.'" readonly/>';
                                        echo '<input type="hidden" name="PrerequisiteId[]" value="'.$PrerequisiteId.'" />';
                                    }
                                ?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo t_language;?>
                        </th>
                        <td colspan="4"> 
                            <input name='LanguageOfTeaching' value="<?php echo $Course['LanguageOfTeaching'];?>" readonly/>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo t_erasmus;?>
                        </th>
                        <td colspan="4">
                            <input name='Erasmus' value="<?php echo ($Course['ErasmusFl']=='1')?  t_yes:  t_no ?>" readonly/>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <?php echo t_url;?>
                        </th>
                        <td colspan="4">
                            <input name="CourseUrl"></input>
                        </td>
                    </tr>
                </table>
                </br>

                <h4>(2) <?php echo t_learning_outcomes;?> </h4>
                <table class='learning_outcomes'>
                    <tr>
                        <th colspan="2"><?php echo t_learning_outcomes;?>
                            </br> <small><?php echo t_learning_outcomes1;?></small>
                            </br> <small><?php echo t_learning_outcomes2;?></small>
                            </br> <small><?php echo t_learning_outcomes3;?></small>
                            </br> <small><?php echo t_learning_outcomes4;?></small>
                            </br> <small><?php echo t_learning_outcomes5;?></small>
                        </th>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <?php echo t_learning_outcomes_begin;?>
                        </td>
                    </tr>
                    <?php
                        for( $i=1; $i<=15; $i++ )
                        {
                    ?>
                    <tr class="sentences">
                        <td>
                            <?php
                                echo "<select name='Verbs[]'>";
                                echo "<option value=''></option>";
                                foreach ($verbs as $Id => $row ) {
                                    echo "<option value='" . $row['Id'] . "'>" . $row['Verbs'] . "</option>";
                                }
                                echo "</select>";
                            ?>
                        </td>
                        <td ><input name="Sentences[]" value=""/></td>
                    </tr>
                    <?php } ?>
                    
                    <tr>
                        <th colspan="2">
                            <?php echo t_general_capabilities;?>
                            </br> <small><?php echo t_general_capabilities1;?></small>
                        </th>
                    </tr>
                    
                    <?php foreach ($skills as $Id => $row ){ ?>
                        <tr>
                            <td colspan="2">
                                <input type="checkbox" name="skills[]" class="skill_list" id="skill_<?php echo $Id; ?>" value="<?php echo $row['Id']; ?>"><?php echo $row['Description'] ;?> </input>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
                </br>
                <h4>(3) <?php echo t_course_content;?> </h4>
                <table class='course_description'>
                    <tr>
                        <td colspan="5"><textarea name='Content'><?php echo $Course['Content'];?></textarea></td>
                    </tr>
                </table>
                </br>

                <h4>(4) <?php echo t_teaching_methods;?> </h4>

                <table class='course_description'>
                    <tr>
                        <th width="40%" ><?php echo t_lecture_method;?></th>
                        <td colspan="2">
                            <?php
                                echo "<select name='LectureMethod'>";
                                //echo "<option value=''></option>";
				if($Course['LangId'] == 1){
                                    echo "<option value='1'> </option>";
                                }else{
                                    echo "<option value='3'> </option>";                                
                                }
                                foreach ($method as $Id => $row ) {
                                    echo "<option value='" . $row['Id'] . "'>" . $row['LectureMethod'] . "</option>";
                                }
                                echo "</select>";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th rowspan="4"><?php echo t_use_of_technlogy;?></br> <small><?php echo t_use_of_technlogy1;?></small> </th>
                        
                        <?php
                            for( $i=1; $i<=3; $i++ )
                            {
                        ?>
                        <tr>
                            <td>
                                <?php
                                    echo "<select name='UseOfTechnologies[]'>";
                                    echo "<option value=''></option>";
                                    foreach ($UseOfTechnologies as $Id => $row ) {
                                        echo "<option value='" . $row['Id'] . "'>" . $row['UseOfTechnologies'] . "</option>";
                                    }
                                    echo "</select>";
                                ?>
                            </td>
                            <td>
                                <input type="text" name="TextA[]" value=""/>
                                <input type="text" name="TextB[]" value=""/>
                                <input type="text" name="TextC[]" value=""/>
                            </td>
                            </tr>
                        <?php } ?>
 
                    </tr>
                    
                    <tr>
                        <th ><?php echo t_teaching_organisation;?>
                            </br> <small><?php echo t_teaching_organisation1;?></small>
                            </br> <small><?php echo t_teaching_organisation2;?></small>
                            </br></br> <small><?php echo t_teaching_organisation3;?></small> 
                        </th>
                        <td colspan="2">
                            <table id="ActivityHours">
                                <thead>
                                    <tr>
                                        <th><?php echo t_activity;?></th>
                                        <th><?php echo t_workload;?></th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <td> <b><?php echo t_total_course;?></b> </td>
                                        <td>
                                            <div class="totalHours_warning">Must be <?php echo $Course['CreditUnits'] * 25; ?> and over</div>
                                            <input type="hidden" id="min_totalHours" value="<?php echo $Course['CreditUnits'] * 25; ?>"/>
                                            <input class="totalHours" name="totalHours"> </input>
                                        </td>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php foreach ($activities as $Id => $row ){ 
                                        $value="";
                                        if($row['Type']=='Lectures'){
                                            $value = $Course['LectureHours'] * 13  + 0;
                                        }
                                        if($row['Type']=='Laboratories'){
                                            $value = $Course['LaboratoryHours'] * 13  + 0;
                                        }
                                        if($row['Type']=='Tutorials'){
                                            $value = $Course['TutorialHours'] * 13  + 0;
                                        }
                                        ?>
                                        <tr>
                                            <input type="hidden" name="activities[]" value="<?php echo $row['Id']; ?>"/>

                                            <td><input title="<?php echo $row['Activities']; ?>"  value="<?php echo $row['Activities']; ?>" readonly/></td>
                                            <td><input class="ActivityHours"  value="<?php echo $value ;?>" id="activity_<?php echo $Id; ?>" name="Hours[]"> </input></td>
                                        </tr>
                                    <?php } ?>
                                    
                                </tbody>
                            </table> 
                            </td>
                                                
                        </tr>
                        <tr>
                            <td ><b><?php echo t_assessment;?></b> 
                                </br><?php echo t_assessment1;?>
                                </br></br><?php echo t_assessment2;?>
                                </br></br><?php echo t_assessment3;?>
                            </td>
                            <td colspan="2" >
                                <p></br><?php echo t_assessment_language; ?><?php echo $Course['LanguageOfTeaching'];?></p>
                                <table class="assessment">
                                    <?php
                                        foreach( $Assessments as $categoryId => $Assessment ) {
                                            // echo '<input type="hidden" name="CategoryId[]" value="'. $Assessment['Id'].'" />';
                                            echo '<tr>';
                                            echo '<th>' . $Assessment['CategoryName'].'</th>';
                                            echo '<td><input class="percent" type="text" name="percentage[' . $categoryId . ']" placeholder="()%"></input></td>';
                                            echo '<td>';
                                            echo '<select name="bonus[' . $categoryId . ']">';
                                            echo '<option></option>';
                                            foreach( $bonus as $bonusId => $row )
                                            {
                                                echo '<option value="' . $bonusId . '">'.$row['Choices'].'</option>';
                                            }
                                            
                                            echo '</select>';
                                            echo '</td>';
                                            echo '</tr>';
                                            
                                            $i = 1;
                                            foreach( $Assessment['subcategories'] as $SubId => $SubcategoryName )
                                            {
                                                echo '<tr>';
                                                echo '<td></td>';
                                                echo '<td colspan="2"><input class="box" type="checkbox" name="subcategories_' . $i++ . '[' . $categoryId . ']" value="' . $SubId . '"/>' . $SubcategoryName.'</td>';
                                                echo '</tr>';
                                            }
                                        }
                                    ?>
                                </table>
                            </td>
                        </tr>
                        
                    </table>
                </br>
                <h4>(5) <?php echo t_suggested_bibliography; ?>/<?php echo t_scientific_journals;?></h4>
    
                <table class='course_description'>
                    <tr>
                        <td ><textarea name='Bibliography'> </textarea></td>    
                    </tr>
                    
                                        
                </table>
                <div class="activity_error">Έχεις κάποια ....</div>
                <button type="submit" name="finish_creation" id="finish_creation" class="finish"><?php echo t_finish;?></button>
                
            </form>
        </div>
    </div>
</section>
