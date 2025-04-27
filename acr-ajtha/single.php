<?php get_header(); ?>
<body <?php body_class(); ?>>
<?php get_template_part("/template-parts/common/hero"); ?>
<div class="posts">
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
            <div class="row col-md-8">
                <div class="col-md-12 offset-md-1">
                    <p>
                        <?php if(has_post_thumbnail()){
                            the_post_thumbnail("large", array("class" =>"img-fluid text-center") );
                        } ?>
                    </p>
                    <?php the_content(); ?>
                    <div class="post-link">
                        <div class="col-md-6">
                            <?php next_post_link(); ?>
                        </div>
                        <div class="col-md-6 text-right"> 
                            <?php previous_post_link(); ?>
                        </div>
                    </div>
                </div>
                <?php if (comments_open()): ?>
                <div class="col-md-12 offset-md-1">
                    <?php comments_template(); ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="sidebar col-md-4">
                <?php if (is_active_sidebar("sidebar-1")){
                    dynamic_sidebar("sidebar-1");
                } ?>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
</div>
<?php get_footer(); ?>