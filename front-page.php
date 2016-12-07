<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   
    <?php wp_head();?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      
      <div class="front-content">
          <div class="container">
              <div class="logo">
                  <img src=" <?php echo get_option('base_background_image');?>" width="240"></img>
              </div>
              <div class="tag-line">
                  <?php bloginfo('description');?>
              </div>
              <div class="row"> 
              <div class="col-md-8 col-md-offset-2">
                   <div class="row">
                  <div class="col-sm-6">
                      
                     <div class="box-chooser">
                         <div class="box-chooser-img">
                              <img src="<?php images('car.jpg');?>"></img>
                         </div>
                        
                         <h3>Mobil</h3>
                     </div>
                  </div>
                  <div class="col-sm-6">
                       <div class="box-chooser">
                           <div class="box-chooser-img">
                               <img src="<?php images('motor.jpg');?>"></img>
                           </div>
                         
                         <h3>Motor</h3>
                     </div>
                  </div>
                  </div>
                  <div class="menu-front">
                      <a href="">Tentang Kami</a> | <a href="">Kerja Sama</a> | <a href="">Kontak</a>
                  </div>
                  <div class="copyright-front">
                      mahir4.com &copy; 2016. All Right Reserved
                  </div>
              </div>
              </div>
              
             
          </div>
      </div>
   
   <?php wp_footer();?>
  </body>
</html>