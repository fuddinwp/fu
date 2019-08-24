<?php
get_header();
?>
<main>
    <?php
    if(have_posts()):
        while (have_posts()): the_post();

            get_template_part('content');
   
        endwhile;
    else:
        echo 'tidak ada post';
    endif;
    ?>
</main>
<aside>
    <?php dynamic_sidebar('sidebar2');?>
</aside>
<div class="clear">
</div>
<?php
get_footer();
?>