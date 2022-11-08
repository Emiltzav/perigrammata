<div class="container-for-admin">

  <!--Main layout-->
  <main class="pt-3 mx-lg-5">
    <div class="container-fluid mt-5">

      <!-- Heading -->
      <div class="card mb-4 wow fadeIn">

        <!--Card content-->
        <div class="card-body text-center">

          <h4 class="mb-2 mb-sm-0 pt-1">
            <!-- <a href="https://mdbootstrap.com/docs/jquery/" target="_blank">Home Page</a> -->
            <span><?php echo t_results ; ?></span>
          </h4>

          <!-- <form class="d-flex justify-content-center">
         
            <input type="search" placeholder="Type your query" aria-label="Search" class="form-control">
            <button class="btn btn-primary btn-sm my-0 p" type="submit">
              <i class="fa fa-search"></i>
            </button>

          </form> -->

        </div>

      </div>
      <!-- Heading -->

 

      

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-lg-6 col-md-6 mb-4">

          <!--Card-->
          <div class="card">

            <!-- Card header -->
            <div class="card-header"><?php echo $Hmmy['DepartmentName'].', '.t_learning_outcomes;?></div>

            <!--Card content-->
        

            <div class="card-body">
                <canvas id="myCharthmmy"></canvas>
                <?php foreach ($AbetScoreHmmy as $Id => $row ){?>
                        <input type="hidden" id="hmmy_c1" value="<?php echo round($row['c1']);?>" /> 
                        <input type="hidden" id="hmmy_c2" value="<?php echo round($row['c2']);?>" /> 
                        <input type="hidden" id="hmmy_c3" value="<?php echo round($row['c3']);?>" /> 
                        <input type="hidden" id="hmmy_c4" value="<?php echo round($row['c4']);?>" /> 
                        <input type="hidden" id="hmmy_c5" value="<?php echo round($row['c5']);?>" /> 
                        <input type="hidden" id="hmmy_c6" value="<?php echo round($row['c6']);?>" /> 
                        <input type="hidden" id="hmmy_c7" value="<?php echo round($row['c7']);?>" /> 
                <?php  }?> 


            </div>
          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-6 col-md-6 mb-4">

          <!--Card-->
          <div class="card">

            <!-- Card header -->
            <div class="card-header"><?php echo $Hmmy['DepartmentName'].', '.t_general_capabilities;?></div>

            <!--Card content-->
            <div class="card-body">

                <canvas id="myCharthmmy1"></canvas>
                <?php foreach ($AbetScoreHmmy1 as $Id => $row ){?>
                        <input type="hidden" id="hmmy1_c1" value="<?php echo round($row['c1']);?>" /> 
                        <input type="hidden" id="hmmy1_c2" value="<?php echo round($row['c2']);?>" /> 
                        <input type="hidden" id="hmmy1_c3" value="<?php echo round($row['c3']);?>" /> 
                        <input type="hidden" id="hmmy1_c4" value="<?php echo round($row['c4']);?>" /> 
                        <input type="hidden" id="hmmy1_c5" value="<?php echo round($row['c5']);?>" /> 
                        <input type="hidden" id="hmmy1_c6" value="<?php echo round($row['c6']);?>" /> 
                        <input type="hidden" id="hmmy1_c7" value="<?php echo round($row['c7']);?>" /> 
                <?php  }?> 
                <!-- <canvas id="myChartmpd"></canvas>
                < ?php foreach ($AbetScoreMpd as $Id => round($row ){?>
)                      <input type="hidden" id="mpd_c1" value="< ?php echo round($row['c1']);?>" /> 
                      <input type="hidden" id="mpd_c2" value="< ?php echo round($row['c2']);?>" /> 
                      <input type="hidden" id="mpd_c3" value="< ?php echo round($row['c3']);?>" /> 
                      <input type="hidden" id="mpd_c4" value="< ?php echo round($row['c4']);?>" /> 
                      <input type="hidden" id="mpd_c5" value="< ?php echo round($row['c5']);?>" /> 
                      <input type="hidden" id="mpd_c6" value="< ?php echo round($row['c6']);?>" /> 
                      <input type="hidden" id="mpd_c7" value="< ?php echo round($row['c7']);?>" /> 
              < ?php  }?>  -->

            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->


        <!--Grid column-->
        <div class="col-lg-6 col-md-6 mb-4">

          <!--Card-->
          <div class="card">

            <!-- Card header -->
            <div class="card-header"><?php echo $Mpd['DepartmentName'].', '.t_learning_outcomes;?></div>

            <!--Card content-->
        

            <div class="card-body">
                <canvas id="myChartmpd"></canvas>
                <?php foreach ($AbetScoreMpd as $Id => $row ){?>
                      <input type="hidden" id="mpd_c1" value="<?php echo round($row['c1']);?>" /> 
                      <input type="hidden" id="mpd_c2" value="<?php echo round($row['c2']);?>" /> 
                      <input type="hidden" id="mpd_c3" value="<?php echo round($row['c3']);?>" /> 
                      <input type="hidden" id="mpd_c4" value="<?php echo round($row['c4']);?>" /> 
                      <input type="hidden" id="mpd_c5" value="<?php echo round($row['c5']);?>" /> 
                      <input type="hidden" id="mpd_c6" value="<?php echo round($row['c6']);?>" /> 
                      <input type="hidden" id="mpd_c7" value="<?php echo round($row['c7']);?>" /> 
              <?php  }?>  


            </div>
          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-6 col-md-6 mb-4">

          <!--Card-->
          <div class="card">

            <!-- Card header -->
            <div class="card-header"><?php echo $Mpd['DepartmentName'].', '.t_general_capabilities;?></div>

            <!--Card content-->
            <div class="card-body">

        
                 <canvas id="myChartmpd1"></canvas>
                <?php foreach ($AbetScoreMpd1 as $Id => $row ){?>
                      <input type="hidden" id="mpd1_c1" value="<?php echo round($row['c1']);?>" /> 
                      <input type="hidden" id="mpd1_c2" value="<?php echo round($row['c2']);?>" /> 
                      <input type="hidden" id="mpd1_c3" value="<?php echo round($row['c3']);?>" /> 
                      <input type="hidden" id="mpd1_c4" value="<?php echo round($row['c4']);?>" /> 
                      <input type="hidden" id="mpd1_c5" value="<?php echo round($row['c5']);?>" /> 
                      <input type="hidden" id="mpd1_c6" value="<?php echo round($row['c6']);?>" /> 
                      <input type="hidden" id="mpd1_c7" value="<?php echo round($row['c7']);?>" /> 
              <?php  }?>  

            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->


        <!--Grid column-->
        <div class="col-lg-6 col-md-6 mb-4">

          <!--Card-->
          <div class="card">

            <!-- Card header -->
            <div class="card-header"><?php echo $Mhxop['DepartmentName'].', '.t_learning_outcomes;?></div>

            <!--Card content-->


            <div class="card-body">
              <canvas id="myChartmixop"></canvas> 
              <?php foreach ($AbetScoreMhxop as $Id => $row ){?>
                      <input type="hidden" id="mihop_c1" value="<?php echo round($row['c1']);?>" /> 
                      <input type="hidden" id="mihop_c2" value="<?php echo round($row['c2']);?>" /> 
                      <input type="hidden" id="mihop_c3" value="<?php echo round($row['c3']);?>" /> 
                      <input type="hidden" id="mihop_c4" value="<?php echo round($row['c4']);?>" /> 
                      <input type="hidden" id="mihop_c5" value="<?php echo round($row['c5']);?>" /> 
                      <input type="hidden" id="mihop_c6" value="<?php echo round($row['c6']);?>" /> 
                      <input type="hidden" id="mihop_c7" value="<?php echo round($row['c7']);?>" /> 
              <?php  }?> 


            </div>
          </div>
          <!--/.Card-->

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-6 col-md-6 mb-4">

          <!--Card-->
          <div class="card">

            <!-- Card header -->
            <div class="card-header"><?php echo $Mhxop['DepartmentName'].', '.t_general_capabilities;?></div>

            <!--Card content-->
            <div class="card-body">


            <canvas id="myChartmixop1"></canvas> 
              <?php foreach ($AbetScoreMhxop1 as $Id => $row ){?>
                      <input type="hidden" id="mihop1_c1" value="<?php echo round($row['c1']);?>" /> 
                      <input type="hidden" id="mihop1_c2" value="<?php echo round($row['c2']);?>" /> 
                      <input type="hidden" id="mihop1_c3" value="<?php echo round($row['c3']);?>" /> 
                      <input type="hidden" id="mihop1_c4" value="<?php echo round($row['c4']);?>" /> 
                      <input type="hidden" id="mihop1_c5" value="<?php echo round($row['c5']);?>" /> 
                      <input type="hidden" id="mihop1_c6" value="<?php echo round($row['c6']);?>" /> 
                      <input type="hidden" id="mihop1_c7" value="<?php echo round($row['c7']);?>" /> 
              <?php  }?> 

            </div>

          </div>
          <!--/.Card-->

          </div>
          <!--Grid column-->




        <!--Grid column-->
        <div class="col-lg-6 col-md-6 mb-4">

          <!--Card-->
          <div class="card">

            <!-- Card header -->
            <div class="card-header"><?php echo $Mhper['DepartmentName'].', '.t_learning_outcomes;?></div>

            <!--Card content-->
            <div class="card-body">

              <canvas id="myChartmhper"></canvas> 
                <?php foreach ($AbetScoreMhper as $Id => $row ){?>
                    <input type="hidden" id="mhper_c1" value="<?php echo round($row['c1']);?>" /> 
                    <input type="hidden" id="mhper_c2" value="<?php echo round($row['c2']);?>" /> 
                    <input type="hidden" id="mhper_c3" value="<?php echo round($row['c3']);?>" /> 
                    <input type="hidden" id="mhper_c4" value="<?php echo round($row['c4']);?>" /> 
                    <input type="hidden" id="mhper_c5" value="<?php echo round($row['c5']);?>" /> 
                    <input type="hidden" id="mhper_c6" value="<?php echo round($row['c6']);?>" /> 
                    <input type="hidden" id="mhper_c7" value="<?php echo round($row['c7']);?>" /> 
                <?php  }?> 

            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

         <!--Grid column-->
         <div class="col-lg-6 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

            <!-- Card header -->
            <div class="card-header"><?php echo $Mhper['DepartmentName'].', '.t_general_capabilities;?></div>

            <!--Card content-->
            <div class="card-body">

                <!-- <canvas id="doughnutChart"></canvas> -->
                <canvas id="myChartmhper1"></canvas> 
                <?php foreach ($AbetScoreMhper1 as $Id => $row ){?>
                    <input type="hidden" id="mhper1_c1" value="<?php echo round($row['c1']);?>" /> 
                    <input type="hidden" id="mhper1_c2" value="<?php echo round($row['c2']);?>" /> 
                    <input type="hidden" id="mhper1_c3" value="<?php echo round($row['c3']);?>" /> 
                    <input type="hidden" id="mhper1_c4" value="<?php echo round($row['c4']);?>" /> 
                    <input type="hidden" id="mhper1_c5" value="<?php echo round($row['c5']);?>" /> 
                    <input type="hidden" id="mhper1_c6" value="<?php echo round($row['c6']);?>" /> 
                    <input type="hidden" id="mhper1_c7" value="<?php echo round($row['c7']);?>" /> 
                <?php  }?> 

            </div>

            </div>
            <!--/.Card-->

        </div>
        <!--Grid column-->



        <!--Grid column-->
        <div class="col-lg-6 col-md-6 mb-4">

          <!--Card-->
          <div class="card">

            <!-- Card header -->
            <div class="card-header"><?php echo $Armhx['DepartmentName'].', '.t_learning_outcomes;?></div>

            <!--Card content-->
            <div class="card-body">

            <canvas id="myChartarmhx"></canvas> 
                <?php foreach ($AbetScoreArmhx as $Id => $row ){?>
                    <input type="hidden" id="armhx_c1" value="<?php echo round($row['c1']);?>" /> 
                    <input type="hidden" id="armhx_c2" value="<?php echo round($row['c2']);?>" /> 
                    <input type="hidden" id="armhx_c3" value="<?php echo round($row['c3']);?>" /> 
                    <input type="hidden" id="armhx_c4" value="<?php echo round($row['c4']);?>" /> 
                    <input type="hidden" id="armhx_c5" value="<?php echo round($row['c5']);?>" /> 
                    <input type="hidden" id="armhx_c6" value="<?php echo round($row['c6']);?>" /> 
                    <input type="hidden" id="armhx_c7" value="<?php echo round($row['c7']);?>" /> 
                <?php  }?> 

            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

         <!--Grid column-->
         <div class="col-lg-6 col-md-6 mb-4">

            <!--Card-->
            <div class="card">

            <!-- Card header -->
            <div class="card-header"><?php echo $Armhx['DepartmentName'].', '.t_general_capabilities;?></div>

            <!--Card content-->
            <div class="card-body">

                <canvas id="myChartarmhx1"></canvas> 
                <?php foreach ($AbetScoreArmhx1 as $Id => $row ){?>
                    <input type="hidden" id="armhx1_c1" value="<?php echo round($row['c1']);?>" /> 
                    <input type="hidden" id="armhx1_c2" value="<?php echo round($row['c2']);?>" /> 
                    <input type="hidden" id="armhx1_c3" value="<?php echo round($row['c3']);?>" /> 
                    <input type="hidden" id="armhx1_c4" value="<?php echo round($row['c4']);?>" /> 
                    <input type="hidden" id="armhx1_c5" value="<?php echo round($row['c5']);?>" /> 
                    <input type="hidden" id="armhx1_c6" value="<?php echo round($row['c6']);?>" /> 
                    <input type="hidden" id="armhx1_c7" value="<?php echo round($row['c7']);?>" /> 
                <?php  }?> 

            </div>

            </div>
            <!--/.Card-->

        </div>
        <!--Grid column-->

       
            
    </div>
    <!--Grid row-->


    <!--Grid row-->
    <div class=" wow fadeIn">

        <!--Grid column-->
        <div class=" mb-4">

            <!--Card-->
            <div class="card">

            <!-- Card header -->
            <div class="card-header font-weight-bold">
            <?php
            if ($_SESSION['lang']=='gr'){
                echo 'Συγκριτικός πίνακας σκορ μαθησιακών αποτελεσμάτων Σχολών του Πολυτεχνείου Κρήτης';
            } else{
                echo 'Comparative learning outcomes scoreboard of Schools of the Technical University of Crete';
            }  
          ?>
            </div>

            <!--Card content-->
            <div class="card-body">
                <canvas id="lineChart"></canvas>
            </div>

            </div>
            <!--/.Card-->

        </div>
        <!--Grid column-->

    </div>
    <!--Grid row-->

     <!--Grid row-->
     <div class=" wow fadeIn">

      <!--Grid column-->
      <div class=" mb-4">

          <!--Card-->
          <div class="card">

          <!-- Card header -->
          <div class="card-header font-weight-bold">
          <?php
            if ($_SESSION['lang']=='gr'){
                echo 'Συγκριτικός πίνακας σκορ γενικών ικανοτήτων Σχολών του Πολυτεχνείου Κρήτης';
            } else{
                echo 'Comparative general skills scoreboard of Schools of the Technical University of Crete';
            }  
          ?>
          </div>

          <!--Card content-->
          <div class="card-body">
              <canvas id="lineChart1"></canvas>
          </div>

          </div>
          <!--/.Card-->

      </div>
      <!--Grid column-->

      </div>
      <!--Grid row-->
    <br>
    <br>
    <br>



    </div>
  </main>
  <!--Main layout-->


</div>
