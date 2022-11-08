<section class="main-container py-5">
    <div class="container">   
        <div id="create_course">
            <form method="POST" action="<?php echo URL; ?>AdminController/CreateInstitution2" name="professorform">
                <h4 class="text-center font-weight-bold"> <?php echo t_institution_description;?> </br> </h4>

                <div class="table-wrapper table-responsive py-3" >                            
                    <table class="table table-bordered ">
                    <tr>
                        <th class="font-weight-bold myblue1 text-white text-left px-3" ><?php echo t_language;?></th>
                        <td colspan="4"> 
                            <?php
                                echo "<select class='browser-default custom-select' name='LanguageOfTeaching' id='LanguageOfTeaching'>";
                                foreach ($teaching_lang as $Id => $row ) {
                                    echo "<option value='" . $row['Id'] . "'>" . $row['LanguageOfTeaching'] . "</option>";
                                }
                                echo "</select>";
                            ?>
                        </td>
                    </tr>
                    
                    </table>
                </div>

                <button type="submit" name="next" class="btn btn-light next"><?php echo t_next;?></button>
                </br>
            </form>
        </div>
    </div>
</section>
