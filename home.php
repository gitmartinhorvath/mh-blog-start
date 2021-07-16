<?php get_header(); ?>

<div class="custom-hero"> 
    <div class="container"> 
        <div class="row justify-content-center"> 
            <div class="col-lg-6"> 
                <h1 class="hero-heading"><?php echo get_theme_mod( 'tit-home', __( 'Our Blog', 'blog' ) ); ?></h1> 
                <div class="line js-line mx-auto mb-3 my-3"></div>                             
                <p class="sub-text"><?php echo get_theme_mod( 'subtit', __( 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 'blog' ) ); ?></p> 
            </div>                         
        </div>                     
    </div>                 
</div>             
<div class="section"> 
    <div class="container"> 
        <div class="row mb-5"> 
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php PG_Helper::rememberShownPost(); ?>
                    <div class="col-md-6 mb-5 mb-lg-5 col-lg-4"> 
                        <div class="blog_entry"> 
                            <a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo PG_Image::getPostImage( null, 'large', array(
                                        'class' => 'img-fluid'
                                ), 'both', null ) ?></a> 
                            <div class="p-4 bg-white"> 
                                <h3><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h3> 
                                <span class="date"><?php the_time( get_option( 'date_format' ) ); ?></span> 
                                <?php the_excerpt( ); ?> 
                                <p class="more"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php _e( 'Read more...', 'blog' ); ?></a></p> 
                            </div>                                         
                        </div>                                     
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'blog' ); ?></p>
            <?php endif; ?>                                                                                                                              
        </div>                     
        <div class="row"> 
            <div class="col-lg-12 text-center"> 
                <ul class="list-unstyled custom-pagination"> 
                    <li> 
                        <a href="#"><?php _e( '1', 'blog' ); ?></a> 
                    </li>                                 
                    <li class="active"> 
                        <a href="#"><?php _e( '2', 'blog' ); ?></a> 
                    </li>                                 
                    <li> 
                        <a href="#"><?php _e( '3', 'blog' ); ?></a> 
                    </li>                                 
                    <li> 
                        <a href="#"><?php _e( '4', 'blog' ); ?></a> 
                    </li>                                 
                    <li> 
                        <a href="#"><?php _e( '5', 'blog' ); ?></a> 
                    </li>                                 
                </ul>                             
            </div>                         
        </div>                     
    </div>                 
</div>                         

<?php get_footer(); ?>