        </div><!-- END #content-wrapper -->
        <footer id="footer">
            <div id="footer-inner" class="row">
                <?php if( is_active_sidebar( 'prefooter-sidebar' ) ) dynamic_sidebar( 'prefooter-sidebar' ); ?>
            </div>
        </footer><!-- END #footer -->
        <div id="footer-bar">
            <div class="right">
                <div id="footer-nav">
                <?php
                    if(has_nav_menu('footer-menu')){
                         wp_nav_menu(array(
                            'theme_location'  => 'footer-menu',
                            'container'       => false, 
                            'menu_class'      => 'menu', 
                            'menu_id'         => 'footer-menu',
                            'echo'            => true,
                            'depth'           => 1,
                         ));
                    }
                ?>
                </div>
            </div>
            <div class="left">
                Copyright &copy; 2013 - <?php echo date("Y"); ?> <?php bloginfo('name'); ?>
            </div>
        </div>
    </div><!-- END #wrapper -->

    <?php wp_footer(); ?>
	<div id="topScroll">
		<a id="top"></a>
	</div>
	<script type="text/javascript">
	$ = window.jQuery;
	$(function(){
		var H = $(window).height() - 100;
		//滚动条事件
		$(window).scroll(function(){
			//获取滚动条的滑动距离
			var scroH = $(this).scrollTop();
			//滚动条的滑动距离大于等于定位元素距离浏览器顶部的距离，就固定，反之就不固定
			if(scroH > H){
				$("#top").fadeIn(500);
			}else if (scroH <= H){
				$("#top").fadeOut(500);
			}
		});
		$("#top").click(function() {
			$("html,body").animate({scrollTop: $("#wrapper").offset().top-65},1000);
		});

	});
	</script>
	</body>
</html>
