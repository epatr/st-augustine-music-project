
<div class="content">

    <aside class="menu">
        <p class="menu-label">Upcoming Shows</p>
        <ul class="menu-list">
            <?php 
                get_template_part('templates/snippets/upcoming-shows');
            ?>
        </ul>
    </aside>

    <aside class="menu">
        <p class="menu-label">St. Augustine Music Project</p>

            <?php wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class' => 'menu-wp_nav_menu'
                )); 
            ?>
    </aside>

</div>