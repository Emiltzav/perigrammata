<?php

class ProfessorController extends Controller{
    
    
// start

    public function LearningOutcomesAbet2(){

        $Course = $this->CourseModel->getCourse($_GET['CourseId']);
        $CourseOutcome = $this->CourseModel->getCourseOutcomes($_GET['CourseId']);
        $TranslatedOutcomes = $this->CourseModel->getCourseAbetOutcomesWithoutSkills($_GET['CourseId']);
        $CoursePercent = $this->CourseModel->getDocumentedCoursePer($_GET['CourseId']);

        $skills = $this->CourseModel->getSkills($Course['LangId']);
        $CourseSkills = $this->CourseModel->getCourseSkills($_GET['CourseId']);
        $CourseSkills_1 = $this->CourseModel->getCourseSkills1($_GET['CourseId']);

        $checkSkill= $this->CourseModel->checkSkill($_GET['CourseId']);
        
        $CoursePercent = $this->CourseModel->getDocumentedCoursePer($_GET['CourseId']);
        $CourseEnOutcomes = $this->CourseModel->getEnOutcomes2();
        $CourseElOutcomes = $this->CourseModel->getAllOutcomes();
        
        $LangId = $Course['LangId'];
        $Version = 2;
    
        require APP . 'views/templates/header.php';
        require APP . 'views/ProfessorPage/AbetCriterion1.php';
        require APP . 'views/templates/footer.php';
    }
    

    public function  WriteENOutcomes()
    {
    
        $courses_ = $this->CourseModel->getCourses();
        $activeCoursesPercent=$this->CourseModel->getActiveCoursesPercent();
        $activeCoursesList=$this->CourseModel->getActiveCoursesList();
        // $CourseOutcome = $this->CourseModel->getCourseOutcomes($_GET['CourseId']);


        $CourseAllOutcomes = $this->CourseModel->getAllOutcomes();
        $CourseEnOutcomes = $this->CourseModel->getEnOutcomes2();
        $CourseElOutcomes = $this->CourseModel->getAllOutcomes();

        $myarr=array();
        $flag=-1;
        if (isset($_POST['submit'])){
            // El Courses
            if(isset($_POST['abetEN']) && isset($_POST['OutcomeId']) && isset($_POST['CourseId'])){
                $abetEN = $_POST['abetEN'];
                $outcomeId = $_POST['OutcomeId']; 
                $courseId = $_POST['CourseId'];
            
                for($j=0;$j<count($abetEN);$j++){
                //   echo 'CourseId = '.$courseId[$j].', OutcomeId = ' .$outcomeId[$j] . ', '.$abetEN[$j] . '<br>';
                    $myarr[$j] = $this->CourseModel->AddAbetOutcome($courseId[$j],$outcomeId[$j],$abetEN[$j]);
                    // $this->CourseModel->AddAbetOutcome($courseId[$j],99,'Total');
                }
            }
            // En Courses
            if(isset($_POST['abetEN2']) && isset($_POST['OutcomeId2']) && isset($_POST['CourseId2'])){
                $abetEN2 = $_POST['abetEN2'];
                $outcomeId2 = $_POST['OutcomeId2']; 
                $courseId2 = $_POST['CourseId2'];
            
                for($l=0;$l<count($abetEN2);$l++){
                    //    echo 'CourseId = '.$courseId2[$l].', OutcomeId = ' .$outcomeId2[$l] . ', '.$abetEN2[$l] . '<br>';
                   
                    $myarr[$l] = $this->CourseModel->AddAbetOutcome($courseId2[$l],$outcomeId2[$l],$abetEN2[$l]);
                    // $this->CourseModel->AddAbetOutcome($courseId2[$l],99,'Total');
                }
               
            }
        }

        $_SESSION['g_message'] = 'Success ';
        
        header('location: ' . URL . 'ProfessorController/LearningOutcomesAbet2?CourseId='.$_GET['CourseId']);
        // require APP . 'views/templates/header.php';
        // require APP . 'views/ProfessorPage/AbetCriterion1.php';
        // require APP . 'views/templates/footer.php';    
    }


