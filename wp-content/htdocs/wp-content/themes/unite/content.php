<?php
/**
 * @package unite
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
        <h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>
        <?php the_content( __( 'Continue reading <i class="fa fa-chevron-right"></i>', 'unite' ) ); ?>
        
        </div>  <!--    .entry-content -->
	<hr class="section-divider"></hr>
</article><!-- #post-## -->
        
<!--
    <div class="container">
      <div class="row">
        <div class="col-6 col-md-4">
        <?php
            $i=1;
            $count=4;
            $args = array(
    'post_type' => 'shows',
    'posts_per_page' => 3
);
          $shows = new WP_Query($args);
            ?>
            <div class="container">
          <div class="row">
            <div class="col-6 col-md-4">
            <?php
            while ($shows->have_posts()) 
            {
                  $shows->the_post();?>
   <h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>
                <?php the_content(); ?>
              </div>
                <?php        
                if($i % 2==0 && $i!=$count)
                {?>
                   </div>
                      <div class="row">
                          <?php
                }
                if($i<$count)
               {?>
                <div class="col-6 col-md-4">
                    <?php
                
                }
                if($i==$count)
                {
                    break;
                }
                $i++;   
            }
          ?>  
                          </div>
            </div>
    </div> 
-->
<!--
    <div class="container">
      <div class="row">
        <div class="col-6 col-md-4">
        <?php
            $count=4;
         $shows = get_posts( array(
	 'post_type'      => 'posts' ,
      'numberposts' => -1
) );
         for($i = 1; $i <= $count; $i++)
         {
             setup_postdata($post);?>
            <h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>
            <?php the_content();?>
            </div>
          <?php 
             if($i % 2==0 && $i!=$count)
               {?>
                  </div>
                      <div class="row">
                          <?php
             }
               if($i<$count)
               {?>
<div class="col-6 col-md-4">
              <?php
               }
         }?>
          
          
		      			
       
        </div>
    </div> 
-->   
        
<!--
        <div class="container">
          <div class="row">
            <div class="col-6 col-md-4">
                <h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>
                <?php the_content( __( 'Continue reading <i class="fa fa-chevron-right"></i>', 'unite' ) ); ?>
              </div>
            <div class="col-6 col-md-4">
                <h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>
                <?php the_content( __( 'Continue reading <i class="fa fa-chevron-right"></i>', 'unite' ) ); ?></div>
          </div>
            <div class="row">
            <div class="col-6 col-md-4">
                <h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>
                <?php the_content( __( 'Continue reading <i class="fa fa-chevron-right"></i>', 'unite' ) ); ?>
              </div>
            <div class="col-6 col-md-4">
                <h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>
                <?php the_content( __( 'Continue reading <i class="fa fa-chevron-right"></i>', 'unite' ) ); ?></div>
          </div>
        </div>
-->
	

	
