        <footer>
            <?php wp_nav_menu( array( 'menu_class' => 'footerNavigation', 'sort_column' => 'menu_order', 'container_class' => 'nav', 'theme_location' => 'primary-menu' ) ); ?>
            <a class="contactLink" href="mailto:joern.zaefferer@googlemail.com">Contact</a>
            <ul id="footerSocial">
            	<li><a class="twitter-icon" href="http://twitter.com/bassistance">Twitter</a></li>
                <li><a class="github-icon" href="http://github.com/jzaefferer">GitHub</a></li>
                <li><a class="linkedin-icon" href="http://www.linkedin.com/in/joernzaefferer">LinkedIn</a></li>
            </ul>
        </footer>
    </div>
    <span id="bottomBar"></span>
    <?php wp_footer(); ?>
</body>
</html>
