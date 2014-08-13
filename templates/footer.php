<footer class="content-info container-fluid" role="contentinfo">
  <div class="row">
    <div class="col-lg-12">
      <div class="row sidebar-footer">
      	<?php dynamic_sidebar('sidebar-footer'); ?>
    </div>
    <div class="row">
      <div class="col-s-6 footer-nav mail-inline">
          Sing Up For Our Newsletter
<script type="text/javascript" src="//cf.topspin.net/javascripts/topspin_core.js?aId=25987&timestamp=1407188895"></script><div class="topspin-widget topspin-widget-email-for-media"><object type="application/x-shockwave-flash" width="300" height="50" id="TSWidget230578" data="//cf.topspin.net/widgets/email2/swf/TSEmailMediaWidget.swf?timestamp=1407188895" bgColor="#000000 "><param value="transparent" name="wmode"> <param value="always" name="allowScriptAccess" /> <param name="allowfullscreen" value="true" /> <param name="quality" value="high" /> <param name="movie" value="//cf.topspin.net/widgets/email2/swf/TSEmailMediaWidget.swf?timestamp=1407188895" /> <param name="flashvars" value="widget_id=https://cf.topspin.net/api/v1/artist/25987/email_for_media/230578?timestamp=1407188895&amp;theme=white&amp;bgaplha=0&amp;highlightColor=0x00A1FF&amp;displayInitialScreen=false&amp;linkHasOutline=false&amp;fontColor=#000" /></object></div>
      </div>
      <div id="social" class="col-sm-6 social-nav">
    <?php
       if (has_nav_menu('social_navigation')) :
         wp_nav_menu(array('theme_location' => 'social_navigation', 'menu_class' => ''));
       endif;
    ?>
          <p class="credits"><a href="http://12southmusic.com/" target="_blank">built by 12SM</a></p>
    </div>
  </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

<!-- Begin 12SM Network Analytics <!-->
  <script type="text/javascript">
	var _gaq = _gaq || [];
  	_gaq.push(['_setAccount', 'UA-27814560-1']);
  	_gaq.push(['_setDomainName', '12southmusic.com']);
  	_gaq.push(['_setAllowLinker', true]);
  	_gaq.push(['_trackPageview']);
 	(function() {
	  	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	  	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	  	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  	})();
	</script>
  <!-- End 12SM Network Analytics <!-->
