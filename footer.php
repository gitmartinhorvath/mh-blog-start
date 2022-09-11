
        </main>         
        <div class="site-footer"> 
            <div class="container"> 
                <div class="row justify-content-between"> 
                    <div class="col-lg-4"> 
                        <div class="widget"> 
                            <h3><?php echo get_theme_mod( 'About-title', __( 'About', 'blog' ) ); ?></h3> 
                            <p><?php echo get_theme_mod( 'About-txt', __( 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live.', 'blog' ) ); ?></p> 
                        </div>                         
                        <div class="widget"> 
                            <h3><?php _e( 'Spoj sa so mnou ', 'blog' ); ?></h3> 
                            <ul class="social list-unstyled"> 
                                <!-- <li> 
                                    <a href="https://www.facebook.com/uiux.martinhorvath"><span class="icon-facebook"></span></a> 
                                </li> -->                                
                               <!-- <li> 
                                    <a href="#"><span class="icon-twitter"></span></a> 
                                </li>                                
                                <li> 
                                    <a href="#"><span class="icon-instagram"></span></a> 
                                </li>                                 
                                <li> 
                                    <a href="#"><span class="icon-dribbble"></span></a> 
                                </li> -->                                 
                                <li> 
                                    <a href="https://www.linkedin.com/in/ui-martin-horvath/"><span class="icon-linkedin"></span></a> 
                                </li>                                 
                            </ul>                             
                        </div>                         
                    </div>                     
                    <div class="col-lg-6"> 
                        <div class="row"> 
                            <div class="col-12"> 
                                <div class="widget"> 
                                    <h3><?php _e( 'Kategórie', 'blog' ); ?></h3> 
                                </div>                                 
                            </div>                             
                            <div class="col-6 col-sm-6 col-md-4"> 
                                <div class="widget"> 
                                    <?php if ( has_nav_menu( 'fonav1' ) ) : ?>
                                        <?php
                                            PG_Smart_Walker_Nav_Menu::$options['template'] = '<li id="{ID}" class="{CLASSES}"> 
                                                                                        <a {ATTRS}>{TITLE}</a> 
                                                                                    </li>';
                                            wp_nav_menu( array(
                                                'container' => '',
                                                'theme_location' => 'fonav1',
                                                'items_wrap' => '<ul class="%2$s links list-unstyled" id="%1$s">%3$s</ul>',
                                                'walker' => new PG_Smart_Walker_Nav_Menu()
                                        ) ); ?>
                                    <?php endif; ?> 
                                </div>                                 
                            </div>                             
                            <div class="col-6 col-sm-6 col-md-4"> 
                                <div class="widget"> 
                                    <?php if ( has_nav_menu( 'fonav2' ) ) : ?>
                                        <?php
                                            PG_Smart_Walker_Nav_Menu::$options['template'] = '<li id="{ID}" class="{CLASSES}"> 
                                                                                        <a {ATTRS}>{TITLE}</a> 
                                                                                    </li>';
                                            wp_nav_menu( array(
                                                'container' => '',
                                                'theme_location' => 'fonav2',
                                                'items_wrap' => '<ul class="%2$s links list-unstyled" id="%1$s">%3$s</ul>',
                                                'walker' => new PG_Smart_Walker_Nav_Menu()
                                        ) ); ?>
                                    <?php endif; ?> 
                                </div>                                 
                            </div>                             
                            <div class="col-6 col-sm-6 col-md-4"> 
                                <div class="widget"> 
                                    <?php if ( has_nav_menu( 'fonav3' ) ) : ?>
                                        <?php
                                            PG_Smart_Walker_Nav_Menu::$options['template'] = '<li id="{ID}" class="{CLASSES}"> 
                                                                                        <a {ATTRS}>{TITLE}</a> 
                                                                                    </li>';
                                            wp_nav_menu( array(
                                                'container' => '',
                                                'theme_location' => 'fonav3',
                                                'items_wrap' => '<ul class="%2$s links list-unstyled" id="%1$s">%3$s</ul>',
                                                'walker' => new PG_Smart_Walker_Nav_Menu()
                                        ) ); ?>
                                    <?php endif; ?> 
                                </div>                                 
                            </div>                             
                        </div>                         
                    </div>                     
                </div>                 
                <div class="row justify-content-center text-center copyright"> 
                    <div class="col-md-8"> 
                        <p><?php _e( 'Copyright &copy; 2021 | www.martinhorvath.sk | All Rights Reserved.', 'blog' ); ?></a> 
                    </p>                     
                </div>                 
            </div>             
        </div>         
        <?php wp_footer(); ?>
    </div>                                                                                                         
</body>
