<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
   <!-- header part start -->
   <!-- header part end -->
   <!-- logo part start  -->
   <section class="logo container-fluid">
    <div class="row">
        <div class="col-sm-6 logo_left">
            <?php the_custom_logo(); ?>
        </div>
        <div class="col-sm-6 logo_right">
    r
        </div>
    </div>
   </section>
   <!-- logo part end -->
<?php wp_footer(); ?>
</body>
</html>