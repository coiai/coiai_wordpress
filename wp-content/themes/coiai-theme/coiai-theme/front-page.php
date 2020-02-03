<?php get_header(); ?>

	<div id="sec1">
        <div class="mainImg">
            <img src="" alt="">
        </div>
        <div class="sec1content">
            <p class="sec1contentTxt">This is coiai,and you are coiai.</p>
        </div>
    </div>
    <div id="sec2">
        <h2 class="sec2title">NEWS</h2>
    </div>

    <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
    ?>
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
            <?php
            endwhile;
        else :
            echo wpautop( '投稿が見つかりませんでした。');
        endif;
    ?>

<?php
get_footer();
