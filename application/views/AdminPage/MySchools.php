

<div class="p-5">
<div class="table-responsive">
        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%" >
            <thead class="myblue1 text-white"> 
                <tr>
                    <th class="font-weight-bold th-sm">#</th>
                    <th class="th-sm font-weight-bold"><?php echo t_School;?></th>   
                    <th class="th-sm font-weight-bold"><?php echo t_Institution;?></th> 
                    <!--<th class="th-sm font-weight-bold"><?php //echo t_professor;?></th> -->
                    <th class="th-sm font-weight-bold"><?php echo t_delete;?></th>
                    <th class="th-sm font-weight-bold"><?php echo t_edit;?></th>
                </tr>  
            </thead>               
                <?php $i = 1;
                foreach ($schools as $Id => $row){ 
                    //$SchoolName = $this->CourseModel->getSchool($row['Id']);
                    //$arrlength = count($CourseProfessorName);   
                    $SchoolId = $row['Id']; 
                    $stmt2 = $conn->prepare("SELECT institution.InstitutionName
                    FROM perigrammata_db.institution    
                    WHERE Id = ?");
                    $stmt2->execute([$InstitutionId]);     
                    $InstitutionName = $stmt2->fetchAll(); // get the mysqli result
                    //$stmt->close();
            
                    foreach($InstitutionName as $row2){
                        $InstitutionName = $row2['InstitutionName'];
                    }
                    ?>
                    <tr class="p-0">  
                        <td><?php echo $i;?>
                        <td><?php echo "<option value='" . $row['Id'] . "'>" . $row['SchoolName'] . "</option>" ?> </td> 
                        <td><?php echo "<option value='" . $row['Id'] . "'>" . $InstitutionName . "</option>" ?> </td>
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
                            <a class="btn btn-outline-danger btn-rounded btn-sm my-0 rounded-pill font-weight-bold" href="<?php echo URL . 'AdminController/deleteSchool?SchoolId=' . $row['Id'] ?>">
                            <i class="far fa-trash-alt mt-0"></i>
                                <?php echo t_delete;?>   
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-outline-info btn-rounded btn-sm my-0 rounded-pill font-weight-bold" href="<?php echo URL . 'AdminController/editSchool?SchoolId=' . $row['Id'] ?>">
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