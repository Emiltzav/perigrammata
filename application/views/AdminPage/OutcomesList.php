

<div class="p-5">
    <div class="table-responsive">
        <table id="adminLo" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%" >
            <thead class="myblue1 text-white">
                <tr>
                    <th class="font-weight-bold th-sm">#</th>
                    <th class="th-sm font-weight-bold"><?php echo t_School;?></th>
                    <th class="th-sm font-weight-bold"><?php echo t_course;?></th>
                    <th class="th-sm font-weight-bold"><?php echo t_learning_outcomes;?></th>
                </tr>
            </thead>
            <tbody>
            
                <?php $i = 1;
                foreach ($activeCoursesList as $Id => $row ){ 
                    
                    ?>
                    <tr class="p-0">
                        <td><?php echo $i;?>
                        <td><?php echo "<option value='" . $row['Id'] . "'>" . $row['SchoolName'] . "</option>" ?> </td>
                        <td><?php echo "<option value='" . $row['Id'] . "'>" . $row['CourseTitle'] ." (". $row['LessonCode'] . ")</option>" ?></td>
                        


                        <td class="text-center">
                            <a class="btn btn-outline-info btn-rounded btn-sm my-0 rounded-pill font-weight-bold" href="<?php echo URL . 'AdminController/editLearningOutcomes?CourseId=' . $row['Id'] ?>">
                            <i class="fas fa-pencil-alt mt-0"></i>
                                <?php echo t_edit;?>
                            </a>
                        </td>
                    
                    </tr>
                    
        

                <?php $i++;
            } ?>
            </tbody>                
        </table>
    </div>
</div>