<?php get_header(); ?>

        <!-- Hero -->
        <div class="hero">

            <figure class="hero__backgraund">
                <img src="<?php header_image(); ?>" alt="hero backgraund">
                <div class="hero__backgraund-dim"></div>
            </figure>

            <figure class="hero__logo">
                <!-- <img src="<?php echo get_template_directory_uri(); ?>./assets/image/hero-logo.png" alt="Space apes logo"> -->
                <?php the_custom_logo(); ?>
            </figure>

        </div>

        <!-- Live section -->
        <div class="live">

            <div class="live__inner">

                <h2 class="live__title">Live</h2>
                <p class="live__text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                <div>
                    <button class="live__button">
                        <a href="scen.php">To The Scen</a>
                    </button>
                </div>

            </div>

        </div>

        <!-- About -->
        <div class="about">

            <div class="about__inner">

                <section class="about__content">
                    <h3 class="about__title">About Space Ape.</h3>
                    <p>Sit magnam enim id fugit corrupti est accusantium fugit aut voluptate nemo in aliquid sint ut accusamus consectetur. Ut laudantium beatae quo aliquam eligendi sit exercitationem fugit vel sapiente explicabo eum deleniti omnis sed quidem nihil ut dolores tenetur. In inventore assumenda et omnis enim id ipsum excepturi hic exercitationem consequatur sit vitae deleniti! Non facere necessitatibus ut deleniti ducimus et amet voluptas et debitis voluptates hic Quis aliquam et exercitationem eaque?</p>
                    <h3 class="about__under-title">So with a passion for our bar and for jazz. Spacce Ape Jazz Club whas born!</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad.<br>
                        <br>
                        Est dignissimos dolores ea fugit sunt id dolor consequatur. Et consequatur laudantium cum error laboriosam et earum placeat in temporibus deleniti ea provident odit non totam commodi.
                    </p>
                </section>

                <figure class="about__image">
                    <img src="<?php echo get_template_directory_uri(); ?>./assets/image/Group 17.png" alt="">
                </figure>

            </div>

        </div>

<?php get_footer(); ?>