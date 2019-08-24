<?php 
    if(is_single()):
?>
    <h2> <?php the_title();?> </h2>
        <?php the_post_thumbnail('big_thumb');?>
    <p>
        <?php the_content();?>
    </p>

    <?php
        elseif(is_page() ):
    ?>
    <h3>Halaman <?php the_title();?></h3>
    <p>
        <?php the_content();?>
    </p>

    <?php 
        else:
        ?>
            <h2><a href="<?php the_permalink(); ?>"> <?php the_title();?></a> </h2>
                <?php the_post_thumbnail('small_thumb');?>
            <p> 
                <?php echo get_the_excerpt();?> 
                <a href="<?php the_permalink(); ?>"> Lanjut Baca ...</a>
            </p>

            <p class="info_meta">
            <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a>  
                    ||Posted: <?php the_date('F j, Y'); ?> at <?php the_time('g:i a'); ?>
                    <?php
                    echo '|| kategori :'; the_category(', ');
                ?>
            </p>
<?php
    endif;
?>