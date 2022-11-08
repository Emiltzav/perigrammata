<?php

class FpdfController extends Controller{

    

    public function fpdf()
    {
        require('tfpdf/tfpdf.php'); 
        

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
        

        $pdf = new tFPDF('P','mm','A4');

        $pdf->AddPage();
        $pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
        $pdf->AddFont('DejaVuB','','DejaVuSansCondensed-Bold.ttf',true);
        
        $pdf->SetFillColor(179,179,176);
        
        $pdf->SetFont('DejaVuB','',12);
        $pdf->Cell(190,8,t_course_description,0,1,'C');
        $pdf->SetFont('DejaVuB','',11);
        $pdf->Cell(200,7, t_general,0,1,'L');
        
        $pdf->SetFont('DejaVuB','',10);
        $pdf->Cell(60,6,t_school ,1,0,'R', true);
        $pdf->SetFont('DejaVu','',10);
        $pdf->Cell(130,6, $Course['SchoolName'] ,1,1);
        
        $pdf->SetFont('DejaVuB','',10);
        $pdf->Cell(60,6,t_department ,1,0,'R', true);
        $pdf->SetFont('DejaVu','',10);
        $pdf->Cell(130,6,$Course['DepartmentName'],1,1);

        $pdf->SetFont('DejaVuB','',10);
        $pdf->Cell(60,6,t_level ,1,0,'R', true);
        $pdf->SetFont('DejaVu','',10);
        $pdf->Cell(130,6,$Course['Education'],1,1);

        $pdf->SetFont('DejaVuB','',10);    
        $pdf->Cell(60,6,t_lesson_code ,1,0,'R', true);
        $pdf->SetFont('DejaVu','',10);
        $pdf->Cell(45,6,$Course['LessonCode'],1,0);
        $pdf->SetFont('DejaVuB','',10);        
        $pdf->Cell(50,6,t_semester,1,0,'R', true);
        $pdf->SetFont('DejaVu','',10);
        $pdf->Cell(35,6,$Course['Semester'],1,1);

        $pdf->SetFont('DejaVuB','',10);        
        $pdf->Cell(60,6,t_course_title ,1,0,'R', true);
        $pdf->SetFont('DejaVu','',10);
        $pdf->Cell(130,6,$Course['CourseTitle'],1,1);
        
        $pdf->SetFont('DejaVuB','',10);  
        $pdf->Cell(120,30, '' ,1,0,'C', true); 
        $pdf->Cell(40,30, '' ,1,0,'C', true);
        $pdf->Cell(30,30, '' ,1,1,'C', true);
        $y=56;
        if( $_SESSION['lang']=='gr' )
        {
            $pdf->SetXY(30, $y);
            $pdf->Write(5,t_teaching_activities);
            $y=$y+5;
            $pdf->SetFont('DejaVu','',8);

            $pdf->SetXY(12, $y);
            $pdf->Write(4,mb_substr( t_teaching_activities1, 0, 81, 'UTF-8'));
            $y=$y+4;
            $pdf->SetXY(12, $y);
            $pdf->Write(4,mb_substr( t_teaching_activities1, 82, 82, 'UTF-8'));
            $y=$y+4;
            $pdf->SetXY(12, $y);
            $pdf->Write(4,mb_substr( t_teaching_activities1, 164, 79, 'UTF-8'));
            $y=$y+4;
            $pdf->SetXY(12, $y);
            $pdf->Write(4,mb_substr( t_teaching_activities1, 243, 38, 'UTF-8'));
            $y=$y+4;
            $pdf->SetXY(12, $y);
            $pdf->Write(4,mb_substr( t_comment, 0, 83, 'UTF-8'));
            $y=$y+4;
            $pdf->SetXY(12, $y);
            $pdf->Write(4,mb_substr( t_comment, 84, 80, 'UTF-8'));
            $y=$y+4;

            $pdf->SetFont('DejaVuB','',10);

            $pdf->SetXY(136, $y-20);
            $pdf->Write(5,mb_substr( t_teaching_hours, 0, 12, 'UTF-8'));
            $pdf->SetXY(143, $y-15);
            $pdf->Write(5,mb_substr( t_teaching_hours, 12, 6, 'UTF-8'));
            $pdf->SetXY(137, $y-10);
            $pdf->Write(5,mb_substr( t_teaching_hours, 18, 15, 'UTF-8'));
            
            $pdf->SetXY(173, $y-18);
            $pdf->Write(5,mb_substr( t_credit_units, 0, 10, 'UTF-8'));
            $pdf->SetXY(173, $y-13);
            $pdf->Write(5,mb_substr( t_credit_units, 10, 10, 'UTF-8'));
        }
        else
        {
            $pdf->SetXY(45, $y);
            $pdf->Write(5,t_teaching_activities);
            $y=$y+5;
            $pdf->SetFont('DejaVu','',8);

            $pdf->SetXY(12, $y);
            $pdf->Write(4,mb_substr( t_teaching_activities1, 0, 82, 'UTF-8'));
            $y=$y+4;
            $pdf->SetXY(12, $y);
            $pdf->Write(4,mb_substr( t_teaching_activities1, 83, 87, 'UTF-8'));
            $y=$y+4;
            $pdf->SetXY(12, $y);
            $pdf->Write(4,mb_substr( t_teaching_activities1, 170, 79, 'UTF-8'));
            $y=$y+4;
            $pdf->SetXY(12, $y);
            $pdf->Write(4,mb_substr( '', 243, 38, 'UTF-8'));
            $y=$y+4;
            $pdf->SetXY(12, $y);
            $pdf->Write(4,mb_substr( t_comment, 0, 83, 'UTF-8'));
            $y=$y+4;
            $pdf->SetXY(12, $y);
            $pdf->Write(4,mb_substr( '', 84, 80, 'UTF-8'));
            $y=$y+4;

            $pdf->SetFont('DejaVuB','',10);

            $pdf->SetXY(142, $y-23);
            $pdf->Write(5,mb_substr( t_teaching_hours, 0, 6, 'UTF-8'));
            $pdf->SetXY(139, $y-18);
            $pdf->Write(5,mb_substr( t_teaching_hours, 6, 10, 'UTF-8'));
            $pdf->SetXY(143, $y-13);
            $pdf->Write(5,mb_substr( t_teaching_hours, 16, 10, 'UTF-8'));
            
            $pdf->SetXY(177, $y-18);
            $pdf->Write(5,mb_substr( t_credit_units, 0, 10, 'UTF-8'));
            $pdf->SetXY(177, $y-13);
            $pdf->Write(5,mb_substr( '', 10, 10, 'UTF-8'));
        }
        
        $pdf->Cell(190,13, '' ,0,1,'C');
        
        $pdf->SetFont('DejaVu','',10);
        if($Course['LectureHours']+0 != 0) {
            $pdf->Cell(120,7,t_teaching_activities_name1,1,0,'R');
            $pdf->Cell(40,7,$Course['LectureHours'],1,0,'C');
            $pdf->Cell(30,7,'',1,1,'C');
            $y=$y+7;
        }
        if($Course['LaboratoryHours']+0 != 0) {
            $pdf->Cell(120,7,t_teaching_activities_name2,1,0,'R');
            $pdf->Cell(40,7,$Course['LaboratoryHours'],1,0,'C');
            $pdf->Cell(30,7,'',1,1,'C');
            $y=$y+7;
        }
        if($Course['TutorialHours']+0 != 0) {
            $pdf->Cell(120,7,t_teaching_activities_name3,1,0,'R');
            $pdf->Cell(40,7,$Course['TutorialHours'],1,0,'C');
            $pdf->Cell(30,7,'',1,1,'C');
            $y=$y+7;
        }
        if($Course['LabTutorialHours']+0 != 0) {
            $pdf->Cell(120,7,t_teaching_activities_name4,1,0,'R');
            $pdf->Cell(40,7,$Course['LabTutorialHours'],1,0,'C');
            $pdf->Cell(30,7,'',1,1,'C');
            $y=$y+7;
        }

        $pdf->SetFont('DejaVuB','',10);        
        $pdf->Cell(120,7,t_total,1,0,'R');
        $y=$y+7;
        $pdf->SetFont('DejaVu','',10);
        $pdf->Cell(40,7,$Course['TotalHours'],1,0,'C');
        $pdf->Cell(30,7,$Course['CreditUnits'],1,1,'C');

        $pdf->SetFont('DejaVuB','',10);        
        $pdf->Cell(60,7,t_course_type,1,0,'R',true);
        $y=$y+7;
        $pdf->SetFont('DejaVu','',10);
        $pdf->Cell(130,7,$Course['CourseType'],1,1);

        $pdf->SetFont('DejaVuB','',10);        
        $pdf->Cell(60,7,t_prerequisite_courses,1,0,'R',true);
        $pdf->SetFont('DejaVu','',10);
        
        if(!empty($RequiredCourses)){
            $c = 1;
            foreach ($RequiredCourses as $PrerequisiteId => $title ) {
                
                if( $c > 1 )
                {
                    $pdf->Cell(60,7,' ',1,0,'R',true);
                }
                $pdf->Cell(130,7,$title,1,1);
                $c++;
                $y=$y+7;
            }
        }else{
            $pdf->Cell(130,7,'',1,1);
            $y=$y+7;
        }
        
        $pdf->Cell(60,10,'' ,1,0,'R', true);
        $pdf->Cell(130,10,'' ,1,1,'L');
        $pdf->Cell(60,10,'' ,1,0,'R', true);
        $pdf->Cell(130,10,'' ,1,1,'L');
        $pdf->Cell(60,10,'' ,1,0,'R', true);
        $pdf->Cell(130,10,'' ,1,1,'L');
        
        
        if($_SESSION['lang']=='gr' )
        {
            $pdf->SetFont('DejaVuB','',10);
            $pdf->SetXY(22, $y);
            $pdf->Write(5,mb_substr( t_language, 0, 22, 'UTF-8'));
            $y=$y+5;
            $pdf->SetXY(46, $y);
            $pdf->Write(5,mb_substr( t_language, 22, 20, 'UTF-8'));
            $pdf->SetFont('DejaVu','',10);
            $pdf->SetXY(70, $y-3);
            $pdf->Write(5,mb_substr( $Course['LanguageOfTeaching'], 0, 20, 'UTF-8'));
            $y=$y+5;

            $pdf->SetFont('DejaVuB','',10);
            $pdf->SetXY(13, $y);
            $pdf->Write(5,mb_substr( t_erasmus, 0, 24, 'UTF-8'));
            $y=$y+5;
            $pdf->SetXY(30, $y);
            $pdf->Write(5,mb_substr( t_erasmus, 24, 20, 'UTF-8'));
            $pdf->SetFont('DejaVu','',10);
            $pdf->SetXY(70, $y-3);
            $lang=($Course['ErasmusFl']=='1')?  t_yes:  t_no;
            $pdf->Write(5,mb_substr( $lang, 0, 20, 'UTF-8'));
            $y=$y+5;
            
            $pdf->SetFont('DejaVuB','',10);
            $pdf->SetXY(27, $y);
            $pdf->Write(5,mb_substr( t_url, 0, 19, 'UTF-8'));
            $y=$y+5;
            $pdf->SetXY(32, $y);
            $pdf->Write(5,mb_substr( t_url, 19, 20, 'UTF-8'));
            

            $pdf->SetFont('DejaVu','',10);
            $pdf->SetXY(70, $y-3);
            $pdf->Write(5,mb_substr( $Course['CourseUrl'], 0, 200, 'UTF-8'));
            $y=$y+5;
        }else{

            $pdf->SetFont('DejaVuB','',10);
            $pdf->SetXY(23, $y);
            $pdf->Write(5,mb_substr( t_language, 0, 20, 'UTF-8'));
            $y=$y+5;
            $pdf->SetXY(31, $y);
            $pdf->Write(5,mb_substr( t_language, 21, 20, 'UTF-8'));
            $pdf->SetFont('DejaVu','',10);
            $pdf->SetXY(70, $y-3);
            $pdf->Write(5,mb_substr( $Course['LanguageOfTeaching'], 0, 20, 'UTF-8'));
            $y=$y+5;

            $pdf->SetFont('DejaVuB','',10);
            $pdf->SetXY(17, $y);
            $pdf->Write(5,mb_substr( t_erasmus, 0, 24, 'UTF-8'));
            $y=$y+5;
            $pdf->SetXY(29, $y);
            $pdf->Write(5,mb_substr( t_erasmus, 24, 20, 'UTF-8'));
            $pdf->SetFont('DejaVu','',10);
            $pdf->SetXY(70, $y-3);
            $lang=($Course['ErasmusFl']=='1')?  t_yes:  t_no;
            $pdf->Write(5,mb_substr( $lang, 0, 20, 'UTF-8'));
            $y=$y+5;
            
            $pdf->SetFont('DejaVuB','',10);
            $pdf->SetXY(25, $y+2);
            $pdf->Write(5,mb_substr( t_url, 0, 20, 'UTF-8'));
            $y=$y+5;
            $pdf->SetXY(32, $y);
            $pdf->Write(5,mb_substr( t_url, 20, 20, 'UTF-8'));
            

            $pdf->SetFont('DejaVu','',10);
            $pdf->SetXY(70, $y-3);
            $pdf->Write(5,mb_substr( $Course['CourseUrl'], 0, 200, 'UTF-8'));
            $y=$y+5;
        }

        
        $pdf->Cell(190,15,'' ,0,1,'L');
        

        //Learning Outcomes
        $pdf->SetFont('DejaVuB','',11);
        $pdf->Cell(190,10,t_2learning_outcomes,0,1,'L');
        $y=$y+20;
        $pdf->Cell(190,38,'' ,1,1,'L', true);

        if( $_SESSION['lang']=='gr' )
        {
            $pdf->SetXY(12, $y);
            $pdf->Write(5,mb_substr( t_learning_outcomes, 0, 30, 'UTF-8'));
            $y=$y+5;
            $pdf->SetFont('DejaVu','',8);
            $pdf->SetXY(12, $y);
            $pdf->Write(4,mb_substr( t_learning_outcomes1, 0, 131, 'UTF-8'));
            $y=$y+4;
            $pdf->SetXY(12, $y);
            $pdf->Write(4,mb_substr( t_learning_outcomes1, 131, 100, 'UTF-8'));
            $y=$y+4;
            $pdf->SetXY(12, $y);
            $pdf->Write(4,mb_substr( t_learning_outcomes2, 0, 100, 'UTF-8'));
            $y=$y+4;
            $pdf->SetXY(12, $y);
            $pdf->Write(4,mb_substr( t_learning_outcomes3, 0, 128, 'UTF-8'));
            $y=$y+4;
            $pdf->SetXY(14, $y);
            $pdf->Write(4,mb_substr( t_learning_outcomes3, 128, 130, 'UTF-8'));
            $y=$y+4;
            $pdf->SetXY(12, $y);
            $pdf->Write(4,mb_substr( t_learning_outcomes4, 0, 130, 'UTF-8'));
            $y=$y+4;
            $pdf->SetXY(12, $y);
            $pdf->Write(4,mb_substr( t_learning_outcomes5, 0, 130, 'UTF-8'));
            $y=$y+4;
        }else{
            $pdf->SetXY(12, $y);
            $pdf->Write(5,mb_substr( t_learning_outcomes, 0, 30, 'UTF-8'));
            $y=$y+5;
            $pdf->SetFont('DejaVu','',8);
            $pdf->SetXY(12, $y);
            $pdf->Write(4,mb_substr( t_learning_outcomes1, 0, 135, 'UTF-8'));
            $y=$y+4;
            $pdf->SetXY(12, $y);
            $pdf->Write(4,mb_substr( t_learning_outcomes1, 135, 100, 'UTF-8'));
            $y=$y+4;
            $pdf->SetXY(12, $y);
            $pdf->Write(4,mb_substr( t_learning_outcomes2, 0, 100, 'UTF-8'));
            $y=$y+4;
            $pdf->SetXY(12, $y);
            $pdf->Write(4,mb_substr( t_learning_outcomes3, 0, 135, 'UTF-8'));
            $y=$y+4;
            $pdf->SetXY(14, $y);
            $pdf->Write(4,mb_substr( t_learning_outcomes3, 135, 130, 'UTF-8'));
            $y=$y+4;
            $pdf->SetXY(12, $y);
            $pdf->Write(4,mb_substr( t_learning_outcomes4, 0, 130, 'UTF-8'));
            $y=$y+4;
            $pdf->SetXY(12, $y);
            $pdf->Write(4,mb_substr( t_learning_outcomes5, 0, 130, 'UTF-8'));
            $y=$y+4;
        }
        $h=0;
        $c = 0;
        foreach ( $CourseVerbs as $verbId => $sentence )
        {
            $h=$h+14;
            $c++;
            if($c == 7)
            {
                break;
            }
        }
        $pdf->Cell(190,6,'' ,0,1,'L');
        $pdf->Rect(10, $y+2, 190, $h, 'D');

        $pdf->SetFont('DejaVu','',10);        
        $pdf->Cell(190,7,t_learning_outcomes_begin ,0,1,'L');
        $y=$y+7;
        $c = 0;
        foreach ( $CourseVerbs as $verbId => $sentence )
        {
            $pdf->SetFont('DejaVu','',10);   
            $pdf->MultiCell(190,5,' -  '. $verbs[$verbId]['Verbs'] . ' '. $sentence ,0,'L',false);
            $y=$y+5;
            $c++;
            if($c == 7)
            {
                break;
            }
        }

        $pdf->AddPage();

        $pdf->Cell(190,15,'' ,1,1,'L', true);
        
        if( $_SESSION['lang']=='gr')
        {
            $pdf->SetFont('DejaVuB','',11);
            $pdf->SetXY(12, 10);
            $pdf->Write(5,mb_substr( t_general_capabilities, 0, 100, 'UTF-8'));
            $pdf->SetFont('DejaVu','',8);
            $pdf->SetXY(12, 15);
            $pdf->Write(5,mb_substr( t_general_capabilities1, 0, 132, 'UTF-8'));
            $pdf->SetFont('DejaVu','',8);
            $pdf->SetXY(12, 20);
            $pdf->Write(4,mb_substr( t_general_capabilities1, 133, 300, 'UTF-8'));
            
        }else{
            $pdf->SetFont('DejaVuB','',11);
            $pdf->SetXY(12, 10);
            $pdf->Write(5,mb_substr( t_general_capabilities, 0, 100, 'UTF-8'));
            $pdf->SetFont('DejaVu','',8);
            $pdf->SetXY(12, 15);
            $pdf->Write(5,mb_substr( t_general_capabilities1, 0, 135, 'UTF-8'));
            $pdf->SetFont('DejaVu','',8);
            $pdf->SetXY(12, 20);
            $pdf->Write(4,mb_substr( t_general_capabilities1, 135, 300, 'UTF-8'));
        }
        $pdf->Cell(190,5,'' ,0,1,'L');
        $y=20;
        foreach ($CourseSkills as $Id => $Description){ 
        
            $pdf->SetFont('DejaVu','',10);        
            $pdf->Cell(190,5,' -  ' . $Description ,0,1,'L');
            $y = $y + 5;
        }
        $pdf->Rect(10, 25, 190, $y-15, 'D');

        $pdf->Cell(190,10,'' ,0,1,'L');


        //Course Content
        $pdf->SetFont('DejaVuB','',11);
        $pdf->Cell(190,10,t_3course_content,0,1,'L');
        $pdf->SetFont('DejaVu','',10); 
        $pdf->SetFillColor(255,255,255);
        $pdf->MultiCell(190,5,$Course['Content'] ,1,1,'L');
        $pdf->SetFillColor(179,179,176);
        

        $pdf->AddPage();

        //Teaching Methods
        $pdf->SetFont('DejaVuB','',11);
        $pdf->Cell(190,10,t_4teaching_methods,0,1,'L');
        $pdf->SetFont('DejaVuB','',10);
        $pdf->Cell(60,7,t_lecture_method ,1,0,'R', true);
        $pdf->SetFont('DejaVu','',10);
        $pdf->Cell(130,7, $Course['LectureMethod'] ,1,1);

        $y=0;
        foreach( $CourseMethod as $Id => $text )    
        {  
            $TextA = isset($text['TextA'])? $text['TextA']: '';
            $TextB = isset($text['TextB'])? $text['TextB']: '';
            $TextC = isset($text['TextC'])? $text['TextC']: '';

            $wordsA = explode( '\n' , $TextA );
            $wordsB = explode( '\n' , $TextB );
            $wordsC = explode( '\n' , $TextC );

            $linesA=0;
            $linesB=0;
            $linesC=0;
            for( $i=0; $i < count($wordsA); $i++ )
            {
                $linesA++;
                if( isset( $wordsA[$i] ) )
                {
                    $linesA=$linesA+strlen($wordsA[$i])/40;
                } 
            }
            for( $i=0; $i < count($wordsB); $i++ )
            {
                $linesB++;
                if( isset( $wordsB[$i] ) )
                {
                    $linesB=$linesB+strlen($wordsB[$i])/40;
                } 
            }
            for( $i=0; $i < count($wordsC); $i++ )
            {
                $linesC++;
                if( isset( $wordsC[$i] ) )
                {
                    $linesC=$linesC+strlen($wordsC[$i])/40;
                } 
            }
            if ($TextA != ''){
                $y = $y + (5*$linesA);
            }
            if ($TextB != ''){
                $y = $y + (5*$linesB);
            }
            if ($TextC != ''){
                $y = $y + (5*$linesC);
            }
        }

        $pdf->SetFont('DejaVuB','',10);
        if ($y<20){
            $y=20;
            $a=20;
        }
        $a=$y;
        $pdf->Cell(60,$y,'' ,1,0,'R', true);
        
        $pdf->Rect(70, 27, 60, $y, 'D');
        $pdf->Rect(130, 27, 70, $y, 'D');


        $pdf->SetFont('DejaVu','',10);
        foreach( $CourseMethod as $Id => $text )    
        {
            $pdf->Cell(60,5,$UseOfTechnologies[$Id]['UseOfTechnologies'] ,0,0);
            
            $TextA = isset($text['TextA'])? $text['TextA']: '';
            $TextB = isset($text['TextB'])? $text['TextB']: '';
            $TextC = isset($text['TextC'])? $text['TextC']: '';
            
            
            if ($TextA != ''){
                $pdf->MultiCell(70,5,'- '.$TextA ,0,'L',false);
            }
            if ($TextB != ''){
                $pdf->Cell(60,5,'' ,0,0);
                $pdf->Cell(60,5,'' ,0,0);
                $pdf->MultiCell(70,5,'- '. $TextB ,0,'L',false);
            }
            if ($TextC != ''){
                $pdf->Cell(60,5,'' ,0,0);
                $pdf->Cell(60,5,'' ,0,0);
                $pdf->MultiCell(70,5,'- '.$TextC ,0,'L',false);
                
            }
            $pdf->Cell(60,7,'' ,0,0);
        }
        
        if($_SESSION['lang']=='gr')
        {
            $pdf->SetFont('DejaVuB','',10);
            $pdf->SetXY(28, 30);
            $pdf->Write(5,mb_substr( t_use_of_technlogy, 0, 18, 'UTF-8'));
            $pdf->SetXY(33, 35);
            $pdf->Write(5,mb_substr( t_use_of_technlogy, 18, 16, 'UTF-8'));
            $pdf->SetXY(40, 40);
            $pdf->Write(5,mb_substr( t_use_of_technlogy, 34, 45, 'UTF-8'));
        }else{
            $pdf->SetFont('DejaVuB','',10);
            $pdf->SetXY(28, 30);
            $pdf->Write(5,mb_substr( t_use_of_technlogy, 0, 18, 'UTF-8'));
            $pdf->SetXY(27, 35);
            $pdf->Write(5,mb_substr( t_use_of_technlogy, 18, 18, 'UTF-8'));
            $pdf->SetXY(39, 40);
            $pdf->Write(5,mb_substr( t_use_of_technlogy, 36, 45, 'UTF-8'));
        
        }
        $pdf->Cell(30,$y-13,'' ,0,1);
                
        $h=$y+7;
        $x=$y;
        // $y=25;
        $y=25;
        foreach ($activities as $Id => $row ){ 
            if( isset( $CourseActivities[$Id]['Hours'] ) &&  $CourseActivities[$Id]['Hours']!=0 )
            {
                $y=$y+7;
                $x=$x+7;
            }  
        }
        
        if(!empty($Course['OrganizationComment'])){
            
            $pdf->SetFont('DejaVu','',10);      
            $words = explode( '\n' , $Course['OrganizationComment'] );

            $lines=0;
            for( $i=0; $i <= count($words); $i++ )
            {
                $text = '';
                $lines++;
                if( isset( $words[$i] ) )
                {
                    $lines=$lines+strlen($words[$i])/90;
                } 
            }
            $y=$y+4*$lines;
        }

        if ($y<=70){
            $y=70;
        }
        
        $pdf->Cell(60,$y,'',1,0,'R', true);
        $pdf->SetFont('DejaVuB','',10);
        $pdf->Cell(75,15,t_activity ,1,0,'C', true);
        $pdf->Cell(55,15,'' ,1,1,'C', true);
        $pdf->SetFont('DejaVu','',10);

        foreach ($activities as $Id => $row ){ 
            $value="";
            
            if( isset( $CourseActivities[$Id]['Hours'] ) &&  $CourseActivities[$Id]['Hours']!=0)
            {
                $value = $CourseActivities[$Id]['Hours'];
            }
            else
            {
                continue;
            }
            $pdf->Cell(60,7,'' ,0,0);
            $pdf->Cell(75,7,$row['Activities'] ,1,0);
            $pdf->Cell(55,7,$value ,1,1,'C');
        }
        $pdf->SetFont('DejaVuB','',10);
        $pdf->Cell(60,10,'' ,0,0);
        $pdf->Cell(75,10,'' ,1,0);
        $pdf->Cell(55,10,$Course['TotalCourseHours'] ,1,1,'C');
        
        //OrganizationComment
        if(!empty($Course['OrganizationComment'])){
            $pdf->SetFont('DejaVu','',8);      
            $pdf->SetFillColor(255,255,255);
            $pdf->Cell(60,$y-$x,'' ,0,0);
            $pdf->MultiCell(130,3,$Course['OrganizationComment'] ,1,1,'L');
        }
        $pdf->SetFillColor(179,179,176);

        if( $_SESSION['lang']=='gr' )
        {
            $h=$h+5;
            $pdf->SetFont('DejaVuB','',10);
            $pdf->SetXY(22, $h+20);
            $pdf->Write(5,mb_substr( t_teaching_organisation, 0, 30, 'UTF-8'));
            $pdf->SetFont('DejaVu','',8);
            $pdf->SetXY(10, $h+24);
            $pdf->Write(4,mb_substr( t_teaching_organisation1, 0, 36, 'UTF-8'));
            $pdf->SetXY(10, $h+28);
            $pdf->Write(4,mb_substr( t_teaching_organisation1, 37, 20, 'UTF-8'));
            $pdf->SetXY(10, $h+32);
            $pdf->Write(4,mb_substr( t_teaching_organisation2, 0, 42, 'UTF-8'));
            $pdf->SetXY(10, $h+36);
            $pdf->Write(4,mb_substr( t_teaching_organisation2, 43, 32, 'UTF-8'));
            $pdf->SetXY(10, $h+40);
            $pdf->Write(4,mb_substr( t_teaching_organisation2, 75, 38, 'UTF-8'));
            $pdf->SetXY(10, $h+44);
            $pdf->Write(4,mb_substr( t_teaching_organisation2, 113, 43, 'UTF-8'));
            $pdf->SetXY(10, $h+48);
            $pdf->Write(4,mb_substr( t_teaching_organisation2, 156, 36, 'UTF-8'));
            $pdf->SetXY(10, $h+52);
            $pdf->Write(4,mb_substr( t_teaching_organisation2, 192, 43, 'UTF-8'));
            $pdf->SetXY(10, $h+56);
            $pdf->Write(4,mb_substr( t_teaching_organisation2, 235, 41, 'UTF-8'));
            $pdf->SetXY(10, $h+60);
            $pdf->Write(4,mb_substr( t_teaching_organisation2, 276, 38, 'UTF-8'));
            $pdf->SetXY(10, $h+66);
            $pdf->Write(4,mb_substr( t_teaching_organisation3, 0, 40, 'UTF-8'));
            $pdf->SetXY(10, $h+70);
            $pdf->Write(4,mb_substr( t_teaching_organisation3, 41, 39, 'UTF-8'));
            $pdf->SetXY(10, $h+74);
            $pdf->Write(4,mb_substr( t_teaching_organisation3, 80, 38, 'UTF-8'));
            $pdf->SetXY(10, $h+78);
            $pdf->Write(4,mb_substr( t_teaching_organisation3, 118, 38, 'UTF-8'));
            $h=$h-5;
            $pdf->SetFont('DejaVuB','',10);
            $pdf->SetXY(147, $h+22);
            // $pdf->SetXY(147, $h-63);
            // $pdf->Cell(75,15,t_activity ,1,0,'C', true);
            $pdf->Write(5,mb_substr( t_workload, 0, 24, 'UTF-8'));
            $pdf->SetXY(147, $h+27);
            $pdf->Write(5,mb_substr( t_workload, 24, 36, 'UTF-8'));

            
            $pdf->SetXY(70, $x+43);
            $pdf->Write(4,mb_substr( t_total_course, 0, 32, 'UTF-8'));
            $pdf->SetXY(70, $x+47);
            $pdf->Write(4,mb_substr( t_total_course, 33, 35, 'UTF-8'));


        }else{
            $h=$h+5;
            $pdf->SetFont('DejaVuB','',10);
            $pdf->SetXY(20, $h+20);
            $pdf->Write(5,mb_substr( t_teaching_organisation, 0, 30, 'UTF-8'));
            $pdf->SetFont('DejaVu','',8);
            $pdf->SetXY(10, $h+24);
            $pdf->Write(4,mb_substr( t_teaching_organisation1, 0, 42, 'UTF-8'));
            $pdf->SetXY(10, $h+28);
            $pdf->Write(4,mb_substr( t_teaching_organisation1, 42, 20, 'UTF-8'));
            $pdf->SetXY(10, $h+32);
            $pdf->Write(4,mb_substr( t_teaching_organisation2, 0, 40, 'UTF-8'));
            $pdf->SetXY(10, $h+36);
            $pdf->Write(4,mb_substr( t_teaching_organisation2, 41, 35, 'UTF-8'));
            $pdf->SetXY(10, $h+40);
            $pdf->Write(4,mb_substr( t_teaching_organisation2, 71, 39, 'UTF-8'));
            $pdf->SetXY(10, $h+44);
            $pdf->Write(4,mb_substr( t_teaching_organisation2, 110, 45, 'UTF-8'));
            $pdf->SetXY(10, $h+48);
            $pdf->Write(4,mb_substr( t_teaching_organisation2, 156, 41, 'UTF-8'));
            $pdf->SetXY(10, $h+52);
            $pdf->Write(4,mb_substr( t_teaching_organisation2, 198, 55, 'UTF-8'));
            $pdf->SetXY(10, $h+56);
            $pdf->Write(4,mb_substr( t_teaching_organisation2, 235, 41, 'UTF-8'));
            $pdf->SetXY(10, $h+60);
            $pdf->Write(4,mb_substr( t_teaching_organisation2, 276, 38, 'UTF-8'));
            $pdf->SetXY(10, $h+66);
            $pdf->Write(4,mb_substr( t_teaching_organisation3, 0, 44, 'UTF-8'));
            $pdf->SetXY(10, $h+70);
            $pdf->Write(4,mb_substr( t_teaching_organisation3, 44, 37, 'UTF-8'));
            $pdf->SetXY(10, $h+74);
            $pdf->Write(4,mb_substr( t_teaching_organisation3, 81, 38, 'UTF-8'));
            $pdf->SetXY(10, $h+78);
            $pdf->Write(4,mb_substr( t_teaching_organisation3, 120, 38, 'UTF-8'));
            $h=$h-5;
            $pdf->SetFont('DejaVuB','',10);
            $pdf->SetXY(152, $h+22);
            $pdf->Write(5,mb_substr( t_workload, 0, 21, 'UTF-8'));
            $pdf->SetXY(145, $h+27);
            $pdf->Write(5,mb_substr( t_workload, 21, 45, 'UTF-8'));

            
            $pdf->SetXY(70, $x+43);
            $pdf->Write(4,mb_substr( t_total_course, 0, 35, 'UTF-8'));
            $pdf->SetXY(70, $x+47);
            $pdf->Write(4,mb_substr( t_total_course, 35, 35, 'UTF-8'));
        }


        $pdf->AddPage();

        // Student Assessment
        $y=7;
        $firstOccurance=1;
        $isSummative=1;
        foreach( $CourseAssessment as $categoryId => $assess )
        {
            if($firstOccurance==1 && $isSummative==1){
                
                $firstOccurance=0;
                $y=$y+7;

            }elseif($firstOccurance==0 && $isSummative==1){
                if($bonus[$assess['BonusId']]['Id']==2 || $bonus[$assess['BonusId']]['Id']==4){
                    
                    $isSummative=0;
                    $y=$y+7;
                }
            }
            $y=$y+7;
            $i = 1;
            foreach( $Assessments[$categoryId]['subcategories'] as $SubId => $SubcategoryName )
            {
                $sub_value = isset( $assess['SubcategoryId' . $i] ) ? $assess['SubcategoryId' . $i] : '';
                $i++;
                if( $SubId == $sub_value )
                {
                    $y=$y+7;
                }
            }
        }
        if(!empty($Course['AssessmentComment'])){
            
            $pdf->SetFont('DejaVu','',10);      
            $words = explode( '\n' , $Course['AssessmentComment'] );

            $lines=0;
            for( $i=0; $i <= count($words); $i++ )
            {
                $text = '';
                $lines++;
                    if( isset( $words[$i] ) )
                {
                    $lines=$lines+strlen($words[$i])/90;
                } 
            }
            $y=$y+6*$lines;
        }
        if ($y<=70){
            $y=70;
        }
        $pdf->SetFont('DejaVuB','',10);
        $pdf->Cell(62,$y, '',1,0,'R');
        $pdf->SetFont('DejaVu','',10);
        $pdf->Cell(128,7, t_assessment_language.$Course['LanguageOfTeaching'],1,1,'L');

        
        
        $isSummative=1;
        $firstOccurance=1;
        foreach( $CourseAssessment as $categoryId => $assess )
        {
            $pdf->SetFont('DejaVuB','',10);
            if($firstOccurance==1 && $isSummative==1){
                $pdf->Cell(62,50, '',0,0,'R');
                $pdf->Cell(128,7,$bonus[$assess['BonusId']]['Choices'] .' '. t_assess,1,1,'C', true);
                $firstOccurance=0;

            }elseif($firstOccurance==0 && $isSummative==1){
                if($bonus[$assess['BonusId']]['Id']==2 || $bonus[$assess['BonusId']]['Id']==4){
                    $pdf->Cell(62,50, '',0,0,'R');
                    $pdf->Cell(128,7,$bonus[$assess['BonusId']]['Choices'] .' '. t_assess,1,1,'C', true);
                    $isSummative=0;
                }
            }

            $pdf->Cell(62,50, '',0,0,'R');
            $pdf->SetFont('DejaVuB','',10);
            $pdf->Cell(128,7,$Assessments[$categoryId]['CategoryName'] .': ' . $assess['Percentage'] .'%',1,1);
            $pdf->SetFont('DejaVu','',10);
            
            
            $i = 1;
            foreach( $Assessments[$categoryId]['subcategories'] as $SubId => $SubcategoryName )
            {
                $sub_value = isset( $assess['SubcategoryId' . $i] ) ? $assess['SubcategoryId' . $i] : '';
                $i++;
                if( $SubId == $sub_value )
                {
                    $pdf->Cell(62,7,'' ,0,0);
                    $pdf->Cell(128,7,'- '.$SubcategoryName ,1,1);
                }
            }
        }

        //AssessmentComment
        if(!empty($Course['AssessmentComment'])){
            $pdf->SetFont('DejaVu','',10);      
            $pdf->SetFillColor(255,255,255);
            $pdf->Cell(62,$y,'' ,0,0);
            $pdf->MultiCell(128,5,$Course['AssessmentComment'] ,1,1,'L');
        }
        $pdf->SetFillColor(179,179,176);


        if($_SESSION['lang']=='gr')
        {
            $pdf->SetFont('DejaVuB','',10);
            $pdf->SetXY(25, 10);
            $pdf->Write(5,mb_substr( t_assessment, 0, 30, 'UTF-8'));
            $pdf->SetFont('DejaVu','',8);
            $pdf->SetXY(10, 15);
            // $pdf->Write(4,mb_substr( t_assessment1, 0, 42, 'UTF-8'));
            $pdf->SetXY(10, 20);
            $pdf->Write(4,mb_substr( t_assessment2, 0, 41, 'UTF-8'));
            $pdf->SetXY(10, 24);
            $pdf->Write(4,mb_substr( t_assessment2, 41, 42, 'UTF-8'));
            $pdf->SetXY(10, 28);
            $pdf->Write(4,mb_substr( t_assessment2, 83, 39, 'UTF-8'));
            $pdf->SetXY(10, 32);
            $pdf->Write(4,mb_substr( t_assessment2, 122, 41, 'UTF-8'));
            $pdf->SetXY(10, 36);
            $pdf->Write(4,mb_substr( t_assessment2, 163, 37, 'UTF-8'));
            $pdf->SetXY(10, 40);
            $pdf->Write(4,mb_substr( t_assessment2, 200, 37, 'UTF-8'));
            $pdf->SetXY(10, 44);
            $pdf->Write(4,mb_substr( t_assessment2, 237, 41, 'UTF-8'));
            $pdf->SetXY(10, 48);
            $pdf->Write(4,mb_substr( t_assessment2, 279, 39, 'UTF-8'));
            $pdf->SetXY(10, 52);
            $pdf->Write(4,mb_substr( t_assessment2, 318, 39, 'UTF-8'));

            $pdf->SetXY(10, 60);
            $pdf->Write(4,mb_substr( t_assessment3, 0, 40, 'UTF-8'));
            $pdf->SetXY(10, 64);
            $pdf->Write(4,mb_substr( t_assessment3, 41, 45, 'UTF-8'));
            $pdf->SetXY(10, 68);
            $pdf->Write(4,mb_substr( t_assessment3, 86, 40, 'UTF-8'));
        }else{
            $pdf->SetFont('DejaVuB','',10);
            $pdf->SetXY(25, 10);
            $pdf->Write(5,mb_substr( t_assessment, 0, 30, 'UTF-8'));
            $pdf->SetFont('DejaVu','',8);
            $pdf->SetXY(10, 15);
            $pdf->Write(4,mb_substr( t_assessment1, 0, 42, 'UTF-8'));
            $pdf->SetXY(10, 20);
            $pdf->Write(4,mb_substr( t_assessment2, 0, 41, 'UTF-8'));
            $pdf->SetXY(10, 24);
            $pdf->Write(4,mb_substr( t_assessment2, 41, 40, 'UTF-8'));
            $pdf->SetXY(10, 28);
            $pdf->Write(4,mb_substr( t_assessment2, 81, 41, 'UTF-8'));
            $pdf->SetXY(10, 32);
            $pdf->Write(4,mb_substr( t_assessment2, 122, 41, 'UTF-8'));
            $pdf->SetXY(10, 36);
            $pdf->Write(4,mb_substr( t_assessment2, 163, 42, 'UTF-8'));
            $pdf->SetXY(10, 40);
            $pdf->Write(4,mb_substr( t_assessment2, 206, 37, 'UTF-8'));
            $pdf->SetXY(10, 44);
            $pdf->Write(4,mb_substr( t_assessment2, 244, 43, 'UTF-8'));
            $pdf->SetXY(10, 48);
            $pdf->Write(4,mb_substr( t_assessment2, 288, 39, 'UTF-8'));
            $pdf->SetXY(10, 52);
            $pdf->Write(4,mb_substr( t_assessment2, 318, 39, 'UTF-8'));

            $pdf->SetXY(10, 60);
            $pdf->Write(4,mb_substr( t_assessment3, 0, 40, 'UTF-8'));
            $pdf->SetXY(10, 64);
            $pdf->Write(4,mb_substr( t_assessment3, 41, 43, 'UTF-8'));
            $pdf->SetXY(10, 68);
            $pdf->Write(4,mb_substr( t_assessment3, 84, 40, 'UTF-8'));
        }

       
        $pdf->Cell(30,$y-40,'' ,0,1);

        //Bibliography
        
        $pdf->SetFont('DejaVuB','',11);
        $pdf->Cell(190,10,t_5bibliography,0,1,'L');
        $pdf->SetFont('DejaVu','',10);
        $pdf->SetFillColor(255,255,255);
        $pdf->MultiCell(190,5,$Course['Bibliography'] ,1,1,'L');


        $pdf->Output();

    }    


}
