

<div class="p-5">
<div class="table-responsive">
        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%" >
            <thead class="myblue1 text-white"> 
                <tr>   
                    <th class="font-weight-bold th-sm">#</th>
                    <th class="th-sm font-weight-bold"><?php echo t_Institution;?></th>
                    <th class="th-sm font-weight-bold"><?php echo t_curriculum0;?></th>
                    <th class="th-sm font-weight-bold"><?php echo t_School;?></th>   
                    <th class="th-sm font-weight-bold"><?php echo t_semester0;?></th>
                    <th class="th-sm font-weight-bold"><?php echo t_professor;?></th> 
                    <th class="th-sm font-weight-bold"><?php echo t_course;?></th> 
                    <!--
                    <th class="th-sm font-weight-bold"><?php //echo t_delete;?></th>
                    
                    <th class="th-sm font-weight-bold"><?php// echo t_edit;?></th>
                    <th class="th-sm font-weight-bold"><?php //echo t_optional;?></th> ---->
                </tr>  
            </thead>
            <tbody>  
                <?php $i = 1;
                // professor id!  
                //$professorCourses = $this->CourseModel->getAllProfessorCourses($professorId);
                foreach ($professorCourses as $Id => $row ){ 
                    //$CourseName = $this->CourseModel->getProfessorCourses($row['Id']);
                    //$arrlength = count($CourseName);   
                    ?>   
                    <tr class="p-0">
                        <td><?php echo $i;?>
                        <td><?php echo "<option value='" . $professorId . "'>" . $row['InstitutionName'] . "</option>" ?> </td> 
                        <td><?php echo "<option value='" . $professorId . "'>" . $row['DepartmentName'] . "</option>" ?></td>
                        <td><?php echo "<option value='" . $professorId . "'>" . $row['SchoolName'] . "</option>" ?> </td> 
                        <td><?php echo "<option value='" . $professorId . "'>" . $row['Semester'] . "</option>" ?></td>
                        <td><?php echo "<option value='" . $professorId . "'>" . $professorName . "</option>" ?></td>
                        <td><?php echo "<option value='" . $professorId . "'>" . $row['CourseTitle'] . " (". $row['LessonCode'] . ")</option>" ?></td>
                    </tr>
                <?php $i++;
            } ?>
            </tbody>
            
        </table>
    </div>
</div>