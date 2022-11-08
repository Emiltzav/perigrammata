<section class="container py-5">
    <div id="edit_institution">   
        <form method="POST" action="<?php echo URL; ?>AdminController/updateInstitution" name="institutionform">
            <h4 class="text-center"> <?php echo t_institution_description;?> </br> </h4>
            
            <div class="table-wrapper table-responsive py-2" >
                <table class="table table-bordered table-hover mt-0">
                    <input type="hidden" name='InstitutionId' value="<?php echo $InstitutionId;?>"/>  
                    
                    <th class="font-weight-bold myblue1 text-white"><?php echo t_language;?></th>  
                    <td colspan="4">
                        <input class="form-control form-control-sm " name='LanguageOfTeaching' value="<?php echo $LanguageOfTeaching;?>" readonly/>
                    </td> 
                    <tr>
                        <th class="font-weight-bold myblue1 text-white">
                            <?php echo t_institution_title0;?>
                        </th>
                        <td colspan="4">
                            <input class="form-control form-control-sm " name='InstitutionName' value="<?php echo $InstitutionName;?>"/>
                        </td>
                    </tr>
                    <tr>
                </table>
            </div>
            <div class="text-center">
                <button type="submit" name="finish_creation" class="btn btn-light"><?php echo t_finish;?></button>
            </div>
            </br>
        </form>
    </div>
</section>