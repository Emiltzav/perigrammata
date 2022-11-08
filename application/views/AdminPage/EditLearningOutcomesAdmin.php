<section class="container py-5">
    <div id="create_course">
        <form method="POST" action="<?php echo URL; ?>AdminController/updateLearningOutcomesAdmin" name="adminform">
        
        <input type="hidden" name="CourseId" value="<?php echo $Course['Id'];?>" />

        <div class="py-5 ">
            <div class="card card-cascade narrower container px-0">
                <div class="view view-cascade gradient-card-header  myblue1 darken-1 narrower py-2 px-1 d-flex justify-content-center align-items-center rounded ">
                    <div>
                    </div>
                    <h4 class=" text-white font-italic  font-weight-bold">
                        <?php echo t_2learning_outcomes;?> 
                    </h4>
                   
                </div>



                <div class="table-wrapper table-responsive" >
                    <table  class="table table-bordered table-hover mt-0" id="outcomes_table"  style="font-size=120px !important;">
                    <tr>
                        <th class="font-weight-bold  myblue1 text-white" colspan="4"><?php echo t_learning_outcomes;?>
                  
                            </br> <small><?php echo t_learning_outcomes1;?></small>
                            </br> <small><?php echo t_learning_outcomes2;?></small>
                            </br> <small><?php echo t_learning_outcomes3;?></small>
                            </br> <small><?php echo t_learning_outcomes4;?></small>
                            </br> <small><?php echo t_learning_outcomes5;?></small>
                        </th>
                    </tr>
                    <tr>
                        <td colspan="4" class="text-dark font-weight-bold" style="font-size:17px;">
                            <?php echo t_learning_outcomes_begin;?>
                        </td>
                    </tr>
                    <tbody id="sortable">
                    <?php
                        $vi=0;
                        foreach ( $CourseVerbs as $verbId => $sentence )
                        {
                    ?>
                    <!-- <tr>
                       
                    </tr> -->
                    <tr class="sentences" >
                        <td class="py-4">
                            <i class="fas fa-arrows-alt-v"></i>
                        </td>
                       
                        <td class="py-3"> 	
                            <?php
                                echo "<select class='browser-default custom-select' name='Verbs[]'>";
                                echo "<option ></option>";
                                foreach ($verbs as $Id => $row ) {
                                    $selected= '';
                                    if( $verbId ==  $Id )
                                    {
                                        $selected = 'selected';
                                    }
                                    echo "<option value='" . $row['Id'] . "' " . $selected . ">" . $row['Verbs'] .' ('. $row['Classification'] .')'. "</option>";
                                }
                                echo "</select>";
                            ?>
                        </td>
                        <td class="py-3">
                            <input class="form-control form-control-sm " name="Sentences[]" value="<?php echo $sentence;?>"/>
                        </td>
                        <td class="p-3 text-center" >
                            <span class="table-remove">                              
                                <button type="button" class="btn-remove btn btn-danger btn-rounded_ btn-sm my-0"><?php echo t_delete?></button>
                            </span>
                        </td>
                    </tr>
                    <?php
                        $vi++;
                        }
                       
                    ?>
            
                 
                    </tbody>
                    
                    
                 
                   
                </table>
            </div>                   
        </div>
        </div>
            
         
         
            <div class="text-center">
                <button type="submit" name="update_lo_admin" class="btn btn-light"><?php echo t_finish;?></button>
            </div>
            </br>
        </form>
    </div>
</section>