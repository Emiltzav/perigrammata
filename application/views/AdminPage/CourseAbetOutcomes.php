<div class="mycontainer1">
    <div class="py-2 px-5">
        <div class="mycontainer text-center text-uppercase  green lighten-4 p-3 mt-2">
        <h5 class="font-weight-bold mt-1"><?php echo $CourseId_selected['CourseTitle']  ?>
        <i><?php echo '('.$CourseId_selected['LessonCode'].')'  ?></i>
        </h5>
        </div>
    

        <div class="row">
            <div class="py-5 col-sm">
                <!-- < ?php  
                foreach ($AbetScoreByCourse as $Id => $row ){
                        echo 'Criterion 1: ' . $row['c1'] . '%<br>Criterion 2: ' .  $row['c2']. '%<br>Criterion 3: ' .  $row['c3']. '%<br>Criterion 4: ' .  $row['c4']. '%<br>Criterion 5: ' .  $row['c5']. '%<br>Criterion 6: ' .  $row['c6']. '%<br>Criterion 7: ' .  $row['c7'] . '%';      
                }?> -->
                <h5 class="text-center font-weight-bold py-2">
                <?php
                    if ($_SESSION['lang']=='gr'){
                        echo 'Μαθησιακά αποτελέσματα';
                    } else{
                        echo 'Learning Outcomes';
                    }  
                    ?>
                </h5>
                <?php  
                foreach ($AbetScoreByCourse as $Id => $row ){
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


                    <b class="font-weight-bold"><?php echo t_criterion .' 1: '?></b>
                    <i style="display:inline;"><?php echo  t_criterion1.' <br>' ?></i>
                    <br>
                    <div class="progress">
                        <div class="progress-bar" style="width:<?php echo $row['c1']?>%;">
                            <div class="progress-value mr-n5"><?php echo $row['c1'] .'%'?></div>
                        </div>
                    </div>
                    <b class="font-weight-bold"><?php echo t_criterion .' 2: '?></b>
                    <i style="display:inline;"><?php echo  t_criterion2.' <br>' ?></i>
                    <br>
                    <div class="progress">
                        <div class="progress-bar" style="width:<?php echo $row['c2']?>%;">
                            <div class="progress-value mr-n5"><?php echo $row['c2'] .'%'?></div>
                        </div>
                    </div>
                    <b class="font-weight-bold"><?php echo t_criterion .' 3: '?></b>
                    <i style="display:inline;"><?php echo  t_criterion3.' <br>' ?></i>
                    <br>
                    <div class="progress">
                        <div class="progress-bar" style="width:<?php echo $row['c3']?>%;">
                            <div class="progress-value mr-n5"><?php echo $row['c3'] .'%'?></div>
                        </div>
                    </div>
                    <b class="font-weight-bold"><?php echo t_criterion .' 4: '?></b>
                    <i style="display:inline;"><?php echo  t_criterion4.' <br>' ?></i>
                    <br>
                    <div class="progress">
                        <div class="progress-bar" style="width:<?php echo $row['c4']?>%;">
                            <div class="progress-value mr-n5"><?php echo $row['c4'] .'%'?></div>
                        </div>
                    </div>
                    <b class="font-weight-bold"><?php echo t_criterion .' 5: '?></b>
                    <i style="display:inline;"><?php echo  t_criterion5.' <br>' ?></i>
                    <br>
                    <div class="progress">
                        <div class="progress-bar" style="width:<?php echo $row['c5']?>%;">
                            <div class="progress-value mr-n5"><?php echo $row['c5'] .'%'?></div>
                        </div>
                    </div>
                    <b class="font-weight-bold"><?php echo t_criterion .' 6: '?></b>
                    <i style="display:inline;"><?php echo  t_criterion6.' <br>' ?></i>
                    <br>
                    <div class="progress">
                        <div class="progress-bar" style="width:<?php echo $row['c6']?>%;">
                            <div class="progress-value mr-n5"><?php echo $row['c6'] .'%'?></div>
                        </div>
                    </div>
                    <b class="font-weight-bold"><?php echo t_criterion .' 7: '?></b>
                    <i style="display:inline;"><?php echo  t_criterion7.' <br>' ?></i>
                    <br>
                    <div class="progress">
                        <div class="progress-bar" style="width:<?php echo $row['c7']?>%;">
                            <div class="progress-value mr-n5"><?php echo $row['c7'] .'%'?></div>
                        </div>
                    </div>
                    <br>

                <?php        
                // echo 'Criterion 1: ' . $row['c1'] . '%<br>Criterion 2: ' .  $row['c2']. '%<br>Criterion 3: ' .  $row['c3']. '%<br>Criterion 4: ' .  $row['c4']. '%<br>Criterion 5: ' .  $row['c5']. '%<br>Criterion 6: ' .  $row['c6']. '%<br>Criterion 7: ' .  $row['c7'] . '%';      
                }?>

            </div>
        



            <div class="py-5 col-sm">
                <!-- < ?php  
                foreach ($AbetScoreByCourse as $Id => $row ){
                        echo 'Criterion 1: ' . $row['c1'] . '%<br>Criterion 2: ' .  $row['c2']. '%<br>Criterion 3: ' .  $row['c3']. '%<br>Criterion 4: ' .  $row['c4']. '%<br>Criterion 5: ' .  $row['c5']. '%<br>Criterion 6: ' .  $row['c6']. '%<br>Criterion 7: ' .  $row['c7'] . '%';      
                }?> -->
                <h5 class="text-center font-weight-bold py-2">
                <?php
                    if ($_SESSION['lang']=='gr'){
                        echo 'Γενικές Ικανότητες';
                    } else{
                        echo 'Generic skills ';
                    }  
                    ?>
                </h5>
                <?php  
                foreach ($AbetScoreByCourse1 as $Id => $row ){
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


                    <b class="font-weight-bold"><?php echo t_criterion .' 1: '?></b>
                    <i style="display:inline;"><?php echo  t_criterion1.' <br>' ?></i>
                    <br>
                    <div class="progress">
                        <div class="progress-bar" style="width:<?php echo $row['c1']?>%;">
                            <div class="progress-value mr-n5"><?php echo $row['c1'] .'%'?></div>
                        </div>
                    </div>
                    <b class="font-weight-bold"><?php echo t_criterion .' 2: '?></b>
                    <i style="display:inline;"><?php echo  t_criterion2.' <br>' ?></i>
                    <br>
                    <div class="progress">
                        <div class="progress-bar" style="width:<?php echo $row['c2']?>%;">
                            <div class="progress-value mr-n5"><?php echo $row['c2'] .'%'?></div>
                        </div>
                    </div>
                    <b class="font-weight-bold"><?php echo t_criterion .' 3: '?></b>
                    <i style="display:inline;"><?php echo  t_criterion3.' <br>' ?></i>
                    <br>
                    <div class="progress">
                        <div class="progress-bar" style="width:<?php echo $row['c3']?>%;">
                            <div class="progress-value mr-n5"><?php echo $row['c3'] .'%'?></div>
                        </div>
                    </div>
                    <b class="font-weight-bold"><?php echo t_criterion .' 4: '?></b>
                    <i style="display:inline;"><?php echo  t_criterion4.' <br>' ?></i>
                    <br>
                    <div class="progress">
                        <div class="progress-bar" style="width:<?php echo $row['c4']?>%;">
                            <div class="progress-value mr-n5"><?php echo $row['c4'] .'%'?></div>
                        </div>
                    </div>
                    <b class="font-weight-bold"><?php echo t_criterion .' 5: '?></b>
                    <i style="display:inline;"><?php echo  t_criterion5.' <br>' ?></i>
                    <br>
                    <div class="progress">
                        <div class="progress-bar" style="width:<?php echo $row['c5']?>%;">
                            <div class="progress-value mr-n5"><?php echo $row['c5'] .'%'?></div>
                        </div>
                    </div>
                    <b class="font-weight-bold"><?php echo t_criterion .' 6: '?></b>
                    <i style="display:inline;"><?php echo  t_criterion6.' <br>' ?></i>
                    <br>
                    <div class="progress">
                        <div class="progress-bar" style="width:<?php echo $row['c6']?>%;">
                            <div class="progress-value mr-n5"><?php echo $row['c6'] .'%'?></div>
                        </div>
                    </div>
                    <b class="font-weight-bold"><?php echo t_criterion .' 7: '?></b>
                    <i style="display:inline;"><?php echo  t_criterion7.' <br>' ?></i>
                    <br>
                    <div class="progress">
                        <div class="progress-bar" style="width:<?php echo $row['c7']?>%;">
                            <div class="progress-value mr-n5"><?php echo $row['c7'] .'%'?></div>
                        </div>
                    </div>
                    <br>

                <?php        
                // echo 'Criterion 1: ' . $row['c1'] . '%<br>Criterion 2: ' .  $row['c2']. '%<br>Criterion 3: ' .  $row['c3']. '%<br>Criterion 4: ' .  $row['c4']. '%<br>Criterion 5: ' .  $row['c5']. '%<br>Criterion 6: ' .  $row['c6']. '%<br>Criterion 7: ' .  $row['c7'] . '%';      
                }?>

            </div>
        </div>

    </div>

</div>






