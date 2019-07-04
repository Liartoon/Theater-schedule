
<?php
/*
 * Plugin Name: Hook Plugin
*/

function modify_show( $the_content ) {
    global $post;
    $bootclass=".col-6 col-sm-4";
    $genres= wp_get_post_terms( $post->ID, 'genres');
    $actors= wp_get_post_terms( $post->ID, 'actors');
    $theatres= wp_get_post_terms( $post->ID, 'theatres');
    $i=1;
    $fields = get_field_objects();
    if( $fields )
    {?>
        <div class="container">
      <div class="row">
        <div class="<?php echo $bootclass ?>">
            <?php
      foreach( $fields as $field_name => $field )
      {
          switch($i)
          {
              case 1:{echo "<i class='fas fa-coins'>  </i> "." Стоимость билета: "; break;}
              case 2:{echo "<i class='far fa-calendar-alt'>  </i>" ." Дата: "; break;}
          }
          echo $field['value'];?>
            
          </div>
            <?php
          $i++;
      }?>
     </div>
            <div class="row">
        <div class="<?php echo $bootclass ?>">
            <i class="fab fa-goodreads-g">  </i> <?php echo "  ",$genres[0]->name ?>
                </div>
                <div class="<?php echo $bootclass ?>">
                    <i class="fas fa-theater-masks">  </i> <?php echo "  ",$theatres[0]->name ?>
                </div>
            </div>
    <?php
    }
    ?> 
            <?php
    return $the_content;
}






/* $the_content .= "Жанр: ". $genres[0]->name ."<br>";
    $the_content .= "Актеры: ". $actors[0]->name."<br>";
    $the_content .= "Театры: ". $theatres[0]->name."<br>";*/

//function modify_show( $the_content ) {
//    //$the_content .= "some random text";
//     $shows = get_posts( array(
//	 'post_type'      => 'shows' ,
//      'numberposts' => -1
//) );
//    global $reqshow;
//    
//    foreach($shows as $show)
//        {
//        
//           $somepost=get_post($show->ID);
//        //echo strcasecmp($the_content,$somepost->post_content);
//        //var_dump($somepost->post_content);
//        //echo $the_content , " = ", $somepost->post_content;
////        var_dump($the_content);
////        var_dump($somepost->post_content); 
//        if(strncasecmp($the_content, $somepost->post_content, 200)==0)
//           {
//             $reqshow=$show;
//            break;
//           }
//        
//        }
//    
//    
//    $taxonomies = get_taxonomies();
//    foreach( $taxonomies as $taxonomy ) {
//        //echo $taxonomy." ";
//	$termarr=get_terms($taxonomy);
//        //var_dump($termarr,"<br><br>");
//        foreach($termarr as $term)
//        {
//         // var_dump($term->name,"<br><br>");
//            
////            if( has_term(array($term-name), $taxonomy, $reqshow->ID) )
////            {
////                echo "Запись с ID=59 имеет термин `comedy` в таксономии `video`";
////            }
//	
//        }
//        
//}
//     
//    //$the_content .= $genres[0]->name;
//    //$the_content.= get_post($reqshow->ID)->post_content;
//	return $the_content; 
//}
 
add_filter( 'the_content', 'modify_show' );

?>