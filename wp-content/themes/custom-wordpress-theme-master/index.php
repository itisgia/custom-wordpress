<?php get_header();?>

    <div class="container">
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post();?>
                <div class="row">
                    <?php if(has_post_thumbnail() ): ?>
                        <div class="col-xs-12 col-md-4 block">
                            <!-- create image tag -->
                            <?php the_post_thumbnail(' thumbnail', array('class' => 'img-fluid')); ?>
                        </div>
                        <div class="col-xs-12 col-md-8">
                        <!-- if there is a thumnail open this tag -->
                        <?php else: ?>
                            <!-- if there is no thumnail open this tag -->
                            <div class="col-xs-12 col-md-12">
                                <?php endif; ?>
                                    <h3><?php the_title(); ?></h1>
                                    <div><?php the_content(); ?></div>
                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
    </div>

    <?php get_footer(); ?>
