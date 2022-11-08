<div id="wrapper">
    <div id="left">
        <div class="split left ">
            <div class="centered text-light ">
                <img src="<?php echo URL; ?>/public/img/5.png" alt="Logo">
                <div class="showcase-text ">
                    <h2 ><?php echo t_welcome ; ?></h2>
                    <p>
                        <?php echo t_paragraph.' '; ?>
                       
                         <a class="font-weight-bold" data-toggle="modal" data-target="#info_gr_en"><?php echo t_here .'.';?></a>    
                     
                      
                    
                    </p>
                </div>
            </div>
        </div>
        <!-- info_en -->
        <div class="modal  animated zoomIn" id="info_gr_en" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLabel"><img src="<?php echo URL; ?>/public/img/logo.png" alt="Logo" height="30" width="50"> <?php echo t_modal_welcome ;?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="animated fadeIn delay-1s">
                    
                    <img class="mt-5" style="position:absolute;" src="<?php echo URL; ?>/public/img/prof.png" alt="Logo" height="70" width="30"> 
                    <?php echo t_info0; ?>
                        <ul style=" list-style:none;">
                        
                            <li><i class="fas fa-check text-success"></i> <?php echo t_info1; ?></li>
                            <li><i class="fas fa-check text-success"></i> <?php echo t_info2; ?></li>
                            <li><i class="fas fa-check text-success"></i> <?php echo t_info3; ?></li>
                            <li><i class="fas fa-check text-success"></i> <?php echo t_info4; ?></li>

                        </ul>
                    </div>
                    <div class="animated fadeIn delay-2s">
                    <img class="mt-5" style="position:absolute;" src="<?php echo URL; ?>/public/img/stud.png" alt="Logo" height="70" width="30">    
                    <?php echo t_info5; ?>
                        <ul style=" list-style:none;">
                            <li><i class="fas fa-check text-success"></i> <?php echo t_info6; ?></li>
                            <li><i class="fas fa-check text-success"></i> <?php echo t_info7; ?></li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal"><?php echo t_close;?></button>
                
                </div>
                </div>
            </div>
        </div>
        
    </div>
    
    <div id="right">
        
        <div class="change_language ">
            <i class="fas fa-globe" style="color:#007bff;"></i> <a href="<?php echo URL; ?>home/ChangeLanguage?lang=gr">ΕΛ</a> | <a href="<?php echo URL; ?>home/ChangeLanguage?lang=en">ΕΝ</a>
        </div>
        <div id="signin" class="mycontainer1 mt-2">
            <div class="logo">
                <a href="https://tuc.gr" target="_blank">
                    <img src="https://www.nbg.gr/greek/nbgseeds/partners/PublishingImages/logo_TUC.png" alt="TUC">
                </a>
            </div>
            <!-- CHANGES:
                1. AccountController/login to AccountController/ldaplogin
                2. UsernameOrEmail to UserNameLdap
                3. Password to PasswordLdap
                -->
            <form method="POST" action="<?php echo URL; ?>AccountController/ldaplogin" name="loginform"  >
                <div class="md-form">
                    <span class="prefix icon mt-2"><i class="material-icons">person_outline</i></span>
                    <input type="text" id="login_input_username" class="form-control" name="UserNameLdap" required>
                    <label for="login_input_username"><strong><?php echo t_username; ?></strong></label>
                </div>
                <div class="md-form">
                    <span class="prefix icon mt-2"><i class="material-icons ">lock_outline</i></span>
                    <input type="password" id="login_input_password" class="form-control " name="PasswordLdap"  required>
                    <label for="login_input_password"><?php echo t_password; ?></strong></label>
                </div>
                <div class="mt-5">
                    <button type="submit" name ="submit" value="Login" class="primary-btn_">
                        <!-- <i class="fas fa-arrow-circle-right fa-2x"></i>  -->
                        <span><?php echo t_login; ?>  &rarr;</span>   
                    </button>
                </div>
            </form>
        
            <footer id="main-footer">
                <p> <i class="far fa-paper-plane"></i> <a href="mailto:exanthakis@isc.tuc.gr">Xanthakis Emmanouil</a>, Technical University Of Crete</p>
            </footer>
        </div>
    </div>









