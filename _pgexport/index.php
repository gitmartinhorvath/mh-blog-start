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
                    <article class="col-lg-8 order-lg-2 px-lg-5" id="post-<?php the_ID(); ?>">
                        <?php the_content(); ?>
                        <div class="pt-5 categories_tags ">
                            <p><?php _e( 'Categories:', 'blog' ); ?> <span> ---</span></p>
                        </div>
                        <div class="post-single-navigation d-flex align-items-stretch">
                            <?php previous_post_link(); ?>
                            <?php next_post_link(); ?>
                        </div>
                        <div class="pt-5">
                            <h3 class="mb-5"><?php _e( '6 Comments', 'blog' ); ?></h3>
                            <ul class="comment-list">
                                <li class="comment">
                                    <div class="vcard bio">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/person_6-min.jpg" alt="Image placeholder">
                                    </div>
                                    <div class="comment-body">
                                        <h3><?php _e( 'Irish Smith', 'blog' ); ?></h3>
                                        <div class="meta">
                                            <?php _e( 'January 9, 2018 at 2:21pm', 'blog' ); ?>
                                        </div>
                                        <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?', 'blog' ); ?></p>
                                        <p><a href="#" class="reply"><?php _e( 'Reply', 'blog' ); ?></a></p>
                                    </div>
                                </li>
                                <li class="comment">
                                    <div class="vcard bio">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/person_5-min.jpg" alt="Image placeholder">
                                    </div>
                                    <div class="comment-body">
                                        <h3><?php _e( 'Christine Stewart', 'blog' ); ?></h3>
                                        <div class="meta">
                                            <?php _e( 'January 9, 2018 at 2:21pm', 'blog' ); ?>
                                        </div>
                                        <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?', 'blog' ); ?></p>
                                        <p><a href="#" class="reply"><?php _e( 'Reply', 'blog' ); ?></a></p>
                                    </div>
                                    <ul class="children">
                                        <li class="comment">
                                            <div class="vcard bio">
                                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/person_4-min.jpg" alt="Image placeholder">
                                            </div>
                                            <div class="comment-body">
                                                <h3><?php _e( 'Chintan Patel', 'blog' ); ?></h3>
                                                <div class="meta">
                                                    <?php _e( 'January 9, 2018 at 2:21pm', 'blog' ); ?>
                                                </div>
                                                <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?', 'blog' ); ?></p>
                                                <p><a href="#" class="reply"><?php _e( 'Reply', 'blog' ); ?></a></p>
                                            </div>
                                            <ul class="children">
                                                <li class="comment">
                                                    <div class="vcard bio">
                                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/person_3-min.jpg" alt="Image placeholder">
                                                    </div>
                                                    <div class="comment-body">
                                                        <h3><?php _e( 'John Doe', 'blog' ); ?></h3>
                                                        <div class="meta">
                                                            <?php _e( 'January 9, 2018 at 2:21pm', 'blog' ); ?>
                                                        </div>
                                                        <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?', 'blog' ); ?></p>
                                                        <p><a href="#" class="reply"><?php _e( 'Reply', 'blog' ); ?></a></p>
                                                    </div>
                                                    <ul class="children">
                                                        <li class="comment">
                                                            <div class="vcard bio">
                                                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/person_2-min.jpg" alt="Image placeholder">
                                                            </div>
                                                            <div class="comment-body">
                                                                <h3><?php _e( 'Ben Afflick', 'blog' ); ?></h3>
                                                                <div class="meta">
                                                                    <?php _e( 'January 9, 2018 at 2:21pm', 'blog' ); ?>
                                                                </div>
                                                                <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?', 'blog' ); ?></p>
                                                                <p><a href="#" class="reply"><?php _e( 'Reply', 'blog' ); ?></a></p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="comment">
                                    <div class="vcard bio">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/person_1-min.jpg" alt="Image placeholder">
                                    </div>
                                    <div class="comment-body">
                                        <h3><?php _e( 'Jean Doe', 'blog' ); ?></h3>
                                        <div class="meta">
                                            <?php _e( 'January 9, 2018 at 2:21pm', 'blog' ); ?>
                                        </div>
                                        <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?', 'blog' ); ?></p>
                                        <p><a href="#" class="reply"><?php _e( 'Reply', 'blog' ); ?></a></p>
                                    </div>
                                </li>
                            </ul>
                            <!-- END comment-list -->
                            <div class="comment-form-wrap pt-5">
                                <h3 class="mb-5"><?php _e( 'Leave a comment', 'blog' ); ?></h3>
                                <form action="<?php echo esc_url( get_template_directory_uri() ); ?>/#" class="">
                                    <div class="form-group">
                                        <label for="name">
                                            <?php _e( 'Name *', 'blog' ); ?>
                                        </label>
                                        <input type="text" class="form-control" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">
                                            <?php _e( 'Email *', 'blog' ); ?>
                                        </label>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="website">
                                            <?php _e( 'Website', 'blog' ); ?>
                                        </label>
                                        <input type="url" class="form-control" id="website">
                                    </div>
                                    <div class="form-group">
                                        <label for="message">
                                            <?php _e( 'Message', 'blog' ); ?>
                                        </label>
                                        <textarea name="message" id="message" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Post Comment" class="btn btn-primary btn-md">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'blog' ); ?></p>
            <?php endif; ?>
            <div class="col-md-12 col-lg-1 order-lg-1">
                <div class="share sticky-top">
                    <h3><?php _e( 'Share', 'blog' ); ?></h3>
                    <ul class="list-unstyled share-article">
                        <li>
                            <a href="#"><span class="icon-facebook"></span></a>
                        </li>
                        <li>
                            <a href="#"><span class="icon-twitter"></span></a>
                        </li>
                        <li>
                            <a href="#"><span class="icon-pinterest"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 mb-5 mb-lg-0 order-lg-3">
                <div class="mb-4">
                    <a href="https://vimeo.com/342333493" data-fancybox class="video-wrap"> <span class="play-wrap"><span class="icon-play"></span></span> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img_h_5-min.jpg" alt="Image" class="img-fluid rounded"> </a>
                </div>                             
                <div class="share floating-block sticky-top">
                    <h2 class="mb-3 text-black"><?php _e( 'Subscribe to Newsletter', 'blog' ); ?></h2>
                    <p><?php _e( 'Far far away behind the word mountains far from.', 'blog' ); ?></p>
                    <form action="<?php echo esc_url( get_template_directory_uri() ); ?>/#">
                        <input type="email" class="form-control mb-2" placeholder="Enter email">
                        <input type="submit" value="Subscribe" class="btn btn-primary btn-block">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>            

<?php get_footer(); ?>