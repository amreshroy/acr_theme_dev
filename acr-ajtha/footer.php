<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 footer-area">
                <div class="col-md-4 copyright">
                    <?php if (is_active_sidebar("footer-sidebar-left")){
                        dynamic_sidebar("footer-sidebar-left"); } ?>
                </div>
                <div class="col-md-4 navigation-menu">
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'footermenu',
                            'menu_id'        => 'menu-horizontal',
                            'menu_class'     => 'list-inline text-center',
                        )
                    ); ?>
                </div>
                <div class="col-md-4">
                    <?php if (is_active_sidebar("footer-sidebar-right")){
                        dynamic_sidebar("footer-sidebar-right"); } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>