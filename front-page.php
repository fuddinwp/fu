<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fuddin</title>
    <style media="screen">
        body{
            margin = 50px auto;
            width = 80%;
        }
        #front-page{
            text-align: center;
        }
        h1{
            font-size: 50px;
        }

        #custom_post h2{
            font-size: 25px;
        }
        #custom_post a{
            display: inline-block;
            width : 25%;
            margin: 0 1,5%;
            background-color: rgb(214,125, 122);
            padding: 5px;
            text-align: center;
            text-decoration: none;
            color:#333; 
        }
    </style>
</head>
<body>
        
    <div id="front-page">
        <h1>Selamat datang</h1>
        <a href="<?php echo home_url('/blog')?>">Menuju Blog</a>
    </div>  
    <div id="custom_post">
        <h2> Post Terakhir </h2>
        <?php
            //very flexible ,https://codex.wordpress.org/Class_Reference/WP_Query
            $berita_posts = new WP_Query('cat=4&posts_per_page=1');

            if ($berita_posts->have_posts() ) :
                while ($berita_posts->have_posts()): $berita_posts->the_post(); ?>
                <a href="<?php the_permalink();?>"> <?php the_title(); ?> </a>
                <?php endwhile;
            else:
                echo 'no post';
            endif;
        ?>
    </div>
</body>
</html>