    public function SaveAbetOutcomes(){
        $CourseId = $_POST['CourseId'];

        // $_SESSION['g_message'] = 'Success'; 
        $Course = $this->CourseModel->getCourse($CourseId);
        $CourseOutcome = $this->CourseModel->getCourseOutcomes($CourseId);
        $TranslatedOutcomes = $this->CourseModel->getCourseAbetOutcomesWithoutSkills($CourseId);
        $CoursePercent = $this->CourseModel->getDocumentedCoursePer($CourseId);
    
        $skills = $this->CourseModel->getSkills($Course['LangId']);
        $CourseSkills = $this->CourseModel->getCourseSkills($CourseId);
        $activeCoursesPercent=$this->CourseModel->getActiveCoursesPercent();
        $activeCoursesList=$this->CourseModel->getActiveCoursesList();
        // $CourseOutcome = $this->CourseModel->getCourseOutcomes($_GET['CourseId']);

        
        $CourseAllOutcomes = $this->CourseModel->getAllOutcomes();
        $CourseEnOutcomes = $this->CourseModel->getEnOutcomes2();
        $CourseElOutcomes = $this->CourseModel->getAllOutcomes();

        $Version = $_GET['Version'];
        // $NumOfSkills =$_GET['NumOfSkills'];
        if (isset($_GET['NumOfSkills'])){
            $NumOfSkills = $_GET['NumOfSkills'];
        }

       

        if (isset($_POST['abet']) && isset($_POST['total'])){
            $abetId=$_POST['abet'];
            $abetTotal=$_POST['total'];

            $skills=array();
            if (isset($_POST['skills'])){
                $skills=$_POST['skills'];
            }
           
            // echo count($abetId);
            // $OutcomeId=$_POST['OutcomeId'];
        
            $outc = -1;
            $str='';
            $l=0;
            $p=0;
            $flag=0;
            $m=0;
            $y=0;
            $numOfZeros=0;
            $abet_arrayy=array();
            $outcome_array=array();
            
            //We send from AbetCriterion1.php abetId_outcomeId (4_6,..)
            for($i=0;$i<count($abetId);$i++){
                
                //Copy everything before _ , we take abetId
                $AbetId = strstr($abetId[$i], '_', true); 
                
                //Copy everything after _ , we take outcomeId
                $outcomeId = substr($abetId[$i], strpos($abetId[$i], "_") + 1);             
                
                if (strpos($AbetId, '!') !== false) {
                    $abet_arrayy[$l]= 0;
                    $numOfZeros++;
                } else{
                    $abet_arrayy[$l]= $AbetId;
                }
                
                $outcome_array[$l]=$outcomeId;
                $l++;
                
            }

            // check if a learning outcome has score 0 for all criteria
            // echo count($abet_arrayy)/7;
            
            // for($i=0;$i<count($abet_arrayy)/7;$i++){
            //     if($abet_arrayy[$y+0]==0 && $abet_arrayy[1+$y]==0 && $abet_arrayy[$y+2]==0 && 
            //     $abet_arrayy[$y+3]==0 && $abet_arrayy[$y+4]==0 && $abet_arrayy[$y+5]==0 && $abet_arrayy[$y+6]==0){
            //         $flag=1;
            //         break;
            //     }
            //     $y=$y+7;
            // }

            for($i=0;$i<count($abetTotal);$i++){
                $abetTotal[$i] = number_format((+$abetTotal[$i]/100),2);
                if (+$abetTotal[$i]>1){
                    $flag = 1;
                }
            }
            // echo $abetTotal[0].' '. $abetTotal[1].' '.$abetTotal[2].' '.$abetTotal[3].' '.$abetTotal[4].' '.$abetTotal[5].' '.$abetTotal[6];
        
            if( $numOfZeros==count($abetId) || ($flag == 1) || (+$abetTotal[0]==0 && +$abetTotal[1]==0 && +$abetTotal[2]==0 && +$abetTotal[3]==0 && +$abetTotal[4]==0 && +$abetTotal[5]==0 && +$abetTotal[6]==0) ){
                $_SESSION['g_message'] = 'Something get wrong!! ';
            }else{
                // Delete Previous Learning outcomes from skills
                $k=0;
                $this->CourseModel->deleteAbetOutcomeSkillsByCourse($CourseId);

                for($i=0;$i<count($abet_arrayy);$i=$i+7){
                    for($j=0;$j<count($outcome_array);$j++){
                    
                        if($i==$j){


                            // General skills insert
                            if($i>=count($TranslatedOutcomes)*7){
                                $str= $this->CourseModel->getSkill_($skills[$p])['Description'] ;
                                
                                $p++;
                                $this->CourseModel->AddAbetOutcomeFromSkill($CourseId,$outcome_array[count($outcome_array)-1]+$p,'_'.$str,$abet_arrayy[$i], $abet_arrayy[$i+1],$abet_arrayy[$i+2],$abet_arrayy[$i+3],$abet_arrayy[$i+4],$abet_arrayy[$i+5],$abet_arrayy[$i+6]);

                                // echo 'CourseId = '.$CourseId .' ,'.$str .' Outcome Id = '.$outcome_array[$i].' Score = '.$abet_arrayy[$i].' '. $abet_arrayy[$i+1].' '.$abet_arrayy[$i+2].' '.$abet_arrayy[$i+3].' '.$abet_arrayy[$i+4].' '.$abet_arrayy[$i+5].' '.$abet_arrayy[$i+6] .'<br>';
                                
                            }else{
                                if ($Version==2){
                                $this->CourseModel->UpdateAbetOutcome($CourseId,$outcome_array[$j],$abet_arrayy[$i],$abet_arrayy[$i+1],$abet_arrayy[$i+2],$abet_arrayy[$i+3],$abet_arrayy[$i+4],$abet_arrayy[$i+5],$abet_arrayy[$i+6]); 
                          
                                }
                            }

                            
                                    
                        }
                    }
                }
                $this->CourseModel->AddAbetOutcomeFromSkill($CourseId,99,'Total',+$abetTotal[0],+$abetTotal[1],+$abetTotal[2],+$abetTotal[3],+$abetTotal[4],+$abetTotal[5],+$abetTotal[6]);
                $this->CourseModel->AddAbetOutcomeFromSkill($CourseId,100,'Total1',+$abetTotal[7],+$abetTotal[8],+$abetTotal[9],+$abetTotal[10],+$abetTotal[11],+$abetTotal[12],+$abetTotal[13]);

            }
    
        }

        header('location: ' . URL . 'ProfessorController/LearningOutcomesAbet2?CourseId='.$CourseId);  
    }
// end






