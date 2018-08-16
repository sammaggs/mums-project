<?php
/**
 * Theme Footer Section for our theme.
 *
 * Displays all of the footer section and closing of the #main div.
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.0
 */
?>

        </div><!-- .inner-wrap -->
    </div><!-- #main -->
    <?php do_action( 'spacious_before_footer' ); ?>

    <?php
    $spacious_footer_design = spacious_options( 'spacious_footer_design', 'style_one' );
    $footer_class           = '';
    if ( $spacious_footer_design === 'style_two' ) {
        $footer_class = 'spacious-footer-style-two';
    }
    ?>
    <footer id="colophon" class="footer clearfix <?php echo esc_attr( $footer_class ); ?>">
    
<div id="footer-widgets">
<div class="footer-widget-width" id="footer-widget1">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1') ) : ?>
<?php endif; ?>
</div>

<div class="footer-widget-width" id="footer-widget2">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-2') ) : ?>
<?php endif; ?>
</div>

<div class="footer-widget-width" id="footer-widget3">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-3') ) : ?>
<?php endif; ?>
</div>
</div>

<div style="clear-both"></div>
     <?php get_sidebar( 'footer' ); ?>
        <div class="footer-socket-wrapper clearfix">                
                    <div class="inner-wrap">
                        <div class="footer-socket-area">
                            <?php do_action( 'spacious_footer_copyright' ); ?>
                            <nav class="small-menu clearfix">
                                <?php
                                if ( has_nav_menu( 'footer' ) ) {
                                    wp_nav_menu( array(
                                        'theme_location' => 'footer',
                                        'depth'          => - 1
                                    ) );
                                }
                                ?>
                            </nav>
                        </div>
                    </div>
            </div>
    </footer>
    <a href="#masthead" id="scroll-up"></a>
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
