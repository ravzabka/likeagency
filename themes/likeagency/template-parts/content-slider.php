<div class="container">
      		<div class="slider__pageinfo">
				<span class="slider__slide-number"></span> 			        		
			    <span class="slider__slide-start"></span>
		 	</div>

		 	 <?php if( have_rows('slider') ): ?>
 
    			<div class="slider">    
        			<?php while ( have_rows('slider') ) : the_row(); ?>

						<?php 
							 $image = get_sub_field('slider__img'); 
							 $link =  get_sub_field('slider__link');
						
						?>
        				<div class="slider__element" style="background-image: url(<?php echo $image['url']; ?>);">
      						<div class="slider__content">

      							<h4 class="slider__headline"><?php the_sub_field('slider__headline'); ?></h4>
      							<h1 class="slider__title"><?php the_sub_field('slider__title'); ?></h1>
      							<p class="slider__description"><?php the_sub_field('slider__desc'); ?></p>

								<?php 	if( $link ):  ?>								
      							<a href="<?php echo esc_url( $link ); ?>" class="btn">more</a> 
								<?endif; ?>

      						</div>
      					</div> 
        			<?php endwhile; ?>
    			</div>    
			<?php endif; ?>  
      </div>