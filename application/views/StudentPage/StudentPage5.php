
<div class="py-5 animated fadeIn slower">
    <div class="card card-cascade narrower container  px-0" style="display:none;">
        <div class="view view-cascade gradient-card-header myblue1 z-depth-2 text-center  narrower py-2 px-1  mb-3  rounded ">

        <?php 


        ?>
            <h4 class="mycourses text-white font-italic ">
                <?php echo t_mycourses; ?>
            </h4>
        </div>
        <div class="px-4" >
            <div class="table-wrapper table-responsive">
                <table  class="table  mb-0 your-custom-styles" >
                    <thead >
                        <tr>
                            <!-- <th class="font-weight-bold th-lg"></th> -->
                            <th class="th-lg font-weight-bold"><?php echo t_course;?></th>
                            <th class="th-lg font-weight-bold"><?php echo t_learning_outcomes;?></th>
                            <th class="th-lg font-weight-bold"><?php echo t_score_array;?></th>
                            <th class="th-lg font-weight-bold"><?php echo t_score_array2;?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $final_array = array();
                        $k=0;
                        //  print_r($courses_selected__);
                        foreach($courses_selected__ as $item => $item_value) {
                        
                    
                            $pid = $item_value['CourseId'];
                            if(!isset($final_array[$pid])) {
                                $final_array[$pid] = $item_value;
                                // $k=$pid;
                            } else {
                                if($k!=$pid){
                                    $final_array[$pid]['Sentence'] = '&#9830; '. $final_array[$item_value['CourseId']]['Verbs'].' '.$final_array[$pid]['Sentence'].'.<br>&#9830; '.$item_value['Verbs'].' '. $item_value['Sentence'];
                                    $k=$pid;
                                }else{
                                    $final_array[$pid]['Sentence'] = $final_array[$pid]['Sentence'].'.<br>&#9830; '.$item_value['Verbs'].' '. $item_value['Sentence'];
                                }                                                            
                            }
                        }
                        $cId=-1;
                    ?>



                        
                        <?php  
                        // print_r($AbetScore);
                       
                       
                        $c1=0;$c2=0;$c3=0;$c4=0;$c5=0;$c6=0;$c7=0;$activeCourses=0;$c1_=0;$c2_=0;$c3_=0;$c4_=0;$c5_=0;$c6_=0;$c7_=0;
                        foreach ($courses_selected as $Id_ => $row_ ){?>
                            <tr> 
                                 <td><?php echo   $row_['CourseTitle'] ." (". $row_['LessonCode'] . ")" ?></td>
                                
                                 <?php 
                           $flag=0;
                           foreach ($final_array as $Id__ => $row__ ){ 
                            
                               
                               ?>
                                <?php  
                                if ($row__['CourseId']==$row_['Id'] ){
                                    $flag=1;
                                    
                                ?>
                                
                                    <!-- <td>< ?php echo   $row['CourseTitle'] ." (". $row['LessonCode'] . ")" ?></td> -->
                                    <!-- <td>< ?php echo   $row['CourseId'] ?></td> -->
                                    <td ><?php 
                                    // Print translated outcomes 
                                    if ($_SESSION['lang']=='en'){
                                        foreach($courses_selected__ as $item => $item_value) {
                                            foreach($AbetScore as $Id => $row) {
                                                if($item_value['CourseId']==$row['CourseId'] && $row['OutcomeId']==$item_value['OrderNumber'] && $item_value['CourseId']==$row_['Id']){
                                                    echo '&#9830; '.$row['Outcome'].'<br>';
                                                }
                                                // if($item_value['CourseId']==$row['CourseId'] && (strpos($row['Outcome'], '_') !== false) && $item_value['CourseId']==$row_['Id']){
                                                //     echo '&#9830; '.$row['Outcome'].'<br>';
                                                // }
                                            }
                                        }    
                                    }
                                    else if ($_SESSION['lang']=='gr'){
                                        echo  $row__['Sentence'];
                                    }
                                    ?>
                                    
                                    
                                    </td>
                                
                                <?php 
                                }
                  
                            }
                            if ($flag==0){
                            ?>
                            <td><?php echo '-' ?></td>
                        <?php } 
                        
                        
                        
                        if ($flag!=0){
                            $activeCourses++;
                        ?>


                                    <td>
                                    
                                    <?php  
                                    
                                        foreach ($abet_selected__ as $Id => $row ){
                                            // if ($row_['Id'];)
                                        if ($Id_==$Id){
                                            if($row['c1']==null){
                                                $row['c1']=0;
                                            }
                                            if($row['c2']==null){
                                                $row['c2']=0;
                                            }
                                            if($row['c3']==null){
                                                $row['c3']=0;
                                            }
                                            if($row['c4']==null){
                                                $row['c4']=0;
                                            }
                                            if($row['c5']==null){
                                                $row['c5']=0;
                                            }
                                            if($row['c6']==null){
                                                $row['c6']=0;
                                            }
                                            if($row['c7']==null){
                                                $row['c7']=0;
                                            }
                                            ?>
                                            <?php echo t_criterion.' 1: <br>' ?>
                                            <br>
                                            <div class="progress">
                                                <div class="progress-bar" style="width:<?php echo $row['c1']?>%;">
                                                    <div class="progress-value mr-n5"><?php echo $row['c1'] .'%'?></div>
                                                </div>
                                            </div>
                                            <?php echo t_criterion.' 2: <br>' ?>
                                            <br>
                                            <div class="progress">
                                                <div class="progress-bar" style="width:<?php echo $row['c2']?>%;">
                                                    <div class="progress-value mr-n5"><?php echo $row['c2'] .'%'?></div>
                                                </div>
                                            </div>
                                            <?php echo t_criterion.' 3: <br>' ?>
                                            <br>
                                            <div class="progress">
                                                <div class="progress-bar" style="width:<?php echo $row['c3']?>%;">
                                                    <div class="progress-value mr-n5"><?php echo $row['c3'] .'%'?></div>
                                                </div>
                                            </div>
                                            <?php echo t_criterion.' 4: <br>' ?>
                                            <br>
                                            <div class="progress">
                                                <div class="progress-bar" style="width:<?php echo $row['c4']?>%;">
                                                    <div class="progress-value mr-n5"><?php echo $row['c4'] .'%'?></div>
                                                </div>
                                            </div>
                                            <?php echo t_criterion.' 5: <br>' ?>
                                            <br>
                                            <div class="progress">
                                                <div class="progress-bar" style="width:<?php echo $row['c5']?>%;">
                                                    <div class="progress-value mr-n5"><?php echo $row['c5'] .'%'?></div>
                                                </div>
                                            </div>
                                            <?php echo t_criterion.' 6: <br>' ?>
                                            <br>
                                            <div class="progress">
                                                <div class="progress-bar" style="width:<?php echo $row['c6']?>%;">
                                                    <div class="progress-value mr-n5"><?php echo $row['c6'] .'%'?></div>
                                                </div>
                                            </div>
                                            <?php echo t_criterion.' 7: <br>' ?>
                                            <br>
                                            <div class="progress">
                                                <div class="progress-bar" style="width:<?php echo $row['c7']?>%;">
                                                    <div class="progress-value mr-n5"><?php echo $row['c7'] .'%'?></div>
                                                </div>
                                            </div>

                                            <?php    
                                             $c1=+$c1 + +$row['c1'];
                                             $c2=+$c2 + +$row['c2'];
                                             $c3=+$c3 + +$row['c3'];
                                             $c4=+$c4 + +$row['c4'];
                                             $c5=+$c5 + +$row['c5'];
                                             $c6=+$c6 + +$row['c6'];
                                             $c7=+$c7 + +$row['c7'];
                                        // End if
                                        
                                        } 
                                        // End abet_selected__ for
                                        }?>

    
                                    </td>

                                    <td>
                                    
                                    <?php  
                                    
                                    foreach ($abet_selected1__ as $Id => $row ){
                                            // if ($row_['Id'];)
                                        if ($Id_==$Id){
                                            if($row['c1']==null){
                                                $row['c1']=0;
                                            }
                                            if($row['c2']==null){
                                                $row['c2']=0;
                                            }
                                            if($row['c3']==null){
                                                $row['c3']=0;
                                            }
                                            if($row['c4']==null){
                                                $row['c4']=0;
                                            }
                                            if($row['c5']==null){
                                                $row['c5']=0;
                                            }
                                            if($row['c6']==null){
                                                $row['c6']=0;
                                            }
                                            if($row['c7']==null){
                                                $row['c7']=0;
                                            }
                                            ?>
                                            <?php echo t_criterion.' 1: <br>' ?>
                                            <br>
                                            <div class="progress">
                                                <div class="progress-bar" style="width:<?php echo $row['c1']?>%;">
                                                    <div class="progress-value mr-n5"><?php echo $row['c1'] .'%'?></div>
                                                </div>
                                            </div>
                                            <?php echo t_criterion.' 2: <br>' ?>
                                            <br>
                                            <div class="progress">
                                                <div class="progress-bar" style="width:<?php echo $row['c2']?>%;">
                                                    <div class="progress-value mr-n5"><?php echo $row['c2'] .'%'?></div>
                                                </div>
                                            </div>
                                            <?php echo t_criterion.' 3: <br>' ?>
                                            <br>
                                            <div class="progress">
                                                <div class="progress-bar" style="width:<?php echo $row['c3']?>%;">
                                                    <div class="progress-value mr-n5"><?php echo $row['c3'] .'%'?></div>
                                                </div>
                                            </div>
                                            <?php echo t_criterion.' 4: <br>' ?>
                                            <br>
                                            <div class="progress">
                                                <div class="progress-bar" style="width:<?php echo $row['c4']?>%;">
                                                    <div class="progress-value mr-n5"><?php echo $row['c4'] .'%'?></div>
                                                </div>
                                            </div>
                                            <?php echo t_criterion.' 5: <br>' ?>
                                            <br>
                                            <div class="progress">
                                                <div class="progress-bar" style="width:<?php echo $row['c5']?>%;">
                                                    <div class="progress-value mr-n5"><?php echo $row['c5'] .'%'?></div>
                                                </div>
                                            </div>
                                            <?php echo t_criterion.' 6: <br>' ?>
                                            <br>
                                            <div class="progress">
                                                <div class="progress-bar" style="width:<?php echo $row['c6']?>%;">
                                                    <div class="progress-value mr-n5"><?php echo $row['c6'] .'%'?></div>
                                                </div>
                                            </div>
                                            <?php echo t_criterion.' 7: <br>' ?>
                                            <br>
                                            <div class="progress">
                                                <div class="progress-bar" style="width:<?php echo $row['c7']?>%;">
                                                    <div class="progress-value mr-n5"><?php echo $row['c7'] .'%'?></div>
                                                </div>
                                            </div>

                                            <?php    
                                            $c1_=+$c1_ + +$row['c1'];
                                            $c2_=+$c2_ + +$row['c2'];
                                            $c3_=+$c3_ + +$row['c3'];
                                            $c4_=+$c4_ + +$row['c4'];
                                            $c5_=+$c5_ + +$row['c5'];
                                            $c6_=+$c6_ + +$row['c6'];
                                            $c7_=+$c7_ + +$row['c7'];
                                        // End if
                                        } 
                                        // End abet_selected__ for
                                        }?>

    
                                    </td>
                                 <!-- End flag=0 -->
                                <?php }else{ ?>
                                        <td>-</td>
                                        <td>-</td>
                                <?php } ?>
                            </tr>
                       <?php  
                    
                    } 
                    ?>


                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>

   
    

