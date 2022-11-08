<!-- add admin form -->

<div class="container px-5 py-4">
    <form class="text-center border border-light " method="post" action="<?php echo URL; ?>AccountController/register" name="registerform">
        <h5 class="card-header myblue1 white-text text-center py-4">
            <strong><?php echo t_add_admin; ?></strong>
        </h5>
    
        <input class="form-control mb-4 w-100 border" type="text" name="FirstName" placeholder="<?php echo t_firstname; ?>" required />
        <input  class="form-control mb-4 w-100 border" type="text" name="LastName" placeholder="<?php echo t_lastname; ?>" required />  
        <input  class="form-control mb-4 w-100 border" type="text" name="UserName" placeholder="<?php echo t_username; ?>" required />

        <select class="browser-default custom-select mb-4" name = "ProfileId">
            <option value = "" > <?php echo t_select_profile; ?></option>
            <option value = "1"> <?php echo t_admin; ?></option>
            <option value = "2"> <?php echo t_professor; ?></option>
            <option value = "3"> <?php echo t_professor_admin; ?></option>
        </select>
    
        <!-- the email input field uses a HTML5 email type check -->
        <button class="btn btn-light btn-block" type="submit" name="register" value="Register"><?php echo t_signup; ?> </button>
    
        
    </form>
</div>
