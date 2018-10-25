<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="container">
            <h1>HOMEPAGE</h1>
            <div class="row">
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post();?>
                        <?php if(has_post_thumbnail() ): ?>
                            <div class="col-4">
                                <div class="card">
                                    <div class="card-body">
                                        <?php the_post_thumbnail(' thumbnail', array('class' => 'card-img-top')); ?>
                        <?php else: ?>
                                     <div class="col-sm">
                        <?php endif; ?>
                            <h3><?php the_title(); ?></h3>
                            <div><?php the_content(); ?></div>
                            
                            <a href="<?= esc_url(get_permalink()); ?>" class="btn btn-warning">See More</a>

                                    </div>

                                </div>

                            </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>
