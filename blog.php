<?php
// Konfiguration : Name der anzuzeigenden Kategorie in WP
$cat_name = 'Allgemeine Posts';
// Einbinden der Wordpress Daten und deaktivieren des Default WP Themes
define('WP_USE_THEMES', false);
require('/hp/av/ad/dv/www/intern/wp-blog-header.php');
// Schrieben der Box in der das Ganze dargestellt wird
echo "<section class=\"box\">\n";
echo "\t\t\t\t\t\t\t\t<h3>Neues aus dem Waldkindi</h3>\n";

// Abrufen der verfügbaren Katergorien und überprüfen das nur die in der am Anfang der Datei getätigte Definition abgerufen wird (Allgemeine Posts)
$terms = get_terms('category');
$category =1;
foreach($terms as $term){
    if (strcasecmp($term->name , $cat_name) == 0 ){
        $category = $term->term_id;
    }
}
// Abruf der letzten drei Posts
$args = array( 'posts_per_page' => 3, 'order'=> 'ASC', 'orderby' => 'title', 'category' => $category);
$posts = get_posts( $args );

// Funktion die die festgecodeten Größen die WP für das Thumbnail hinterlegt sind entfernt
function remove_image_size_attributes( $html ) {
    return preg_replace( '/(width|height)="\d*"/', '', $html );
    }
    
// Entfernen der Größeninformation
add_filter( 'post_thumbnail_html', 'remove_image_size_attributes' );

// Ausgabe der Posts
foreach($posts as $post){
    setup_postdata($post);
    echo "\t\t\t\t\t\t\t\t<h4>";
    the_title();
    echo "</h4>\n";
    if ( has_post_thumbnail() ) {    
        echo "\t\t\t\t\t\t\t\t\t";                               
        the_post_thumbnail('full', array( 'class' => 'image' ));
        echo "\n";
    }
    echo "\t\t\t\t\t\t\t\t\t";
    the_excerpt();
}
?>

</section>
