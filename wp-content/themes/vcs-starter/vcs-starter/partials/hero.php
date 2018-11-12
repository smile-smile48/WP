<!--  START OF SECOND -->  
  <section class="rowsection container ">  
    
   <ul class="slides">
       
       <?php
       
       // check if the repeater field has rows of data
       if( have_rows('hh_hero_slides_repeater') ):

 	// loop through the rows of data
       while ( have_rows('hh_hero_slides_repeater') ) : the_row();

        // display a sub field value
        // the_sub_field('sub_field_name');

       
       $image = get_sub_field('slide_image');
       
        $align = get_sub_field('slide_image');
?>
    <input type="radio" name="radio-btn" id="img-1" checked />
    <li class="slide-container">
		<div class="slide">
			<div class="column-33">
      <img src="<?php echo $image['sizes']['medium']; ?>"  alt="App">
    </div>
    <div class="column-66">
    <h3><?php the_sub_field('slide_heading'); ?></h3>
	<p><?php the_sub_field('slide_content'); ?></p>
        </div>
		   </div>
    </li>

    <input type="radio" name="radio-btn" id="img-2" />
    <li class="slide-container">
        <div class="slide">
          <div class="column-33">
      <img src="<?php echo $image['sizes']['medium']; ?>" alt="App">
    </div>
    <div class="column-66">
   <h3><?php the_sub_field('slide_heading'); ?></h3>
	<p><?php the_sub_field('slide_content'); ?></p>
        </div>
		   </div>
    </li>

    <input type="radio" name="radio-btn" id="img-3" />
    <li class="slide-container">
        <div class="slide">
          <div class="column-33">
      <img src="<?php echo $image['sizes']['medium']; ?>" alt="App">
    </div>
    <div class="column-66">
    <h3><?php the_sub_field('slide_heading'); ?></h3>
	<p><?php the_sub_field('slide_content'); ?></p>
        </div>
	   </div>
    </li>
  
    <li class="nav-dots">
      <label for="img-1" class="nav-dot" id="img-dot-1"></label>
      <label for="img-2" class="nav-dot" id="img-dot-2"></label>
      <label for="img-3" class="nav-dot" id="img-dot-3"></label>
    
    </li>
       <?php
            endwhile;

        else :

    // no rows found

       endif;
       
       ?>     
          
</ul>
    
    
   	</section> 
    
