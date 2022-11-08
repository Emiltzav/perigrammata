<div class="container mycontainer1 py-2 ">
    <div class="text-center mt-2 animated fadeIn  slower">  <img  src="<?php echo URL; ?>/public/img/logo.png" height="40" width="65" alt="TUC"></div>
    <br>
    <div class="animated fadeIn  slower delay-2s">
        <h3><i class="fas fa-graduation-cap"></i><?php  echo $department_['DepartmentName'];  ?></h3>
        <br>
        <i><?php echo t_slang7 ;?></i>
        <br>
        <?php
       
        foreach ($skills_title as  $Id => $row ){ ?>
            &check;<?php echo  $row['Description']; ?>
            
        <br>
    <?php }

        ?>
    </div>
    <br>
</div>


<!-- <section class="py-1"> -->

 <!-- Table with panel -->
    <div class="card card-cascade narrower container px-0 animated zoomIn  slower delay-3s">
        <div class="view view-cascade gradient-card-header myblue1 z-depth-2 text-center  narrower py-2 px-1  mb-3  rounded ">
            <h4 class="mycourses text-white font-italic ">
                <?php echo t_mycourses; ?>
            </h4>
            <label class="toggler toggler--is-active" id="optional-courses"><?php echo t_slang5; ?></label>
            <div class="toggle">
                <input type="checkbox" id="switcher" class="check">
                <b class="b switch"></b>
            </div>
            <label class="toggler" id="all-courses"><?php echo t_slang6; ?></label>
        </div>
    
        
        <div id="optional_courses" >
        <!--/Card image-->
            <div class="px-4">
                <div class="table-wrapper table-responsive">
                <!--Table-->
                <table class="table table-hover mb-0 your-custom-styles">
                    <!--Table head-->
                    <thead>
                    <tr>
                        <th class="th-lg">
                            <?php echo t_course;?>
                            <i class="fas fa-sort ml-1"></i>
                        </th>
                        <th class="th-lg">
                        <?php echo t_general_capabilities; ?>
                            <i class="fas fa-sort ml-1"></i>                   
                        </th>
                        <th class="th-lg">
                               
                        </th>
                    </tr>
                    </thead>
                    <!--Table head-->

                    <!--Table body-->
                    <tbody >
                    <?php 
                        $newArr = array_count_values(array_column($optional_courses_with_skills, 'Id'));
                        $kk=0;
                        $cnt=0;
                        arsort($newArr);
                        $oldSkillId='';
                        $firstSkillId='';

                        $final_array = array();
                        foreach($optional_courses_with_skills as $item => $item_value) {
                        
                    
                            $pid = $item_value['Id'];
                            if(!isset($final_array[$pid])) {
                                $final_array[$pid] = $item_value;
                            } else {
                                $final_array[$pid]['Description'] = $final_array[$pid]['Description'].', '. $item_value['Description'];
                            }
                        }
                        
                        
                        foreach ($newArr as  $Id => $row ){  
                            
                        
                        // $newArr = array_count_values(array_column($final_array, 'Id'));
                        // arsort($newArr);

                        foreach ($final_array as  $Id_ => $row_ ){  ?>
                            <tr>
                                <?php if($row_['Id']==$Id ){ ?>
                                    <td> <?php echo $row_['CourseTitle'].' ('.$row_['LessonCode'].')'?></td>
                                    <td> <?php echo $row_['Description'] ?></td>
                                   
                                   
                                    <td>

                                    
                                    <a href="<?php echo URL . 'StudentController/fhtml?CourseId=' . $row_['Id'] ?>" target="_blank">
                                        <span class="table-remove">
                                            <button type="button" class="btn btn-light btn-rounded btn-sm my-0 px-3 rounded-pill">
                                            <i class="fas fa-info-circle"><span style="font-family: 'Ubuntu', sans-serif !important;"><?php echo t_slang4;?></span></i>
                                            </button>
                                        </span>
                                    </a>

                                    <!-- Button trigger modal -->
                                    <!-- <button type="button" data-id = "< ?php echo $Id ;?>" class="btn btn-primary" data-backdrop="false" data-toggle="modal" data-target="#myModal">
                                    Launch demo modal
                                    </button>

                                                                                               
                                    
                                    <div class="modal fade right" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-side modal-top-right modal-fluid" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                        <iframe src="< ?php echo URL . 'StudentController/fhtml?CourseId='. $row_['Id'].'/' ?>" style="width:100%;" height=400>
                                                <p>Your browser does not support iframes.</p>
                                            </iframe>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>  -->

                                
                                    </td>
                                
                        <?php }                      
                        ?>
                            </tr>
   
                            <?php 
                        }
                    }
                            ?>
                </tbody>
                    <!--Table body-->
            </table>
            <br>
                <!--Table-->
        </div>
    </div>
    </div>


    <div id="all_courses" class="hide animated flipInY slower">
        <!--/Card image-->
            <div class="px-4">
                <div class="table-wrapper table-responsive">
                <!--Table-->
                <table class="table table-hover mb-0 your-custom-styles">
                    <!--Table head-->
                    <thead>
                    <tr>
                       
                        <th class="th-lg">
                            <?php echo t_course;?>
                            <i class="fas fa-sort ml-1"></i>
                        </th>
                        <th class="th-lg">
                        <?php echo t_general_capabilities; ?>
                            <i class="fas fa-sort ml-1"></i>                   
                        </th>
                        <th class="th-lg">
                                      
                        </th>
                     
                    </tr>
                    </thead>
                    <!--Table head-->

                    <!--Table body-->
                    <tbody >
                    <?php 
                        $newArr = array_count_values(array_column($courses_with_skills, 'Id'));
                        $kk=0;
                        $cnt=0;
                        arsort($newArr);
                        $oldSkillId='';
                        $firstSkillId='';

                        $final_array = array();
                        foreach($courses_with_skills as $item => $item_value) {
                        
                    
                            $pid = $item_value['Id'];
                            if(!isset($final_array[$pid])) {
                                $final_array[$pid] = $item_value;
                            } else {
                                $final_array[$pid]['Description'] = $final_array[$pid]['Description'].', '. $item_value['Description'];
                            }
                        }
                        
                        
                        foreach ($newArr as  $Id => $row ){  
                            
                        
                        // $newArr = array_count_values(array_column($final_array, 'Id'));
                        // arsort($newArr);

                        foreach ($final_array as  $Id_ => $row_ ){  ?>
                            <tr>
                                <?php if($row_['Id']==$Id ){ ?>
                                    
                                    <td> <?php echo $row_['CourseTitle'].' ('.$row_['LessonCode'].')'?></td>
                                    <td> <?php echo $row_['Description'] ?></td>
                                    <td> 
                            
                                    
                                        
                                    <a href="<?php echo URL . 'StudentController/fhtml?CourseId=' . $row_['Id'] ?>" target="_blank">
                                        <span class="table-remove">
                                            <button type="button" class="btn btn-light btn-rounded btn-sm my-0 px-3 rounded-pill">
                                            <i class="fas fa-info-circle"><span style="font-family: 'Ubuntu', sans-serif !important;"><?php echo t_slang4;?></span></i>
                                            </button>
                                        </span>
                                    </a>
                                        
                                            
                                                
                                                
                                    </td>     
                                            
                                        
                                       
                                        
                                        
                                            
                                            
                                             
                                              
                                          
                                          
                                          
                      
                                
                        <?php }                      
                        ?>
                            </tr>
                           

                            <?php 
                        }
                    }
                            ?>
                </tbody>
                
                    <!--Table body-->
            </table>
            
            <br>
                <!--Table-->
        </div>
    </div>
    </div>

    </div>

