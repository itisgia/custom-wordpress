<?php

    /*Template Name: Full page width template*/
    // If You go go pages menu on the right side Template has drop down menu called full page width

 ?>


<?php get_header('front'); ?>

    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post();?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <h1><?= the_title(); ?></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div>
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>
