 <!-- Progress bar 1 -->

        <!-- END -->
<div class="p-5" >
    <div class="container-fluid">
    
        <div class="card">
            <!-- Card header -->
            <div class="card-header">    <h2><?php echo t_translated_courses ; ?></h2>
            <i><p><?php echo t_translated_courses4 ; ?></p> </i></div>

            <!--Card content-->
            <div class="card-body">
            <br>
                <div class="progress">
                    <div class="progress-bar" style="width:<?php echo $documentedCoursesPercent['activeCoursesPercent']?>%;">
                        <div class="progress-value"><?php echo $documentedCoursesPercent['activeCoursesPercent'] .'%'?></div>
                    </div>
                </div>
            </div>

               <!-- Card header -->
               <div class="card-header">    <h2><?php echo t_documented_courses ; ?></h2>
            <i><p><?php echo t_documented_courses1 ; ?></p> </i></div>

            <!--Card content-->
            <div class="card-body">
            <br>
                <div class="progress">
                    <?php 
                    if(+count($documentedCoursesList)!=0){
                        $docpercent = (+count($submitedCourses) / +count($documentedCoursesList))*100;
                        $docpercent = number_format($docpercent, 2);
                    }else{
                        $docpercent = 0;
                    }
                    ?>
                    <div class="progress-bar" style="width:<?php echo $docpercent?>%;">
                        <div class="progress-value"><?php echo $docpercent .'%'?></div>
                    </div>
                </div>
            </div>
        </div>
      
        <br>
        

        <br>


        <div class="card">
            <!-- Card header -->
            <div class="card-header">   <h2><?php echo '1) '. t_results_by_course;?></h2></h2></div>

            <!--Card content-->
            <div class="card-body">
            <br>
                <div class="table-responsive">
                <table id="dtDocumentedLearningOutcomes" class="table  table-bordered table-sm" cellspacing="0" width="100%" >
                    <thead class="myblue1 text-white">
                        <tr>
                            <th class="font-weight-bold th-sm">#</th>
                            <th class="th-sm font-weight-bold"><?php echo t_School;?></th>
                            <th class="th-sm font-weight-bold"><?php echo t_course;?></th>
                            <th class="th-sm font-weight-bold">
                            <?php if ($_SESSION['lang']=='gr'){
                                echo 'Διαθέσιμες καταστάσεις:'; ?>
                                <span class="badge badge-success p-1 ">
                                    <i class="fas fa-search"></i>
                                    <?php if ($_SESSION['lang']=='gr'){ 
                                        echo 'Τεκμηριωμένο';
                                    }?>
                                </span>  
                                <span class="badge p-1" style="background-color:#4285f4;"> 
                                <i class='fab fa-google'></i> 
                                    <?php if ($_SESSION['lang']=='gr'){ 
                                        echo 'Μεταφρασμένο';
                                    }?>
                                </span>  
                            <?php
                            }else{
                                echo 'Available status:'; ?>
                                <span class="badge badge-success p-1 ">
                                    <i class="fas fa-search"></i>
                                    <?php if ($_SESSION['lang']=='en'){ 
                                        echo 'Documented';
                                    }?>
                                </span>  
                                <span class="badge p-1" style="background-color:#4285f4;"> 
                                <i class='fab fa-google'></i> 
                                    <?php if ($_SESSION['lang']=='en'){ 
                                        echo 'Translated';
                                    }?>
                                </span>  
                            <?php }
                            
                            ?>
                            </th>
                            <th class="th-sm font-weight-bold"><?php echo t_learning_outcomes;?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($documentedCoursesList as $Id => $row ){ ?>
                           
                            <tr class="p-0">
                                <td><?php echo $i;?>
                                <td><?php echo "<option value='" . $row['Id'] . "'>" . $row['SchoolName'] . "</option>" ?> </td>
                                <td><?php echo "<option value='" . $row['Id'] . "'>" . $row['CourseTitle'] ." (". $row['LessonCode'] . ")</option>" ?></td>
                                
                                <td >
                                    <?php 
                                    foreach ($submitedCourses as $Id_ => $row_ ){ 
                                    if($row_['CourseId']==$row['CourseId']){ ?>
                                        <span class="badge badge-success p-1 ">
                                        <i class="fas fa-search"></i>
                                        <?php if ($_SESSION['lang']=='en'){ 
                                            echo 'Documented';
                                        }else if ($_SESSION['lang']=='gr'){ 
                                            echo 'Τεκμηριωμένο';
                                        }?>
                                        
                                        </span>  
                                    <?php } 
                                
                                    }?>  

                                    <?php if  ($row['documentedCoursesPercent'] == 100){?>
                                        <span class="badge p-1" style="background-color:#4285f4;"> 
                                        <i class='fab fa-google'></i> 
                                        
                                        <?php if ($_SESSION['lang']=='en'){ 
                                            echo 'Translated';
                                        }else if ($_SESSION['lang']=='gr'){ 
                                            echo 'Μεταφρασμένο';
                                        }?>
                                        </span>  

                                   <?php } ?>
                                   
                                            
                                </td>

                                <td class="text-center m-0" >
                                    <a class="btn btn-outline-cyan btn-rounded btn-sm my-0 rounded-pill font-weight-bold" href="<?php echo URL . 'AdminController/AbetTable?CourseId=' . $row['Id'] ?>">
                                    <i class="fas fa-search"></i>
                                        <?php echo t_translated_courses3 ;?>
                                    </a>
                                </td>
                            
                            </tr>
                        <?php
                            
                        $i++;
                    } ?>
                    </tbody>                
                </table>
            <!-- End table responsive -->
            </div>
            </div>
        </div>
        <br>
        

        <br>

        <div class="card">
            <!-- Card header -->
            <div class="card-header"><h2><?php echo '2) '. t_results_by_school;?></h2></div>

            <!--Card content-->
            <div class="card-body">
            <br>
                <div class="px-2">
                    <h4 class=" "> 
                    <?php if ($_SESSION['lang']=='gr'){
                        echo 'Επιλέξτε την Σχολή σας:';
                        
                    }
                    elseif ($_SESSION['lang']=='en'){
                        echo 'Select department:';
                        
                    }
                    ?></h4>

                    <!-- Material auto-sizing form -->
                    <form class="customSelect" method="POST" action="<?php echo URL; ?>AdminController/ScoreBySchool">
                        <!-- Grid row -->
                        <div class="form-row align-items-center">
                            <!-- Grid column -->
                            <div class="col-auto">
                                <!-- Material input -->
                                <div class="md-form">
                                    <div class="select" >
                                        <?php
                                            // echo "<select id='getDname' onchange='dSelectCheck(this);' class='browser-default custom-select' name='department_'>";
                                            echo "<select class='browser-default custom-select ' name='department_'>";
                                            echo "<option value=''></option>";
                                            $i='a';
                                            foreach ($department as $Id => $row ) {
                                                echo "<option class='my_class' value='" . $row['Id'] . "'>" . $row['DepartmentName'] . "</option>";
                                                $i=$i.'a';
                                            }
                                            echo "</select>";
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <!-- Grid column -->
                            <!-- Grid column -->
                            <div class="col-auto">
                                <button type="submit" name="next5" class="btn btn-light next"><?php echo t_next;?></button>
                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Grid row -->
                    </form>
                    <!-- Material auto-sizing form -->
                </div>
            </div>
        </div>
      
        <br>
        <br>
        <!---
        <div class="card">
            <!-Card header 
            <div class="card-header"> <h2><?php echo '3) '. t_results;?></h2></div>

            <!-Card content
            <div class="card-body">
            <br>
                <div class="text-center py-2">
                    <a class="btn btn-light" href="<?php echo URL . 'AdminController/UniversityResults'?>">
                        <?php echo t_next ;?>
                    </a>
                </div>
            </div>
        </div>---->


    <br>
    

    <!-- End container-fluid -->
    </div>
    <!-- end p-5 -->
</div>


