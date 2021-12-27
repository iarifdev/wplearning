<!DOCTYPE HTML>
<html>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <?php echo get_the_title(); ?> |
        <?php bloginfo('name'); ?>
        <?php wp_head(); ?>
    </head>

    <!-- <body class="homepage is-preload"> -->
        <?php body_class('omepage is-preload') ?>
        <div id="page-wrapper">
            <!-- Header -->
            <section id="header">
                <!-- Logo -->
                <h1><a href="index.html"><?php the_custom_logo(); ?></a></h1>
                <!-- Nav -->
               
                
                    <!-- <ul>
                        <li class="current"><a href="index.html">Home</a></li>
                        <li>
                            <a href="#">Dropdown</a>
                            <ul>
                                <li><a href="#">Lorem ipsum dolor</a></li>
                                <li><a href="#">Magna phasellus</a></li>
                                <li><a href="#">Etiam dolore nisl</a></li>
                                <li>
                                    <a href="#">Phasellus consequat</a>
                                    <ul>
                                        <li><a href="#">Magna phasellus</a></li>
                                        <li><a href="#">Etiam dolore nisl</a></li>
                                        <li><a href="#">Veroeros feugiat</a></li>
                                        <li><a href="#">Nisl sed aliquam</a></li>
                                        <li><a href="#">Dolore adipiscing</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Veroeros feugiat</a></li>
                            </ul>
                        </li>
                        <li><a href="left-sidebar.html">Left Sidebar</a></li>
                        <li><a href="right-sidebar.html">Right Sidebar</a></li>
                        <li><a href="no-sidebar.html">No Sidebar</a></li>
                    </ul> -->
                    
            </section>
            <nav id="nav">
                <?php
                    wp_nav_menu( array(
                        'theme_location'=> 'primary',
                        'container'=> ''
                    ));
                    ?>
                </nav>
