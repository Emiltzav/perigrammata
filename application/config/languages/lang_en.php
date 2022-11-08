<?php
//header
    define("t_home","Home");
    define("t_tuc","Technical University of Crete");
    define("t_welcome","Application for Course Outline Documentation");
    define("t_modal_welcome","Welcome");
    define("t_login","Login");
    define("t_logout","Logout");
    define("t_signup","Sign Up");
    define("t_or","OR");
    define("t_error","ERROR");
    define("t_prof_alert","In case of incorrect information contact with the administrator at nispanoudakis@isc.tuc.gr");
    define("t_paragraph","Use your academic account to login to the app. For more information click");

    define("t_error_login1","Wrong User Details.");
    define("t_error_login2","Sorry, that username / email address is already taken.");
    define("t_error_login3","You have not been confirmed yet.");
    define("t_error_course","Sorry, this course does not exist.");
    define("t_error_required_fields","Both Fields are required.");
    define("t_error_on_save_course","Something get wrong.");
    define("t_error_ldap_server","Could not connect to LDAP server.");
    define("t_error_not_listed_proff","Εrror, your data has not been registered in the application database.");
    define("t_error_stud_access","Εrror, students do not have access to the application yet.");

    
    define("t_success_register","You have been registered successfully !");
    define("t_success","Successfully Saved !");
    define("t_success_new_course","New Course added successfully !");
    define("t_success_update_course","The Course updated successfully !");

//Index modal info    
    define("t_info0","Perigrammata Information System allows professors to: ");
    define("t_info1","Complete / Edit the οutline of their courses according to Hellenic Authority for Higher Education (ADIP).");
    define("t_info2","Export the outline of their courses to a pdf file.");
    define("t_info3","Export the outline of their courses in HTML format to add to their personal website.");
    define("t_info4","Document the learning outcomes of their courses according to ABET accreditation standards. Specifically, they complete the final score of their course for ABET learning outcomes, having as advisor the semantic similarity score,  extracted from Universal Sentence Encoder. ");
    define("t_info5","Also offers to the students:");
    define("t_info6","An advisory system, as it proposes the selection of their optional courses based on the skills they wish to enhance.");
    define("t_info7","A knowledge presentation system and an indication of how these support ABET learning outcomes, after the selection and successful attendance of specific courses.");
    define("t_info8","Matching with ABET");
    
    define("t_total_score","Total Score : ");


//Administrator
    define("t_create_course","Create Course");
    define("t_add_admin","Add User/Administrator");
    define("t_add_verb","Add Verbs");
    define("t_courses_list","Courses List");
    define("t_users_list","Users List");
    define("t_outcomes_list","Learning Outcomes List");
    define("t_select_verb_classification","Verb Classification");
    define("t_verb","Verb");
    define("t_verbs","Verbs");
    define("t_verb_level","Level");
    define("t_error_verb","Error, this verb already exists");
    define("t_error_verb1","Error, the same verb cannot be used twice!");

    define("t_user_requests","User Requests");
    define("t_confirmed","Confirmed");
    define("t_pending_approval","Pending Approval");
    define("t_status","Status");
    define("t_profile","Profile");
    define("t_page","Admin Page");
    define("t_here","here");
    
//Student page
    define("t_start","GET STARTED");
    define("t_slang","Select teaching language");
    define("t_slang1","Select department");
    define("t_slang2","Which of the followng general skills are you most interest in?");
    define("t_slang3","Error, please try again!"); 
    define("t_slang4","More");
    define("t_slang5","Optional compulsory");
    define("t_slang6","Compulsory & optional compulsory");
    define("t_slang7","You chose :");
    define("t_criterion","Learning Outcome");
    define("t_criterion1","an ability to identify, formulate, and solve complex engineering problems by applying principles of engineering, science, and mathematics"); 
    define("t_criterion2","an ability to apply engineering design to produce solutions that meet specified needs with consideration of public health, safety, and welfare, as well as global, cultural, social, environmental, and economic factors"); 
    define("t_criterion3","an ability to communicate effectively with a range of audiences."); 
    define("t_criterion4","an ability to recognize ethical and professional responsibilities in engineering situations and make informed judgments, which must consider the impact of engineering solutions in global, economic, environmental, and societal contexts."); 
    define("t_criterion5","an ability to function effectively on a team whose members together provide leadership, create a collaborative and inclusive environment, establish goals, plan tasks, and meet objectives."); 
    define("t_criterion6","an ability to develop and conduct appropriate experimentation, analyze and interpret data, and use engineering judgment to draw conclusions."); 
    define("t_criterion7","an ability to acquire and apply new knowledge as needed, using appropriate learning strategies."); 