    public function EditLearningOutcomes()
    {
        
        $Course = $this->CourseModel->getCourse($_GET['CourseId']);
        
        $CourseType = $this->CourseModel->getCourseType($Course['LangId']);
        $RequiredCourses= $this->CourseModel->getRequiredCourses($_GET['CourseId']);
        
        $verbs = $this->CourseModel->getVerbs($Course['LangId']);
        $CourseVerbs = $this->CourseModel->getCourseVerbs($_GET['CourseId']);
        $skills = $this->CourseModel->getSkills($Course['LangId']);
        $CourseSkills = $this->CourseModel->getCourseSkills($_GET['CourseId']);
        
        $method = $this->CourseModel->getLectureMethod($Course['LangId']);
        
        $UseOfTechnologies = $this->CourseModel->getUseOfTechnologies($Course['LangId']);
        $CourseMethod = $this->CourseModel->getCourseMethod($_GET['CourseId']);
        $activities = $this->CourseModel->getActivities($Course['LangId']);
        $CourseActivities = $this->CourseModel->getCourseActivities($_GET['CourseId']);

        $Assessments = $this->CourseModel->getCategoriesAssessment($Course['LangId']);
        $bonus = $this->CourseModel->getBonus($Course['LangId']);
        $CourseAssessment = $this->CourseModel->getCourseAssessment($_GET['CourseId']);
        
        require APP . 'views/templates/header.php';
        require APP . 'views/ProfessorPage/EditLearningOutcomes.php';
        require APP . 'views/templates/footer.php';
    }

    public function fhtml(){

        $Course = $this->CourseModel->getCourse($_GET['CourseId']);
        
        $CourseType = $this->CourseModel->getCourseType($Course['LangId']);
        $RequiredCourses= $this->CourseModel->getRequiredCourses($_GET['CourseId']);
        $CourseOutcome = $this->CourseModel->getCourseOutcomes($_GET['CourseId']);
        $verbs = $this->CourseModel->getVerbs($Course['LangId']);
        $CourseVerbs = $this->CourseModel->getCourseVerbs($_GET['CourseId']);
        $skills = $this->CourseModel->getSkills($Course['LangId']);
        $CourseSkills = $this->CourseModel->getCourseSkills($_GET['CourseId']);
        
        $method = $this->CourseModel->getLectureMethod($Course['LangId']);
        
        $UseOfTechnologies = $this->CourseModel->getUseOfTechnologies($Course['LangId']);
        $CourseMethod = $this->CourseModel->getCourseMethod($_GET['CourseId']);
        $activities = $this->CourseModel->getActivities($Course['LangId']);
        $CourseActivities = $this->CourseModel->getCourseActivities($_GET['CourseId']);

        $Assessments = $this->CourseModel->getCategoriesAssessment($Course['LangId']);
        $bonus = $this->CourseModel->getBonus($Course['LangId']);
        $CourseAssessment = $this->CourseModel->getCourseAssessment($_GET['CourseId']);
        // $CourseAssessment1 = $this->CourseModel->getCourseAssessment1($_GET['CourseId']);
        require APP . 'views/templates/header.php';
        require APP . 'views/ProfessorPage/fhtml.php';
        require APP . 'views/templates/footer.php';
    }

