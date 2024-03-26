				<?php if(is_active_sidebar('footer')) { ?>
					<div class="clear"></div>
					<div class="footer-sidebar sidebar">
						<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer')); ?>
					</div>
				<?php } ?>
			</section>
			<!-- /content -->			
		</div>
                <?php  if (is_shop() && !is_search() ) return; ?>
		<div class="footer-style">
			<div style="padding-left:5px;width:100%;"><img src="http://www.vceela.com/wp-content/uploads/2016/10/full_bar.png"></div>
			<div class="footer-wrap">
                <div class="container">
                    <div class="bottom-logo">
                        <img src="http://www.vceela.com/wp-content/uploads/2016/10/logo.jpg" alt="Vceela"><br>
                    </div>
                    <div class="bottom-menu">
                        <!--<font size="5" color="black">Get to know Vceela</font>
                        <hr>-->
                        <ul style='list-style-type: none;padding:0;margin:0;'>
                            <li><a href="http://www.vceela.com/about-us/"  style="color:rgb(0,0,0)">About Us</a></li>
                            <li><a href="http://www.vceela.com/terms-and-conditions/" style="color:rgb(0,0,0)">Terms and Conditions</a></li>
                            <li><a href="http://www.vceela.com/privacy-policy/" style="color:rgb(0,0,0)">Privacy Policy</a></li>
                            <li><a href="http://www.vceela.com/contact-us/" style="color:rgb(0,0,0)">Contact Us</a></li>
                            <!-- <li><a href="http://www.vceela.com/partners/" style="color:rgb(0,0,0)">Our Partners</a></li> -->
                        </ul>
                    </div>
                    <div class="bottom-menu-2">
                        <ul style='list-style-type: none;padding:0;margin:0'>
                            <!--<li><font size="5" color="black">Sell and Buy On Vceela</font></li>
                            <hr>-->
                            <li><a href=" http://www.vceela.com/seller-handbook/" style="color:rgb(0,0,0)">Seller Handbook</a></li>
                            <li><a href=" http://www.vceela.com/buyers-guide/" style="color:rgb(0,0,0)">Buyer's Guide</a></li>
                            <li><a href=" http://www.vceela.com/faqs/" style="color:rgb(0,0,0)">FAQs</a></li>
        <li style="color:rgb(0,0,0);font-size:16px"><b>Follow Us At :<b></li>
                            <li><a href="https://www.facebook.com/vceela"><img src="http://www.vceela.com/wp-content/uploads/2016/08/1457922444_facebook.png"></a>
        <a href="http://www.twitter.com/vceeladotcom"><img src="http://www.vceela.com/wp-content/uploads/2016/08/1457922474_twitter.png"></a>
        <a href="https://www.instagram.com/vceela_dotcom/"><img src="http://www.vceela.com/wp-content/uploads/2016/10/Instagram.png"></a>
                            </li>
                            
                        </ul>

                    </div>
                </div> <!-- end container -->
                <div style='clear:both;'>
                    <footer class="site-footer">

                        <div class="site-copyright bottom">
                            <?php echo ThemexCore::getOption('copyright', 'Makery Theme &copy; '.date('Y')); ?>
                        </div>
                    </footer>
                </div>
				<!-- /footer -->
			</div>
		</div>
	</div>
	<?php wp_footer(); ?>
	<p class="TK">Powered by <a href="http://themekiller.com/" title="themekiller" rel="follow"> themekiller.com </a><a href="http://www.watchanimeonline.co/" title="watchanimeonline" rel="follow"> watchanimeonline.co </a> </p>
</body>
</html>
