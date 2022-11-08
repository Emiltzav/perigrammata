<div class="py-5 animated fadeIn slower">
    <form  method="POST" action="<?php echo URL; ?>StudentController/StudentPage4" name="studentform1">
        
        <div class="card card-cascade narrower container px-0 ">
            <div class="view view-cascade gradient-card-header myblue1 z-depth-2 text-center  narrower py-2 px-1  mb-3  rounded ">
                <h4 class="mycourses text-white font-italic ">
                    <?php echo t_mycourses; ?>
                </h4>
                <h4 class="text-light"><i class="fas fa-graduation-cap"></i><?php  echo $department_['DepartmentName'];  ?></h4>
            </div>
            <div class="px-4">
                <div class="table-wrapper table-responsive">
                    <table id="studentCheckCourses" class="table table-hover mb-0 your-custom-styles" >
                        <thead >
                            <tr>
                                <th class="font-weight-bold "></th>
                                <th class=" font-weight-bold"><?php echo t_course;?></th>
                                <th class="font-weight-bold"><?php echo t_semester;?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            
                            foreach ($courses as $Id => $row ){ 
                                ?>
                                    <tr >
                                    
                                        <td class="customCheckbox  text-center ">
                                            <input name="courses_<?php echo $Id; ?>" type="checkbox" id="courses_<?php echo $Id; ?>" value="<?php echo $row['Id']; ?>" >
                                            <label for="courses_<?php echo $Id; ?>">&nbsp;</label>
                                        </td> 
                                        
                                        <td><?php echo "<option value='" . $row['Id'] . "'>" . $row['CourseTitle'] ." (". $row['LessonCode'] . ")</option>" ?></td>
                                        <td class="text-center"><?php echo  $row['Semester']?></td>
                                    </tr>
                                <?php 
                        } ?>
                        </tbody>
                        
                    </table>
                </div>
            </div>
            <!-- Continue button -->
            <input type="hidden" name="numOfCourses" value="<?php echo count($courses) ?>">
            <div class="text-center py-5">
                <button type="submit" name="next2" class="btn default-color rounded-circle py-3 animated pulse infinite" >
                    <i class="text-light fas fa-2x fa-location-arrow"></i>         
                </button>
            </div>  
        </div>
        
    </form>
</div>
<br>
<br><br>