</div>
<?php
    if($activeCourses==0){ 
        $activeCourses = 1;
    }

?>
<div class="py-5 animated fadeIn slower">
    <div class="py-3 card card-cascade narrower container px-0 ">
        <!-- < ?php echo $activeCourses . '<br>' . $c1 .', '. $c2 .', '. $c3 .', '. $c4 .', '. $c5 .', '. $c6 .', '. $c7 ;  ?> -->
        <!-- < ?php echo '<br>' . $c1/$activeCourses.', '. $c2/$activeCourses .', '. $c3/$activeCourses .', '. $c4/$activeCourses .', '. $c5/$activeCourses .', '. $c6/$activeCourses .', '. $c7/$activeCourses ;  ?> -->
               
            <div class="p-5">
                <div class="row">
                    <div class="col-sm">
                        <h4 class="text-center font-weight-bold ">
                        <?php echo t_score_array1; ?>
                        </h4>
                        <br>    
                        <b><?php echo t_criterion .' 1: '?></b>
                        <i style="display:inline;"><?php echo  t_criterion1.' <br>' ?></i>
                        <br>
                        <div class="progress">
                            <div class="progress-bar" style="width:<?php echo $c1/$activeCourses?>%;">
                                <div class="progress-value mr-n5"><?php echo number_format($c1/$activeCourses) .'%'?></div>
                            </div>
                        </div>
                        <b><?php echo t_criterion .' 2: '?></b>
                        <i style="display:inline;"><?php echo  t_criterion2.' <br>' ?></i>
                        <br>
                        <div class="progress">
                            <div class="progress-bar" style="width:<?php echo $c2/$activeCourses?>%;">
                                <div class="progress-value mr-n5"><?php echo number_format($c2/$activeCourses) .'%'?></div>
                            </div>
                        </div>
                        <b><?php echo t_criterion .' 3: '?></b>
                        <i style="display:inline;"><?php echo  t_criterion3.' <br>' ?></i>
                        <br>
                        <div class="progress">
                            <div class="progress-bar" style="width:<?php echo $c3/$activeCourses?>%;">
                                <div class="progress-value mr-n5"><?php echo number_format($c3/$activeCourses) .'%'?></div>
                            </div>
                        </div>
                        <b><?php echo t_criterion .' 4: '?></b>
                        <i style="display:inline;"><?php echo  t_criterion4.' <br>' ?></i>
                        <br>
                        <div class="progress">
                            <div class="progress-bar" style="width:<?php echo $c4/$activeCourses?>%;">
                                <div class="progress-value mr-n5"><?php echo number_format($c4/$activeCourses) .'%'?></div>
                            </div>
                        </div>
                        <b><?php echo t_criterion .' 5: '?></b>
                        <i style="display:inline;"><?php echo  t_criterion5.' <br>' ?></i>
                        <br>
                        <div class="progress">
                            <div class="progress-bar" style="width:<?php echo $c5/$activeCourses?>%;">
                                <div class="progress-value mr-n5"><?php echo number_format($c5/$activeCourses) .'%'?></div>
                            </div>
                        </div>
                        <b><?php echo t_criterion .' 6: '?></b>
                        <i style="display:inline;"><?php echo  t_criterion6.' <br>' ?></i>
                        <br>
                        <div class="progress">
                            <div class="progress-bar" style="width:<?php echo $c6/$activeCourses?>%;">
                                <div class="progress-value mr-n5"><?php echo number_format($c6/$activeCourses) .'%'?></div>
                            </div>
                        </div>
                        <b><?php echo t_criterion .' 7: '?></b>
                        <i style="display:inline;"><?php echo  t_criterion7.' <br>' ?></i>
                        <br>
                        <div class="progress">
                            <div class="progress-bar" style="width:<?php echo $c7/$activeCourses?>%;">
                                <div class="progress-value mr-n5"><?php echo number_format($c7/$activeCourses) .'%'?></div>
                            </div>
                        </div>
                        <br>
                    </div>

                    <div class="col-sm">
                        <h4 class="text-center font-weight-bold ">
                        <?php echo t_score_array3; ?>
                        </h4>
                        <br>    
                        <b><?php echo t_criterion .' 1: '?></b>
                        <i style="display:inline;"><?php echo  t_criterion1.' <br>' ?></i>
                        <br>
                        <div class="progress">
                            <div class="progress-bar" style="width:<?php echo $c1_/$activeCourses?>%;">
                                <div class="progress-value mr-n5"><?php echo number_format($c1_/$activeCourses) .'%'?></div>
                            </div>
                        </div>
                        <b><?php echo t_criterion .' 2: '?></b>
                        <i style="display:inline;"><?php echo  t_criterion2.' <br>' ?></i>
                        <br>
                        <div class="progress">
                            <div class="progress-bar" style="width:<?php echo $c2_/$activeCourses?>%;">
                                <div class="progress-value mr-n5"><?php echo number_format($c2_/$activeCourses) .'%'?></div>
                            </div>
                        </div>
                        <b><?php echo t_criterion .' 3: '?></b>
                        <i style="display:inline;"><?php echo  t_criterion3.' <br>' ?></i>
                        <br>
                        <div class="progress">
                            <div class="progress-bar" style="width:<?php echo $c3_/$activeCourses?>%;">
                                <div class="progress-value mr-n5"><?php echo number_format($c3_/$activeCourses) .'%'?></div>
                            </div>
                        </div>
                        <b><?php echo t_criterion .' 4: '?></b>
                        <i style="display:inline;"><?php echo  t_criterion4.' <br>' ?></i>
                        <br>
                        <div class="progress">
                            <div class="progress-bar" style="width:<?php echo $c4_/$activeCourses?>%;">
                                <div class="progress-value mr-n5"><?php echo number_format($c4_/$activeCourses) .'%'?></div>
                            </div>
                        </div>
                        <b><?php echo t_criterion .' 5: '?></b>
                        <i style="display:inline;"><?php echo  t_criterion5.' <br>' ?></i>
                        <br>
                        <div class="progress">
                            <div class="progress-bar" style="width:<?php echo $c5_/$activeCourses?>%;">
                                <div class="progress-value mr-n5"><?php echo number_format($c5_/$activeCourses) .'%'?></div>
                            </div>
                        </div>
                        <b><?php echo t_criterion .' 6: '?></b>
                        <i style="display:inline;"><?php echo  t_criterion6.' <br>' ?></i>
                        <br>
                        <div class="progress">
                            <div class="progress-bar" style="width:<?php echo $c6_/$activeCourses?>%;">
                                <div class="progress-value mr-n5"><?php echo number_format($c6_/$activeCourses) .'%'?></div>
                            </div>
                        </div>
                        <b><?php echo t_criterion .' 7: '?></b>
                        <i style="display:inline;"><?php echo  t_criterion7.' <br>' ?></i>
                        <br>
                        <div class="progress">
                            <div class="progress-bar" style="width:<?php echo $c7_/$activeCourses?>%;">
                                <div class="progress-value mr-n5"><?php echo number_format($c7_/$activeCourses) .'%'?></div>
                            </div>
                        </div>
                        <br>
                    </div>

                </div>
            </div>
    
    
    </div>
