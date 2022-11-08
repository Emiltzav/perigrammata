
<div class="mycontainer ">
    <div class="text-center mt-n3 mb-4 animated fadeIn  slower">  <img  src="<?php echo URL; ?>/public/img/logo.png" height="40" width="65" alt="TUC"></div>
    <div class="p-2 animated fadeIn  slower delay-1s">
       
        <h3 class="mytext"> <?php echo t_slang ;?></h3>

        <form class="customSelect" method="POST" action="<?php echo URL; ?>StudentController/StudentPage2" name="studentform">

            <div class="select ">
                <?php
                    echo "<select class='browser-default custom-select' name='languageOfTeaching' id='languageOfTeaching'>";
                    foreach ($teaching_lang as $Id => $row ) {
                        echo "<option value='" . $row['Id'] . "'>" . $row['LanguageOfTeaching'] . "</option>";
                    }
                    echo "</select>";
                ?>
            </div>
            <div class="text-center py-5">
                <button type="submit" name="next1" class="btn btn-light next"><?php echo t_next;?></button>
            </div>
        </form>
      

    </div>
    
</div>