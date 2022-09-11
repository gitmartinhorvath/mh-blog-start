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
                                <span class="date"><?php the_time( get_option( 'date_format' ) ); ?></span> 
                                <h3><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h3> 
                                <p class="more"><a  href="<?php echo esc_url( get_permalink() ); ?>"><?php _e( 'Prečítať článok...', 'blog' ); ?></a></p> 
                            </div>                                         
                        </div>                                     
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php _e( 'Ľutujeme, vašim kritériám nezodpovedajú žiadne príspevky.', 'blog' ); ?></p>
            <?php endif; ?>                                                                                                                              
        </div>                                         
    </div>                 
</div>                         

<?php get_footer(); ?>