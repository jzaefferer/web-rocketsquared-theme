        <footer>
            <?php wp_nav_menu( array( 'menu_class' => 'footerNavigation', 'sort_column' => 'menu_order', 'container_class' => 'nav', 'theme_location' => 'primary-menu' ) ); ?>
            <a class="contactLink" href="mailto:joern.zaefferer@googlemail.com">Contact</a>
            <ul id="footerSocial">
                <li><a class="twitter-icon" title="@bassistance on Twitter" href="http://twitter.com/bassistance">Twitter</a></li>
                <li><a class="github-icon" title="jzaefferer on GitHub" href="http://github.com/jzaefferer">GitHub</a></li>
                <li><a class="linkedin-icon" title="joernzaefferer on LinkedIn" href="http://www.linkedin.com/in/joernzaefferer">LinkedIn</a></li>
            </ul>
        </footer>
    </div>
    <span id="bottomBar"></span>
    <?php wp_footer(); ?>

<script type="text/javascript">
(function() {
  var t   = document.createElement('script');
  t.type  = 'text/javascript';
  t.async = true;
  t.id    = 'gauges-tracker';
  t.setAttribute('data-site-id', '4e150ff8613f5d7b26000001');
  t.src = '//secure.gaug.es/track.js';
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(t, s);
})();
</script>
</body>
</html>