</div>


<br>
<br>
<div class="card card-cascade narrower container  px-0" >
        <div class="view view-cascade gradient-card-header myblue1 z-depth-2 text-center  narrower py-2 px-1  mb-3  rounded ">

        
            <h4 class="mycourses text-white font-italic ">
                <?php echo t_mycourses; ?>
            </h4>
        </div>
        <div class="px-4" >
            <div class="table-wrapper table-responsive">
                <table  class="table  mb-0 your-custom-styles" >
                    <thead >
                        <tr>
                            <!-- <th class="font-weight-bold th-lg"></th> -->
                            <th class="th-lg font-weight-bold"><?php echo t_course;?></th>
                            <th class="th-lg font-weight-bold"><?php echo t_learning_outcomes;?></th>
                           
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $final_array = array();
                        $k=0;
                        //  print_r($courses_selected__);
                        foreach($courses_selected__ as $item => $item_value) {
                        
                    
                            $pid = $item_value['CourseId'];
                            if(!isset($final_array[$pid])) {
                                $final_array[$pid] = $item_value;
                                // $k=$pid;
                            } else {
                                if($k!=$pid){
                                    $final_array[$pid]['Sentence'] = '&#9830; '. $final_array[$item_value['CourseId']]['Verbs'].' '.$final_array[$pid]['Sentence'].'.<br>&#9830; '.$item_value['Verbs'].' '. $item_value['Sentence'];
                                    $k=$pid;
                                }else{
                                    $final_array[$pid]['Sentence'] = $final_array[$pid]['Sentence'].'.<br>&#9830; '.$item_value['Verbs'].' '. $item_value['Sentence'];
                                }                                                            
                            }
                        }
                        $cId=-1;
                    ?>



                        
                        <?php  
                        // print_r($AbetScore);
                       
                       
                       
                        foreach ($courses_selected as $Id_ => $row_ ){?>
                            <tr> 
                                 
                                
                                 <?php 
                           $flag=0;
                           foreach ($final_array as $Id__ => $row__ ){ ?>
                                
                                
                                <?php  
                                if ($row__['CourseId']==$row_['Id'] ){
                                    $flag=1;
                                    
                                ?>
                                                                <td><?php echo   $row_['CourseTitle'] ." (". $row_['LessonCode'] . ")" ?></td>

                                    <!-- <td>< ?php echo   $row['CourseTitle'] ." (". $row['LessonCode'] . ")" ?></td> -->
                                    <!-- <td>< ?php echo   $row['CourseId'] ?></td> -->
                                    <td ><?php 
                                    // Print translated outcomes 
                                    if ($_SESSION['lang']=='en'){
                                        foreach($courses_selected__ as $item => $item_value) {
                                            foreach($AbetScore as $Id => $row) {
                                                if($item_value['CourseId']==$row['CourseId'] && $row['OutcomeId']==$item_value['OrderNumber'] && $item_value['CourseId']==$row_['Id']){
                                                    echo '&#9830; '.$row['Outcome'].'<br>';
                                                }
                                                // if($item_value['CourseId']==$row['CourseId'] && (strpos($row['Outcome'], '_') !== false) && $item_value['CourseId']==$row_['Id']){
                                                //     echo '&#9830; '.$row['Outcome'].'<br>';
                                                // }
                                            }
                                        }    
                                    }
                                    else if ($_SESSION['lang']=='gr'){
                                        echo  $row__['Sentence'];
                                    }
                                    ?>
                                    
                                    
                                    </td>
                                
                                <?php 
                                }
                  
                            }
                            // if ($flag==0){
                            ?>
                            <!-- <td>< ?php echo '-'; ?></td> -->
                        <?php 
                        // } 
                        
                        // echo $flag . '<br>';
                        
                      
                           
                                // } 
                            ?>
                            </tr>
                       <?php  
                    
                    } 
                    ?>


                    </tbody>
                    
                </table>
            </div>
        </div>
        </div>
<br>
<br>
<br>
<br>

<div class="text-center animated zoomIn slower">
    <span class="table-remove">
        <button type="button" onclick="window.print()" class="btn btn-danger btn-rounded btn-sm my-0 rounded-pill">
        <i class="fas fa-print mt-0"></i> <?php echo t_print;?>
        </button>
    </span>
</div>
<br>
<br>
<br>