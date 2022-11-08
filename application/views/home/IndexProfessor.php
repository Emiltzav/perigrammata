
<div class="px-2 py-2 ">

<div class="bgcontainer1 container indexInfo" style="font-size:13px;" >
      
      <div class="text-center mt-n1" >
      
        <i class="info-icon fas fa-info-circle mt-0 fa-2x"></i>
      </div>
      <br>
      <img  style="position:absolute;margin-top:70px;" src="<?php echo URL; ?>/public/img/prof.png" alt="Logo" height="70" width="30"> 
      <?php echo t_info0;?>
      <br>
      <br>
      <ul style=" list-style:none;">

          <li><i class="fas fa-check text-success"></i> <?php echo t_info1;?>
              (<span class="font-weight-bold"> <?php echo t_edit; ?> </span><a href="#">
                  <span class="table-remove">
                      <button type="button" class="btn btn-danger btn-rounded btn-sm my-0 px-3 rounded-pill">
                      <i class="fas fa-pencil-alt mt-0"></i>
                      </button>
                  </span>
              </a>)
          </li>

          <li><i class="fas fa-check text-success"></i> <?php echo t_info2;?>
          (<span class="font-weight-bold"> <?php echo t_print; ?> </span>
          <a href="#">
              <span class="table-remove">
                  <button type="button" class="btn btn-light btn-rounded btn-sm my-0 px-3 rounded-pill">
                  <i class="fas fa-print mt-0"></i> 
                  </button>
              </span>
          </a>)

          </li>

          <li><i class="fas fa-check text-success"></i> <?php echo t_info3;?>
          (<span class="font-weight-bold"> <?php echo t_html; ?> </span>
          <a href="#">
              <span class="table-remove">
                  <button type="button" class="btn btn-info btn-rounded btn-sm my-0 px-3 rounded-pill">
                  <i class="far fa-file-code"></i>
                  </button>
              </span>
          </a>)

          </li>

          <li><i class="fas fa-check text-success"></i> <?php echo t_info4;?>
          (<span class="font-weight-bold"> <?php echo t_info8 ; ?> </span>
          <a href="#">
            <button type="button" class="btn btn-light btn-rounded btn-sm my-0 px-3 rounded-pill">
                <i class="fa fa-search" aria-hidden="true"></i> 
            </button>
            </a>)
          </li>         

      </ul>
     
      <div class="py-2 indexInfo" style="font-size:13px;" >
        <div class="text-center">
          <button class="btn btn-link fa-2x animated pulse infinite " onclick="showInfoProf()">
            <?php if ($_SESSION['lang']=='en'){
                        echo 'More Info';
                        }else 
                        echo 'Περισσότερες πληροφορίες'    
            ?> <i class="fas fa-angle-double-down" style="color:#375e72;"></i>
          </button>
        </div>

        <div class='py-2 animated fadeIn slower' id="moreInfoProf" style="display:none !important;">
            <div class="mycourses font-weight-bold">
                <?php if ($_SESSION['lang']=='en'){ 
                  echo 'Accreditation Board for Engineering and Technology (ΑΒΕΤ)' ;
                }else{
                  echo 'Πιστοποίηση ΑΒΕΤ (Accreditation Board for Engineering and Technology)' ;
                }
                ?>
            </div> 
            <?php 
                if ($_SESSION['lang']=='gr'){
                    echo 'Στα πλαίσια της παρούσας διπλωματικής εργασίας, πραγματοποιήθηκε η ανάπτυξη ενός Πληροφοριακού Συστήματος στον ιστό (web application), που επιτρέπει τη συσχέτιση των μαθησιακών αποτελεσμάτων των μαθημάτων με τα αποτελέσματα του κριτηρίου 3 (μαθησιακά αποτελέσματα) της πιστοποίησης <a class = "font-weight-bold" target = "_ blank" href = "https://www.abet.org/" > ΑΒΕΤ </a>  σε επίπεδο σχολής. Η πιστοποίηση προγραμμάτων σπουδών ανά τον κόσμο στις Εφαρμοσμένες Επιστήμες,
                    στην Πληροφορική, στην Τεχνολογία, και στις επιστήμες Μηχανικού είναι αρμοδιότητα του οργανισμού Accreditation Board for Engineering and Technology (ΑΒΕΤ). Από τα πρώτα της  βήματα η ΑΒΕΤ χρησιμοποιούσε κάποια κριτήρια πιστοποίησης, τα οποία υφίσταντο συνεχείς αλλαγές και εξελίχθηκαν σε πολύ ειδικά κριτήρια, τα οποία είχαν ως στόχο να εξασφαλίσουν ότι το κάθε πρόγραμμα σπουδών πληροί κάποιες ελάχιστες προϋποθέσεις και έχει κάποια ελάχιστα χαρακτηριστικά.
                    ';
                }else{
                    echo 'As part of this thesis we develop a web application, which allows matching learning outcomes of the courses with the results of criterion 3 (learning outcomes) of <a class = "font-weight- bold "target =" _ blank "href =" https://www.abet.org/ "> ABET </a> accreditation at school level. Accreditation of programs around the world in Applied Sciences, Informatics, Technology, and Engineering Sciences is responsibility of the Accreditation Board for Engineering and Technology (ABET). From its first steps, ABET used some accreditation criteria, which underwent continuous changes and evolved into very special criteria, which aimed to ensure that each program meets certain minimum requirements and has some minimal features.';
                
                }?>
        </div>
        <!-- <h3 class="font-weight-bold">
          < ? php if ($_SESSION['lang']=='gr'){ 
            echo 'Accreditation Board for Engineering and Technology (ΑΒΕΤ)' ;
          }else{
            echo 'Πιστοποίηση ΑΒΕΤ (Accreditation Board for Engineering and Technology)' ;
          }
          ?>
        
      

        </h3> -->

      <!-- 
       -->
      </div>

  </div>


  <div class="alert alert-warning alert-dismissible fade show container " role="alert">
    <strong><?php echo t_prof_alert; ?></strong> 
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

