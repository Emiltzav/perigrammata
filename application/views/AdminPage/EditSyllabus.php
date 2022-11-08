<section class="container py-5">
    <div id="create_course">   
        <form method="POST" action="<?php echo URL; ?>AdminController/updateSyllabus" name="schoolform">
            <h4 class="text-center"> <?php echo t_syllabus_description;?> </br> </h4>
            
            <div class="table-wrapper table-responsive py-2" >
                <table class="table table-bordered table-hover mt-0">
                    <input type="hidden" name='SyllabusId' value="<?php echo $_GET['SyllabusId'];?>"/>  
                    
                    <th class="font-weight-bold myblue1 text-white"><?php echo t_language;?></th>  
                    <td colspan="4">
                        <input class="form-control form-control-sm " name='LanguageOfTeaching' value="<?php echo $LanguageOfTeaching;?>" readonly/>
                    </td>
                    <tr>   
                        <th class="font-weight-bold myblue1 text-white" width="40%">
                            <?php echo t_Institution;?> 
                        </th>
                        <td colspan="4" width="60%">
                            <?php
                                echo "<select class='browser-default custom-select' name='institution'>";
                                foreach ($institution as $Id => $row ) {
                                    $selected= '';
                                    if($row['Id'] == $InstitutionId)
                                    {
                                        $selected = 'selected';
                                    }
                                    echo "<option value='" . $row['Id'] . "' " . $selected . ">" . $row['InstitutionName'] . "</option>";
                                }
                                echo "</select>";
                            ?>
                        </td>
                    </tr>   
                    <tr>   
                        <th class="font-weight-bold myblue1 text-white">
                            <?php echo t_syllabus_title0;?>
                        </th>
                        <td colspan="4">
                            <input class="form-control form-control-sm " name='SyllabusName' value="<?php echo $department_name;?>"/>
                        </td>
                    </tr>
                    <tr>
                </table>
            </div>
            <div class="text-center">
                <button type="submit" name="finish_creation" class="btn btn-light"><?php echo t_finish;?></button>
            </div>
            </br>
        </form>
    </div>
</section>