<div class="p-5">

    <div class="container-fluid">
        <h2><?php echo t_active_courses?></h2>
        <i><p><?php echo t_active_courses1?></p> </i>
      
        <br>
        <div class="progress">
            <div class="progress-bar" style="width:<?php echo $activeCoursesPercent['activeCoursesPercent']?>%;">
                <div class="progress-value"><?php echo $activeCoursesPercent['activeCoursesPercent'] .'%'?></div>
            </div>
        </div>


        <br>
        <br>
        <br>
        <div class="card card-cascade narrower px-0 ">
            <div class="view view-cascade gradient-card-header myblue1 z-depth-2 text-center  narrower py-2 px-1  mb-3  rounded ">
                <h4 class="text-white">
                    <?php echo t_translate_active; ?>
                </h4>
                
            </div>
            <div class="px-4">
                <div class="table-wrapper table-responsive">
                    <form  method="POST" action="<?php echo URL . 'AdminController/WriteENOutcomes'?>" name="saveAbet">
                       
                        <div class="table-wrapper table-responsive">
                            <table class="table table-hover mb-0  btn-table "> 
                          
                                            <!-- id=finalAbet  -->
                                <thead >  
                                    <!-- <th class="th-lg font-weight-bold">
                                        < ? php echo '#'; ?>
                                        
                                    </th> -->
                                    <!-- <th class="font-weight-bold  th-lg">#</th> -->
                                    <!-- <th class="font-weight-bold  th-lg ">< ?php echo t_learning_outcomes_begin;?></th> -->
                                  
                                </thead>
                                <tbody>
                                    <?php 
                                    $p=1;
                                    // Greek Courses 
                                    foreach ($CourseElOutcomes as  $Id => $row ){ ?>
                                        <tr >
                                            <!-- <td>< ?php echo $p?></td> -->
                                            <!-- <td>< ?php echo $row['elVerbs'].' '.$row['Sentence'] ?></td> -->
                                                <div style="display:inline-block;" id="google_translate_element">
                                                <input style="width: 1px;" class="translate disabled form-control" type="text" value="<?php echo $row['enVerbs'].' '. $row['Sentence'];?>" name='abetEN[]'/>
                                                </div>
                                                <input type="hidden" name="OutcomeId[]" value="<?php echo $row['OrderNumber'];?>" />
                                             
                                                <input type="hidden" name="CourseId[]" value="<?php echo $row['CourseId'];?>" /> 
                                            
                                        </tr>

                                    <?php 
                                    $p++;
                                    } 
                                    // English Courses 
                                    foreach ($CourseEnOutcomes as  $Id => $row ){ ?>
                                        <tr >
                                           
                                            <input style="width: 1px;display:inline-block;" class="disabled form-control" type="text" value="<?php echo $row['enVerbs'].' '.$row['Sentence'];?>" name='abetEN2[]'/>
                            
                                            <input type="hidden" name="OutcomeId2[]" value="<?php echo $row['OrderNumber'];?>" />
                                            
                                            <input type="hidden" name="CourseId2[]" value="<?php echo $row['CourseId'];?>" /> 
                                            
                                        </tr>

                                    <?php 
                                   
                                    } ?>                             
                                </tbody>
                            </table>                          
                        </div>                     
                        <div class="text-center mt-n5 py-5">                
                            <button type="submit" name="submit" class="btn text-light font-weight-bold btn-rounded m-0 waves-effect" style="border-radius:50px !important;background-color:#4285f4;">
                            <i class='fab fa-google'></i>   <?php echo t_translate; ?> 
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>    

        <br>
        <br>
        <br>

        <div class="table-responsive">
            <table id="dtLearningOutcomes" class="table  table-sm" cellspacing="0" width="100%" >
                <thead class="myblue1 text-white">
                    <tr>
                        <th class="font-weight-bold th-sm">#</th>
                        <th class="th-sm font-weight-bold"><?php echo t_School;?></th>
                        <th class="th-sm font-weight-bold"><?php echo t_course;?></th>
                        <th class="th-sm font-weight-bold"><?php echo t_learning_outcomes;?></th>
                        <th class="th-sm font-weight-bold"></th>
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
                     


                            <td >
                                <div class="d-flex justify-content-center ">
                                   
                                    <!-- <div class="px-2">
                                    <a class="btn btn-outline-info rounded-pill font-weight-bold" href="< ? php echo URL . 'AdminController/LearningOutcomesAbet2?CourseId=' . $row['Id'] .'&Version=1'?>">
                                        <i class="fas fa-book-reader"></i>
                                        < ?php if ($_SESSION['lang']=='gr'){
                                            echo 'Μοντέλο 1';  
                                        }
                                        elseif ($_SESSION['lang']=='en'){
                                            echo 'Model 1'; 
                                        }
                                        ?>   
                                    </a> 
                                    </div>  -->
                                    <!-- <span class="badge badge-default "> -->
                                    <a class="badge badge-pill rgba-teal-strong font-weight-bold text-light p-2" href="<?php echo URL . 'AdminController/LearningOutcomesAbet2?CourseId=' . $row['Id'] .'&Version=2'?>">
                                        <i class="fas fa-book-reader"></i>
                                            <?php if ($_SESSION['lang']=='gr'){
                                                echo 'Μοντέλο USE';  
                                            }
                                            elseif ($_SESSION['lang']=='en'){
                                                echo 'Model USE'; 
                                            }
                                            ?>   
                                    </a> 

                                   <!-- <div class="py-0">
                                    <input class="p-2 z-depth-1 " type="button" id="lock" value="< ?php echo $row['Id'] ?>" style="border:none;"/>
                                    </div> -->
                                   
                                   


                                    <!-- </span> -->
                                </div> 
                                
                            </td>
                            <td>
                                <!-- <button class="btn btn-link" onclick="lockbtn(this.value)" value="< ? php echo $row['Id']; ?>"><i class="fas fa-2x fa-lock-open"></i></button> -->
                              
                                <a class=" font-weight-bold p-2" href="<?php echo URL . 'AdminController/LockCourse?CourseId=' . $row['Id'].'&Locked='.$row['locked'] ?>">
                              
                               <?php 


                                if ($row['locked']==0){
                                    echo '<i class="fas fa-2x fa-lock-open" ></i>';
                                }else{
                                    echo '<i class="fas fa-2x fa-lock" style="color:#ff1744;"></i>';
                                }
                                
                                
                                ?>
                              
                                            
                                </a> 
                            </td>
                        </tr>
                       
          

                    <?php $i++;
                } ?>
                </tbody>                
            </table>
        </div>
    </div>
</div>

