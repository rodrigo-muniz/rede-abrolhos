<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package rede-abrolhos
 */
get_header();
?>

<div id="noticias">

    <div class="container">
        <div class="row"> 
            <div class="col-xs-12">
                <h1>Últimas notícias</h1>
            </div>                                      
        </div>

        <div class="row">                    
            <div class="col-xs-12">

                <?php if (have_posts()) : ?>

                    <?php while (have_posts()) : the_post(); ?>

                        <div class="card-noticia">
                            <div class="row">
                                <div  class="col-sm-6">
                                    <?php the_post_thumbnail('thumb-noticia')?>
                                    
                                </div>
                                <div  class="col-sm-6">
                                    <h2><?php the_title(); ?></h2>
                                    <p>
                                        <?php echo get_excerpt(180); ?>
                                    </p>
                                    <a href="<?php the_permalink(); ?>">Leia mais...</a>
                                </div>
                            </div>
                        </div><!--noticia-->


                    <?php endwhile; ?>

                    <?php
                    the_posts_navigation();

                else :

                    get_template_part('template-parts/content', 'none');

                endif;
                ?>

            </div>
        </div><!-- row -->

        <div class="row">
            <div class="col-xs-12">
                <div class="passador">
                    <p>
                        <span> < </span>
                        <span> 1 </span>
                        <span> 2 </span>
                        <span> 3 </span>
                        <span> 4 </span>
                        <span> > </span>
                    </p>
                </div>
            </div>
        </div><!-- row -->

    </div><!-- container -- >
</div><!-- #noticias -->

    <?php
    get_footer();
    