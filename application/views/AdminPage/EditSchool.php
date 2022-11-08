<section class="container py-5">
    <div id="create_course">   
        <form method="POST" action="<?php echo URL; ?>AdminController/updateSchool" name="schoolform">
            <h4 class="text-center"> <?php echo t_school_description;?> </br> </h4>
            
            <div class="table-wrapper table-responsive py-2" >
                <table class="table table-bordered table-hover mt-0">
                    <input type="hidden" name='SchoolId' value="<?php echo $_GET['SchoolId'];?>"/>  
                    
                    <th class="font-weight-bold myblue1 text-white"><?php echo t_language;?></th>  
                    <td colspan="4">
                        <input class="form-control form-control-sm" name='LanguageOfTeaching' value="<?php echo $LanguageOfTeaching;?>" readonly/>
                    </td>
                    <tr>   
                        <th class="font-weight-bold myblue1 text-white" width="40%">
                            <?php echo t_Institution;?> 
                        </th>
                        <td colspan="4" width="60%">   
                            <?php
                                if ($_SESSION['admin_id'] == 4) { // if super admin, the user can change the institution of the school 
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
                                } else { // if super admin, the institution of the school is read-only
                                    foreach ($institution as $Id => $row ) {
                                        $selected= '';
                                        if($row['Id'] == $InstitutionId)   
                                        {
                                            $selected = 'selected';
                                            echo "<input class='form-control form-control-sm' name='institution' value='". $row['InstitutionName'] ."' readonly/>";
                                            echo "<input type='hidden' class='form-control form-control-sm' name='institution' value='". $row['Id'] ."' readonly/>";
                                        }
                                    }                       
                                }
                            ?>
                        </td>  
                    </tr>     
                    <?php $test_flag = 0;
                    if ($_SESSION['admin_id'] == 4 && $test_flag==1) { // if super admin, the user can define the syllabus ?>
                    <tr>   
                        <th class="font-weight-bold myblue1 text-white" width="40%">
                            <?php echo t_curriculum0; ?>    
                        </th>
                        <td colspan="4" width="60%">   
                        <?php 
                            $SchoolDepartmentId = ''; 
                            foreach ($school_to_department as $Id => $row2 ) {
                                $SchoolDepartmentId = $row2['DepartmentId'];
                            }     
                            echo "<select class='browser-default custom-select' name='department'>";
                            echo "<option value='-'><i>Δεν έχει οριστεί</i></option>";
                            foreach ($department as $Id => $row3 ) {
                                $selected= '';
                                if($row3['Id'] == $SchoolDepartmentId)
                                {
                                    $selected = 'selected';   
                                }
                                echo "<option value='" . $row3['Id'] . "' " . $selected . ">" . $row3['DepartmentName'] . "</option>";
                            }
                            echo "</select>";  
                        ?>    
                        </td>  
                    </tr> 
                    <tr>   
                        <th class="font-weight-bold myblue1 text-white" width="40%">
                            <?php echo t_curriculum0; ?>    
                        </th>
                        <td colspan="4" width="60%">   
                        <?php 
                            $SchoolDepartmentId = ''; 
                            foreach ($school_to_department as $Id => $row2 ) {
                                $SchoolDepartmentId = $row2['DepartmentId'];
                            }     
                            echo "<select class='browser-default custom-select' name='department'>";
                            echo "<option value='-'><i>Δεν έχει οριστεί</i></option>";
                            foreach ($department as $Id => $row3 ) {
                                $selected= '';
                                if($row3['Id'] == $SchoolDepartmentId)
                                {
                                    $selected = 'selected';   
                                }
                                echo "<option value='" . $row3['Id'] . "' " . $selected . ">" . $row3['DepartmentName'] . "</option>";
                            }
                            echo "</select>";
                        ?>    
                        </td>  
                    </tr>
                    <?php } ?>      
                    <!--- 
                    <tr>
                        <th class="font-weight-bold myblue1 text-white">
                            <?php echo t_curriculum0;?> 
                        </th>
                        <td colspan="4">
                            <?php   
                                echo "<select class='browser-default custom-select' name='department'>";
                                foreach ($department as $Id => $row1 ) {
                                    $selected= '';
                                    if($row1['Id'] == $Course['DepartmentId'])
                                    {
                                        $selected = 'selected';
                                    }
                                    echo "<option value='" . $row1['Id'] . "' " . $selected . ">" . $row1['DepartmentName'] . "</option>";
                                }
                                echo "</select>";
                            ?>
                        </td>--->
                    </tr>
                    <tr>
                        <th class="font-weight-bold myblue1 text-white">
                            <?php echo t_school_title0;?>
                        </th>
                        <td colspan="4">
                            <input class="form-control form-control-sm " name='SchoolName' value="<?php echo $school_name;?>"/>
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