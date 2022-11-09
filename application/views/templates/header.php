
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 

 <!--   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">


    <meta
      name="description"
      content="Perigrammata is a web-based information system for the documentation and exploitation of the learning outcomes of university schools."
    />


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>  

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>  

    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>  

    <!--- 25-07-2022 --->

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <!--- 25-07-2022 --->


   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous"> -->
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!--  Materialize icons  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/style.css"/>
    <!-- MDBootstrap Datatables  -->
    <link href="<?php echo URL; ?>public/css/datatables.min.css" rel="stylesheet">
    
    <!-- MDBootstrap flags -->
    <!-- <link href="< ?php echo URL; ?>public/css/flag.min.css" rel="stylesheet"> -->
    
    <link rel="icon" href="<?php echo URL; ?>/public/img/logo.png">
    <title> Perigrammata |  Information System for the Documentation of the Learning Outcomes  </title>  
 
</head>
<body class="notranslate " >
  
    <?php if (isset($_SESSION['logged'])) : ?>
       
        <form action="<?php echo URL; ?>AccountController/doLogout" method="POST">
        <!--Navbar -->
            <nav class="mb-1 navbar navbar-expand-lg navbar-dark myblue py-3"  id="topSection">

            <a class="navbar-brand" href="<?php echo URL; ?>home"><img src="<?php echo URL; ?>/public/img/logo2.png" height="40" width="65" alt="TUC" >  <?php echo t_home; ?></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
                aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                <ul class="navbar-nav ml-auto">
                  
                    <li class="nav-item active">
                        <a class="nav-link" href="#">
                        <!-- <i class="far fa-user-circle"></i> -->
                        <?php if ($_SESSION['user_profile']==2){?>
                        <img  src="<?php echo URL; ?>/public/img/prof.png" alt="Logo" height="50" width="20">

                        <?php }else if ($_SESSION['user_profile']==1){?>
                            <img  src="<?php echo URL; ?>/public/img/admin.png" alt="Logo" height="50" width="20">
                        <?php }else{?>
                            <img  src="<?php echo URL; ?>/public/img/stud.png" alt="Logo" height="50" width="20">
                        <?php }
                        
                        echo $_SESSION['user_username'] ?>
                        <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item my-auto">
                        <a class="nav-link" href="<?php echo URL; ?>home/ChangeLanguage?lang=gr">
                        <i class="fas fa-globe"></i> ΕΛ
                        <!-- <span class="sr-only">(current)</span> -->
                        </a>
                    </li>
                    <li class="nav-item my-auto">
                        <a class="nav-link" href="<?php echo URL; ?>home/ChangeLanguage?lang=en">
                        <i class="fas fa-globe"></i> EN
                        </a>
                    </li>
                    <li class="nav-item my-auto">                   
                        <button class="btn btn-outline-white btn-md my-2 my-sm-0 " type="submit" name="submit" value="Logout"><i class="fas fa-sign-out-alt"></i><?php echo t_logout; ?></button>
                    </li>
                 
                </ul>
            </div>
            </nav>
       
        </form>  
        
    <?php endif ; ?>
    

    <div class="message">
    <?php
        if( isset( $_SESSION['g_message'] ) && $_SESSION['g_message'] != '' )
        {
            //SUCCESS MODAL
            if($_SESSION['g_message']=='You have been registered successfully ' || $_SESSION['g_message']=='Success '|| 
            $_SESSION['g_message']=='Success' ||  $_SESSION['g_message']=='New Course added successfully.' ||  
            $_SESSION['g_message']=='The Course updated successfully.' || $_SESSION['g_message'] =='Successfully deleted' || $_SESSION['g_message'] =='Successfully updated'){
                echo "<script type='text/javascript'>
                $(document).ready(function(){
                $('#centralModalSuccess').modal('show');
                });
                </script>";
            }//DANGER MODAL
            else  if($_SESSION['g_message']=='Wrong User Details ' || $_SESSION['g_message']=='Sorry, that username / email address is already taken.' || 
            $_SESSION['g_message']=='You have not been confirmed yet ' || $_SESSION['g_message']=='Sorry, this course does not exist.' || 
            $_SESSION['g_message']=='Both Fields are required' || $_SESSION['g_message']=='Something get wrong!! ' || 
            $_SESSION['g_message']=='There is an error. Please try again  ' || $_SESSION['g_message']=='Could not connect to LDAP server' || $_SESSION['g_message']=='Error, you must choose at least one of the general abilities' ||
        $_SESSION['g_message']=='Εrror, your data has not been registered in the application database' || $_SESSION['g_message']== 'Sorry, this verb exists'  || $_SESSION['g_message']=='Εrror, students do not have access to the application yet' 
        || $_SESSION['g_message']=='Error, the same verb cannot be used twice!' || $_SESSION['g_message']=='Εrror, please select translation language'){
                echo "<script type='text/javascript'>
                $(document).ready(function(){
                $('#centralModalDanger').modal('show');
                });
                </script>";
            }
            else if( isset( $_SESSION['g_message'] ) && $_SESSION['g_message'] != ''){
                echo "<script type='text/javascript'>
                $(document).ready(function(){
                $('#myAdvert').modal('show');
                });
                </script>";


            } 

        }
    ?>

    <!-- Central Modal Medium Success -->
    <div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
        <div class="modal-dialog modal-notify modal-success" role="document">
            <!--Content-->
            <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <p class="heading lead"><?php echo t_success ; ?></p>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body">
                <div class="text-center text-dark">
                    <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
                    <p><?php
                    
                    if (isset($_SESSION['g_message']) && $_SESSION['g_message'] == 'You have been registered successfully '){
                        echo t_success_register;
                    }else if ( isset($_SESSION['g_message']) && ($_SESSION['g_message'] == 'Success ' || $_SESSION['g_message'] == 'Success')){
                        echo t_success;
                    }else if (isset($_SESSION['g_message']) && $_SESSION['g_message'] =='New Course added successfully.'){
                        echo t_success_new_course;
                    }else if (isset($_SESSION['g_message']) && $_SESSION['g_message'] =='The Course updated successfully.'){
                        echo t_success_update_course;
                    }else if  (isset($_SESSION['g_message']) && $_SESSION['g_message'] =='Successfully deleted'){
                        echo t_delete_suc;
                    }else if  (isset($_SESSION['g_message']) && $_SESSION['g_message'] =='Successfully updated'){
                        echo t_update_suc;
                    }else if (isset($_SESSION['g_message']) && $_SESSION['g_message'] =='New School added successfully.'){
                        echo t_success_new_school;
                    }else if (isset($_SESSION['g_message']) && $_SESSION['g_message'] =='The School updated successfully.'){
                        echo t_success_update_school;
                    }
                        // unset( $_SESSION['g_message'] );
                        ?>
                    </p>
                </div>
            </div>

            <!--Footer-->
            <div class="modal-footer justify-content-center">
                <a type="button" class="btn btn-success waves-effect text-white" data-dismiss="modal"><?php echo t_close ?></a>
            </div>
            </div>
            <!--/.Content-->
        </div>
    </div>




    <!-- Central Modal Medium Danger -->
    <div class="modal fade" id="centralModalDanger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-notify modal-danger" role="document">
        <!--Content-->
        <div class="modal-content">
        <!--Header-->
        <div class="modal-header">
            <p class="heading lead">
                <?php echo t_error; ?>
            </p>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="white-text">&times;</span>
            </button>
        </div>

        <!--Body-->
        <div class="modal-body">
            <div class="text-center">
                <i class="fas fa-exclamation-triangle fa-4x mb-3 animated rotateIn"></i>
                <p><?php
                    if (isset($_SESSION['g_message']) && $_SESSION['g_message'] == 'Wrong User Details '){
                        echo t_error_login1;
                    }else if (isset($_SESSION['g_message']) && $_SESSION['g_message'] == 'Sorry, that username / email address is already taken.'){
                        echo t_error_login2;
                    }else if (isset($_SESSION['g_message']) && $_SESSION['g_message']=='You have not been confirmed yet '){
                        echo t_error_login3;
                    }else if(isset($_SESSION['g_message']) && $_SESSION['g_message']=='Sorry, this course does not exist.'){
                        echo t_error_course;
                    }else if(isset($_SESSION['g_message']) && $_SESSION['g_message']=='Both Fields are required'){
                        echo t_error_required_fields;
                    }else if(isset($_SESSION['g_message']) && ( $_SESSION['g_message']=='Something get wrong!! ' || $_SESSION['g_message']=='There is an error. Please try again  ')){
                        echo t_error_on_save_course;
                    }else if (isset($_SESSION['g_message']) && $_SESSION['g_message']=='Could not connect to LDAP server'){
                        echo t_error_ldap_server;
                    }else if (isset($_SESSION['g_message']) && $_SESSION['g_message']=='Εrror, your data has not been registered in the application database'){
                        echo t_error_not_listed_proff;
                    }else if (isset($_SESSION['g_message']) && $_SESSION['g_message']=='Εrror, students do not have access to the application yet'){
                        echo t_error_stud_access;
                    }else if (isset($_SESSION['g_message']) && $_SESSION['g_message']=='Error, you must choose at least one of the general abilities'){
                        echo t_slang3;
                    }else if (isset($_SESSION['g_message']) && $_SESSION['g_message']=='Εrror, please select translation language'){
                        echo t_translate_error;
                    }else if(isset($_SESSION['g_message']) && $_SESSION['g_message']=='Sorry, this verb exists'){
                        echo t_error_verb;
                    }else if(isset($_SESSION['g_message']) && $_SESSION['g_message']=='Error, the same verb cannot be used twice!'){
                        echo t_error_verb1;
                    }

                    //echo $_SESSION['g_message'];
                    // unset( $_SESSION['g_message'] );
                    ?>
                </p>
            </div>        </div>

        <!--Footer-->
        <div class="modal-footer justify-content-center">
            <a type="button" class="btn btn-red " style="border:none !important;"  data-dismiss="modal"> <?php echo t_close ?></a>
        </div>
        </div>
        <!--/.Content-->
    </div>
    </div>
    <!-- Central Modal Medium Danger-->


    <!-- Modal -->
    <div class="modal fade" id="myAdvert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
            <i class="fas fa-info-circle mt-0"></i>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <?php
              if (isset($_SESSION['g_message']))
                echo $_SESSION['g_message'];
                unset( $_SESSION['g_message'] );
            ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            
            </div>
            </div>
        </div>
    </div>

</div>
