<?php
/**
 * @package Underscores.me
 * @since Underscores.me 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="entry-content">
        <?php the_post_thumbnail('full', 'class=img-responsive'); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'exam' ), 'after' => '</div>' ) ); ?>
    </div><!-- .entry-content -->

    <footer class="entry-meta">
        <?php
        /* translators: used between list items, there is a space after the comma */
        $category_list = get_the_category_list( __( ', ', 'exam' ) );
        /* translators: used between list items, there is a space after the comma */
        $tag_list = get_the_tag_list( '', ', ' );
        if ( ! exam_categorized_blog() ) {
            // This blog only has 1 category so we just need to worry about tags in the meta text
            if ( '' != $tag_list ) {
                $meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'exam' );
            } else {
                $meta_text = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'exam' );
            }
        } else {
            // But this blog has loads of categories so we should probably display them here
            if ( '' != $tag_list ) {
                $meta_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'exam' );
            } else {
                $meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'exam' );
            }
        } // end check for categories on this blog
//        printf(
//            $meta_text,
//            $category_list,
//            $tag_list,
//            get_permalink(),
//            the_title_attribute( 'echo=0' )
//        );
        ?>

</article><!-- #post-<?php the_ID(); ?> -->