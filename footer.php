    <footer>
        <nav>
            <?php
                $args = array('container'=> false, 'menu_class'=> false, 'menu_id'=> 'ia_toplevel','theme_location' => 'footer_menu');
                wp_nav_menu($args); //kalo ga pake argument semua keluar
            ?>
         </nav>
        &copy; <?php bloginfo('name'); echo "-".date('Y')?>
    </footer>
    <body>
</html>