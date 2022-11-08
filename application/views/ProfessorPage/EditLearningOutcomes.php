<input type="hidden" id="languageId" value="<?php echo $_SESSION['lang'];?>" />
<div class="py-5 px-5">
	<div class="container my-5 py-2 z-depth-1 rounded-pill">
        <div class=" text-center px-md-5 mx-md-5 py-2 dark-grey-text">
            <h3 class="mycourses font-weight-bold"><?php echo t_course_description;?> </h3>
        </div>
    </div>
    
    <div class="top_btn ">
        <a style="display:none !important;" id="back-to-top" href="#" class="btn  back-to-top animated pulse infinite myblue1" role="button" title="<?php echo t_scroll_top ?>" data-toggle="tooltip" data-placement="left"><i class="fa fa-arrow-up text-white"></i></a>
    </div>

    <div>
        <form method="POST" action="<?php echo URL; ?>ProfessorController/updateLearningOutcomes">
		    <div class="card card-cascade narrower container px-0 ">
                <div class="view view-cascade gradient-card-header  myblue1  narrower py-2 px-1 d-flex justify-content-between align-items-center rounded ">
                    <div>
                    </div>
                    <h4 class="mycourses text-white font-italic text-center font-weight-bold">
                        <?php echo t_general;?>
                    </h4>
                    <div>
                        <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2" data-toggle="modal" data-target="#general_info">
                            <i class="fas fa-info-circle mt-0 fa-2x fa-2x"></i>
                        </button>
                    </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="general_info" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content ">
                    <div class="modal-header special-color text-white">
                    <i class="fas fa-info-circle mt-0 fa-2x"></i>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php echo t_tooltip_general;?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal"><?php echo t_close; ?></button>
                    
                    </div>
                    </div>
                </div>
            </div>

            <input type="hidden" name='CourseId' value="<?php echo $Course['Id'];?>"/> 
                    
                    
                    
            <div class="table-wrapper table-responsive " >
                <table class="table table-bordered table-hover mt-0"  style="font-size=120px !important;">
                    <tr style="padding:0 !important;margin:0 !important;">
                        <th scope="row" class="font-weight-bold myblue1 text-white ">
                            <?php echo t_school;?> 
                        </th>
                        
                        <td colspan="4" >
                            <input class="form-control form-control-sm " name='school' value="<?php echo $Course['SchoolName'];?>" readonly/>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="font-weight-bold   myblue1 text-white">
                            <?php echo t_department;?> </th>
                        <td colspan="4">
                            <input class="form-control form-control-sm " name='department' value="<?php echo $Course['DepartmentName'];?>" readonly/>
                        </td>
                    </tr>
                    <tr>
                        <th class="font-weight-bold   myblue1 text-white">
                            <?php echo t_level;?> </th>
                        <td colspan="4">
                            <input class="form-control form-control-sm " name='LevelOfEducation' value="<?php echo $Course['Education'];?>" readonly/>
                        </td>
                    </tr>
                    <tr>
                        <th class="font-weight-bold   myblue1 text-white"> 
                            <?php echo t_lesson_code;?>
                        </th>
                        <td>                           
                            <input class="form-control form-control-sm " name='LessonCode' value="<?php echo $Course['LessonCode'];?>" readonly/>
                        </td>
                        <th class="font-weight-bold   myblue1 text-white">
                            <?php echo t_semester;?> </th>
                        <td colspan="2">
                            <input class="form-control form-control-sm " name='Semester' value="<?php echo $Course['Semester'];?>" readonly/>
                        </td>
                    </tr>
                    <tr>
                        <th class="font-weight-bold   myblue1 text-white">
                            <?php echo t_course_title;?>
                        </th>
                        <td colspan="4">
                            <input class="form-control form-control-sm " name='CourseTitle' value="<?php echo $Course['CourseTitle'];?>" readonly/>
                        </td>
                    </tr>
                    <tr>
                        <th class="font-weight-bold   myblue1 text-white" colspan="2">
                            <div class="text_center">
                                <?php echo t_teaching_activities;?>
                                </br>
                                <small>
                                    <?php echo t_teaching_activities1;?>
                                    <?php echo t_comment;?> 
                                </small>
                            </div>
                        </th>
                        <th class="font-weight-bold   myblue1 text-white">
                            <div class="text_center">
                                <?php echo t_teaching_hours;?>
                            </div>
                        </th>
                        <th class="font-weight-bold   myblue1 text-white">
                            <div class="text_center">
                                <?php echo t_credit_units;?>
                            </div>
                        </th>
                    </tr>
                    <?php if($Course['LectureHours']+0 != 0) { ?>
                        <tr>
                            <td colspan="2"> 
                                <div class="text_right"> 
                                    <?php echo t_teaching_activities_name1;?>
                                </div>
                            </td>
                            <td class="Lectures"><input class="form-control form-control-sm " name="Lectures" value="<?php echo $Course['LectureHours']+0 ;?>" readonly></input></td>
                            <td></td>
                        </tr>
                    <?php } ?>
                    <?php if($Course['LaboratoryHours']+0 != 0) { ?>
                        <tr>
                            <td colspan="2">  
                                <div class="text_right">
                                    <?php echo t_teaching_activities_name2;?>
                                </div>
                            </td>
                            <td class="Laboratories"><input class="form-control form-control-sm  " name="Laboratories" value="<?php echo $Course['LaboratoryHours']+0 ;?>" readonly></input></td>
                            <td></td>
                        </tr>
                    <?php } ?>
                    <?php if($Course['TutorialHours']+0 != 0) { ?>
                        <tr>
                            <td colspan="2"> 
                                <div class="text_right"> 
                                    <?php echo t_teaching_activities_name3;?>
                                </div>
                            </td>
                            <td class="TutorialsTutorials"><input class="form-control form-control-sm " name="Tutorials" value="<?php echo $Course['TutorialHours'] + 0;?>" readonly></input></td>
                            <td></td>
                        </tr>
                    <?php } ?>
                    <?php if($Course['LabTutorialHours']+0 != 0) { ?>
                        <tr>
                            <td colspan="2"> 
                                <div class="text_right"> 
                                    <?php echo t_teaching_activities_name4;?>
                                </div> 
                            </td>
                            <td class="LabTutorials"><input class="form-control form-control-sm " name="LabTutorials" value="<?php echo $Course['LabTutorialHours'] + 0;?>" readonly></input></td>
                            <td></td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="2"> 
                            <div class="text_right"> 
                                <b><?php echo t_total;?></b>
                            </div>
                        </td>
                        <td class="Total py-0"><input class="form-control form-control-sm"  type="text" name="Total" value="<?php echo $Course['TotalHours'] + 0;?>" readonly/></td>
                        <td class="CreditUnits "><input class="form-control form-control-sm " name="CreditUnits" value="<?php echo $Course['CreditUnits'] +0;?>" readonly></input></td>
                    </tr>
                    
                    <tr>
                        <th class="font-weight-bold   myblue1 text-white">
                            <?php echo t_course_type;?>
                        </th>
                        <td colspan="4">
                            <?php
                                echo "<select class='browser-default custom-select' name='CourseType'>";
                                //echo "<option></option>";
                                foreach ($CourseType as $Id => $row ) {
                                    $selected= '';
                                    if($row['Id'] == $Course['CourseTypeId'])
                                    {
                                        $selected = 'selected';
                                    }
                                    echo "<option value='" . $row['Id'] . "' " . $selected . ">" . $row['CourseType'] . "</option>";
                                }
                                echo "</select>";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th class="font-weight-bold   myblue1 text-white">
                            <?php echo t_prerequisite_courses;?>
                        </th>
                        <td colspan="4">
                            <div id="js-courses">
                                <?php
                                    foreach ($RequiredCourses as $PrerequisiteId => $title ) {
                                        echo '<input type="text" name="CourseName[]" value="'.$title.'" readonly/>';
                                        echo '<input type="hidden" name="PrerequisiteId[]" value="'.$PrerequisiteId.'" />';
                                    }
                                ?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th class="font-weight-bold   myblue1 text-white">
                            <?php echo t_language;?>
                        </th>
                        <td colspan="4"> 
                            <input class="form-control form-control-sm " name='LanguageOfTeaching' value="<?php echo $Course['LanguageOfTeaching'];?>" readonly/>
                        </td>
                    </tr>
                    <tr>
                        <th class="font-weight-bold   myblue1 text-white">
                            <?php echo t_erasmus;?>
                        </th>
                        <td colspan="4">
                            <input class="form-control form-control-sm " name='Erasmus' value="<?php echo ($Course['ErasmusFl']=='1')?  t_yes:  t_no ?>" readonly/>
                        </td>
                    </tr>
                    <tr>
                        <th class="font-weight-bold   myblue1 text-white">
                            <?php echo t_url;?>
                        </th>
                        <td colspan="4">
                            <input class="form-control form-control-sm " name="CourseUrl" value="<?php echo $Course['CourseUrl'];?>"></input>
                        </td>
                    </tr>
                </table>
                </br>
            </div>
		</div>
        </br>

    

        <div class="py-5 ">
            <div class="card card-cascade narrower container px-0">
                <div class="view view-cascade gradient-card-header  myblue1 darken-1 narrower py-2 px-1 d-flex justify-content-between align-items-center rounded ">
                    <div>
                    </div>
                    <h4 class="mycourses text-white font-italic text-center font-weight-bold">
                        <?php echo t_2learning_outcomes;?> 
                      
                    </h4>
                   
                    <div>
                        <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2" data-toggle="modal" data-target="#learning_outcomes_info">
                            <i class="fas fa-info-circle mt-0 fa-2x"></i>
                        </button>
                    </div>
                    
                    
                </div>
          
                                            
                <!-- Modal -->
                <div class="modal fade" id="learning_outcomes_info" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header special-color text-white">
                        <i class="fas fa-info-circle mt-0 fa-2x"></i>
                            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?php echo t_tooltip_learn_outcomes;?>
                           
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal"><?php echo t_close; ?></button>
                        
                        </div>
                        </div>
                    </div>
                </div>


                <div class="table-wrapper table-responsive" >
                    <table class="table table-bordered table-hover mt-0" id="outcomes_table"  style="font-size=120px !important;">
                  
                    <tr>
                        <th class="font-weight-bold  myblue1 text-white" colspan="4"><?php echo t_learning_outcomes;?>
                  
                            </br> <small><?php echo t_learning_outcomes1;?></small>
                            </br> <small><?php echo t_learning_outcomes2;?></small>
                            <a class="text-white" href="<?php echo URL; ?>public/pdf/AppendixA.pdf" target="_blank"><i class="fas fa-cloud-download-alt"></i></a> 
                            </br> <small><?php echo t_learning_outcomes3;?></small>
                            </br> <small><?php echo t_learning_outcomes4;?></small>
                            <a class="text-white" href="<?php echo URL; ?>public/pdf/AppendixB.pdf" target="_blank"><i class="fas fa-cloud-download-alt"></i></a> 
                            </br> <small><?php echo t_learning_outcomes5;?></small>
                       
                   
                            <?php  
                                if (isset($_SESSION['sentences']) && $_SESSION['sentences']!=''){?>
                                    <br>
                                    <div class="text-center">
                                    <?php
                                    if ($_SESSION['lang']=='gr'){
                                        echo '<br><span class="badge badge-success animated pulse infinite p-2"  data-toggle="modal" data-target="#recover_sentences" style="cursor: pointer;"> Ανάκτηση Προτάσεων <i class="far fa-hdd"></i></span>';
                                    }else{
                                        echo '<br><span class="badge badge-success animated pulse infinite p-2"  data-toggle="modal" data-target="#recover_sentences" style="cursor: pointer;"> Recover Sentences <i class="far fa-check-circle animated rotateIn" style="cursor: pointer;"></i></span>';
                                    }?>
                                    </div>
                                    <!-- <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2" data-toggle="modal" data-target="#recover_sentences">
                                        <i class="fas fa-info-circle mt-0 fa-2x"></i>
                                    </button> -->
                                    <!-- Modal -->
                                    <div class="modal fade" id="recover_sentences" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                                aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                            <div class="modal-header special-color ">
                                            <i class="fas fa-info-circle mt-0 fa-2x"></i>
                                                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-body">
                                            <?php 
                                                if ($_SESSION['lang']=='gr'){
                                                    echo 'Ακολουθούν οι προτάσεις που διατυπώθηκαν με κοινό ρήμα : <br>' .'<i>'.$_SESSION['sentences'].'</i>';
                                                    echo '<br><br><i class="fas fa-bell "></i> Παρακαλώ επιλέξτε διαφορετικό ρήμα για κάθε μια απο τις παραπάνω προτάσεις. ';
                                                }else if ($_SESSION['lang']=='en'){
                                                    echo 'The following are the sentences formulated with the same verb: <br>' .'<i>'.$_SESSION['sentences'].'</i>';
                                                    echo '<br><br><i class="fas fa-bell "></i> Please select a different verb for each of the above sentences. ';
                                                }
                                            ?>
                                            
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-dismiss="modal"><?php echo t_close; ?></button>
                                            
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                                    
                                <?php    
                                    // echo '<div class="text-white myblue1">'.$_SESSION['sentences'].'</div>';
                                    $_SESSION['sentences'] = '';
                                }
                            ?>
                             

                        </th>
                       
                    </tr>
                 
                    <tr>
                        <td colspan="4" class="text-dark font-weight-bold" style="font-size:17px;">
                            <?php echo t_learning_outcomes_begin;?>
                           
                            <div id="errormsg" class="animated pulse infinite"style="display:none;">
                                <br>
                                <br>
                                <div class="text-center ">
                                    <i class="fas fa-exclamation-triangle fa-4x mb-3 animated rotateIn" style="color:#ff4444;"></i>
                                    <p>
                                        <?php 
                                        if ($_SESSION['lang']=='gr'){
                                            echo 'Προσοχή: Δεν μπορείτε να χρησιμοποιήσετε το ίδιο ρήμα πάνω απο μια φορά!';
                                        }else{
                                            echo 'Attention: You can\'t use the same verb more than once!';
                                        }
                                       
                                       
                                    ?>
                                    </p>
                                </div>        
                            </div>
                        </td>
                        
                    </tr>
                 
                    
                    <tbody id="sortable">
                    <?php
                        $vi=0;
                        $j=0;
                        $flag=0;
                        $selected1 = array();
                        foreach ( $CourseVerbs as $verbId => $sentence )
                        {
                    ?>
                    <!-- <tr>
                       
                    </tr> -->
                    <tr class="sentences" id="sentence_<?php echo $vi; ?>">
                        <td class="py-4">
                            <i class="fas fa-arrows-alt-v"></i>
                        </td>
                 
                        <td class="py-3 "> 	
                            <?php
                                                          
                                // echo count($selected1);
                                // if ($flag == 0){
                                ?>
                                
                                <!-- <select class="is-valid browser-default custom-select" name="< ?php echo 'Verbs['. $vi.']';?>" onchange="validation(< ?php echo $flag ;?>)" > -->

                                <?php

                                echo "<select class='myselect browser-default custom-select' name='Verbs[" . $vi . "]' onchange='validation(this);' >";
                                
                                // }else if ($flag == 1){
                                    // echo "<select class='is-invalid browser-default custom-select' name='Verbs[" . $vi . "]'>";
                                // }
                                
                                echo "<option ></option>";
                                foreach ($verbs as $Id => $row ) {
                                    $selected= '';
                                    if( $verbId ==  $Id )
                                    {
                                        $selected = 'selected';
                                        // $selected1 = $Id ;
                                    }
                                    echo "<option value='" . $row['Id'] . "' " . $selected . ">" . $row['Verbs'] .' ('. $row['Classification'] .')'. "</option>";
                                }
                               
                                echo "</select>";
                              
                            ?>
                        </td>
                        
                        <td class="py-3">
                            <input class="form-control form-control-sm " name="Sentences[<?php echo $vi; ?>]" value="<?php echo $sentence;?>"/>
                        </td>
                        <td class="p-3">
                            <span class="table-remove">                              
                                <button type="button" class="btn-remove btn btn-danger btn-rounded_ btn-sm my-0"><?php echo t_delete?></button>
                            </span>
                        </td>
                    </tr>
                    
                    <?php
                        
                        $vi++;
                        }
                       
                        $existing_verbs = array();
                        for( $i=$vi; $i<=14; $i++ )
                        {
                    ?>
            
                    <tr class="sentences" id="sentence_<?php echo $i; ?>">
                        <td class="py-4">
                            <i class="fas fa-arrows-alt-v "></i>
                        </td>
                       
                        <td class="py-3">	
                            <?php
                            $sentence = '';
                                echo "<select class='myselect browser-default custom-select' name='Verbs[" . $i . "]' onchange='validation(this);'>";
                                echo "<option ></option>";
                                foreach ($verbs as $Id => $row ) {
                                    
                                    $selected= '';
                                    echo "<option value='" . $row['Id'] . "' " . $selected . ">" . $row['Verbs'] .'  ('. $row['Classification'] .')'. "</option>";
                                }
                                echo "</select>";
                            ?>
                        </td>
                        <td class="sent py-3"><input class="form-control form-control-sm " name="Sentences[<?php echo $i; ?>]" value="<?php echo $sentence;?>"/></td>
                        <td class="p-3">
                            <span class="table-remove ">                              
                                <button type="button" class="btn-remove btn btn-danger btn-rounded_ btn-sm my-0"><?php echo t_delete?></button>
                            </span>
                        </td>
                    </tr>
                    
                    <?php } 
                    
                    ?>
                    </tbody>
                    
                    
                    <tr>
                        <th class="font-weight-bold   myblue1 text-white" colspan="4">
                            </div>
                                <h4 class="text-white font-italic ">
                                    <?php echo t_general_capabilities;?>
                                    <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2" data-toggle="modal" data-target="#general_abilities_info">
                                        <i class="fas fa-info-circle mt-0 fa-2x"></i>
                                    </button>
                                </h4>
                                
                            </div>
                            <small><?php echo t_general_capabilities1;?></small>
                        </th>
                    </tr>

                                                             
                    <!-- Modal -->
                    <div class="modal fade" id="general_abilities_info" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header special-color text-white">
                            <i class="fas fa-info-circle mt-0 fa-2x"></i>
                                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <?php echo t_tooltip_general_capabilities;?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-dismiss="modal"><?php echo t_close; ?></button>
                            
                            </div>
                            </div>
                        </div>
                    </div>
                   
                    <?php foreach ($skills as $Id => $row ){ ?>
                        <tr>
                            <td class="customCheckbox" colspan="4">
                                <input type="checkbox" name="skills[]" class="skill_list " id="skill_<?php echo $Id; ?>" value="<?php echo $row['Id']; ?>"
                                    <?php if(in_array($row['Description'], $CourseSkills)){
                                        echo "checked";
                                    }?> >
                                     </input>
                                    <label for="skill_<?php echo $Id; ?>"><?php echo $row['Description'] ;?> </label>
                               
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>                   
        </div>
        </div>

        </br>
               
        <div class="py-0 ">
            <div class="card card-cascade narrower container px-0">
                <div class="view view-cascade gradient-card-header  myblue1 darken-1 narrower px-1 d-flex justify-content-between align-items-center rounded ">
                    <div>
                    </div>
                    <h4 class="mycourses text-white font-italic text-center font-weight-bold">
                        <?php echo t_3course_content;?> 
                    </h4>
                    <div>
                    <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2" data-toggle="modal" data-target="#course_content">
                        <i class="fas fa-info-circle mt-0 fa-2x"></i>
                    </button>
                </div>
            </div> 

            <!-- Modal -->
            <div class="modal fade" id="course_content" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header special-color text-white">
                    <i class="fas fa-info-circle mt-0 fa-2x"></i>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php echo t_tooltip_course_content;?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal"><?php echo t_close; ?></button>
                    
                    </div>
                    </div>
                </div>
            </div>

            <div class="table-wrapper table-responsive" >
                <table class="table table-bordered table-hover mt-0 "  style="font-size=120px !important;">
                    <tr>
                        <td colspan="5"><textarea class="form-control"name='Content' rows="15"><?php echo $Course['Content'];?></textarea></td>
                    </tr>
                </table>
            </div>  
        </div>                      


                                <br>
                               
        <div class="py-5 ">
            <div class="card card-cascade narrower container px-0 ">
                <div class="view view-cascade gradient-card-header  myblue1 darken-1 narrower py-2 px-1 d-flex justify-content-between align-items-center rounded ">
                    <div>
                    </div>
                    <h4 class="mycourses text-white font-italic text-center font-weight-bold">
                    <?php echo t_4teaching_methods;?> 
                    </h4>
                    <div>
                    <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2" data-toggle="modal" data-target="#teaching_methods_tooltip">
                        <i class="fas fa-info-circle mt-0 fa-2x"></i>
                    </button>
                </div>
            </div> 

            <!-- Modal -->
            <div class="modal fade" id="teaching_methods_tooltip" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header special-color text-white">
                    <i class="fas fa-info-circle mt-0 fa-2x"></i>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <?php echo t_tooltip_use_of_technology;?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal"><?php echo t_close; ?></button>
                    
                    </div>
                    </div>
                </div>
            </div>


            <div class="table-wrapper table-responsive" >
            <table class="table table-bordered mt-0"  style="font-size=120px !important;">
                <tr>
                    <th class="font-weight-bold myblue1 text-white" width="40%"><?php echo t_lecture_method;?></th>
                    <td colspan="2">
                        <?php
                            echo "<select class='browser-default custom-select' name='LectureMethod'>";
                            //echo "<option></option>";
                            foreach ($method as $Id => $row ) {
                                $selected= '';
                                if($row['Id'] == $Course['LectureMethodId'])
                                {
                                    $selected = 'selected';
                                }
                                echo "<option value='" . $row['Id'] . "' " . $selected . ">" . $row['LectureMethod'] . "</option>";
                            }
                            echo "</select>";
                        ?>
                    </td>
                </tr>
            
                <tr>
                    <th class="font-weight-bold myblue1 text-white" rowspan="4"><?php echo t_use_of_technlogy;?>
                    
                    </br>
                    <small><?php echo t_use_of_technlogy1;?></small> </th>
                    <?php
                    $existing_method = array();
                    for( $i=1; $i<=3; $i++ )
                    {
                    ?>
                    <tr>
                        <td>
                            <?php
                                $text = '';
                                echo "<select class='browser-default custom-select' name='UseOfTechnologies[]'>";
                                echo "<option ></option>";
                                foreach ($UseOfTechnologies as $Id => $row ) {
                                    $selected= '';
                                    if( array_key_exists( $row['Id'], $CourseMethod ) && !in_array( $row['Id'], $existing_method) && $text == '')
                                    {
                                        $selected = 'selected';
                                        $existing_method[] = $row['Id'];
                                        $text = $CourseMethod[$row['Id']];
                                    }
                                    echo "<option value='" . $row['Id'] . "' " . $selected . ">" . $row['UseOfTechnologies'] . "</option>";
                                }
                                echo "</select>";
                            ?>
                        </td>
                        <td>
                            <input class="form-control form-control-sm border mt-0 w-100"  type="text" name="TextA[]" value="<?php echo isset($text['TextA'])? $text['TextA']: '';?>"/>
                            <input class="form-control form-control-sm border w-100" type="text" name="TextB[]" value="<?php echo isset($text['TextB'])? $text['TextB']: '';?>"/>
                            <input class="form-control form-control-sm border w-100" type="text" name="TextC[]" value="<?php echo isset($text['TextC'])? $text['TextC'] : '';?>"/>
                        </td>
                    </tr>
                    <?php } ?>
                    
                </tr>
                <tr>
                    <th class="font-weight-bold myblue1 text-white"><?php echo t_teaching_organisation;?>
                        </br> <small><?php echo t_teaching_organisation1;?></small>
                        </br> <small><?php echo t_teaching_organisation2;?></small>
                        </br></br> <small><?php echo t_teaching_organisation3;?></small> 
                    </th>
                    <td colspan="2">
                        <div class="table-wrapper table-responsive" >
                            <table class="table table-bordered table-hover mt-0" id="ActivityHours">
                                <thead class="font-weight-bold myblue1 text-white">
                                    <tr>                
                                        <th ><div class="text_center"><?php echo t_activity;?></div></th>
                                        <th><div class="text_center"><?php echo t_workload;?></div></th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <td> <b><?php echo t_total_course;?></b> </td>
                                        <td>
                                            <div class="totalHours_warning">Must be <?php echo $Course['CreditUnits'] * 25; ?></div>
                                            <input  type="hidden" id="min_totalHours" value="<?php echo $Course['CreditUnits'] * 25; ?>"/>
                                            <input class="form-control form-control-sm totalHours "  name="totalHours"> </input>
                                        </td>
                                    </tr>
                                    
                                </tfoot>
                                <tbody>
                                    <?php foreach ($activities as $Id => $row ){ 
                                        $value="";
                                        if($row['Type']=='Lectures'){
                                            
                                            if(isset($CourseActivities[$Id]['Hours']))
                                                $value = $CourseActivities[$Id]['Hours'];
                                            else{
                                                $value = $Course['LectureHours'] * 13  + 0;
                                            }
                                            
                                        }
                                        else if($row['Type']=='Laboratories'){
                                            if(isset($CourseActivities[$Id]['Hours']))
                                                $value = $CourseActivities[$Id]['Hours'];
                                            else{
                                                $value = $Course['LaboratoryHours'] * 13  + 0;
                                            }
                                        }
                                        else if($row['Type']=='Tutorials'){
                                            if(isset($CourseActivities[$Id]['Hours']))
                                                $value = $CourseActivities[$Id]['Hours'];
                                            else{
                                                $value = $Course['TutorialHours'] * 13  + 0;
                                            }
                                        }
                                        else if($row['Type']=='LabTutorials'){
                                            if(isset($CourseActivities[$Id]['Hours']))
                                                $value = $CourseActivities[$Id]['Hours'];
                                            else{
                                                $value = $Course['LabTutorialHours'] * 13  + 0;
                                            }
                                        }
                                        else if( isset( $CourseActivities[$Id] ) )
                                        {
                                            $value = $CourseActivities[$Id]['Hours'];
                                        }else{
                                            $value = 0;
                                        }
                                      
                                        ?>
                                        
                                        <tr>
                                            <input type="hidden" name="activities[<?php echo $Id; ?>]" value="<?php echo $row['Id']; ?>"/>

                                            <td><input class="form-control form-control-sm" title="<?php echo $row['Activities']; ?>"  value="<?php echo $row['Activities']; ?>" readonly/></td>
                                            <td><input  class="form-control form-control-sm ActivityHours" value="<?php echo $value ;?>" id="activity_<?php echo $Id; ?>" name="Hours[<?php echo $Id; ?>]" > </input></td>
                                        </tr>
                                    <?php } ?>
                                    
                                </tbody>
                            </table>
                        </div>
                                

                        <div class="table-wrapper table-responsive" >
                            <table class="table table-bordered table-hover mt-0 "  style="font-size=120px !important;">
                                <tr>
                                <textarea class="form-control" rows="10" name='OrganizationComment' placeholder='<?php echo t_organisation_comment;?>'><?php echo $Course['OrganizationComment'];?></textarea>     
                                </tr>
                            </table>
                        </div>          
                    
                    </td> 
                    </tr>
                    <tr>
                        <td class="font-weight-bold myblue1 text-white">
                            <b><?php echo t_assessment;?></b> 
                            <small>
                                </br><?php echo t_assessment1;?>
                                </br></br><?php echo t_assessment2;?>
                                </br></br><?php echo t_assessment3;?>
                            </small>
                        </td>
                        <td colspan="2" >
                            <p></br><?php echo t_assessment_language; ?><?php echo $Course['LanguageOfTeaching'];?></p>
                            <div class="table-wrapper table-responsive" >
                                <table class="table table-bordered table-hover mt-0">
                                    <?php
                                        $total_percentage_value = 0;
                                        foreach( $Assessments as $categoryId => $Assessment ) {
                                            
                                            echo '<tr>';
                                            echo "<th class='font-weight-bold myblue1 text-white' >" . $Assessment['CategoryName'].'</th>';
                                            $percentage_value = isset( $CourseAssessment[$categoryId]['Percentage'] ) ? $CourseAssessment[$categoryId]['Percentage'] : '';
                                            // $percentage_value = isset( $CourseAssessment[$categoryId]['Percentage'] ) && !empty($CourseAssessment[$categoryId]['Percentage']) ? $CourseAssessment[$categoryId]['Percentage'] : NULL;

                                            // echo '<td>'.(int)$percentage_value.'</td>';
                                            // echo '<td><input class="percent"  type="number" name="percentage[' . $categoryId . ']" value="' . $percentage_value . '" placeholder="()%"  onchange="handleChange(this);">  </input></td>';
                                            echo '<td><input title="" class="percent" id="percent1"  type="text" name="percentage[' . $categoryId . ']" value="' . $percentage_value . '" placeholder="0%"  onchange="handleChange(this);">  </input></td>';
                                            echo '<td>';
                                            echo "<select  class='browser-default custom-select' name='bonus[" . $categoryId . ']">';
                                            //echo '<option></option>';
                                            if($Course['LangId'] == 1)
                                            {
                                                echo "<option value='3'> </option>";
                                            }else{
                                                echo "<option value='1'> </option>"; 
                                            }
                                            foreach( $bonus as $bonusId => $row )
                                            {
                                                $bonusId_value = isset( $CourseAssessment[$categoryId]['BonusId'] ) ? $CourseAssessment[$categoryId]['BonusId'] : '';
                                                $selected = $bonusId == $bonusId_value ? 'selected' : '';
                                                echo '<option value="' . $bonusId . '" ' . $selected . '>'.$row['Choices'].'</option>';
                                            }
                                            
                                            echo '</select>';
                                            echo '</td>';
                                            echo '</tr>';

                                            if(is_numeric($percentage_value)){
                                                $total_percentage_value = $total_percentage_value + $percentage_value;
                                            }
                                            $i = 1;
                                            foreach( $Assessment['subcategories'] as $SubId => $SubcategoryName )
                                            {
                                                echo '<tr>';
                                                echo '<td></td>';

                                                $sub_value = isset( $CourseAssessment[$categoryId]['SubcategoryId' . $i] ) ? $CourseAssessment[$categoryId]['SubcategoryId' . $i] : '';
                                                $checked = $SubId == $sub_value ? 'checked' : '';
                                                
                                                echo '<td  colspan="2"><input class="box" type="checkbox" name="subcategories_' . $i++ . '[' . $categoryId . ']" value="' . $SubId . '" ' . $checked . '/>' . $SubcategoryName.'</td>';
                                                echo '</tr>';
                                                
                                                
                                                ?>                                               
                                     <?php      
                                            }
                                        }
                                    ?>
                                </table>
                                <span class="text-center badge badge-primary p-1 " style="background-color:#c51162 !important;">    
                                    <?php echo t_total_score; ?>
                                    <input  type="text" id="totalScore" value="<?php echo $total_percentage_value ; ?>" style="background-color:#fff;" disabled> 
                                
                                    <i class="fas fa-percent mb-3 mr-2"></i>
                                </span>
                                
                                 
                                
                            </div>
                            <textarea class="form-control" rows="15"name='AssessmentComment' placeholder='<?php echo t_assessment_comment;?>'><?php echo $Course['AssessmentComment'];?></textarea>    
                        </td>
                    </tr>
                </table>
            </div>
        </div> 

            </br>
                <div class="py-5 ">
            <div class="card card-cascade narrower container px-0">
                <div class="view view-cascade gradient-card-header  myblue1 darken-1 narrower py-2 px-1 d-flex justify-content-between align-items-center rounded ">
                    <div>
                    </div>
                    <div class="mycourses text-white font-italic text-center font-weight-bold">
                        <?php echo t_5bibliography; ?>
                    </div>
                    <div>
                        <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2 " data-toggle="modal" data-target="#bibliography_tooltip">
                            <i class="fas fa-info-circle mt-0 fa-2x"></i>
                        </button>
                    </div>
                </div>       

                <!-- Modal -->
                <div class="modal fade" id="bibliography_tooltip" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header special-color text-white">
                                <i class="fas fa-info-circle mt-0 fa-2x"></i>
                                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <div class="modal-body">
                            <?php echo t_bibliography_tooltip;?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal"><?php echo t_close; ?></button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="table-wrapper table-responsive" >                            
                <table class="table table-bordered mt-0">
                    <tr>
                        <td><textarea class="form-control " rows="15" name='Bibliography'><?php echo $Course['Bibliography'];?></textarea></td>    
                    </tr>
                </table>
            </div>
        </div>
        
        <div class="activity_error text-center py-2"><?php echo t_pending; ?></div>
 		<div class="box1 py-4">
                <div >
                    <button type="submit" name="finish_creation" id="finish_creation" class=" btn btn-outline-blue btn-rounded btn-sm p-4"><i class="far fa-save"></i> <?php echo t_save;?></button>

                </div>
                <div >  
                    <a class=" btn btn-outline-red btn-rounded btn-sm rounded p-4" href="<?php echo URL . 'FpdfController/fpdf?CourseId=' . $Course['Id'] ?>" target="_blank"> <i class="fas fa-print mt-0" ></i>  <?php echo t_print;?></a>

                </div>
            </div>
            </form>
        </div>
    </div>

