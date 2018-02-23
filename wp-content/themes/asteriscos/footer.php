<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Asteriscos
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
            <section>
                <form method="post" action="#">
                    <div class="field">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" />
                    </div>
                    <div class="field">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" />
                    </div>
                    <div class="field">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" rows="3"></textarea>
                    </div>
                    <ul class="actions">
                        <li><input type="submit" value="Send Message" /></li>
                    </ul>
                </form>
            </section>
            <section class="split contact">
                <section class="alt">
                    <h3>Address</h3>
                    <p>1234 Somewhere Road #87257<br />
                        Nashville, TN 00000-0000</p>
                </section>
                <section>
                    <h3>Phone</h3>
                    <p><a href="#">(000) 000-0000</a></p>
                </section>
                <section>
                    <h3>Email</h3>
                    <p><a href="#">info@untitled.tld</a></p>
                </section>
                <section>
                    <h3>Social</h3>
                    <ul class="icons alt">
                        <li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
                    </ul>
                </section>
            </section>
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->

<!-- Scripts -->
<script src="../../../../../asteriscos/wp-content/themes/asteriscos/assets/js/jquery.min.js"></script>
<script src="../../../../../asteriscos/wp-content/themes/asteriscos/assets/js/jquery.scrollex.min.js"></script>
<script src="../../../../../asteriscos/wp-content/themes/asteriscos/assets/js/jquery.scrolly.min.js"></script>
<script src="../../../../../asteriscos/wp-content/themes/asteriscos/assets/js/skel.min.js"></script>
<script src="../../../../../asteriscos/wp-content/themes/asteriscos/assets/js/util.js"></script>
<script src="../../../../../asteriscos/wp-content/themes/asteriscos/assets/js/main.js"></script>

<?php wp_footer(); ?>

</body>
</html>
