<input type="hidden" id="language" value="<?php echo $_SESSION['lang'];?>" />

<!-- Re index $TranslatedOutcomes['OutcomeId'] . Epeidh den htan se seira ta ma8.apotelesmata ,px 3,6,13,1,2 ginetai 3,4,5,1,2 -->
<?php 
$arr=$TranslatedOutcomes;
$outcomes = array_column($TranslatedOutcomes, 'OutcomeId');
sort($outcomes);
$l=0;
$p=0;
foreach( $arr as $key => $value) {  
    // echo "Index: " . ($key+1) . " Value: " . $value['OutcomeId'] . "<br>";  
    for($l=0;$l<count($outcomes);$l++){
        if ($value['OutcomeId']==$outcomes[$l]){
            $OutcomesId[$p]= $l+1 ;
            $p++;
        }
    }
    
} 

$skills_gr=array();
?>
                      
                    
<input type="hidden" id="version" value="<?php echo $Version;?>" />





<!-- <div class="py-5 px-5" id="loaded">  -->
<div class="py-3 px-5" >
    <div class="container-fluid ">
        <div class="container my-5 py-2 z-depth-1 rounded-pill">
            <div class=" text-center px-md-5 mx-md-5 py-2 dark-grey-text">
            <h4 class="h4-responsive mb-0 text-grey font-weight-bold" ><?php echo t_abet_title;?></h4>
            
            <div class=" text-center text-uppercase    mt-2 ">
                <h5 class="font-weight-bold mt-1"><?php echo $Course['CourseTitle'] ?>
                    <i><?php echo '('.$Course['LessonCode'].')' ; ?></i>
                </h5>
            </div>
            </div>
        </div>
       
       
       
       
        <?php
        //If the course has submitted student outcomes
        if(count($CourseOutcome)!=0){
        // If the course outcomes are not translated
            if (count($CoursePercent)==0 ){ 
            ?> 
                <div class="card card-cascade narrower px-0 ">
                    <div class="view view-cascade gradient-card-header myblue1 z-depth-2 text-center  narrower py-2 px-1  mb-3  rounded ">
                        <?php if ($Course['LangId']==1 ){  ?>
                            <h4 class="text-white">
                                <?php
                                    if ($_SESSION['lang']=='gr'){
                                        echo 'Μεταφράστε τα μαθησιακά αποτελέσματα σας';
                                    }else{
                                        echo 'Translate your student outcomes';
                                    }
                            
                                
                                ?>
                            
                            </h4>
                
                            <span class="border border-warning p-3  text-light">
                                <i class="fas fa-exclamation-triangle fa-2x mb-3 animated rotateIn "></i>
                                <?php  
                                    if ($_SESSION['lang']=='gr'){
                                        echo  'Παρακαλώ επιλέξτε γλώσσα μετάφρασης τα Αγγλικά! '; 
                                    }else{
                                        echo 'Please choose English as translation language!';
                                    }
                                    ?> 
                            </span>
                        <?php }else{ ?>
                            <h4 class="text-white">
                                <?php
                                    if ($_SESSION['lang']=='gr'){
                                        echo 'Αποθηκεύστε τα μαθησιακά αποτελέσματα σας';
                                    }else{
                                        echo 'Save your student outcomes';
                                    }
                            
                                
                                ?>
                            
                            </h4>
                        <?php } ?>
                    </div>
                    <div class="px-4">

                        <p>
                        
                        <i>
                        <?php  
                            if ($_SESSION['lang']=='gr' && $Course['LangId']==1 ){
                                echo  '<span class="badge badge-warning"><i class="fas fa-info-circle"></i></span> Το μοντέλο Universal Sentence Encoder το οποίο χρησιμοποίειται, για την αντιστοίχιση των μαθησιακών αποτελεσμάτων με τα αποτελέσματα του ΑΒΕΤ κριτηρίου 3, στην εφαρμογή λαμβάνει ως είσοδο λέξεις, φράσεις η ακόμα και μικρές παραγράφους και δεν απαιτείται προεπεξεργασία του αλλά απαιτείτε μετάφραση των μαθησιακών αποτελεσμάτων στην αγγλική γλώσσα.
                                Έτσι αντί να χρειάζεται να γίνει η μετάφραση τους με μη αυτόματο τρόπο χρησιμοποιούμε το εργαλείο του μεταφραστή ιστοτόπων της Google. Επιλέξτε γλώσσα μετάφρασης τα Αγγλικά απο το μενού επιλογής γλώσσας που ακολουθεί και πατήστε "Μετάφραση".'; 
                            }else if ($_SESSION['lang']=='en' && $Course['LangId']==1 ){
                                echo '<span class="badge badge-warning"><i class="fas fa-info-circle"></i></span> Universal Sentence Encoder is used to match learning outcomes with the results of ABET criterion 3, in the application take as input entry words, phrases or even small paragraphs and does not require pre-processing but requires translation of learning outcomes in English. 
                                So instead of translating them manually, we use Google\'s website translator tool. Select English translation language from the language selection menu that follows and click "Translate".';
                            }else if ($_SESSION['lang']=='gr' && $Course['LangId']!=1){
                                echo '<span class="badge badge-warning"><i class="fas fa-info-circle"></i></span> Αποθηκεύστε τα μαθησιακά αποτελέσματα ώστε να χρησιμοποιηθούν απο το μοντέλο Universal Sentence Encoder το οποίο χρησιμοποίειται, για την αντιστοίχιση των μαθησιακών αποτελεσμάτων με τα αποτελέσματα του ΑΒΕΤ κριτηρίου 3.';
                            }else if ($_SESSION['lang']=='en' && $Course['LangId']!=1){
                                echo '<span class="badge badge-warning"><i class="fas fa-info-circle"></i></span> Save the learning outcomes so that they can be used by the Universal Sentence Encoder model that is used, to match the learning outcomes with the results of ABET criterion 3.';
                            }
                        ?> 
                        </i>
                        </p>
                        <div class="table-wrapper table-responsive">
                            <form  method="POST" action="<?php echo URL . 'ProfessorController/WriteENOutcomes?CourseId='.$Course['Id'];?>" >
                            
                                <div class="table-wrapper table-responsive">
                                    <table class="table table-hover mb-0  btn-table "> 
                                
                                                
                                        <thead >  
                                        <br>
                                        <br>
                                    
                                        
                                        </thead>
                                        <tbody>
                                            <?php 
                                            if ($Course['LangId']==1 ){ 
                                                $p=1;
                                                // Greek Courses 
                                                foreach ($CourseElOutcomes as  $Id => $row ){ ?>
                                                    <tr >
                                                        <!-- <td>< ?php echo $p?></td> -->
                                                        <!-- <td>< ?php echo $row['elVerbs'].' '.$row['Sentence'] ?></td> -->
                                                            <div  style="display:inline-block;" id="google_translate_element">
                                                            <input style="width: 1px;" class="translate disabled form-control" type="text" value="<?php echo $row['enVerbs'].' '. $row['Sentence'];?>" name='abetEN[]'/>
                                                            </div>
                                                            <input type="hidden" name="OutcomeId[]" value="<?php echo $row['OrderNumber'];?>" />
                                                        
                                                            <input type="hidden" name="CourseId[]" value="<?php echo $row['CourseId'];?>" /> 
                                                        
                                                    </tr>

                                                <?php 
                                                $p++;
                                                } 
                                            }else{
                                                // English Courses 
                                                foreach ($CourseEnOutcomes as  $Id => $row ){ ?>
                                                    <tr >
                                                        <input style="width: 1px;display:inline-block;" class="disabled form-control" type="text" value="<?php echo $row['enVerbs'].' '.$row['Sentence'];?>" name='abetEN2[]'/>
                                        
                                                        <input type="hidden" name="OutcomeId2[]" value="<?php echo $row['OrderNumber'];?>" />
                                                        
                                                        <input type="hidden" name="CourseId2[]" value="<?php echo $row['CourseId'];?>" /> 
                                                        
                                                    </tr>

                                                <?php 
                                            
                                                } 
                                            }
                                            ?>                        
                                        </tbody>
                                    </table>                          
                                </div>                     
                                <div class="text-center mt-n5 py-5">   
                                    <?php if ($Course['LangId']==1 ){  ?>           
                                        <button type="submit" name="submit" class="btn text-light font-weight-bold btn-rounded m-0 waves-effect" style="border-radius:50px !important;background-color:#4285f4;">
                                        <i class='fab fa-google'></i>   <?php echo t_translate; ?> 
                                        </button>
                                    <?php }else{ ?>
                                        <button type="submit" name="submit" class="btn btn-light font-weight-bold btn-rounded m-0 waves-effect" style="border-radius:50px !important;">
                                        <?php echo t_save; ?> 
                                        </button>

                                    <?php } ?>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>    
            <?php }
            // If student outcomes are translated
            else{ ?>
                <br>
                <br>       
                <!-- range input -->
                <div class="d-flex justify-content-center">
            
                    <form style="display:none;">
                        <div class="text-center px-5">
                            <span class="badge badge-default p-3 ">
                            <?php
                            
                            if ($_SESSION['lang']=='gr'){
                                echo 'Ελάχιστο σκορ Μαθησιακών Αποτελεσμάτων';
                            } else{
                                echo 'Learning outcomes threshold';
                            }   
                            
                            ?>
                        
                            </span>
                        </div>
                        <div class="range-wrap">
                            <div class="range-value" id="rangeV"></div>
                            <input name="valueId" id="range" type="range" min="0" max="100" value="0" step="1">
                        </div>

                        <div id="range_gen">
                            <div class="text-center p-5"> 

                            <span class="badge badge-default p-3 ">
                            <?php
                            
                            if ($_SESSION['lang']=='gr'){
                                echo 'Ελάχιστο σκορ Γενικών Ικανοτήτων';
                            } else{
                                echo 'Generic skills threshold';
                            }   
                            
                            ?>
                
                            
                            </span>
                            </div>
                            <div class="range-wrap">
                                <div class="range-value" id="rangeV1"></div>
                                <input name="valueId" id="range1" type="range" min="0" max="100" value="0" step="1">
                            </div>
                        </div>
                        <div class="text-center">
                            <input class="btn-default p-2 z-depth-1" type="button" id="theButton" value="Go " style="border:none;"/>
                        </div>
                    </form>
                    
                </div>  
            
                <!-- <div id="Version1" class="animated fadeIn slow " > -->
                <?php if ($Version == 1) {?>
                <!-- <form  method="POST" action="< ?php echo URL . 'AdminController/SaveAbetOutcomes'?>" name="saveAbet"> -->
                    <div class="py-5" >
                        <div class="card card-cascade narrower px-0 " >
                            <div class="view view-cascade gradient-card-header myblue1 z-depth-2 text-center  narrower py-2   mb-3  rounded ">
                                <h4 class="mycourses text-white font-italic ">
                                    <?php echo t_doc02; ?>
                                </h4>
                                <h5 class="text-white ">
                                    <?php echo t_score_array; ?>
                                </h5>
                            
                                <p class="text-light font-italic ">
                                <?php echo t_doc_course_percent .': '?>
                                
                                <!-- < ?php 
                                if (count($CoursePercent)!=0){
                                    foreach ($CoursePercent as $Id => $row ){ ?>
                                        <span style="font-weight:bold"> < ?php echo $row['documentedCoursesPercent'] ?> %</span> 
                                    < ?php } 
                                }else
                                    echo '0 %' ?>
                                </p> -->



                            </div>
                            <div class="px-4">
                                <div class="table-wrapper table-responsive">
                                    <table class="table table-hover mb-0 your-custom-styles btn-table" id="abetTable">
                                        
                                        <thead >  
                                        <th class=" font-weight-bold">
                                                <?php echo '#'; ?>
                                                
                                            </th>
                                            <th class=" font-weight-bold">
                                                <?php echo t_learning_outcomes; ?>
                                                
                                            </th>
                                            <th class=" font-weight-bold">
                                                1
                                            </th>
                                            <th class=" font-weight-bold">
                                            2
                                            </th>
                                            <th class=" font-weight-bold">
                                            3
                                            </th>
                                            <th class=" font-weight-bold">
                                                4
                                            </th>
                                            <th class=" font-weight-bold">
                                                5
                                            </th>
                                            <th class=" font-weight-bold">
                                                6
                                            </th>
                                            <th class=" font-weight-bold">
                                                7
                                            </th>
                                            <!-- <th class=" font-weight-bold">
                                                8
                                            </th>
                                            <th class="th-lg font-weight-bold">
                                                9
                                            </th>
                                            <th class="th-lg font-weight-bold">
                                                10
                                            </th>
                                            <th class="th-lg font-weight-bold">
                                                11
                                            </th> -->
                                            
                                        </thead>
                                        <tbody>
                                            
                                                <tr>
                                                <?php
                                                    $m=0;
                                                    foreach ($TranslatedOutcomes as $Id => $row ){ 
                                                        
                                                        ?>
                                                    <td> <?php echo $OutcomesId[$m]; ?></td>
                                                    <!-- Replace _ with space because i add _ to outcomes from skills to recognise them that they came from general skills -->
                                                    <td> <?php echo str_replace('_', ' ', $row['Outcome']); ?></td>
                                                    <td class="dataOutcome" ></td>
                                                    <td class="dataOutcome"></td>
                                                    <td class="dataOutcome"></td>
                                                    <td class="dataOutcome"></td>
                                                    <td class="dataOutcome"></td>
                                                    <td class="dataOutcome"></td>
                                                    <td class="dataOutcome"></td>
                            
                        
                                                    <!-- <td class="dataOutcome"></td>
                                                    <td class="dataOutcome"></td>
                                                    <td class="dataOutcome"></td>
                                                    <td class="dataOutcome"></td> -->
                                                    <!-- <td id="scores"> < ?php echo $row['Outcome']; ?></td> -->
                                                </tr>
                                            <?php $m++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- End if version1 -->
                <?php }else {?>
                    <!---------------------------------------------------  Version 2 ------------------------------------------------------------------->
                    <div class="card card-cascade narrower px-0 " style="display:none;">
                        <div class="view view-cascade gradient-card-header myblue1 z-depth-2 text-center  narrower px-1  mb-3  rounded ">
                        
                            <h4 class="mycourses text-white font-italic ">
                            <small class="text-left text-white font-italic mx-2">01.</small>
                                <?php echo t_doc01; ?>
                            </h4>
                        </div>
                        <div class="px-4">
                            <div class="table-wrapper table-responsive">
                                <table class="table table-hover mb-0 your-custom-styles btn-table" >
                                    <thead >  
                                        <th class="th-lg font-weight-bold">
                                            <?php echo t_general_capabilities; ?>
                                            <!-- <i class="fas fa-sort ml-1"></i>            -->
                                        </th>
                                    
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $s=0;
                                        
                                        foreach ($skills as $Id => $row ){ ?>
                                            <?php if(in_array($row['Description'], $CourseSkills)){?>
                                            
                                                <tr>
                                                    <td>
                                                        <!-- < ?php echo $row['SkillsId'] ;?> -->
                                                        <input  type="hidden" name="skills[]" class="skill_list disabled" value="<?php echo $row['Id']; ?> " id="skill__<?php echo $s;?>" ><?php echo $row['Description'] ;?></input>
                                                        <?php $skills_gr[$s]=$row['Description'] ?>
                                                        <!-- <label for="skill_< ? php echo $Id; ?>">< ?php echo $row['Description'] ;?> </label>  -->
                                                    </td>
                                                    <!-- <td>                            
                                                        < ?php echo $row_['AbetId'] ?>                                   
                                                    </td> -->
                                                </tr>
                                            <?php 
                                            $s++;
                                                }
                                                
                                            
                                        } ?>
                                    </tbody>
                                    <br>
                                </table>
                                    <input type="hidden" id="numOfSkills" value="<?php echo count($CourseSkills);?>" /> 
                                    <input type="hidden" id="langId" value="<?php echo $LangId;?>" /> 
                                    <input type="hidden" id="numOfOutcomes" value="<?php echo count($TranslatedOutcomes);?>" /> 
                                
                            </div>
                        </div>                        
                    </div> 

                    <div class="text-center" id="loading" >
                        <div id="spinner">
                            <div class="spinner-border " style="color:#12384b;" role="status" >  
                                <span class="sr-only"></span>                  
                            </div> 
                            <div class="text-dark">
                                <?php if ($_SESSION['lang']=='gr'){
                                echo 'Παρακαλώ περιμένετε...';
                            }else{
                                echo 'Please wait...';
                            }?></div>
                            
                        </div>
                    </div>

                    <div class="bgcontainer1 container-fluid mt-n5 " style="font-size:13px;">
                        
                        <div class="text-center mt-n1" >
        
                            <i class="info-icon fas fa-info-circle mt-0 fa-2x"></i>
                        </div>
                        <br>
                        <h3 class="font-weight-bold">
                            <?php if ($_SESSION['lang']=='gr'){
                                echo 'Πιστοποίηση ';
                            }    
                            echo 'ΑΒΕΤ (Accreditation Board for Engineering and Technology)';
                            ?>
                        </h3>
                        <div class="description">
                            <?php 
                                if ($_SESSION['lang']=='gr'){
                                    echo 'Η εφαρμογή επικεντρώνεται στο 3ο κριτήριο της πιστοποίησης ΑΒΕΤ, τα μαθησιακά αποτελέσματα. Τα βασικά αποτελέσματα των φοιτητών είναι τα παρακάτω αποτελέσματα (1) έως (7):'.'<br><br>';

                                    echo '<ol>
                                    <li>Να διαθέτει την ικανότητα να καθορίζει, διαμορφώνει και επιλύει σύνθετα προβλήματα μηχανικού εφαρμόζοντας γνώσεις μαθηματικών, φυσικών επιστημών και επιστημών μηχανικού.</li>
                                    <li>Να διαθέτει την ικανότητα να εφαρμόζει σχεδιασμό μηχανικού ώστε να βρίσκει λύσεις για την ανταπόκριση σε συγκεκριμένες ανάγκες λαμβάνοντας υπόψιν την δημόσια υγεία, την ασφάλεια και την ευημερία καθώς και τους παγκόσμιους, πολιτιστικούς, κοινωνικούς περιβαλλοντικούς και οικονομικούς παράγοντες.</li>
                                    <li>Να διαθέτει την ικανότητα αποτελεσματικής επικοινωνίας σε ένα εύρος κοινού.</li>
                                    <li>Να διαθέτει την ικανότητα να αναγνωρίζει τις ηθικές και επαγγελματικές του ευθύνες σε καταστάσεις ως μηχανικός και να κάνει τεκμηριωμένες κρίσεις ώστε να κατανοεί την επίδραση των λύσεων που προτείνει ως μηχανικός στο κοινωνικό και οικονομικό σύνολο καθώς και στο περιβάλλον.</li>
                                    <li>Να διαθέτει την ικανότητα να λειτουργεί αποτελεσματικά σε ομάδες όπου τα μέλη παρέχουν μαζί ηγεσία, δημιουργούν ένα περιβάλλον συνεργασίας και περιεκτικό, καθορίζουν στόχους, προγραμματίζουν εργασίες και εκπληρώνουν στόχους.</li>
                                    <li>Να διαθέτει την ικανότητα να αναπτύσσει και να κάνει κατάλληλα πειράματα, να αναλύει και να ερμηνεύει τα δεδομένα καθώς επίσης να χρησιμοποιεί την κρίση του ως μηχανικός για την εξαγωγή συμπερασμάτων.</li>
                                    <li>Να διαθέτει την ικανότητα να αποκτά και να εφαρμόζει νέες γνώσεις ανάλογα με τις ανάγκες, χρησιμοποιώντας κατάλληλες στρατηγικές μάθησης.</li>
                                    </ol>';

                                    echo 'Στον παρακάτω πίνακα <u>Σκορ Μαθησιακών Αποτελεσμάτων ανά ΑΒΕΤ Μαθησιακό αποτέλεσμα</u> έχουμε στις γραμμές στα αριστερά του, τα μαθησιακά αποτελέσματα και τις γενικές ικανότητες που έχει συμπληρώσει ο διδάσκων και στις στήλες από 1-7 το σκορ ενίσχυσης για κάθε ένα από τα επτά ABET μαθησιακά αποτελέσματα. Με μαύρο χρώμα επισημαίνονται τα σκορ για τα μαθησιακά αποτελέσματα ενώ με κόκκινο χρώμα για τις γενικές ικανότητες.
                                    <span class="font-weight-bold"> Στόχος του είναι να παράξει την τελική βαθμολογία του μαθήματος για τα ΑΒΕΤ μαθησιακά αποτελέσματα</span>.
                                    '; 
                                
                                    echo 'Περισσότερες πληροφορίες για τον αλγόριθμο που χρησιμοποιήθηκε για την εξαγωγή των σκορ δείτε παρακάτω.';
                                }else{
                                    echo 'This web-application focuses on the third criterion which refers to learning outcomes. The main student outcomes are outcomes (1) through (7):<br><br>';
                            
                                    echo '<ol>
                                    <li>an ability to identify, formulate, and solve complex engineering problems by applying principles of engineering, science, and mathematics.</li>
                                    <li>an ability to apply engineering design to produce solutions that meet specified
                                    needs with consideration of public health, safety, and welfare, as well as global,
                                    cultural, social, environmental, and economic factors.</li>
                                    <li>an ability to communicate effectively with a range of audiences.</li>
                                    <li>an ability to recognize ethical and professional responsibilities in engineering
                                    situations and make informed judgments, which must consider the impact of
                                    engineering solutions in global, economic, environmental, and societal contexts.</li>
                                    <li>an ability to function effectively on a team whose members together provide
                                    leadership, create a collaborative and inclusive environment, establish goals,
                                    plan tasks, and meet objectives.</li>
                                    <li>an ability to develop and conduct appropriate experimentation, analyze and
                                    interpret data, and use engineering judgment to draw conclusions.</li>
                                    <li>an ability to acquire and apply new knowledge as needed, using appropriate
                                    learning strategies.</li>
                                    </ol>';

                                    echo 'In the table below <u> Learning Outcomes Score per ABET Learning Outcome </u> we have in the lines on the left, the learning outcomes and the generic skills that the teacher has completed and in columns 1-7 the score for each of the seven ABET learning outcomes. Scores for the learning outcomes are marked in black and in red for the generic skills.
                                    <span class = "font-weight-bold"> Its goal is to produce the final course score for ABET learning outcomes. </span>
                                    '; 
                                
                                    echo 'More information about the algorithm used to extract the scores can be found below.';

                                }
                            
                            ?>
                        </div>
                    </div>
                    <div class="py-3" >   
                        <div class="card card-cascade narrower px-0 ">
                            <div class="view view-cascade gradient-card-header myblue1 z-depth-2 text-center  narrower py-2   mb-3  rounded ">
                            
                            
                                <h4 class="mycourses text-white font-italic ">
                            
                                    <?php echo t_score_array; ?>
                    
                                </h4>
                                <p class="text-white">
                                    <i>
                                        <?php  
                                        if ($_SESSION['lang']=='gr'){
                                            echo 'Τα παρακάτω σκορ εμφανίζονται σε ποσοστιαία (%) μορφή';
                                        }else{
                                           echo 'The following scores are displayed in percentage (%) format'; 
                                        }
                                        ?>
                                    </i>
                                </p>
                                
                            

                            </div>
                        

                            <div class="px-4">
                                <div class="table-wrapper table-responsive">
                                    <table class="table table-hover mb-0 your-custom-styles btn-table" id="abetTable">
                                        <thead >  
                                        <th class="font-weight-bold " > 
                                                <?php echo '#'; ?>
                                                
                                            </th>
                                            <th class="font-weight-bold">
                                                <?php echo t_learning_outcomes .' -' ; ?>
                                                <span style="color:#c51162;display:inline;"><?php echo t_general_capabilities ; ?></span>
                                                
                                                                                            
                                            </th>
                                            <th class="font-weight-bold" >
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="<?php echo t_criterion1;?>">1</a>
                                            </th>
                                            <th class="font-weight-bold">
                                                <a href="#" data-toggle="tooltip" data-placement="top"  title="<?php echo t_criterion2;?>">2</a>
                                            </th>
                                            <th class="font-weight-bold">
                                                <a href="#" data-toggle="tooltip" data-placement="top"  title="<?php echo t_criterion3;?>">3</a>
                                            </th>
                                            <th class="font-weight-bold">
                                                <a href="#" data-toggle="tooltip" data-placement="top"  title="<?php echo t_criterion4;?>">4</a>
                                            </th>
                                            <th class="font-weight-bold">
                                                <a href="#" data-toggle="tooltip" data-placement="top"  title="<?php echo t_criterion5;?>">5</a>
                                            </th>
                                            <th class="font-weight-bold">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="<?php echo t_criterion6;?>">6</a>
                                            </th>
                                            <th class="font-weight-bold">
                                                <a href="#" data-toggle="tooltip" data-placement="top"  title="<?php echo t_criterion7;?>">7</a>
                                            </th>
                                            <!-- <th class="th-lg font-weight-bold">
                                                8
                                            </th>
                                            <th class="th-lg font-weight-bold">
                                                9
                                            </th>
                                            <th class="th-lg font-weight-bold">
                                                10
                                            </th>
                                            <th class="th-lg font-weight-bold">
                                                11
                                            </th> -->
                                        
                                        </thead>
                                        <tbody>
                                    
                                                <tr>
                                                <?php
                                            
                                                $m=0;
                                                foreach ($TranslatedOutcomes as $Id => $row ){ 
                                                    // hide total outcome
                                            
                                                    ?>
                                                <td> <?php echo $OutcomesId[$m]; ?></td>
                                                <!-- Replace _ with space because i add _ to outcomes from skills to recognise them that they came from general skills -->
                                                <td> <?php echo str_replace('_', ' ', $row['Outcome']); ?></td>
                                                <td class="dataOutcome" style="font-size:20px;"></td>
                                                <td class="dataOutcome" style="font-size:20px;"></td>
                                                <td class="dataOutcome" style="font-size:20px;"></td>
                                                <td class="dataOutcome" style="font-size:20px;"></td>
                                                <td class="dataOutcome" style="font-size:20px;"></td>
                                                <td class="dataOutcome" style="font-size:20px;"></td>
                                                <td class="dataOutcome" style="font-size:20px;"></td>

                                                </tr>
                                                <?php $m++;
                                                
                                                } 
                                                $k=0;

                                                foreach ($CourseSkills_1 as $Id => $row ){
                                                    
                                                        foreach ($checkSkill as $Id_ => $row_ ){
                                                            // echo $row['SkillsId'].' '. $row_['SkillsId'].' , hour = '.$row_['hours'].'<br>';
                                                            if($row['SkillsId'] == $row_['SkillsId'] && $row_['hours']!=0){?>
                                                                
                                                                <tr style="color:#c51162;">
                                                                    <td > <?php echo count($TranslatedOutcomes)+($k+1); ?></td>
                                                                    <td><?php echo $skills_gr[$k];?></td>
                                                                    <td style="font-size:20px;">-1</td>
                                                                    <td style="font-size:20px;">-1</td>
                                                                    <td style="font-size:20px;">-1</td>
                                                                    <td style="font-size:20px;">-1</td>
                                                                    <td style="font-size:20px;">-1</td>
                                                                    <td style="font-size:20px;">-1</td>
                                                                    <td style="font-size:20px;">-1</td>
                                                                </tr>
                                                                
                                                            <?php  break;  
                                                            } 
                                                            if ($row['SkillsId'] == $row_['SkillsId'] && $row_['hours']==0){ ?>
                                                                <tr style="color:#c51162;">
                                                                    <td >
                                                                        <?php echo count($TranslatedOutcomes)+($k+1); ?>
                                                                        <span  class="d-inline badge badge-warning " title="
                                                                            <?php
                                                                                if ($_SESSION['lang']=='gr'){ 
                                                                                    echo 'Η γενική ικανότητα ['.$row_['Description'].']  που επιλέξατε δεν έχει τον αντίστοιχο φόρτο εργασίας στην ενότητα (4) Οργάνωση Διδασκαλίας του περιγράμματος του μαθήματος ['.$Course['CourseTitle'].'].';
                                                                                }else{
                                                                                    echo 'The general ability ['. $row_['Description']. '] you selected does not have the corresponding workload in the section (4) Teaching Organization of the Course Outline ['. $Course ['CourseTitle']. '].';
                                                                                }

                                                                            ?>
                                                                            "> <i class="fas fa-bell"></i>
                                                                        </span>
                                                                                                                                              
                                                                    </td>
                                                                    <td> 
                                                                  
                                                                        <?php echo $skills_gr[$k];?>
                                                                    </td>
                                                                    <td style="font-size:20px;"></td>
                                                                    <td style="font-size:20px;"></td>
                                                                    <td style="font-size:20px;"></td>
                                                                    <td style="font-size:20px;"></td>
                                                                    <td style="font-size:20px;"></td>
                                                                    <td style="font-size:20px;"></td>
                                                                    <td style="font-size:20px;"></td>
                                                                </tr>
                                                            <?php break; }
                                                    }
                                                    
                                                    $k++;
                                            }?>


                                        </tbody>


                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            
        <!-- Editable table -->

                <div class="py-3" id="editable">
                    <div class="card card-cascade narrower px-0 ">
                        <div class="view view-cascade gradient-card-header myblue1 z-depth-2 text-center  narrower py-2   mb-3  rounded ">
                            <h4 class="mycourses text-white font-italic ">
                                <?php echo t_final_array; ?>
                                <!-- <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2 animated pulse infinite" data-toggle="modal" data-target="#abet_info">
                                    <i class="fas fa-info-circle mt-0 fa-2x fa-2x"></i>
                                </button>   -->
                                
                            
                            </h4>
                        </div>
                        <div class="px-4">
                            <div class="table-wrapper table-responsive table-editable">
                                
                                <table class="table table-hover mb-0 your-custom-styles btn-table" id="finalTable">
                                    <thead >  
                                                            
                                        <th class="font-weight-bold">
                                            <?php echo ''; ?>
                                            
                                        </th>
                                        <th class="font-weight-bold" >
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="<?php echo t_criterion1;?>">1</a>
                                        </th>
                                        <th class="font-weight-bold">
                                            <a href="#" data-toggle="tooltip" data-placement="top"  title="<?php echo t_criterion2;?>">2</a>
                                        </th>
                                        <th class="font-weight-bold">
                                            <a href="#" data-toggle="tooltip" data-placement="top"  title="<?php echo t_criterion3;?>">3</a>
                                        </th>
                                        <th class="font-weight-bold">
                                            <a href="#" data-toggle="tooltip" data-placement="top"  title="<?php echo t_criterion4;?>">4</a>
                                        </th>
                                        <th class="font-weight-bold">
                                            <a href="#" data-toggle="tooltip" data-placement="top"  title="<?php echo t_criterion5;?>">5</a>
                                        </th>
                                        <th class="font-weight-bold">
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="<?php echo t_criterion6;?>">6</a>
                                        </th>
                                        <th class="font-weight-bold">
                                            <a href="#" data-toggle="tooltip" data-placement="top"  title="<?php echo t_criterion7;?>">7</a>
                                        </th>
                                                                
                                    </thead>
                                    <tbody>
                                        
                                            <tr>
                                                <td><?php echo t_learning_outcomes ;?></td>
                                                <td class="font-weight-bold" name="abet1[]" style="font-size: 20px;" contenteditable="false" id="abet_1"></td>
                                                <td class="font-weight-bold" name="abet1[]" style="font-size: 20px;" contenteditable="false" id="abet_2"></td>
                                                <td class="font-weight-bold" name="abet1[]" style="font-size: 20px;" contenteditable="false" id="abet_3"></td>
                                                <td class="font-weight-bold" name="abet1[]" style="font-size: 20px;" contenteditable="false" id="abet_4"></td>
                                                <td class="font-weight-bold" name="abet1[]" style="font-size: 20px;" contenteditable="false" id="abet_5"></td>
                                                <td class="font-weight-bold" name="abet1[]" style="font-size: 20px;" contenteditable="false" id="abet_6"></td>
                                                <td class="font-weight-bold" name="abet1[]" style="font-size: 20px;" contenteditable="false" id="abet_7"></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo t_general_capabilities ;?></td>
                                                <td class="font-weight-bold" name="abet1[]" style="font-size: 20px;" contenteditable="false" id="abet_8"></td>
                                                <td class="font-weight-bold" name="abet1[]" style="font-size: 20px;" contenteditable="false" id="abet_9"></td>
                                                <td class="font-weight-bold" name="abet1[]" style="font-size: 20px;" contenteditable="false" id="abet_10"></td>
                                                <td class="font-weight-bold" name="abet1[]" style="font-size: 20px;" contenteditable="false" id="abet_11"></td>
                                                <td class="font-weight-bold" name="abet1[]" style="font-size: 20px;" contenteditable="false" id="abet_12"></td>
                                                <td class="font-weight-bold" name="abet1[]" style="font-size: 20px;" contenteditable="false" id="abet_13"></td>
                                                <td class="font-weight-bold" name="abet1[]" style="font-size: 20px;" contenteditable="false" id="abet_14"></td>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center" id="moreScores">
                    <input class="btn-default p-2 z-depth-1" type="button" id="avgScores" value="Average " style="border:none;"/>
                    <input class="btn-default p-2 z-depth-1" type="button" id="maxScores" value="Maximum " style="border:none;"/>
                    <input class="btn-default p-2 z-depth-1" type="button" id="editScores" value="Edit " style="border:none;"/>
                </div>
                <br>
                <p class="container py-3" id="infoparagraph">
                <span class="badge badge-warning " ><i class="fas fa-bell"></i></span>
        
                <?php if ($_SESSION['lang']=='gr'){ ?>
                    <i>Για να τροποποιήσετε τις τιμές του μοντέλου(Average,Maximum) πατήστε Edit  και κάντε κλικ στο σκορ που θέλετε να επεξεργαστείτε και πατήστε Edit . Σε κάθε περίπτωση πατήστε Αποθήκευση για αποθήκευση των σκορ με ελάχιστη τιμή το 0 και μέγιστη το 100.</i>   
                <?php }else{?>
                    <i>To modify the values (Average, Maximum) press Edit and click on the score you want to edit and press Edit . Click Save to save the scores with a minimum value of 0 and a maximum of 100.</i>   
                <?php } ?>
                
        
                </p>

                <br>
           
        
                <button class="btn myblue1 text-light mybtn" onclick="showInfo()" >
                <?php if ($_SESSION['lang']=='en'){
                    echo 'More Info';
                    }else 
                    echo 'Περισσότερες πληροφορίες'    
                ?>
                <i class="fas fa-angle-double-down animated flash infinite slow" style="color:#fff;"></i>
                </button>

                <div class='py-4 animated fadeIn slower' id="moreInfo" style="display:none !important;">
                    
                    <h3 class="font-weight-bold">Universal Sentence Encoder</h3>
                    <div class="description">
                    
                    <?php 
                        if ($_SESSION['lang']=='gr'){
                                                        
                            echo 'Η εφαρμογή χρησιμοποιεί τον <a class = "font-weight-bold" target = "_ blank" href = "https://arxiv.org/pdf/1803.11175.pdf" > Universal Sentence Encoder (USE)</a>, ο οποίος αναπτύχθηκε από την ομάδα έρευνας της Google, και τον χρησιμοποιούμε για την αντιστοίχιση των μαθησιακών αποτελεσμάτων με τα αποτελέσματα του ΑΒΕΤ κριτηρίου 3 προτείνοντας κάποια σκορ ενίσχυσης. Συγκεκριμένα o USE χρησιμοποιείται για την εξαγωγή του σκορ σημασιολογικής ομοιότητας των μαθησιακών αποτελεσμάτων του διδάσκοντα και των μαθησιακών αποτελεσμάτων του φορέα ΑΒΕΤ. ';
                            echo 'Οι τιμές που εμφανίζονται με 0 προέκυψαν σύμφωνα με τον παρακάτω αναθεωρημένο πίνακα που παρουσιάστηκε από τους  <a class="font-weight-bold" target="_blank" href="https://ieeexplore.ieee.org/document/7474677">(Sayyad Zahid Qamar et al., 2016 )</a>. Συγκεκριμένα συσχετίζονται τα 
                            <a class = "font-weight-bold" target = "_ blank" href = "https://cft.vanderbilt.edu/guides-sub-pages/blooms-taxonomy/" > επιπεδα του Βloom </a>
                            με τα μαθησιακά αποτελέσματα, έτσι ανάλογα το επίπεδο του ρήματος ενεργητικής διάθεσης στην αρχή της πρότασης λαμβάνουμε υπόψιν μας τον παρακάτω πίνακα συμπληρώνοντας όπου Χ τα σκορ όπως εξάγονται απο τον USE και 0 στα υπόλοιπα.';

                        }else{
                      
                            echo 'The application uses <a class = "font-weight-bold" target = "_ blank" href = "https://arxiv.org/pdf/1803.11175.pdf"> Universal Sentence Encoder </a>, which was developed by the Google research team, and we use it to match learning outcomes with the results of ABET criterion 3 by suggesting reinforcement score. Specifically, USE is used to derive the semantic similarity score of learning outomes of the teacher and the learning outcomes of the ABET. 
        
                            The values ​​displayed with 0 were extracted according to the following revised table presented by <a class="font-weight-bold" target="_blank" href="https://ieeexplore.ieee.org/document/7474677">(Sayyad Zahid Qamar et al., 2016 )</a>.



                            In particular, 
                            <a class = "font-weight-bold" target = "_ blank" href = "https://cft.vanderbilt.edu/guides-sub-pages/blooms-taxonomy/" > the levels of Bloom  </a>
                            are correlated with the learning outcomes, so depending the level of the verb at the beginning of the sentence, we take into account the following table. So, in X positions we add the scores from the Universal Sentence Encoder and 0 to the others.
                            ';
                            
                        }?>

                        <div class="text-left">
                            <?php
                                if ($_SESSION['lang']=='gr'){
                                    echo '<br>Ακολουθεί ο νέος <a class="font-weight-bold" target="_blank" href="https://www.abet.org/wp-content/uploads/2018/03/C3_C5_mapping_SEC_1-13-2018.pdf">αναθεωρημένος</a> πίνακας συσχέτισης των επιπέδων του Βloom με τα μαθησιακά αποτελέσματα:<br>';
                                }else {
                                    echo '<br>Follows the new <a class = "font-weight-bold" target = "_ blank" href = "https://www.abet.org/wp-content/uploads/2018/03/C3_C5_mapping_SEC_1-13-2018.pdf" > revised </a> table of correlation of Bloom\'s levels with learning outcomes:<br>';

                                }
                            ?>
                            </div>
                            
                            <br>
                            <div class="table-wrapper table-responsive px-5">
                                <table class="table table-hover mb-0 your-custom-styles btn-table" >
                                <thead>
                                <tr>
                                    <th class="text-center" rowspan="2"><?php echo t_abet_learning_outcomes;?></th>
                                    <th class="text-center" colspan="6">
                                    <?php if ($_SESSION['lang']=='gr'){
                                        echo 'Επίπεδα ταξινομίας Bloom ';
                                    }else{
                                        echo 'Bloom’s taxonomy level/category';
                                    }?>
                                    </th>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                    <?php if ($_SESSION['lang']=='gr'){
                                        echo 'Γνώση';
                                    }else{
                                        echo 'Remembering/<br>Knowledge';
                                    }?>
                                    </td>
                                    <td class="text-center">
                                    <?php if ($_SESSION['lang']=='gr'){
                                        echo 'Κατανόηση';
                                    }else{
                                        echo 'Understanding/<br>Comprehension';
                                    }?>
                                    </td>
                                    <td class="text-center">
                                    <?php if ($_SESSION['lang']=='gr'){
                                        echo 'Εφαρμογή';
                                    }else{
                                        echo 'Application';
                                    }?>
                                    </td>
                                    <td class="text-center">
                                    <?php if ($_SESSION['lang']=='gr'){
                                        echo 'Ανάλυση';
                                    }else{
                                        echo 'Analysis';
                                    }?>
                                    </td>
                                    <td class="text-center">
                                    <?php if ($_SESSION['lang']=='gr'){
                                        echo 'Αξιολόγηση';
                                    }else{
                                        echo 'Evaluation';
                                    }?>
                                    </td>
                                    <td class="text-center">
                                    <?php if ($_SESSION['lang']=='gr'){
                                        echo 'Σύνθεση';
                                    }else{
                                        echo 'Creation/<br>Synthesis';
                                    }?>
                                    </td>
                                
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-center">(1)</td>
                                    <td class="text-center">X</td>
                                    <td class="text-center">X</td>
                                    <td class="text-center">X</td>
                                    <td class="text-center">X</td>
                                    <td class="text-center">X</td>
                                    <td class="text-center"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">(2) </td>
                                    <td class="text-center">X</td>
                                    <td class="text-center">X</td>
                                    <td class="text-center">X</td>
                                    <td class="text-center">X</td>
                                    <td class="text-center">X</td>
                                    <td class="text-center">X</td>
                                </tr>
                                <tr>
                                    <td class="text-center">(3) </td>
                                    <td class="text-center"></td>
                                    <td class="text-center">X</td>
                                    <td class="text-center">X</td>
                                    <td class="text-center">X</td>
                                    <td class="text-center">X</td>
                                    <td class="text-center">X</td>
                                </tr>
                                <tr>
                                    <td class="text-center">(4)</td>
                                    <td class="text-center">X</td>
                                    <td class="text-center">X</td>
                                    <td class="text-center">X</td>
                                    <td class="text-center">X</td>
                                    <td class="text-center">X</td>
                                    <td class="text-center"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">(5) </td>
                                    <td class="text-center">X</td>
                                    <td class="text-center">X</td>
                                    <td class="text-center">X</td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">(6) </td>
                                    <td class="text-center">X</td>
                                    <td class="text-center">X</td>
                                    <td class="text-center">X</td>
                                    <td class="text-center">X</td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                </tr>
                                <tr>
                                    <td class="text-center">(7)</td>
                                    <td class="text-center">X</td>
                                    <td class="text-center">X</td>
                                    <td class="text-center">X</td>
                                    <td class="text-center">X</td>
                                    <td class="text-center"></td>
                                    <td class="text-center"></td>
                                </tr>
                                </tbody>
                                </table>
                            </div>
                            <br>
                            <br>
                            <br>
                            
                           
                        <?php if ($_SESSION['lang']=='en'){ ?>
                            <!-- This demo is taken from the <a target="_blank" href="https://colab.sandbox.google.com/github/tensorflow/hub/blob/master/examples/colab/semantic_similarity_with_tf_hub_universal_encoder_lite.ipynb#scrollTo=_GSCW5QIBKVe">TensorFlow Hub Universal Sentence Encoder lite colab</a>.  -->
                            <!-- It shows the model's ability to group sentences by semantic similarity usings their embeddings.  -->
                        
                            The matrix on the right shows self-similarity scores (dot products) between the embeddings for the sentences on the left (<u>Text with bold font presents  <a class="font-weight-bold" target="_blank" href="https://www.abet.org/accreditation/accreditation-criteria/criteria-for-accrediting-engineering-programs-2020-2021/">ABET</a> outcomes and with normal font Course Learning Outcomes</u>). 
                            The redder the cell, the higher the similarity score. (<a target="_blank" href="https://github.com/tensorflow/tfjs-models/tree/master/universal-sentence-encoder">TensorFlow Hub Universal Sentence Encoder lite colab</a>)
                            
                        <?php }else if ($_SESSION['lang']=='gr'){ 
                            echo 'Ο παρακάτω πίνακας στα δεξιά δείχνει βαθμολογίες ομοιότητας μεταξύ των προτάσεων που βρίσκονται στα αριστερά του (το κείμενο με έντονη γραμματοσειρά παρουσιάζει τα αποτελέσματα <a class="font-weight-bold" target="_blank" href="https://www.abet.org/accreditation/accreditation-criteria/criteria-for-accrediting-engineering-programs-2020-2021/">ABET</a> και με κανονική γραμματοσειρά τα Μαθησιακά Αποτελέσματα Μαθήματος). Όσο πιο πράσινο το κελί, τόσο υψηλότερη είναι η βαθμολογία ομοιότητας.
                            (<a target="_blank" href="https://github.com/tensorflow/tfjs-models/tree/master/universal-sentence-encoder">TensorFlow Hub Universal Sentence Encoder lite colab</a>)';
                        }?>
                    
                    </div>
                        <br>
                        <br>
                    
                        <!-- <div id="loading" >
                            Loading the model...
                            <div class="spinner-border text-primary" role="status">
                                <span class="sr-only"> </span>
                            </div> 
                        </div> -->
                        <?php if ($Version == 2){ ?> 
                        
                        <!-- <div class="mb-5 "> -->
                            <div id="version2_sentenses" class="animated fadeIn" style="display:none;"></div>
                        <!-- </div> -->
                        
                    <?php } ?> 
                        <div id="container">
                        <!-- <div class="d-flex flex-column py-5"> -->
                            <?php if ($Version == 2){ ?>
                                <div id="sentences-container"></div>      
                            <?php }else if ($Version == 1) {?>
                                <div id="sentences-container1"></div>  
                            <?php } ?>
                            <div id="self-similarity-matrix" >
                                <div class="labels y-axis"></div>
                                <div class="labels x-axis"></div>
                                <canvas ></canvas>
                            </div>
                        
                        </div>
                        <br />
                    

                        <div style="padding:30px;display:none">
                            <?php 
                            if ($_SESSION['lang']=='gr'){
                                foreach ($CourseOutcome as  $Id => $row ){ ?>
                                    <div class="grOutcomes">
                                        <?php   echo $row['Verbs'].' '.$row['Sentence'] . '<br>';?>
                                    </div> 
                                
                            <?php  
                                }
                            }
                            foreach ($CourseOutcome as  $Id => $row ){ 
                            ?>
                                <div class="verbClassification">
                                    <?php   echo $row['Classification'].'<br>';?>
                                </div> 
                            <?php } ?>
                        </div>
                    
                
                    <br>
                <!-- End py -4 -->
                </div>
                <br>
                <br>
                <br>
                <div class="text-center animated pulse infinite">
                    <a class="btn btn-teal text-light rounded-pill font-weight-bold mybtn " data-toggle="modal" data-target="#saveAbet">
                        <?php  echo t_save; ?>
                    </a>
                    <br>
                </div>
            <?php } ?>
        <?php }else{ ?>
            <div class=" text-center danger-color p-2 text-white container " >
            <?php if ($_SESSION['lang']=='gr'){
                echo '<i class="fas fa-exclamation-triangle fa-4x mb-3 animated rotateIn"></i><h4>Παρακαλώ εισάγετε πρώτα τα μαθησιακά αποτελέσματα και επιστρέψτε.</h4>';
            }else{
                echo '<i class="fas fa-exclamation-triangle fa-4x mb-3 animated rotateIn"></i><h4>Please insert student outcomes first and return back.</h4>';
            } ?>
            </div>
        <?php }?>
        <!-- </form> -->
        <!--End id version 1  -->
        <!-- </div>  -->
    <!-- End container-fluid -->
    </div>
<!-- End px-5 px-6  -->
</div>
<br><br>
<?php if ($Version==1) {
    $k=0;
}?>
   
<form  method="POST" action="<?php echo URL . 'ProfessorController/SaveAbetOutcomes?Version='.$Version.'&NumOfSkills='.$k?>" name="saveAbet">
<input type="hidden" name="CourseId" value="<?php echo $Course['Id'];?>" /> 
    <div class="modal animated zoomIn"  id="saveAbet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"aria-hidden="true">
        <div class="modal-dialog modal-fluid px-5"  role="document">
            <div class="modal-content" >
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLabel"><img src="<?php echo URL; ?>/public/img/logo.png" alt="Logo" height="30" width="50"> <?php echo t_save ;?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div >
                        
                        <div class="py-3 text-center ">
                            <i class="fas fa-save fa-4x mb-3 animated rotateIn "></i>
                            <h5>
                            <?php if ($_SESSION['lang']=='en'){ 
                                echo 'Are you sure you want to save the scores?';    
                            } else if ($_SESSION['lang']=='gr'){
                                echo 'Είστε σιγουροι ότι θέλετε να αποθηκεύσετε τα σκόρ;';    
                            } ?>
                            </h5>
                        </div>
                        <!-- <div style="display:none;"> -->
                        <div>
                            <div class="table-wrapper table-responsive">
                                <table class="table table-hover mb-0  btn-table" id="finalAbet">                 
                                    <thead >  
                                        <!-- <th class="th-lg font-weight-bold">
                                            < ? php echo '#'; ?>
                                            
                                        </th> -->
                                        <th class="font-weight-bold">
                                            
                                        </th>
                                        <th class="font-weight-bold">
                                            1
                                        </th>
                                        <th class="font-weight-bold">
                                            2
                                        </th>
                                        <th class="font-weight-bold">
                                            3
                                        </th>
                                        <th class="font-weight-bold">
                                            4
                                        </th>
                                        <th class="font-weight-bold">
                                            5
                                        </th>
                                        <th class="font-weight-bold">
                                            6
                                        </th>
                                        <th class="font-weight-bold">
                                            7
                                        </th>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $p=0;
                                        $j=1;
                                        foreach ($TranslatedOutcomes as $Id => $row ){ 
                                            
                                    
                                           
                                            ?>

                                            
                                            <!-- <input type="hidden" name="OutcomeId[]" value="< ?php echo $row['OutcomeId'];?>" />  -->
                                            <input class="disabled" name="OutcomeId[]" type="hidden" value="<?php echo $row['OutcomeId'] ?>" id="outcome<?php echo $j?>">
                                            <tr style="display:none;" >

                                            <td> <?php echo $row['Outcome']; ?></td>
                                                    <!-- <td> < ?php echo $row['OutcomeId']; ?></td> -->
                                                    <!-- <td> < ?php echo $row['AbetId']; ?></td> -->
                                                    
                                                
                                                    <td>
                                                        <input class="disabled" name="abet[]" type="text" value="<?php echo $row['OutcomeId'] ?>" id="abet<?php echo $p?>">
                                                        <label for="abet[]">&nbsp;</label>
                                    
                                                    </td> 
                                                    <?php $p++; ?>
                                                    <td>
                                                        <input class="disabled" name="abet[]" type="text" value="<?php echo $row['OutcomeId'] ?>" id="abet<?php echo $p?>">
                                                        <label for="abet[]">&nbsp;</label>
                                                    </td> 
                                                    <?php $p++; ?>
                                                    <td>
                                                        <input class="disabled" name="abet[]" type="text" value="<?php echo $row['OutcomeId'] ?>" id="abet<?php echo $p?>">
                                                        <label for="abet[]">&nbsp;</label>
                                                    </td> 
                                                    <?php $p++; ?>
                                                    <td>
                                                        <input class="disabled" name="abet[]" type="text" value="<?php echo $row['OutcomeId'] ?>" id="abet<?php echo $p;?>">
                                                        <label for="abet[]">&nbsp;</label>
                                                    </td> 
                                                    <?php $p++; ?>
                                                    <td>
                                                        <input class="disabled" name="abet[]" type="text" value="<?php echo $row['OutcomeId'] ?>" id="abet<?php echo $p;?>">
                                                        <label for="abet[]">&nbsp;</label>
                                                    </td> 
                                                    <?php $p++; ?>
                                                    <td>
                                                        <input class="disabled" name="abet[]" type="text" value="<?php echo $row['OutcomeId'] ?>" id="abet<?php echo $p;?>">
                                                        <label for="abet[]">&nbsp;</label>
                                                    </td> 
                                                    <?php $p++; ?>
                                                    <td>
                                                        <input class="disabled" name="abet[]" type="text" value="<?php echo $row['OutcomeId'] ?>" id="abet<?php echo $p;?>">
                                                        <label for="abet[]">&nbsp;</label>
                                                    </td>  
                                                
                                                
                                            </tr>
                                            <?php $p++;
                                            
                                        } ?>
                                            
                                            <?php 
                                            if ($Version == 2){
                                            $n=0;
                                                for($k1=0;$k1<count($CourseSkills);$k1++){
                                                    ?>
                                                    <tr style="display:none;">
                                                    
                                                        <td><?php echo $skills_gr[$n];?></td>
                                                    
                                                        <td>
                                                            <input class="disabled" name="abet[]" type="text" value="<?php echo count($CourseSkills)+$k1 ?>" id="abet<?php echo $p?>">
                                                            <label for="abet[]">&nbsp;</label>
                                        
                                                        </td> 
                                                        <?php $p++; ?>
                                                        <td>
                                                            <input class="disabled" name="abet[]" type="text" value="<?php echo count($CourseSkills)+$k1 ?>" id="abet<?php echo $p?>">
                                                            <label for="abet[]">&nbsp;</label>
                                                        </td> 
                                                        <?php $p++; ?>
                                                        <td>
                                                            <input class="disabled" name="abet[]" type="text" value="<?php echo count($CourseSkills)+$k1 ?>" id="abet<?php echo $p?>">
                                                            <label for="abet[]">&nbsp;</label>
                                                        </td> 
                                                        <?php $p++; ?>
                                                        <td>
                                                            <input class="disabled" name="abet[]" type="text" value="<?php echo count($CourseSkills)+$k1 ?>" id="abet<?php echo $p;?>">
                                                            <label for="abet[]">&nbsp;</label>
                                                        </td> 
                                                        <?php $p++; ?>
                                                        <td>
                                                            <input class="disabled" name="abet[]" type="text" value="<?php echo count($CourseSkills)+$k1 ?>" id="abet<?php echo $p;?>">
                                                            <label for="abet[]">&nbsp;</label>
                                                        </td> 
                                                        <?php $p++; ?>
                                                        <td>
                                                            <input class="disabled" name="abet[]" type="text" value="<?php echo count($CourseSkills)+$k1 ?>" id="abet<?php echo $p;?>">
                                                            <label for="abet[]">&nbsp;</label>
                                                        </td> 
                                                        <?php $p++; ?>
                                                        <td>
                                                            <input class="disabled" name="abet[]" type="text" value="<?php echo count($CourseSkills)+$k1 ?>" id="abet<?php echo $p;?>">
                                                            <label for="abet[]">&nbsp;</label>
                                                        </td>  
                                                    </tr>
                                                
                                                <?php  $p++; $n++; } 
                                            
                                            }?>
                                            <tr>
                                                <td id="total1">Total</td>
                                                <td>
                                                    <input class="disabled "  type="text" name="total[]" id="total2" value="0">
                                                    <label for="total[]">&nbsp;</label>
                                                </td>
                                                <td>
                                                    <input class="disabled" type="text" name="total[]" id="total3" value="0">
                                                    <label for="total[]">&nbsp;</label>
                                                </td>
                                                    <td><input class="disabled" type="text" name="total[]" id="total4" value="0">
                                                    <label for="total[]">&nbsp;</label>
                                                </td>
                                                    <td><input class="disabled" type="text" name="total[]" id="total5" value="0">
                                                    <label for="total[]">&nbsp;</label>
                                                </td>
                                                    <td><input class="disabled" type="text" name="total[]" id="total6" value="0">
                                                    <label for="total[]">&nbsp;</label>
                                                </td>
                                                    <td><input class="disabled" type="text" name="total[]" id="total7" value="0">
                                                    <label for="total[]">&nbsp;</label>
                                                </td>
                                                    <td><input class="disabled" type="text" name="total[]" id="total8" value="0">
                                                    <label for="total[]">&nbsp;</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td id="total1">Total1</td>
                                                <td>
                                                    <input class="disabled"  type="text" name="total[]" id="total9" value="0">
                                                    <label for="total[]">&nbsp;</label>
                                                </td>
                                                <td>
                                                    <input class="disabled" type="text" name="total[]" id="total10" value="0">
                                                    <label for="total[]">&nbsp;</label>
                                                </td>
                                                    <td><input class="disabled" type="text" name="total[]" id="total11" value="0">
                                                    <label for="total[]">&nbsp;</label>
                                                </td>
                                                    <td><input class="disabled" type="text" name="total[]" id="total12" value="0">
                                                    <label for="total[]">&nbsp;</label>
                                                </td>
                                                    <td><input class="disabled" type="text" name="total[]" id="total13" value="0">
                                                    <label for="total[]">&nbsp;</label>
                                                </td>
                                                    <td><input class="disabled" type="text" name="total[]" id="total14" value="0">
                                                    <label for="total[]">&nbsp;</label>
                                                </td>
                                                    <td><input class="disabled" type="text" name="total[]" id="total15" value="0">
                                                    <label for="total[]">&nbsp;</label>
                                                </td>
                                            </tr>
                                        
                                    </tbody>
                                </table>
                                <?php
                                    echo 'Total : '. t_learning_outcomes . '<br>Total1 : '.t_general_capabilities;
                                ?>
                            </div>
                        <!-- End style display none -->
                        </div>

                    </div>
                </div>
                <div style="display:none;">
                <?php 
                $s=0;
                foreach ($skills as $Id => $row ){ ?>
                                    <?php if(in_array($row['Description'], $CourseSkills)){?>
                                    
                                        <tr>
                                            <td>
                                                <!-- < ?php echo $row['SkillsId'] ;?> -->
                                                <input  type="hidden" name="skills[]" class="skill_list disabled" value="<?php echo $row['Id']; ?> " id="skill__<?php echo $s;?>" ><?php echo $row['Description'] ;?></input>
                                                <?php $skills_gr[$s]=$row['Description'] ?>
                                                <!-- <label for="skill_< ? php echo $Id; ?>">< ?php echo $row['Description'] ;?> </label>  -->
                                            </td>
                                            <!-- <td>                            
                                                < ?php echo $row_['AbetId'] ?>                                   
                                            </td> -->
                                        </tr>
                                    <?php 
                                    $s++;
                                        }
                                           
                                    
                                } ?>
                </div>
                <div class="modal-footer py-5">
                    <button type="button" class="btn btn-light" data-dismiss="modal"><?php echo t_close;?></button>
                    
                    <button type="submit" class="btn btn-teal text-light font-weight-bold" >
                        <?php echo 'OK'; ?> 
                    </button>
            
                </div>
            </div>
        </div>
    </div>
</form>