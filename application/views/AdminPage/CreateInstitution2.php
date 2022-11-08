<section class="container py-5">
        <div id="create_institution">
            <form method="POST" action="<?php echo URL; ?>AdminController/saveInstitution" name="institutionform">
                <h4 class="text-center font-weight-bold"> <?php echo t_institution_description;?> </br> </h4>

                <div class="table-wrapper table-responsive py-3" >    
                <table class="table table-bordered table-hover mt-0" >       
                    <tr style="padding:0 !important;margin:0 !important;">
                        <th scope="row" class="font-weight-bold myblue1 text-white"><?php echo t_language;?></th>
                        <td colspan="4">
                            <input class="form-control form-control-sm " name='TeachingLang' value="<?php echo $teaching_lang_selected;?>" readonly />
                            <input type='hidden' name='langId' value="<?php echo $langId_selected;?>" />
                        </td>                   
                        <tr>                              
                            <th scope="row" class="font-weight-bold myblue1 text-white">
                                <?php echo t_institution_title; ?>    
                            </th>
                            <td colspan="4">
                                <input class="form-control form-control-sm " name='InstitutionTitle'></input>
                            </td>
                        </tr>
                    </tr>     
                </table>
                </div>    
                <br>
                <div class="text-center">
                    <button type="submit" name="finish_creation" class="btn btn-light"><?php echo t_finish;?></button>
                </div>
                </br>
            </form>
        </div>

</section>