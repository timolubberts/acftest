<?php 
get_header();

$title = get_field('title');
$content = get_field('content');
$images = get_field('images');
$secret = get_field('secret');
$textcolor = get_field('text_color') ? : 'default-text';

?>

<section class="page <?= $textcolor ?>">

    <?php if($secret): ?>
        <div class="block-1 rainbow-bg">
    <?php else: ?>
        <div class="block-1">
    <?php endif; ?>

        <div class="container">
            <div class="block-1__title">
                <?php if($title):?>
                    <h2><?php echo $title; ?></h2>
                <?php endif; ?>
            </div>
            <div class="block-1__content">
                <?php if($content):?>
                    <p><?php echo $content; ?></p>
                <?php endif; ?>
            </div>
            <div class="block-1__slider">
                <div class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                        <?php if ( have_rows('images') ) : ?>
                            <?php while( have_rows('images') ) : the_row(); ?>
                                <li class="splide__slide">
                                    <img src="<?php the_sub_field('image'); ?> ">
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>  
    </div>      
</section>
<?php get_footer();?>