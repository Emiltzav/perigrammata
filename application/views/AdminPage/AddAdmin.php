<!-- add admin form -->

<div class="container px-5 py-4">
    <form class="text-center border border-light " method="post" action="<?php echo URL; ?>AccountController/register" name="registerform">
        <h5 class="card-header myblue1 white-text text-center py-4">
            <strong><?php echo t_add_admin; ?></strong>
        </h5>
    
        <input class="form-control mb-4 w-100 border" type="text" name="FirstName" placeholder="<?php echo t_firstname; ?>" required />
        <input  class="form-control mb-4 w-100 border" type="text" name="LastName" placeholder="<?php echo t_lastname; ?>" required />  
        <input  class="form-control mb-4 w-100 border" type="text" name="UserName" placeholder="<?php echo t_username; ?>" required />

        <select id="roleSelection" class="browser-default custom-select mb-4" name = "ProfileId" onchange="roleSelected()">
            <option value = "" disabled> <?php echo t_select_profile; ?></option>
            <option value = "a"> <?php echo t_admin_1; ?></option>
            <option value = "b"> <?php echo t_professor_1; ?></option>
            <option value = "c"> <?php echo t_professor_admin; ?></option>
        </select>   
        
        <select id="adminRoleSelection" class="browser-default custom-select mb-4" name = "ProfileId" onchange="adminSelected()">
            <option value = "" disabled> <?php echo t_select_profile; ?></option>
            <option value = "1"> <?php echo t_admin_institution; ?></option>
            <option value = "2"> <?php echo t_admin_school; ?></option>
            <option value = "3"> <?php echo t_admin_syllabus; ?></option>
            <option value = "4" selected> <?php echo t_super_admin; ?></option>
        </select> 
   
        <!--- admin type options --->  
        <select style="display:none;" id="ChooseInstitution" class="browser-default custom-select mb-4" name = "Institution">
            <option value = "" disabled> <?php echo t_select_institution; ?></option>
            <?php
            foreach ($institutions as $Id => $row ) {
                $selected= '';
                echo "<option value='" . $row['Id'] . "' " . $selected . ">" . $row['InstitutionName'] . "</option>";
            } ?>
        </select>

        <select style="display:none;" id="ChooseSchool" class="browser-default custom-select mb-4" name = "School">
            <option value = "" disabled> <?php echo t_select_school; ?></option>
            <?php
            foreach ($schools as $Id => $row ) {
                $selected= '';
                echo "<option value='" . $row['Id'] . "' " . $selected . ">" . $row['SchoolName'] . "</option>";
            } ?>
        </select>  

        <select style="display:none;" id="ChooseSyllabus" class="browser-default custom-select mb-4" name = "Department">
            <option value = "" disabled> <?php echo t_select_syllabus; ?></option>
            <?php
            foreach ($departments as $Id => $row ) {
                $selected= '';
                echo "<option value='" . $row['Id'] . "' " . $selected . ">" . $row['DepartmentName'] . "</option>";
            } ?>
        </select>  
    
        <!-- the email input field uses a HTML5 email type check -->
        <button class="btn btn-light btn-block" type="submit" name="register" value="Register"><?php echo t_signup; ?> </button>

        <script>
        function roleSelected() {    
            var roleSelected = document.getElementById("roleSelection").value;
            if(roleSelected == "a" || roleSelected == "c") {
                document.getElementById("adminRoleSelection").style.display = "block";
            }  
            else {
                document.getElementById("adminRoleSelection").style.display = "none";
            }
            //document.getElementById("demo").innerHTML = "You selected: " + x;
        }

        function adminSelected() {  
            var roleSelected = document.getElementById("adminRoleSelection").value;
            if(roleSelected == "1") {
                document.getElementById("ChooseInstitution").style.display = "block";
                document.getElementById("ChooseSchool").style.display = "none";
                document.getElementById("ChooseSyllabus").style.display = "none";
            } else if(roleSelected == "2") {
                document.getElementById("ChooseSchool").style.display = "block";
                document.getElementById("ChooseInstitution").style.display = "none";
                document.getElementById("ChooseSyllabus").style.display = "none";
            } else if(roleSelected == "3") {
                document.getElementById("ChooseSyllabus").style.display = "block";
                document.getElementById("ChooseInstitution").style.display = "none";
                document.getElementById("ChooseSchool").style.display = "none";
            } 
            else {
                document.getElementById("ChooseInstitution").style.display = "none";
                document.getElementById("ChooseSchool").style.display = "none";
                document.getElementById("ChooseSyllabus").style.display = "none";
            }
            //document.getElementById("demo").innerHTML = "You selected: " + x;
        }  
        </script>

        
    </form>
</div>