<!-- </section> -->
<br>
<br>
<br>
<br>

<div class="modal animated zoomIn"  id="stud_all" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
    <div class="modal-dialog modal-fluid "  role="document">
        <div class="modal-content" >
        <div class="modal-header">
            <h5 class="modal-title text-dark" id="exampleModalLabel"><img src="<?php echo URL; ?>/public/img/logo.png" alt="Logo" height="30" width="50"> <?php echo t_modal_welcome ;?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="animated fadeIn delay-1s">
                <img class="profImf" style="position:absolute;margin-top:4rem !important;" src="<?php echo URL; ?>/public/img/prof.png" alt="Logo" height="70" width="30"> 
                Η διαδικτυακή εφαρμογή Περιγράμματα επιτρέπει στους καθηγητές:
                <div class="controls">
                    <input type="text" name="product_name" placeholder="Product Name" value="" id="product_name" />
                </div>
                <ul style=" list-style:none;">
                    <li><i class="fas fa-check text-success"></i> Να Συμπληρώσουν/Επεξεργαστούν το Περίγραμμα των Μαθημάτων τους σύμφωνα με την Αρχή Διασφάλισης και Πιστοποίησης της Ποιότητας στην Ανώτατη Εκπαίδευση (ΑΔΙΠ).</li>
                    <li><i class="fas fa-check text-success"></i> Να εξάγουν το περίγραμμα των μαθημάτων τους σε αρχείο τύπου pdf.</li>
                    <li><i class="fas fa-check text-success"></i> Να εξάγουν το περίγραμμα των μαθημάτων τους σε μορφή HTML κώδικα για προσθήκη στον προσωπικό τους διαδικτυακό ιστότοπο.</li>
                </ul>
            </div>
            <div class="animated fadeIn delay-2s">
                <img class="mt-5" style="position:absolute;" src="<?php echo URL; ?>/public/img/stud.png" alt="Logo" height="70" width="30">
                Επίσης προσφέρει στους φοιτητές:
                <ul style=" list-style:none;">
                    <li><i class="fas fa-check text-success"></i> Ένα συμβουλευτικό συστήμα, καθώς προτείνει την επιλογή των κατ’επιλογήν υποχρεωτικών μαθημάτων τους με βάση τις δεξιότητες που επιθυμούν να ενισχύσουν.</li>
                    <li><i class="fas fa-check text-success"></i> Ένα σύστημα παρουσίασης των γνώσεων και κατά πόσο αυτές ενισχύουν τα ΑΒΕΤ μαθησιακά αποτελέσματα για τον φοιτητή, μετά την επιλογή και επιτυχή παρακολούθηση συγκεκριμένων μαθημάτων.</li>
                </ul>
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal"><?php echo t_close;?></button>
            
        </div>
    </div>
    </div>
</div>
