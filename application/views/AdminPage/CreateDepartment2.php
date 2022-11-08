<section class="container py-5">
        <div id="create_department">
            <form method="POST" action="<?php echo URL; ?>AdminController/saveDepartment" name="departmentform">
                <h4 class="text-center font-weight-bold"> <?php echo t_department_description;?> </br> </h4>

                <div class="table-wrapper table-responsive py-3" >    
                <table class="table table-bordered table-hover mt-0" >       
                    <tr style="padding:0 !important;margin:0 !important;">
                        <th scope="row" class="font-weight-bold myblue1 text-white"><?php echo t_language;?></th>
                        <td colspan="4">   
                            <input class="form-control form-control-sm " name='TeachingLang' value="<?php echo $teaching_lang_selected;?>" readonly />
                            <input type='hidden' name='langId' value="<?php echo $langId_selected;?>" />
                        </td>                   
                        <tr>                              
                            <th scope="row" class="font-weight-bold myblue1 text-white">
                                <?php echo t_department_title; ?>    
                            </th>
                            <td colspan="4">
                                <input class="form-control form-control-sm " name='DepartmentTitle'></input>
                            </td>
                        </tr>  
                    </tr> 
                    <tr>      
                        <th scope="row" class="font-weight-bold myblue1 text-white" width="40%">
                            <?php echo t_Institution_1;?> 
                        </th>  
                        <td colspan="4" width="60%">  
                            <?php
                                if ($_SESSION['admin_id'] == 4) { // if super admin, the user can choose the institution of the school 
                                    echo "<select class='browser-default custom-select' name='InstitutionId1'>";
                                    echo "<option value=''></option>";
                                    foreach ($institution as $Id => $row ) {
                                        echo "<option value='" . $row['Id'] . "'>" . $row['InstitutionName'] . "</option>";
                                    }
                                    echo "</select>";
                                } else { // if super admin, the institution of the school is read-only
                                    foreach ($institution as $Id => $row ) {
                                        echo "<input class='form-control form-control-sm' name='institution_title' value='". $row['InstitutionName'] ."' readonly/>";
                                        echo "<input type='hidden' class='form-control form-control-sm' name='institution' value='". $row['Id'] ."' readonly/>";                               
                                    }
                                }
                            ?>     
                        </td>    
                    </tr>     
                    <tr>      
                        <th scope="row" class="font-weight-bold myblue1 text-white" width="40%">
                            <?php echo t_Institution_2;?> 
                        </th>  
                        <td colspan="4" width="60%">  
                            <?php
                                if ($_SESSION['admin_id'] == 4) { // if super admin, the user can choose the institution of the school 
                                    echo "<select class='browser-default custom-select' name='institution2'>";
                                    echo "<option value='0'></option>";
                                    foreach ($institution as $Id => $row ) {
                                        echo "<option value='" . $row['Id'] . "'>" . $row['InstitutionName'] . "</option>";
                                    }
                                    echo "</select>";
                                } else { // if super admin, the institution of the school is read-only
                                    foreach ($institution as $Id => $row ) {
                                        echo "<input class='form-control form-control-sm' name='institution2' value='". $row['InstitutionName'] ."' readonly/>";
                                        echo "<input type='hidden' class='form-control form-control-sm' name='institution2' value='". $row['Id'] ."' readonly/>";                               
                                    }
                                }
                            ?>
                        </td>    
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