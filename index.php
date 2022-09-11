<?php get_header(); ?>

<div class="custom-hero"> 
    <div class="container"> 
        <div class="row justify-content-center"> 
            <div class="col-lg-8"> 
                <h1 class="hero-heading"><?php the_title(); ?></h1> 
                <div class="line js-line mx-auto mb-3 my-3"></div>                             
                <?php the_modified_date(); ?> 
            </div>                         
        </div>                     
    </div>                 
</div>             
<div class="site-section"> 
    <div class="container article"> 
        <div class="row justify-content-center align-items-stretch"> 
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php PG_Helper::rememberShownPost(); ?>
                    <article class="col-lg-9 order-lg-2 px-lg-5" id="post-<?php the_ID(); ?>"> 
                        <?php the_content(); ?> 
                        <div class="pt-5 categories_tags "> 
                            <p><?php _e( 'Kategórie :', 'blog' ); ?> <?php the_category(); ?></p> 
                        </div>                                     
                        <!--  <div class="post-single-navigation d-flex align-items-stretch">
                    <a href="#" class="" wp-prev-post-link> A Mounteering Guide For Beginners </a>
                    <a href="#" class="" wp-next-post-link> A Mounteering Guide For Beginners </a>
                </div>-->                                     
                        <div class="pt-5"> 
                            <ul class="comment-list"> 
                                <li class="comment">
                                    <p class=" co-coment ">Budem ti veľmi vďačný ak zanecháš komentár, vopred ďakujem za tvoj Feedback </p>
                                    <?php comments_template(); ?>
                                </li>                                             
                            </ul>                                         
                        </div>                                     
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php _e( 'Ľutujeme, vašim kritériám nezodpovedajú žiadne príspevky.', 'blog' ); ?></p>
            <?php endif; ?> 
            <div class="col-md-12 col-lg-1 order-lg-1"> 
                <div class="share sticky-top"> 
                    <!-- <h3><?php _e( 'Zdieľať', 'blog' ); ?></h3> -->


                    <?php 
                    /* Social Share Buttons template for Wordpress
                    * By Daan van den Bergh 
                    */ 

                    $postUrl = 'http' . ( isset( $_SERVER['HTTPS'] ) ? 's' : '' ) . '://' . "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"; ?>

              

                    <ul class="list-unstyled share-article"> 
                        <li> 
                            <a target="_blank" class="share-button share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $postUrl; ?>" title="Share on Facebook"><span class="icon-facebook"></span></a> 
                        </li>                                     
                        <li> 
                            <a target="_blank" class="share-button share-twitter" href="https://twitter.com/intent/tweet?url=<?php echo $postUrl; ?>&text=<?php echo the_title(); ?>&via=<?php the_author_meta( 'twitter' ); ?>" title="Tweet this"><span class="icon-twitter"></span></a> 
                        </li>                                     
                        <li> 
                            <a arget="_blank" style="cursor: pointer;"   class="share-button share-googleplus" onclick="javascript:window.open('http://www.linkedin.com/shareArticle?mini=true&amp;url=http://www.martinhorvath.sk/','', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" title="Share on linkedin"><span class="icomoon icon-linkedin"></span></a> 
                        </li>                                     
                    </ul>                                 
                </div>                             
            </div>                                                  
        </div>                     
    </div>                 
</div>                         

<?php get_footer(); ?>

