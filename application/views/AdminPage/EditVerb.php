<section class="main-container">
    <div class="main-wrapper">
        <form class="add-verb-form" method="post" action="<?php echo URL; ?>AdminController/updateVerb">

            <h3><?php echo t_add_verb;?></h3>
            <table class="verb">
                <tr>
                    <th class="font-weight-bold myblue1 text-white ">
                        <?php echo t_verb;?>
                    </th>
                    <th class="font-weight-bold myblue1 text-white ">
                        <?php echo t_verb_level;?>
                    </th>
                </tr>
                <tr>
                    <td>
                        <input class="form-control form-control-sm "  name='newVerb' value="<?php echo $Verb['Verbs'];?>"/>
                        <input type="hidden" name='newVerbId' value="<?php echo $Verb['Id'];?>"/>
                    </td>
                    <td>
                        <?php
                            echo "<select class='browser-default custom-select' name='verb_classification'>";
                            foreach ($VerbClassification as $Id => $row ) {
                               // $selected = $row['Id'] == $Verb['ClassificationId'] ? 'selected' : '';
                                $selected= '';
                                if($row['Id'] == $Verb['ClassificationId'])
                                {
                                    $selected = 'selected';
                                }
                                echo "<option value='" . $row['Id'] . "' " . $selected . ">" . $row['Classification'] . "</option>";
                            }
                            echo "</select>";
                        ?>
                    </td>
                    <td class="add">
                        <button class="btn m-0" type="submit" name="UpdateVerb" value="UpdateVerb"> <?php echo t_update; ?> </button>
                    </td>
                </tr>
            <table>
        </form>
    </div>
</section>