<!-- Table with panel -->
  <div class="card card-cascade narrower container px-0">

  
  <!--Card image-->
  <?php if ($_SESSION['user_profile']==2){ ?> 
  <div class="view view-cascade gradient-card-header myblue1 z-depth-2  narrower py-2 px-1  mb-3 d-flex justify-content-between align-items-center rounded ">
  <?php }else { ?>
    <div class="view view-cascade gradient-card-header myblue1 z-depth-2  narrower py-2 px-1  mb-3 d-flex justify-content-center align-items-center rounded ">
  <?php }?>
    <div>
    </div>
    <div class="mycourses text-white font-italic "><?php echo t_mycourses; ?></div>
    
    <?php if ($_SESSION['user_profile']==2){ ?> 
    <div>
      <!-- <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2" data-toggle="modal" data-target="#basicExampleModal">
        <i class="info-icon fas fa-info-circle mt-0 fa-2x"></i>
      </button> -->
    </div>
    <?php } ?>
  </div>


    <!-- Modal -->
    <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
            <?php echo t_index_professor_info; ?>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
        
        </div>
        </div>
    </div>
    </div>



  <!--/Card image-->

  <div class="px-4">

    <div class="table-wrapper table-responsive">
      <!--Table-->
      <table class="table table-hover mb-0 your-custom-styles" id="tableProf">

        <!--Table head-->
        <thead >
          <tr >
           
            <th class="font-weight-bold" style="font-size:13px;">
                <?php echo t_course;?>
                <!-- <i class="fas fa-sort ml-1"></i> -->
             
            </th>
            <th class="font-weight-bold" style="font-size:13px;">
            <?php echo t_School;?>
                <!-- <i class="fas fa-sort ml-1"></i> -->
              
            </th>
            <th class="font-weight-bold" style="font-size:13px;">
            <?php echo t_edit;?>
              <!-- <i class="fas fa-sort ml-1"></i> -->
              
            </th>
            <th class="font-weight-bold" style="font-size:13px;">
            <?php echo t_print;?>
              <!-- <i class="fas fa-sort ml-1"></i>        -->
            </th>
            <th class="font-weight-bold" style="font-size:13px;">
             HTML
              <!-- <i class="fas fa-sort ml-1"></i>     -->
            </th>
            <th class="font-weight-bold" style="font-size:13px;">
            <?php  echo t_info8;  ?>
            
                <!-- <i class="fas fa-sort ml-1"></i>        -->
            </th>
           
          </tr>
        </thead>
        <!--Table head-->

        <!--Table body-->
        <tbody >
            <?php foreach ($professorCourses as $Id => $row ){ ?>
                <tr >
                    <td style="font-size:13px;"><?php echo "<option value='" . $row['CourseId'] . "'>" . $row['CourseTitle'] ." (". $row['LessonCode'] . ")</option>" ?></td>
                    <td style="font-size:13px;"><?php echo "<option value='" . $row['CourseId'] . "'>" . $row['SchoolName'] ."</option>" ?></td>
                    <td style="font-size:13px;">
                        <a href="<?php echo URL . 'ProfessorController/EditLearningOutcomes?CourseId=' . $row['CourseId'] ?>">
                            <span class="table-remove">
                                <button type="button" class="btn btn-danger btn-rounded btn-sm my-0 px-3 rounded-pill">
                                <i class="fas fa-pencil-alt mt-0"></i>
                                </button>
                            </span>
                        </a>
                    </td>    
                    <td>
                        <a href="<?php echo URL . 'FpdfController/fpdf?CourseId=' . $row['CourseId'] ?>" target="_blank">
                            <span class="table-remove">
                                <button type="button" class="btn btn-light btn-rounded btn-sm my-0 px-3 rounded-pill">
                                <i class="fas fa-print mt-0"></i> 
                                </button>
                            </span>
                        </a>
                    </td> 
                    <td>
                    
                        <a href="<?php echo URL . 'ProfessorController/fhtml?CourseId=' . $row['CourseId'] ?>">
                            <span class="table-remove">
                                <button type="button" class="btn btn-info btn-rounded btn-sm my-0 px-3 rounded-pill">
                                <i class="far fa-file-code"></i>
                                </button>
                            </span>
                        </a>
                    </td> 
                      
                    <td >                    
                        <?php if($row['locked']!=1) {?>
                            <a href="<?php echo URL . 'ProfessorController/LearningOutcomesAbet2?CourseId=' . $row['CourseId'] ?>" >
                        <?php }else{ ?>
                            <a class="disabled " href="<?php echo URL . 'ProfessorController/LearningOutcomesAbet2?CourseId=' . $row['CourseId'] ?>" >
                        <?php } ?>
                        <button type="button" class="btn btn-light btn-rounded btn-sm my-0 px-3 rounded-pill">
                            <i class="fa fa-search" aria-hidden="true"></i> 
                        </button>
                          
                        </a>
                        <?php
                        if(isset( $_SESSION['updated'] ) && $_SESSION['updated']!=0 && $_SESSION['updated']==$row['CourseId']){
                          if ($_SESSION['lang']=='gr'){
                            echo '<span class="mybadge badge badge-success animated pulse infinite p-1"> Πατήστε για ενημέρωση <i class="far fa-check-circle animated rotateIn"></i></span>';
                          }else{
                            echo '<span class="mybadge badge badge-success animated pulse infinite p-1"> Click to update <i class="far fa-check-circle animated rotateIn"></i></span>';
                          }
                            $_SESSION['updated'] = 0;
                        }

                        foreach ($submitedCourses as $myId => $myrow ){ 
                          if ($myrow['CourseId'] == $row['CourseId']){
                            if ($_SESSION['lang']=='gr'){
                              echo '<span class="badge badge-primary animated pulse infinite p-1"> Αποθηκευμένο <i class="far fa-check-circle animated rotateIn"></i></span>';
                            }else{
                              echo '<span class="badge badge-primary animated pulse infinite p-1"> Saved <i class="far fa-check-circle animated rotateIn"></i></span>';
                            }
                          }
                        }

                        ?>
                    </td>                       
                        
                 
                </tr>
                
            <?php } ?>
          

        </tbody>
        <!--Table body-->
        
      </table>
      
      <br>
      <!--Table-->
    </div>

  </div>

</div>
<!-- Table with panel -->
</div>
<br>
<br>
