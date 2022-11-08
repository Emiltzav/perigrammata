<div class="p-5">
    <div class="table-responsive" >
    
        <table id="dtAllUser" class="table table-striped table-bordered table-sm"  cellspacing="0" width="100%">
            <thead class="myblue1 text-white">  
                <th class="th-sm font-weight-bold ">#</th>
                <th class="th-sm font-weight-bold "><?php echo t_username;?></th>
               
                <th class="th-sm font-weight-bold "><?php echo t_firstname;?></th>
                <th class="th-sm font-weight-bold "><?php echo t_lastname;?></th>
                <th class="th-sm font-weight-bold "><?php echo t_profile;?></th>
                <th class="th-sm font-weight-bold"><?php echo t_delete;?></th>

           
            </thead>
            <tbody>
                <?php 
                $i=1;
                foreach ($alluser as $Id => $row ){ ?>
                    <tr>                 
                        <td><?php echo $i?></td>
                        <td><?php echo $row['UserName'] ?></td>
                        <td><?php echo $row['FirstName'] ?></td>
                        <td><?php echo $row['LastName']  ?> </td>
                        <td><?php echo $row['ProfileName']  ?> </td>
                        <input type=hidden name=id value="<?php echo $row['Id'];?>">
                        <!--  -->
                        <td>
                            <a class="btn btn-outline-danger btn-rounded btn-sm my-0 rounded-pill font-weight-bold" href="<?php echo URL . 'AdminController/deleteUser?UserId=' . $row['Id'] ?>">
                                <i class="far fa-trash-alt mt-0"></i>
                                <?php echo t_delete;?>
                            </a>
                        </td>
                           
                    </tr>
                    
                <?php $i++;} ?>
            </tbody>
        </table>
    <br>
    <br>
    </div>
</div>
