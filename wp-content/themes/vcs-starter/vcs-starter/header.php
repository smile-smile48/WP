<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 
<?php wp_head(); ?>
</head>
<body> 
      
	<!-- -----FIRST ------->

<!-- header -->
     <!--  BOX  FIRST START -->   

        <header class="top-nav">
      <div class="container flex-container">
          <div class="logo">
        <a href="<?php echo site_url(); ?>">
         <?php
           if(get_field('op_logo_type', 'option')):
                $image = get_field('op_logo_image', 'option');
                //dump($image);
            ?>
            <img src="<?php echo $image['sizes']['logo'] ?>" alt="<?php bloginfo('name'); ?>">
            <?php
            else:
                the_field('op_logo_text', 'option');    
            endif;    
            
            ?>
        </a>
        </div>   
        <nav class="main-nav">
          <?php 
            $args = [
                'menu_class' => '',
                'container' => false,
                'theme_location' => 'primary-navigation'
            ];
            
            wp_nav_menu($args);
            ?>
            
         <!-- <ul class="flex">
            <li><a href="#">HOME</a></li>
            <li><a href="#">PORTFOLIO</a></li>
            <li><a href="#">Work</a></li>
            <li><a href="#">BLOG</a></li>
            <li><a href="#">RESUME</a></li>
            <li><a href="#">CONTACT</a></li>
          </ul>--->
        </nav>
      </div>
    </header>
  
            
 <!--  BOX  SECOND START -->   
    <section class="hero section-padding">
          <div class="container flex-container">
				<div class="hero-content">
        <h1>DESIGNER &amp; MAKER</h1>
        <p>BUILDING NEW PRODUCTS AT SPOTIFY NYC.MAIL APP</p>
              </div>      
          <i class="fas fa-arrow-circle-down"></i>
      </div>
            
    </section>
            
        
                <!--  BOX SECOND END -->    
         
        <!-- HERO END -->
</div>