    public function deleteCourseOutcome()
    {   
        $CourseId_selected = $_GET['CourseId'];
        // if we have an id of a verb that should be deleted
        if (isset($CourseId_selected)) {
            // do deleteVerb() in models/CourseModel.php
            $this->CourseModel->deleteCourse($CourseId_selected);
        }
        // where to go after verb has been deleted
        header('location: ' . URL . 'AdminController/AllCourses');      
    }


    public function getActivitySkill()
    {
       $Skills = $this->CourseModel->getActivitySkill($_POST["ActivityId"]);
       echo json_encode($Skills);
    }



    public function updateLearningOutcomes()
    {
        $_SESSION['g_message'] = '';
        
        if(isset($_POST['finish_creation']))
        {
                
                $_SESSION['updated'] = $_POST["CourseId"];
                $_POST["skills"] = isset( $_POST["skills"] ) ? $_POST["skills"] : array();
                
                $_POST["subcategories_1"] = isset( $_POST["subcategories_1"] ) ? $_POST["subcategories_1"] : array();
                $_POST["subcategories_2"] = isset( $_POST["subcategories_2"] ) ? $_POST["subcategories_2"] : array();
                $_POST["subcategories_3"] = isset( $_POST["subcategories_3"] ) ? $_POST["subcategories_3"] : array();
                $_POST["subcategories_4"] = isset( $_POST["subcategories_4"] ) ? $_POST["subcategories_4"] : array();
                // print_r(array_unique($_POST["Verbs"]));
  
                $flag = 0;
                $activeVerbs = 0;
                $uniqueVerbs = 0;
                $duplicate = false;

                // for ($i=0;$i<count($_POST["Verbs"]);$i++){
                   
                //     if ($_POST["Verbs"][$i]!=''){
                //         echo $_POST["Verbs"][$i].'('.$i.'<br>';
                //         $activeVerbs ++;
                //     }
            
                // }
                // for ($i=0;$i<$activeVerbs;$i++){
                //     for ($j=0;$j<$activeVerbs;$j++){
                //         if($_POST["Verbs"][$i]!=$_POST["Verbs"][$i] && $i!=$j){
                //             $uniqueVerbs++;
                //         }
                //     }
                // }
                $sentences = '';
                for ($i=0;$i<count($_POST["Verbs"]);$i++){
                   
                    if ( isset($_POST["Verbs"][$i]) && $_POST["Verbs"][$i]!=''){
                        for ($j=0;$j<count($_POST["Verbs"]);$j++){
                            if (isset($_POST["Verbs"][$i]) && isset($_POST["Verbs"][$j]) && $_POST["Verbs"][$i]==$_POST["Verbs"][$j] && $i!=$j){
                                $flag=1;
                                $sentences = $sentences.'<br>'.$_POST["Sentences"][$i];
                            }
                        }
                        echo $_POST["Verbs"][$i].'('.$i.'<br>';
                        $activeVerbs ++;
                    }
            
                }
                if($flag){
                     // Array has duplicates
                     $_SESSION['g_message'] = 'Error, the same verb cannot be used twice!';
                     $_SESSION['sentences'] = $sentences;
                }else{
                    $_SESSION['sentences'] = '';
                    //Array does not have duplicates
                    $this->CourseModel->updateLearningOutcomes($_POST["CourseId"],  $_POST["CourseType"], 
                        $_POST["CourseUrl"], $_POST["Verbs"],  $_POST["Sentences"],  $_POST["skills"],  
                        $_POST["Content"], $_POST["LectureMethod"], $_POST["UseOfTechnologies"], $_POST["TextA"],
                        $_POST["TextB"], $_POST["TextC"], $_POST["activities"], $_POST["Hours"], 
                        $_POST["totalHours"], $_POST["percentage"], $_POST["bonus"], $_POST["subcategories_1"],
                        $_POST["subcategories_2"], $_POST["subcategories_3"], $_POST["subcategories_4"],
                        $_POST["OrganizationComment"], $_POST["AssessmentComment"], $_POST["Bibliography"]);
                }

             
             
                
  //          }else{
  //              $_SESSION['g_message'] = "You have to complete the course type, content or lecture method";
  //          }

//            header('location: ' . URL . 'home');
             
            header('location: ' . URL . 'ProfessorController/EditLearningOutcomes?CourseId= '. $_POST["CourseId"] );
        } 

    }

}