//ABET PAGE
    define("t_abet_title","Documentation of learning outcomes");
    define("t_translate","Translate");
    define("t_abet_learning_outcomes","ABET Student Outcomes");
    define("t_doc01","Documentation based on General Skills");
    define("t_doc02","Documentation based on Learning Outcomes");
    define("t_score_array","Learning Outcomes Score per ABET Learning Outcome");
    define("t_final_array","Final course score for ABET Learning Outcomes");
    define("t_score_array2","Generic Skills Score per ABET Criterion");
    define("t_score_array1","Aggregate Score Learning Outcomes per ABET Criterion of selected courses");
    define("t_score_array3","Aggregate Score Generic Skills per ABET Criterion of selected courses");
    define("t_doc_course_percent","Percentage of translated learning outcomes");



//Admin- learning outcomes page
    define("t_active_courses","Active courses");
    define("t_active_courses1","Courses that the teacher has completed the form (at least one) with learning outcomes.");
    define("t_translate_error","Error, please select translation language.");
    define("t_translate_active","Translate Learning Outcomes of Active Courses");

//Admin- learning outcomes page
    define("t_translated_courses","Active Translated Courses");
    define("t_translated_courses2","Percentage of translated learning outcomes");
    define("t_translated_courses3","View");
    define("t_translated_courses4","Translated courses are those that have been translated all their learning outcomes.");
    define("t_documented_courses","Active Documented Courses");
    define("t_documented_courses1","Documented courses are those that have been translated all their learning outcomes AND their score(according to the model) has been saved.");

    define("t_results_by_course","Presentation of Results per lesson");
    define("t_results_by_school","Presentation of Results per Department");
    define("t_results","Aggregated University Results");

//Html
    define("t_hours_pweek","hours per week");
    define("t_hours","hours");
    define("t_copy","Copy");
// sign up
    define("t_firstname","Firstname");
    define("t_lastname","Lastname");
    define("t_email","E-mail");
    define("t_username","Username");
    define("t_password","Password");
    define("t_select_profile","Select Profile");
    define("t_professor","Professor");
    define("t_admin","Administrator");
    define("t_professor_admin","Professor/Administrator");

