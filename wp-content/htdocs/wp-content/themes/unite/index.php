<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package unite
 */

get_header(); ?>

	<div id="primary" class="content-area col-sm-12 col-md-8 trty<?php echo of_get_option( 'site_layout' ); ?>">
		<main id="main" class="site-main" role="main">
            
         <?php $args = array(
             'post_type' => 'shows',
             'posts_per_page' => 1
         );
            $shows = new WP_Query($args);
            while ($shows->have_posts()) 
            {?>
                <div class="my-posts">
               <?php  $shows->the_post();?>
            <h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>
                <?php the_excerpt();?>
                    <hr class="section-divider"></hr>
            <div id="<?php echo getCountIDByShowID(get_the_ID()) ?>" class="loadmore btn btn-primary" onclick="hide(this)">Загрузить больше постов...</div>
</div>
            <?php }?>
    		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<script type="text/javascript">
var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
var page = 1;
    function hide(el) {
    el.style.display = 'none';
};
jQuery(function($) {
    $('body').on('click', '.loadmore', function() {
        console.log( $(this).attr('id') );
        var data = {
            'action': 'load_posts_by_ajax',
            'page': page,
            'security': '<?php echo wp_create_nonce("load_more_posts"); ?>',
            'startId' : $(this).attr('id')
        };
        $.post(ajaxurl, data, function(response) {
            $('.my-posts').append(response);
            page++;
        });
    });
});
</script>
<?php get_footer(); ?>
