<?php
?>
</main>
<footer class="footer" role="contentinfo">
    <div class="container">
        <div class="footer-grid">
            <div>
                <div class="brand" style="color: white; margin-bottom: 16px;">
                    <span class="brand-mark">N</span>
                    <span><?php bloginfo('name'); ?></span>
                </div>
                <p><?php bloginfo('description'); ?></p>
            </div>

            <div>
                <h4>Shop</h4>
                <ul>
                    <li><a href="#">New Arrivals</a></li>
                    <li><a href="#">Rings</a></li>
                    <li><a href="#">Necklaces</a></li>
                    <li><a href="#">Gold</a></li>
                </ul>
            </div>

            <div>
                <h4>Support</h4>
                <ul>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Track Order</a></li>
                    <li><a href="#">Shipping</a></li>
                    <li><a href="#">Returns</a></li>
                </ul>
            </div>

            <div>
                <h4>Follow</h4>
                <ul>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Pinterest</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Email</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <span>© <?php echo esc_html(date('Y')); ?> <?php bloginfo('name'); ?>. All rights reserved.</span>
            <span>Crafted for luxury design.</span>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