// IndexProfessor buttons
    define("t_index_professor_info","Edit (complete the outline of the lessons you teach) or print the outline
    of course in pdf file. Add HTML embed code to your website.");
    
// buttons
    define("t_next","Next");
    define("t_previous","Previous");
    define("t_finish","Finish");
    define("t_add","Add");
    define("t_update","Update"); 
    define("t_delete","Delete");
    define("t_delete_suc","Successfully deleted");
    define("t_update_suc","Successfully updated");
    define("t_edit","Edit");
    define("t_submit","Submit");
    define("t_print","Print");
    define("t_html","HTML");
    define("t_save","Save");
    define("t_close","Close");
    define("t_scroll_top","Click to return on the top page");  
    define("t_optional","Define type of the Course");  

    // Mathisiaka apotelesmata 
    define("t_mycourses","My Courses");
    define("t_course","Course");  
    define("t_course_description","COURSE DESCRIPTION");
    define("t_general","(1) GENERAL");
    define("t_School","School");
    define("t_school","SCHOOL");
    define("t_department","DEPARTMENT");
    define("t_level","LEVEL OF EDUCATION ");
    define("t_level1","Undergraduate");
    define("t_level2","Postgraduate");
    define("t_level3","PhD");
    
    define("t_lesson_code","COURSE CODE");
    define("t_course_title","COURSE TITLE");
    define("t_semester0","Semester");
    define("t_semester","SEMESTER OF STUDIES");
    define("t_semester1","Semester of Studies");
    define("t_teaching_activities","TEACHING ACTIVITIES ");
    define("t_teaching_activities1","in the case of credits being awarded in distinct parts of the course eg. Lectures, Laboratory Exercises, etc. If credit units are awarded uniformly for the whole course, indicate the weekly hours of teaching and the total number of credits. ");
    define("t_comment","The teaching organization and the teaching methods are described in detail in (4).");
    
    define("t_teaching_activities_name1","Lectures");
    define("t_teaching_activities_name2","Laboratories");
    define("t_teaching_activities_name3","Tutorial Exercises");
    define("t_teaching_activities_name4","Laboratories/Tutorial Exercises");

    define("t_total","Total");

    define("t_teaching_hours","WEEKLY TEACHING HOURS");
    define("t_credit_units","CREDITS");
    define("t_course_type","COURSE TYPE");
    define("t_prerequisite_courses","PREREQUISITE COURSES");
    define("t_language","LANGUAGE OF TEACHING AND EXAMINATIONS");
    define("t_language1","Greek");
    define("t_language2","English");
    
    define("t_erasmus","THE COURSE IS OFFERED TO ERASMUS STUDENTS");
    define("t_yes","Yes");
    define("t_no","No");
    define("t_url","COURSE WEBSITE (URL)");
    define("t_2learning_outcomes","(2) LEARNING OUTCOMES");

    define("t_tooltip_general","Fill in the course type and it's web page, if exists. It's general elements
    course, have already been completed by the administrator according to the department's study guide.");
    define("t_tooltip_learn_outcomes","In this section complete the learning outcomes, that is, what the student will be able to know, understand and can do after completing a learning process.
    The learning outcomes should start with the following sentence:<br>Upon successful completion of the course the student will be able to."."<br />"."At the beginning of the sentence we select the verb that indicates energy (left of form) according to Bloom's taxonomy.
    This verb follows an object of the verb, as well as a short phrase that gives a summary of the meaning of the learning outcome (right in the form)."."<br />"."You can write as many learning outcomes as you like but make sure the most important ones are at the top of the list as they will select the first seven, which is the limit, for printing.
    Move the entire sentence to the desired position by tapping the arrows left near the verbs."."<br />"."Avoid complex sentences. If a complex proposal is required, two or more proposals are proposed for the sake of clarity. ");
    define("t_learning_outcomes","Learning Outcomes");
    define("t_learning_outcomes_","Presentation of Learning Outcomes");
    define("t_learning_outcomes0","Documentation of Learning Outcomes");
    define("t_learning_outcomes1","The learning outcomes of the course describe the specific knowledge, skills and competences of an appropriate level that students will acquire after successfully completing the course.");
    define("t_learning_outcomes2","Refer to Appendix A.");
    define("t_learning_outcomes3","• Description of the Level of Learning Outcomes for each course of study in line with the European Higher Education Area Qualifications Framework");
    define("t_learning_outcomes4","• Descriptive Indicators of Levels 6, 7 & 8 of the European Qualifications Framework for Lifelong Learning and Annex B");
    define("t_learning_outcomes5","• Learning Outcomes Writing Guide");
    define("t_learning_outcomes_begin","After completing this course the student will be able to:");

    define("t_tooltip_general_capabilities","
    Select the elements that you think the student will have acquired (or improved) after completing the course.
    A check is performed here, in section (4) TEACHING ORGANIZATION, to justify the choices made by the user-tutor. Therefore make sure that the generic capability you choose has the corresponding workload in section (4). ");
    define("t_general_capabilities","Generic Skills");
    define("t_general_capabilities0","Generic Skills the course enhances");
    define("t_general_capabilities1","Considering the general competencies that the graduate must have acquired (as listed in the Diploma Supplement and below), which one(s) the course enhances?"); 
    define("t_general_capabilities2","Search, analyze and synthesize data and information, using the necessary technologies");
    define("t_general_capabilities3","Adapt to new situations");
    define("t_general_capabilities4","Decision making");
    define("t_general_capabilities5","Autonomous work");
    define("t_general_capabilities6","Teamwork");
    define("t_general_capabilities7","Work in an international environment");
    define("t_general_capabilities8","Working in an interdisciplinary environment");
    define("t_general_capabilities9","Producing new research ideas");
    define("t_general_capabilities10","Project design and management");
    define("t_general_capabilities11","Respect for diversity and multiculturalism");
    define("t_general_capabilities12","Respect for the natural environment");
    define("t_general_capabilities13","Demonstration of social, professional and moral responsibility and sensitivity to gender issues");
    define("t_general_capabilities14","Exercise of criticism and self-criticism");
    define("t_general_capabilities15","Promote free, creative and inductive thinking");
    define("t_general_capabilities16","......Other ...");
    
    define("t_tooltip_course_content","Complete the content of the course in a comprehensive way (formulated so far in the study guides)");
    define("t_3course_content","(3) COURSE CONTENT");
    define("t_course_content","COURSE CONTENT");
    define("t_course_content1","Course Content ");
    define("t_4teaching_methods","(4) TEACHING AND LEARNING METHODS - EVALUATION");
    define("t_lecture_method","LECTURE METHOD ");

    define("t_tooltip_use_of_technology","First, fill in the course method (face to face or distance learning). Then fill the use of information and communication technologies, if any in teaching, in laboratory training or in communicating with the student.
    Such an example is the forums used in some courses. "." <br /> "." Fill in the hours that the student should devote to specific activities. The first four fields are completed
    automatically according to the choices of weekly module teaching hours. The next fields should be consistent with your choices in section (3) General Skills. Otherwise an error message will appear. "." <br /> "." 
    Finally select the way you assess students. "); 

    define("t_use_of_technlogy","USE OF INFORMATION AND COMMUNICATION TECHNOLOGIES ");
    define("t_use_of_technlogy1","ICT in Teaching, in Laboratory Education, in Communication with Students");
    define("t_teaching_organisation","TEACHING ORGANIZATION");
    define("t_teaching_organisation0","Teaching organization");
    define("t_teaching_organisation1","Describe in detail the way and methods of education.");
    define("t_teaching_organisation2","Lectures, Seminars, Laboratory Exercise, Field Exercise, Study & Analysis of Bibliography, Tutorial, Practice (Placement), Clinical Exercise, Artistic Lab, Interactive Teaching, Educational Visits, Project Work, etc .");
    define("t_teaching_organisation3","The student's study hours for each learning activity and the hours of non-guided study according to the ECTS principles are mentioned.");
    define("t_organisation_comment","Comments about the Teaching Organisation");
    define("t_activity","Educational Activity");
    define("t_workload","Workload of Semester (13 weeks * hours per week)");
    define("t_total_course","Total Course (25 hours of workload per unit of credit)");
    define("t_assess","Assessment");
    define("t_assessment","STUDENTS ASSESSMENT");
    define("t_assessment_language","Assessment Language:  ");
    define("t_assessment1","Collective / Concluding (for student degree) assessment"); 
    define("t_assessment2","Assessment Language, Assessment Methods, Formative or Summative, Multiple Choice Questions, Short Answers Questions, Free Text Questions, Problem Solving, Written Project, Essay / Report, Oral Examination, Public Presentation, Laboratory Work, Clinical Examination, Artistic Performance, Other.");
    define("t_assessment3","Well defined student assessment criteria are mentioned. Mention whether and how the students can access them.");
    define("t_assessment_comment","Comments about the Students Assessment");
    define("t_recommended_bibliography","RECOMMENDED-BIBLIOGRAPHY");
    define("t_recommended_bibliography0","Recommended Bibliography");

    define("t_bibliography_tooltip","It refers to the course literature, the a list of books and / or articles you recommend to students for the study of the course.");
    define("t_5bibliography","(5) Suggested Bibliography / Related scientific journals");
    
    define("t_pending","There is some unfinished");
    
?>
