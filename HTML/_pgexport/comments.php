<li class="comment">
    <div class="vcard bio">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/person_1-min.jpg" alt="Image placeholder">
    </div>
    <div class="comment-body">
        <h3><?php printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'blog' ), number_format_i18n( get_comments_number() ), get_the_title() ); ?></h3>
        <div class="meta">
            <?php _e( 'January 9, 2018 at 2:21pm', 'blog' ); ?>
        </div>
        <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?', 'blog' ); ?></p>
        <p><a href="#" class="reply"><?php _e( 'Reply', 'blog' ); ?></a></p>
    </div>
</li>