<!-- Footer -->
<section id="footer">
    <div class="container">
        <div class="row">
            <div class="col-4 col-6-medium col-12-small">
                <?php dynamic_sidebar('footer-widgets-1'); ?>
            </div>
            <div class="col-4 col-6-medium col-12-small">
                <?php dynamic_sidebar('footer-widgets-2'); ?>
            </div>
            <div class="col-4 col-12-medium">
                <?php dynamic_sidebar('footer-widgets-3'); ?>
            </div>
            <div class="col-12">
                <!-- Copyright -->
                <div id="copyright">
                    <ul class="links">
                        <li><?php echo get_theme_mod('footer-copyright-text', 'Copyright WP-learning.com Theme For Learning Purpose') ?></li>
                        <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>

</div>

<!-- Scripts -->
<!-- <script src="assets/js/jquery.dropotron.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script> -->
<?php wp_footer(); ?>
</body>

</html>
