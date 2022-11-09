

<div class="p-5">
<div class="table-responsive">
        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%" >
            <thead class="myblue1 text-white"> 
                <tr>   
                    <th class="font-weight-bold th-sm">#</th>
                    <th class="th-sm font-weight-bold"><?php echo t_curriculum0;?></th>   
                    <th class="th-sm font-weight-bold"><?php echo t_Institution;?></th> 
                    <!--<th class="th-sm font-weight-bold"><?php //echo t_professor;?></th> -->
                    <th class="th-sm font-weight-bold"><?php echo t_delete;?></th>
                    <th class="th-sm font-weight-bold"><?php echo t_edit;?></th>
                </tr>    
            </thead>     
                <?php $i = 1;   
                foreach ($departments as $Id => $row){   

                    $InstitutionId = $row["InstitutionId"];
                    $SecondInstitutionId = $row["SecondInstitutionId"];

                    $stmt2 = $conn->prepare("SELECT * 
                    FROM institution
                    WHERE Id = ?");
                    $stmt2->execute([$InstitutionId]); 
                    $institution1 = $stmt2->fetchAll(); // get the mysqli result

                    foreach ($institution1 as $Id => $row2){   
                        $InstitutionName = $row2["InstitutionName"];
                    }

                    if ($SecondInstitutionId && $SecondInstitutionId > 0) {

                        $stmt3 = $conn->prepare("SELECT * 
                        FROM institution
                        WHERE Id = ?");
                        $stmt3->execute([$SecondInstitutionId]); 
                        $institution2 = $stmt3->fetchAll(); // get the mysqli result   
                        
                        foreach ($institution2 as $Id => $row3){   
                            $SecondInstitutionName = "- " . $row3["InstitutionName"];
                        }

                    } else {

                        $SecondInstitutionName = '';

                    }

                    ?>
                    <tr class="p-0">  
                        <td><?php echo $i;?>
                        <td><?php echo "<option value='" . $row['Id'] . "'>" . $row['DepartmentName'] . "</option>" ?> </td> 
                        <td><?php echo "<option value='" . $row['Id'] . "'>" . $InstitutionName;
                        echo "<option value='" . $row['Id'] . "'>" . $SecondInstitutionName . "</option>" ?> </td>
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
                            <a class="btn btn-outline-danger btn-rounded btn-sm my-0 rounded-pill font-weight-bold" href="<?php echo URL . 'AdminController/deleteSyllabus?SyllabusId=' . $row['Id'] ?>">
                            <i class="far fa-trash-alt mt-0"></i>
                                <?php echo t_delete;?>   
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-outline-info btn-rounded btn-sm my-0 rounded-pill font-weight-bold" href="<?php echo URL . 'AdminController/editSyllabus?SyllabusId=' . $row['Id'] ?>">
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