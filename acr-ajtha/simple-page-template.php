<?php
/**
Template Name: Simple Page with Header 
*/
get_header(); ?>
<body <?php body_class(); ?>>
<?php get_template_part("hero-page"); ?>
    <?php while (have_posts()):
    the_post(); ?>
    <div class="post" <?php post_class(); ?>>
        <div class="container">
            <div class="row">
                <div class="col-md-12 offset-md-1">
                    <h2 class="post-title text-center"><?php the_title(); ?></h2>
                    <p class="text-center">
                        <strong><?php the_author(); ?></strong><br/>
                        <?php the_date(); ?>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 offset-md-1 text-center">
                    <p>
                        <?php if(has_post_thumbnail()){
                            the_post_thumbnail("large", array("class" =>"img-fluid text-center") );
                        } ?>
                    </p>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
</div>
<?php get_footer(); ?>