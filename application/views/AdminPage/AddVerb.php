<!-- <section class="main-container"> -->
    <div class="p-5">

        <form class="add-verb-form" method="post" action="<?php echo URL; ?>AdminController/AddVerb">

            <table class="verb">
                <tr>
                    <th class="font-weight-bold myblue1 text-white">
                        <?php echo t_verb;?>
                    </th>
                    <th class="font-weight-bold myblue1 text-white">
                        <?php echo t_verb_level;?>
                    </th>
                </tr>
                <tr>
                    <td>
                        <input class="form-control form-control-sm m-0 w-100" type="text" name="Verb" required/>
                    </td>
                    <td>
                        <?php
                            echo "<select class='browser-default custom-select' name='verb_classification'>";
                            echo "<option value=''></option>";
                            foreach ($VerbClassification as $Id => $row ) {
                                echo "<option value='" . $row['Id'] . "'>" . $row['Classification']  . "</option>";
                            }
                            echo "</select>";
                        ?>
                    </td>
                    <td class="add">
                        <button class="btn btn-outline-info btn-rounded font-weight-bold rounded-pill" type="submit" name="AddVerb" value="AddVerb">
                            <?php echo t_add; ?> 
                        </button>
                    </td>
                </tr>
            <table>
        </form>
        
        </br>
        <div class="text-center font-weight-bold ">                  
            <span class="p-3 badge badge-warning "> 
                <?php 
                    if($_SESSION['lang']=='gr'){
                        echo 'Μετά την εισαγωγή ενός νέου ρήματος παρακαλώ εισάγεται το ίδιο και στην άλλη γλώσσα και συνδέστε τα μέσω της παρακάτω φόρμας για την σωστή λειτουργία των μοντέλων';
                    }else if($_SESSION['lang']=='en'){
                        echo 'After entering a new verb please enter the same in the other language and connect them via the form below for the correct operation of the models';

                    }
                ?>
            </span>
        </div>
        </br>

        <form class="add-verb-form" method="post" action="<?php echo URL; ?>AdminController/MakeVerbMatching">
            <table class="verb">
                <tr>
                    <th class="font-weight-bold myblue1 text-white">
                        <?php      
                            if($_SESSION['lang']=='en'){
                                echo t_verb.' - Greek';
                            }else{
                                echo t_verb.' - Ελληνικά';
                            }
                        ?>
                    </th>
                    <th class="font-weight-bold myblue1 text-white">
                        <?php      
                            if($_SESSION['lang']=='en'){
                                echo t_verb.' - English';
                            }else{
                                echo t_verb.' - Αγγλικά';
                            }
                        ?>
                    </th>
                </tr>
                <tr>
                    <td>
                        <?php
                            echo "<select class='browser-default custom-select' name='verb_el'>";
                            echo "<option value=''></option>";
                            foreach ($allGreekVerbs as $Id => $row ) {
                                echo "<option value='" . $row['Id']. "'>" .$row['Verbs']  .'('.$row['Classification'].')'  . "</option>";
                            }
                            echo "</select>";
                        ?>
                    </td>
                    <td>
                        <?php
                            echo "<select class='browser-default custom-select' name='verb_en'>";
                            echo "<option value=''></option>";
                            foreach ($allEnglishVerbs as $Id => $row ) {
                                echo "<option value='" . $row['Id'] . "'>".$row['Verbs']  .'('.$row['Classification'].')'   . "</option>";
                            }
                            echo "</select>";
                        ?>
                    </td>
                    <td class="add">
                        <button class="btn btn-outline-info btn-rounded font-weight-bold rounded-pill" type="submit" name="MakeMatching" value="MakeMatching">
                            <?php echo t_add; ?> 
                        </button>
                    </td>
                </tr>
            <table>
        </form>
        <!-- getVerbs -->




        <!--  -->
        <div class="table-responsive "  >
            <table id="dtEnglishVerbs" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%" >
                <thead class="myblue1 text-white">
                <tr>
                    <th class="th-sm font-weight-bold"><?php echo t_verbs;?></th>
                    <th class="th-sm font-weight-bold"><?php echo t_select_verb_classification;?></th>
                    <th class="th-sm font-weight-bold"><?php echo t_delete;?></th>
                    <th class="th-sm font-weight-bold"><?php echo t_edit;?></th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($allEnglishVerbs as $Id => $row ){ ?>
                        <tr>
                            <td><?php echo "<option name='VerbId' value='" . $row['Id'] . "'>" . $row['Verbs'] . "</option>" ?></td>
                            <td><?php echo "<option value='" . $row['Id'] . "'>" . $row['Classification'] . "</option>" ?> </td>
                            
                            <td>
                                <a href="<?php echo URL . 'AdminController/deleteVerb?VerbId=' . $row['Id'] ?>">
                                    
                                    <button type="button" class="btn btn-outline-danger btn-rounded btn-sm my-0 rounded-pill font-weight-bold">
                                    <i class="far fa-trash-alt"></i> <?php echo t_delete;?>
                                    </button>
                                        
                                
                                </a>
                            </td>
                            <td>
                                <a href="<?php echo URL . 'AdminController/editVerb?VerbId=' . $row['Id'] ?>">
                                    <button type="button" class="btn btn-outline-info btn-rounded btn-sm my-0 rounded-pill font-weight-bold">
                                        <i class="fas fa-pencil-alt"></i> <?php echo t_edit;?>
                                    </button>
                                    
                                
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!--  -->
        <br>
        <div class="p-5">
        <div class="table-responsive"  >
            <table id="dtGreekVerbs" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%"  >
        
                <thead class="myblue1 text-white " >
                <tr >
                    <th class="th-sm font-weight-bold"><?php echo t_verbs;?></th>
                    <th class="th-sm font-weight-bold"><?php echo t_select_verb_classification;?></th>
                    <th class="th-sm font-weight-bold"><?php echo t_delete;?></th>
                    <th class="th-sm font-weight-bold"><?php echo t_edit;?></th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($allGreekVerbs as $Id => $row ){ ?>
                        <tr>
                            <td><?php echo "<option name='VerbId' value='" . $row['Id'] . "'>" . $row['Verbs'] . "</option>" ?></td>
                            <td><?php echo "<option value='" . $row['Id'] . "'>" . $row['Classification'] . "</option>" ?> </td>
                            
                            <td >
                                <a class="text-center" href="<?php echo URL . 'AdminController/deleteVerb?VerbId=' . $row['Id'] ?>">
                                    <button type="button" class="btn btn-outline-danger btn-rounded btn-sm my-0 rounded-pill font-weight-bold">
                                        <i class="far fa-trash-alt"></i>  <?php echo t_delete;?>
                                    </button>
                                
                                </a>
                            </td>
                            <td >
                                <a href="<?php echo URL . 'AdminController/editVerb?VerbId=' . $row['Id'] ?>">
                                    <button type="button" class="btn btn-outline-info btn-rounded btn-sm my-0 rounded-pill font-weight-bold">
                                        <i class="fas fa-pencil-alt"></i> <?php echo t_edit;?>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        </div>
    </div>
<!-- </section> -->
