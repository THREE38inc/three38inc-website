<section class="do-team-section do-section">
    <div class="container">
        <div class="row">
            <!-- SECTION HEADING -->
            <div class="do-section-heading">
                <h1>our <em>team</em></h1>
                <p class="do-section-subheading">AWESOME CREATIVE TEAM</p>
            </div>
            <!-- SECTION HEADING END -->

            <!-- Teams -->
            <div class="do-team-members grid" id="do-team-carousel">

              <?php
                  $str = file_get_contents('includes/team.json');

                  $json = json_decode($str, true);
                  //echo "<script>alert('".$str."')</script>";
                  //shuffle($json);
                  //$json = array_slice($json, 0, 12);
                  foreach ($json as $item) { ?>
                     <figure class="effect-milo">
           						<img src="images/<?php echo $item['img']; ?>" alt="<?php echo $item['firstname']." ".$item['lastname']; ?> | THREE38 inc"/>
           						<figcaption>
           							<h2><span><?php echo $item['firstname']; ?></span> <?php echo $item['lastname']; ?></h2>
           							<p>
                           <?php echo $item['designation']; ?>
                           <br /><br />
                           <?php for($i=0; $i<count($item['links']); $i++){
                             foreach($item['links'][$i]as $link=>$value) { ?>
                           <a href="<?php echo $value[0]; ?>" target="_blank">
                               <i class="fa fa-<?php echo $link; ?>-square"></i>
                           </a>
                           <?php } }?>
                        </p>
           						</figcaption>
           					</figure>

               <?php } ?>

            </div>
            <!-- Teams END -->
        </div>
    </div>
</section>
