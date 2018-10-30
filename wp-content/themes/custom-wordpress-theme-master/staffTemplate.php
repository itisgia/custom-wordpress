<?php get_header('front') ?>
<?php if(have_posts()): ?>
    <div class="card-columns">
        <?php while(have_posts()): the_post();?>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div>
                        <?php the_content(); ?>
                    </div>

                </div>
                <div class="row">
                    <?php

                        // $allStaffMembers = new WP_Query('type=staff&order=ASC&orderby=title');
                        $args = array(
                            'post_type' =>'staff',
                            'order' =>'ASC',
                            'orderby' => 'title'
                        );

                        $allStaffMembers = new WP_Query($args);

                     ?>

                    <?php if( $allStaffMembers->have_posts() ): ?>
                        <?php while( $allStaffMembers->have_posts()):  $allStaffMembers->the_post();?>
                            <div class="card" style="width: 18rem;">
                              <img class="card-img-top" src=".../" alt="Card image cap">
                              <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <p class="card-text"></p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                              </div>
                            </div>
                        <?php endwhile ?>
                    <?php endif ?>

                </div>


            </div>


        <?php endwhile; ?>
    </div>
<?php endif; ?>


<?php get_footer(); ?>
