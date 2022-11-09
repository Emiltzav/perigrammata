



<div class="container py-2 ">
    <div class="mycontainer1 text-center">
   
        <form method="post"> 
            <input type="submit" name="button1" class="btn myblue1 font-weight-bold text-white" style="width: 250px;"
                    value="<?php echo t_professor; ?>"/>   <img src="<?php echo URL; ?>/public/img/prof.png" alt="Logo" height="70" width="30"> </input>
            <br>
            <br>
            <input type="submit" name="button2" class="btn myblue1 font-weight-bold text-white" style="width: 250px;"
                    value="<?php echo t_admin; ?>"/> <img src="<?php echo URL; ?>/public/img/admin.png" alt="Logo" height="70" width="30"> </input>
        </form> 
    </div>

    <div class="animated zoomIn slow">  
        <?php
        if(isset($_POST['button1'])) { 
            $professorCourses = $this->CourseModel->getAllProfessorCourses($_SESSION['user_id']);
            require APP . 'views/home/IndexProfessor.php'; 
        } 
        if(isset($_POST['button2'])) { 
            
            $db_username = 'perigrammata_db';
            $db_password = '@ad1p_c0urses_29_01_2020';
            $conn = new PDO('mysql:host=db;dbname=perigrammata_db;charset=utf8;port=3306', 
            $db_username, $db_password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET UTF8"));
    
            $stmt = $conn->prepare("SELECT * FROM admin WHERE UserId = ?");   
            $stmt->execute([$_SESSION['user_id']]);   
            $stmt->execute(); 
            $admin = $stmt->fetchAll(); // get the mysqli result

            $superAdminFlag = 0;
            $institutionAdminFlag = 0;
            $schoolAdminFlag = 0;
            $syllabusAdminFlag = 0;

            foreach ($admin as $Id => $row ) {

                $admin_id = $row['AdminId'];

                // institution admin
                if($admin_id == 1) {   
                    $institutionAdminFlag = 1;  
                    $managedInstitutionId = $row['ManagedDepartmentId'];
                    $_SESSION['managedInstitutionId'] = $managedInstitutionId; 
                    $_SESSION['admin_id'] = 1;
                }

                // school admin
                if($admin_id == 2) { 
                    $schoolAdminFlag = 1;    
                    $managedSchoolId = $row['ManagedDepartmentId'];   
                    $_SESSION['managedSchoolId'] = $managedSchoolId; 
                    $_SESSION['admin_id'] = 2;  
                    $_SESSION['user_role_title'] = "ΣΧΟΛΗΣ"; 
                }

                // syllabus admin
                if($admin_id == 3) {  
                    $syllabusAdminFlag = 1;   
                    $managedSyllabusId = $row['ManagedDepartmentId'];
                    $_SESSION['managedSyllabusId'] = $managedSyllabusId; 
                    $_SESSION['admin_id'] = 3;
                }

                // super admin 
                if($admin_id == 4) {   
                    $superAdminFlag = 1;
                    $_SESSION['admin_id'] = 4;
                } 

            }

            require APP . 'views/home/IndexAdmin.php'; 
        } 
        ?> 
    </div>

    <!-- <h2 class="text-center">Welcome to my App</h2>
    <div class="text-center py-2">
    
        <a href="< ?php echo URL; ?>StudentController/StudentPage1?MsgId=1" class="btn myblue1 font-weight-bold text-white" style="width: 250px;">
        <img src="< ?php echo URL; ?>/public/img/prof.png" alt="Logo" height="70" width="30">  < ?php echo t_professor; ?>
        </a>
        <br>
        <a href="< ?php echo URL; ?>StudentController/StudentPage1?MsgId=1" class="btn myblue1 font-weight-bold text-white" style="width: 250px;">
        <img src="< ?php echo URL; ?>/public/img/admin.png" alt="Logo" height="70" width="30">  < ?php echo t_admin; ?>
        </a>
    </div> -->
    <br>
</div>

