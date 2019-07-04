<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles');
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-theme-css', get_template_directory_uri().'/style.css');
}

add_action( 'after_setup_theme', 'osu_setup' );

if ( ! function_exists( 'osu_setup' ) ):

function osu_setup() {

    // OVERRIDE : SIDEBAR GENERATION FUNCTION - NO WIDGETS FOR THIS SITE
    remove_action( 'widgets_init', 'twentyeleven_widgets_init' ); /* Deregister sidebar in parent */

    // OVERRIDE : EXCERPT READ MORE LINK FUNCTION
    function osu_readon_link() {
        return '    <a href="'. get_permalink() . '" class="readmore btn btn-primary">' . __( 'Читать дальше', 'clientname' ) . '</a>';
    }
    // Function to override
    function osu_clientname_custom_excerpt_more( $output ) {
        if ( has_excerpt() && ! is_attachment() ) {
            // $output = trim($output);
            $output .= osu_readon_link();
        }
        return $output;
    }
    remove_filter( 'get_the_excerpt', 'twentyeleven_custom_excerpt_more' );
    add_filter( 'get_the_excerpt', 'osu_clientname_custom_excerpt_more' );
    remove_filter( 'excerpt_more', 'twentyeleven_auto_excerpt_more' );
    add_filter( 'excerpt_more', 'osu_readon_link' );

    // OVERRIDE : EXCERPT LENGTH FUNCTION
    function osu_clientname_excerpt_length( $length ) {
        return 50;
    }
    remove_filter( 'excerpt_length', 'twentyeleven_excerpt_length' );
    add_filter( 'excerpt_length', 'osu_clientname_excerpt_length' );

}
endif;

function getCountIDByShowID($showid)
{
    $count=1;
    $args = array(
             'post_type' => 'shows',
             'posts_per_page' => -1
         );
    $nshows = new WP_Query($args);
    while($nshows->have_posts())
    {
        $nshows->the_post();
        /*echo $showid."".the_ID()."<br>";
        echo $nshows->post_count ." ".$count."<br>";*/
        if(($showid == get_the_ID())||($nshows->post_count == $count))
        {
            return $count;
            break;
        }
        $count++;
    }
}


function shortCodeExec()
{
$args = array(
    'post_type' => 'shows'
);
    $condition=TRUE;
          $shows = new WP_Query($args);
            
            while ($shows->have_posts()) 
            {
                if($shows->post_count>5 && $condition)
                {
                    $it=$shows->post_count - 5;
                    for($i=0;$i<$it;$i++)
                    {
                        $shows->the_post();
                    }
                    $condition=FALSE;
                }
                  $shows->the_post();?>
<h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>
<?php the_content( __( 'Continue reading <i class="fa fa-chevron-right"></i>', 'unite' ) ); ?>
<hr class="section-divider"></hr>
<?php
              }
}
add_shortcode('short5', 'shortCodeExec');


add_action('wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback');

function load_posts_by_ajax_callback() {
    check_ajax_referer('load_more_posts', 'security');
    $paged = $_POST['page'];
    $startId= $_POST['startId'];
    $showsOut=1;
    $count=1;
    $args = array(
        'post_type' => 'shows',
        'post_status' => 'publish'
    );
    $my_posts = new WP_Query( $args );
    if ( $my_posts->have_posts() ) :
        ?>
        <?php while ( $my_posts->have_posts() ) {
            if($showsOut==0){break;}
            $my_posts->the_post(); ?>
<?php if($count>$startId){?>
            <h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>
                <?php the_excerpt();?>
<hr class="section-divider"></hr>
<?php  if($my_posts->post_count != $count){ ?>         
<div id="<?php echo getCountIDByShowID(get_the_ID()) ?>" class="loadmore btn btn-primary" onclick="hide(this)">Загрузить больше постов...</div>
           <?php }?>
            
<?php  $showsOut--;} 
             $count++;                                   }?>
        <?php
    endif;
 
    wp_die();
}




?>