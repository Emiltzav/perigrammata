

<div class="p-5">
<div class="table-responsive">
        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%" >
            <thead class="myblue1 text-white"> 
                <tr>
                    <th class="font-weight-bold th-sm">#</th>
                    <th class="th-sm font-weight-bold"><?php echo t_Institution;?></th>   
                    <th class="th-sm font-weight-bold"><?php echo t_language0;?></th> 
                    <!--<th class="th-sm font-weight-bold"><?php //echo t_professor;?></th> -->
                    <th class="th-sm font-weight-bold"><?php echo t_delete;?></th>
                    <th class="th-sm font-weight-bold"><?php echo t_edit;?></th>
                </tr>  
            </thead>     
                <?php $i = 1;
                foreach ($institution as $Id => $row ){ 

                    $school_lang_id = $row['langId'];   
                    if($school_lang_id == 1) {   
                        $LanguageOfTeaching = 'Ελληνικά'; 
                    } else if($school_lang_id == 2) {
                        $LanguageOfTeaching = 'Αγγλικά'; 
                    }

                    ?>
                    <tr class="p-0">  
                        <td><?php echo $i;?>
                        <td><?php echo "<option value='" . $row['Id'] . "'>" . $row['InstitutionName'] . "</option>" ?> </td> 
                        <td><?php echo "<option value='" . $row['Id'] . "'>" . $LanguageOfTeaching . "</option>" ?> </td>
                        <!--
                        <td>
                        <?php  /*
                        foreach ($CourseProfessorName as $ProfessorName) {
                            echo "<a href='#'><option value='" . $row['Id'] . "'>"; 
                            echo $ProfessorName;
                            echo "</option></a>";  
                        }  */
                        ?> 
                        </td>-->                        

                        <td>
                            <a class="btn btn-outline-danger btn-rounded btn-sm my-0 rounded-pill font-weight-bold" href="<?php echo URL . 'AdminController/deleteInstitution?InstitutionId=' . $row['Id'] ?>">
                            <i class="far fa-trash-alt mt-0"></i>
                                <?php echo t_delete;?>   
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-outline-info btn-rounded btn-sm my-0 rounded-pill font-weight-bold" href="<?php echo URL . 'AdminController/editInstitution?InstitutionId=' . $row['Id'] ?>">
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