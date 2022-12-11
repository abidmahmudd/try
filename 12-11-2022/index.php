<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>
<body>
       <!-- header part start -->
   <header class="container-fluid slider">
    <div class="row">

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <?php 
    $x=0;
    while(have_posts()){the_post();
    $x++;
    ?>
    <div class="carousel-item <?= ($x==1)?'active':''?> active">
        <?php the_post_thumbnail();?>
    </div>
    <?php }?>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
   </header>
   <!-- header part end -->

      <!-- logo part start  -->
      <section class="logo container-fluid ">
    <div class="row">
        <div class="col-sm-6 logo_left">
            <?php the_custom_logo(); ?>
        </div>
        <div class="col-sm-6 logo_right text-end">
            <?php dynamic_sidebar('bdlogo');?>
        </div>
    </div>
   </section>
   <!-- logo part end -->

   <!-- menu part -->
   <section class="container-fluid menu text-centar">
        <div class="container menu-1 navbar-expand">
            <?php wp_nav_menu(array(
                'theme_location' =>'tm',
                'menu_class'=>'navbar-nav '
            ) )?>
        </div>
   </section>
   <!-- menu part -->

      <!-- hero part -->
      <section class="container hero text-center">
    <div class="row hero_top mt-5">
        <?php dynamic_sidebar('well');?> 
    </div>
    <div class="row hero_bottom mt-5">

      <div class="col-sm-4">
            <div class="card" style="width:;">
                        <?php dynamic_sidebar('hbimg');?> 
              <div class="card-body">
                <?php dynamic_sidebar('hbbody');?>       
              </div>
             </div>
         </div>
        <div class="col-sm-4">
        <div class="card" style="width:;">
                        <?php dynamic_sidebar('hbimg2');?>  
              <div class="card-body">
                <?php dynamic_sidebar('hbbody2');?>     
              </div>
             </div>
        </div>
        <div class="col-sm-4">  <div class="card" style="width:;">
                        <?php dynamic_sidebar('hbimg3');?>             
              <div class="card-body">
                <?php dynamic_sidebar('hbbody3');?>          
              </div>
             </div>
          </div>
    </div>
   </section>
   <!-- hero part -->

   <!-- photo part -->
   <section class="container photo mt-5 text-center">
    <div class="row photo_top">
      <div class="col-sm-5">
        --------------------------
    
      </div>
      <div class="col-sm-2">
        <h4>Recent Photos</h4>
        <p>Some latest project pictures</p>
      </div>
      <div class="col-sm-5">
        --------------------------
      </div>
    </div>
    <div class="row photo_bottom">
      <div class="col-sm-3">
          <div class="card" style="width: 16rem;">
          <?php dynamic_sidebar('pimg1');?>
              <div class="card-body">
              <?php dynamic_sidebar('pbody1');?>
              </div>
          </div>
              
      </div>

      <div class="col-sm-3">
      <div class="card" style="width: 16rem;">
          <?php dynamic_sidebar('pimg2');?>
              <div class="card-body">
              <?php dynamic_sidebar('pbody2');?>
              </div>
          </div>
      </div>

      <div class="col-sm-3">
      <div class="card" style="width: 16rem;">
          <?php dynamic_sidebar('pimg3');?>
              <div class="card-body">
              <?php dynamic_sidebar('pbody3');?>
              </div>
          </div>
      </div>
      <div class="col-sm-3">
      <div class="card" style="width: 16rem;">
          <?php dynamic_sidebar('pimg4');?>
              <div class="card-body">
              <?php dynamic_sidebar('pbody4');?>
              </div>
          </div>
      </div>
    </div>
   </section>
   <!-- photo part -->

   <!-- news part -->
   <section class="container news mt-5 mb-5">
        <div class="row news-top text-center">
            <div class="col-sm-5">
            --------------------------
            </div>
            <div class="col-sm-2">
                <h5>NEWS & EVENTS</h5>
                    <p>CLICK HERE TO VIEW ALL</p>
            </div>
            <div class="col-sm-5">
                --------------------------
            </div>
            </div>
        </div>

        <div class="row news-bottom">      
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">   
                <div class="carousel-inner">
                    <?php 
                        $x=0;
                        while(have_posts()){the_post();
                            $x++;
                    ?>
                        <div class="carousel-item <?= ($x==1)?'active':''?>">
                            <?php the_title();?>
                        </div>
                    <?php }?>
            </div>
        </div>
              
   </section>
   <!-- news part -->

<?php wp_footer();?>
</body>
</html>