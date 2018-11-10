	<!-- begin scroll to top btn -->
	<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
	<!-- end scroll to top btn -->
</div>
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?=base_url()?>/assets/plugins/jquery/jquery-3.3.1.min.js?v=<?=md5(strtotime('now'))?>"></script>
	<script src="<?=base_url()?>/assets/plugins/jquery-ui/jquery-ui.min.js?v=<?=md5(strtotime('now'))?>"></script>
	<script src="<?=base_url()?>/assets/plugins/bootstrap/4.1.3/js/bootstrap.bundle.min.js?v=<?=md5(strtotime('now'))?>"></script>
	<!--[if lt IE 9]>
		<script src="../assets/crossbrowserjs/html5shiv.js"></script>
		<script src="../assets/crossbrowserjs/respond.min.js"></script>
		<script src="../assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="<?=base_url()?>/assets/plugins/slimscroll/jquery.slimscroll.min.js?v=<?=md5(strtotime('now'))?>"></script>
	<script src="<?=base_url()?>/assets/plugins/js-cookie/js.cookie.js?v=<?=md5(strtotime('now'))?>"></script>
	<script src="<?=base_url()?>/assets/js/theme/default.min.js?v=<?=md5(strtotime('now'))?>"></script>
	<script src="<?=base_url()?>/assets/js/apps.min.js?v=<?=md5(strtotime('now'))?>"></script>
	<!-- ================== END BASE JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>
<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-53034621-1', 'auto');
	  ga('send', 'pageview');

	</script>
</body>
</html>
