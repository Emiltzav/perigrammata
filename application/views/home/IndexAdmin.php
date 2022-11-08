

<div id="outer" class="text-center">

    <?php if ($superAdminFlag == 1) { ?>
    <div style="display: inline-block;">
        <a href="<?php echo URL; ?>AdminController/CreateInstitution1" class="btn btn-light" style="width: 240px; height: 60px;">
            <?php echo t_create_institution; ?>    
        </a> 
    </div>  
    <?php } ?>  
    
    <?php if ($superAdminFlag == 1 || $institutionAdminFlag == 1) { ?>
    <div style="display: inline-block;">
        <a href="<?php echo URL; ?>AdminController/CreateSchool1" class="btn btn-light" style="width: 240px; height: 60px;">
            <?php echo t_create_school; ?> 
        </a>
    </div>     
    <?php } ?>      

    <?php if ($superAdminFlag == 1) { ?>
    <div style="display: inline-block;">
        <a href="<?php echo URL; ?>AdminController/CreateDepartment1" class="btn btn-light" style="width: 240px; height: 60px;">
            <?php echo t_create_department; ?> 
        </a>  
    </div>   
    <?php } ?>

    <div style="display: inline-block;">
        <a href="<?php echo URL; ?>AdminController/CreateCourse1" class="btn btn-light" style="width: 240px; height: 60px;">
            <?php echo t_create_course; ?> 
        </a>
    </div>

    <br><br>
    
    <?php if ($superAdminFlag == 1) { ?>
    <div style="display: inline-block;">
        <a href="<?php echo URL; ?>AdminController/AddAdmin" class="btn btn-light " style="width: 240px; height: 60px;">
            <?php echo t_add_admin; ?> 
        </a>
    </div>
    <?php } ?>      
    
    <?php if ($superAdminFlag == 1) { ?>
    <div style="display: inline-block;">
        <a href="<?php echo URL; ?>AdminController/AddVerb" class="btn btn-light" style="width: 240px; height: 60px;">
            <?php echo t_add_verb; ?> 
        </a>
    </div>    
    <?php } ?>  

    <br><br>     
    
    <?php if ($superAdminFlag == 1) { ?>
    <div style="display: inline-block;">
        <a href="<?php echo URL; ?>AdminController/MyInstitutions" class="btn btn-light" style="width: 240px; height: 60px;">
            <?php echo t_institutions_list; ?>    
        </a>   
    </div>
    <?php } ?>  
    
    <?php if ($institutionAdminFlag == 1) { ?>
    <div style="display: inline-block;">
        <a href="<?php echo URL; ?>AdminController/MySchools" class="btn btn-light" style="width: 240px; height: 60px;">
            <?php echo t_schools_list; ?> 
        </a>   
    </div>
    <?php } ?>

    <?php if ($superAdminFlag == 1) { ?>
    <div style="display: inline-block;">
        <a href="<?php echo URL; ?>AdminController/AllSchools" class="btn btn-light" style="width: 240px; height: 60px;">
            <?php echo t_schools_list; ?> 
        </a>   
    </div>
    <?php } ?>
    
    <?php if ($superAdminFlag == 1) { ?>
    <div style="display: inline-block;">
        <a href="<?php echo URL; ?>AdminController/MySyllabus" class="btn btn-light" style="width: 240px; height: 60px;">
            <?php echo t_syllabus_list; ?> 
        </a>   
    </div>
    <?php } ?>
    
    <div style="display: inline-block;">
        <a href="<?php echo URL; ?>AdminController/AllCourses" class="btn btn-light" style="width: 240px; height: 60px;">
            <?php echo t_courses_list; ?> 
        </a>
    </div>
    
    <?php if ($superAdminFlag == 1) { ?>
    <div style="display: inline-block;">
        <a href="<?php echo URL; ?>AdminController/UserRequests" class="btn btn-light" style="width: 240px; height: 60px;">
            <?php echo t_users_list; ?> 
        </a>
    </div>  
    <?php } ?>   

    <br><br>   
    
    <?php if ($superAdminFlag == 1) { ?>
    <div style="display: inline-block;">
        <a href="<?php echo URL; ?>AdminController/OutcomeList" class="btn btn-light" style="width: 240px; height: 60px;">
            <?php echo t_outcomes_list; ?> 
        </a>
    </div>
    <?php } ?>
    
    <?php if ($superAdminFlag == 1) { ?>
    <div style="display: inline-block;">
        <a href="<?php echo URL; ?>AdminController/LearningOutcomes" class="btn btn-light" style="width: 240px; height: 60px;">
            <?php echo t_learning_outcomes0; ?> 
        </a>   
    </div>
    <?php } ?>
    
    <?php if ($superAdminFlag == 1) { ?>
    <div style="display: inline-block;">
        <a href="<?php echo URL; ?>AdminController/DocumentLearningOutcomes" class="btn btn-light" style="width: 240px; height: 60px;">
            <?php echo t_learning_outcomes_; ?> 
        </a>
    </div>  
    <?php } ?>
        
    <br>

</div>
