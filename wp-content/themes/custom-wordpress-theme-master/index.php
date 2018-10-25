<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <?php wp_head(); ?>
    </head>
    <body>
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
                        <?php else: ?>
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



        <?php wp_footer(); ?>
    </body>
</html>
